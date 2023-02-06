<?php
include 'navbar.html';
error_reporting(0);
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scheduling of Games</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>


    <link rel="stylesheet" href="./main.css?v=<?php echo time(); ?>">
</head>

<body>
    <form action="" method="post">

        <div class="container mt-3">
            <div class="schedule">
                <div class="row d-flex">
                    <div class="col-md-4">
                        <select class="form-select" aria-label="Default select example" name="sport">
                            <option selected name="sport">Open this select menu</option>
                            <?php
                            $sql = mysqli_query($con, "SELECT DISTINCT Sport FROM sports");
                            while ($row = $sql->fetch_assoc()) {
                                echo '<option value="' . $row['Sport'] . '">' . $row['Sport'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <select class="form-select" aria-label="Default select example" name="city">
                            <option selected>Open this select menu</option>
                            <?php
                            $sql = mysqli_query($con, "SELECT DISTINCT City FROM venue");
                            while ($row = $sql->fetch_assoc()) {
                                echo '<option value="' . $row['City'] . '">' . $row['City'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-2 form-check ">
                        <input type="date" class="form-control" name="sdate">
                    </div>
                    <div class="col-md-2 form-check">
                        <input type="submit" class="form-control" value="Generate" onclick="post_scheduling()">
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script>
        function post_scheduling() {
            <?php include 'post_schedule.php'; ?>
        }
    </script>

</body>

</html>