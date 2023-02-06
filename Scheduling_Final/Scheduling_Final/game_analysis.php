<?php
    $server = 'localhost';
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
} 
else {
?>
    <script>
        alert('connection error.');
    </script>
<?php
}

$query = "SELECT * FROM game";
$result = mysqli_query($con, $query); ?>
<!-- while($row = mysqli_fetch_assoc($result))
{
    echo "id:".$row['Game_ID']." Player 1:".$row['Player1']." Player 2:".$row['Player2'];
   
}
?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Analysis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- iconify  -->
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>

    <!-- css  -->
    <link rel="stylesheet" href="cards.css">
</head>

<body>
    <div class="container" style="width: fit-content;">

    <?php while($row = mysqli_fetch_assoc($result))
{ ?>
        <div class="card" style="margin:3rem auto;width:fit-content;background-color:#133b70;">
            <div class="card-body">
                <!-- <h5 class="card-title">Card title</h5> -->
                <!-- <h6 class="card-subtitle mb-2 text-muted"> -->

                <div class="form-group row" style="align-item:center">
                    <label for="gname" class="col-sm-5 d-flex mt-2 mb-2">
                        <iconify-icon icon="fluent:board-games-20-filled" style="color: white;" width="23" height="23"></iconify-icon> Game :
                    </label>
                    <div class="col-sm-7 ">
                        <input type="text" readonly class="" id="gname" value="<?php echo $row['Game_ID']?>">
                    </div>
                </div>
                <br>
                <div class="form-group row" style="align-item:center">
                    <label for="" class="col-sm-5 d-flex mt-2 mb-2">
                        <iconify-icon icon="bi:person-circle" style="color: white;" width="23" height="23"></iconify-icon>Player 1 :
                    </label>
                    <div class="col-sm-7">
                        <input type="text" readonly class="" id="p1" value="<?php echo $row['Player1']?>">
                    </div>
                </div>
                <br>

                <div class="form-group row" style="align-item:center">
                    <label for="" class="col-sm-5 d-flex mt-2 mb-2">
                        <iconify-icon icon="bi:person-circle" style="color: white;" width="23" height="23"></iconify-icon>Player 2 :
                    </label>
                    <div class="col-sm-7">
                        <input type="text" readonly class="" id="p2" value="<?php echo $row['Player2']?>">
                    </div>
                </div>
                <br>
                <div class="form-group row" style="align-item:center">
                    <label for="" class="col-sm-5 d-flex mt-2 mb-2">
                        <iconify-icon icon="akar-icons:coin" style="color: white;" width="23" height="23"></iconify-icon>Points(Player1):
                    </label>
                    <div class="col-sm-7">
                        <input type="text" readonly class="" id="point1" value="<?php echo $row['P1']?>">
                    </div>
                </div>
                <br>
                <div class="form-group row" style="align-item:center">
                    <label for="" class="col-sm-5 d-flex mt-2 mb-2">
                        <iconify-icon icon="akar-icons:coin" style="color: white;" width="23" height="23"></iconify-icon>Points(Player2):
                    </label>
                    <div class="col-sm-7">
                        <input type="text" readonly class="" id="point1" value="<?php echo $row['P2']?>">
                    </div>
                </div>
                <br>
                <div class="form-group row" style="align-item:center">
                    <label for="" class="col-sm-5 d-flex mt-2 mb-2">
                        <iconify-icon icon="game-icons:podium-winner" style="color: white;" width="23" height="23"></iconify-icon>
                        Winner:
                    </label>
                    <div class="col-sm-7">
                        <input type="text" readonly class="" id="point1" value="<?php echo $row['Winner']?>">
                    </div>
                </div>
                <!-- </h6> -->
                <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                <!-- <a href="#" class="card-link">Card link</a> -->
                <!-- <a href="#" class="card-link">Another link</a> -->
            </div>
        </div>
        <?php } ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>