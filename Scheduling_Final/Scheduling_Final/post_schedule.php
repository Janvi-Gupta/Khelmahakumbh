<?php


$server = 'localhost:8111';
$user = 'root';
$pwd = '';
$db = 'scheduling';

$con = mysqli_connect($server, $user, $pwd, $db);

if ($con) {
?>
    <script>
        alert('connection successfull.');
    </script>
<?php
} else {
?>
    <script>
        alert('connection error.');
    </script>
<?php
}
?>
<style>
    p {
        color: white;
    }
</style>
<center>
    <?php
    // echo '<link rel="stylesheet" href="./main.css">';
    static $id = 1;
    global $venue;
    global $TeamArray;
    global $PositionArray;

    function writeTeamSquareToPosition($name, $pos)
    {
        echo "<button onclick = \"window.location='profile.php?name=$name'\"class=\"TeamSquare\" style=\"position:absolute;z-index:2;left:$pos[0]px;top:$pos[1]px\">" . $name . "</button>";
    }

    function writeTeamSquare($name)
    {
        echo "<div class=\"TeamSquare\">" . $name . "</div>";
    }

    function drawLine($start, $end)
    {
        echo "<svg style=\"position:absolute;width:100%;height:100%;top:0px;left:0px;z-index:1\">";
        echo "<line x1=$start[0] y1=$start[1] x2=$end[0] y2=$end[1] style=\"stroke:black;stroke-width:2px\" />";
        echo "</svg>";
    }

    function drawLineToParent($array, $index, $PositionArray)
    {
        $childPos = $PositionArray[$index];
        $parentPos = $PositionArray[floor(($index - 1) / 2)];

        drawLine([$childPos[0] + 150, $childPos[1] + 15], [midpoint($childPos[0] + 150, $parentPos[0]), $childPos[1] + 15]); //Draw Horizontal Line halfway between end of child to beginning of parent
        drawLine([midpoint($childPos[0] + 150, $parentPos[0]), $childPos[1] + 15], [midpoint($childPos[0] + 150, $parentPos[0]), $parentPos[1] + 15]); //Vertical Line to parent's height
        drawLine([midpoint($childPos[0] + 150, $parentPos[0]), $parentPos[1] + 15], [$parentPos[0], $parentPos[1] + 15]); //Draw Horizontal Line the rest of the way to Parent
    }

    function getDepth($arrayTree)
    {
        return ceil(log((count($arrayTree) + 1)) / log(2)) - 1;
    }

    function hasChildren($array, $index)
    {
        if (isset($array[$index * 2 + 1]) && isset($array[$index * 2 + 2]))
            return true;
        return false;
    }

    function midpoint($first, $second)
    {
        return ($first + $second) / 2;
    }

    function Generate_Schedule($tempTeamArray)
    {
        $BracketArray = array_fill(0, pow(2, ceil(log(count($tempTeamArray)) / log(2)) + 1) - 1, " ");
        $lastRowIndex = floor(count($BracketArray) / 2);
        $offset = ceil(count($BracketArray) / 2) - count($tempTeamArray);

        for ($i = 0; $i < count($tempTeamArray); $i++) {
            $BracketArray[$lastRowIndex + $i - $offset] = $tempTeamArray[$i];
        }


        if (isset($tempTeamArray)) {
            echo "<div class=\"BracketArea\" style=\"height:" . ((pow(2, getDepth($BracketArray)) - 1) * 40 + 30 + 20) . "px;width:" . (getDepth($BracketArray) * 190 + 150 + 20) . "px \">";

            $offset = 0;
            for ($i = floor(count($BracketArray) / 2); $i < count($BracketArray); $i++) {
                $PositionArray[$i] = [10, $offset * 40 + 10];
                $offset++;
            }

            for ($i = count($BracketArray) - 1; $i >= 0; $i--) {
                if (hasChildren($BracketArray, $i))
                    $PositionArray[$i] = [$PositionArray[$i * 2 + 1][0] + 190, midpoint($PositionArray[$i * 2 + 1][1], $PositionArray[$i * 2 + 2][1])];
            }

            writeTeamSquareToPosition($BracketArray[0], $PositionArray[0]); //Write First one without lines
            for ($i = 1; $i < count($BracketArray); $i++) {
                if ($i > (floor(count($BracketArray) / 2)) and $BracketArray[$i] == " ") {
                    continue;
                } //Don't print empty squares in the last row
                writeTeamSquareToPosition($BracketArray[$i], $PositionArray[$i]);
                drawLineToParent($BracketArray, $i, $PositionArray);
            }

            echo "</div>"; //BracketArea
        }
    }
    $sport = $_POST["sport"];
    $city = $_POST["city"];
    $query = "SELECT * FROM `venue`AS v 
LEFT JOIN `sports` AS s
ON `v`.`Venue_ID`=`s`.`Venue_ID`
WHERE `s`.`Sport`= '$sport'
UNION
SELECT *
FROM `venue`AS v 
RIGHT JOIN `sports` AS s
ON `v`.`Venue_ID`=`s`.`Venue_ID`
WHERE `s`.`Sport`='$sport' ";

    $sql = mysqli_query($con, $query);
    while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
        $venue[$row['Name']] = (int)$row['Capacity'];
    }

    $query = " SELECT Player_Name FROM player WHERE
player.Game='$sport' AND player.City = '$city'";
    $sql = mysqli_query($con, $query);
    while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
        $TeamArray[] = $row["Player_Name"];
    }
    $n_total_games = array_sum($venue);
    $n_total_players = count($TeamArray);
    $n_total_venue = count($venue);
    $keys = array_keys($venue);
    $date = $_POST['sdate'];
    //echo $date;
    //var_dump($venue);
    $i = 0; //to keep track of starting index of temp array
    $j = 0; //to keep track of number of venue currently selected
    $k = 1; //to keep track of dates
    if ($n_total_players <= $n_total_games) {
        while ($n_total_venue != 0) {
            echo "<p>Scheduled matches at " . $keys[$j] . "</p><br>";
            $temp = array_slice($TeamArray, $i, $venue[$keys[$j]]);
            Generate_Schedule($temp);
            $n_total_venue--;
            $i = $venue[$keys[$j]];
            $j++;
        }
    } else {
        while ($n_total_players != 0) {
            echo "<p>Schedule for " . $date . " is as follows:</p><br>";
            while ($n_total_venue != 0) {
                echo "<p>Scheduled matches at " . $keys[$j] . "</p><br>";
                $temp = array_slice($TeamArray, $i, $venue[$keys[$j]]);
                Generate_Schedule($temp);
                $n_total_venue--;
                $n_total_players -= $venue[$keys[$j]];
                if ($n_total_players <= 0)
                    break;
                $i += $venue[$keys[$j]];
                $j++;
            }
            $n_total_venue = count($venue);
            $j = 0;
            $date = date("Y-m-d", mktime(0, 0, 0, date("m"), date("d") + $k, date("Y")));
            //$date = $date ->format('Y-m-d');
            $k++;
        }
    }
    ?>
</center>