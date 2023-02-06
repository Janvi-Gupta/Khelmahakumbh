<?php
$server = 'localhost:8111';
$user = 'root';
$pwd = '';
$db = 'scheduling';

$con = mysqli_connect($server, $user, $pwd, $db);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- css  -->
    <link rel="stylesheet" href="profile.css">

</head>

<?php
$name = urldecode($_GET["name"]);
$values = "SELECT * FROM player WHERE player.Player_Name = '$name'";
$res = mysqli_query($con, $values);
$row = mysqli_fetch_assoc($res);

?>

<body>
    <div class="container mt-5">
        <form action="">
            <div class="row p-4" style="margin: 0 auto;">
                <div class="col-md-5" style="background-color: #f0f0f0;">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class=" mt-5" width="180px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><br><span class="font-weight-bold"> <a href="#" class="fa fa-facebook"></a>
                            <a href="#" class="fa fa-twitter"></a> <a href="#" class="fa fa-linkedin"></a></span></div>
                    <div class="icon-set">

                    </div>
                </div>
                <div class="col-md-7">

                    <div class="form-group row" style="align-item:center;">
                        <label for="name" class="col-sm-4 col-form-label">Name:</label>
                        <div class="col-sm-8">
                            <input type="text" readonly class="form-control-plaintext" id="name" value="<?php echo $_GET['name'] ?>">
                        </div>

                    </div>
                    <hr>
                    <div class="form-group row">
                        <label for="gender" class="col-sm-4 col-form-label">Game:</label>
                        <div class="col-sm-8">
                            <input type="text" readonly class="form-control-plaintext" id="gender" value="<?php echo $row['Game'] ?>">
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <label for="category" class="col-sm-4 col-form-label">City:</label>
                        <div class="col-sm-8">
                            <input type="text" readonly class="form-control-plaintext" id="category" value="<?php echo $row['City'] ?>">
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <label for="category" class="col-sm-4 col-form-label">Level:</label>
                        <div class="col-sm-8">
                            <input type="text" readonly class="form-control-plaintext" id="category" value="<?php echo $row['Level'] ?>">
                        </div>
                    </div>
                    <hr>

                    <div class="form-group row">
                        <label for="category" class="col-sm-4 col-form-label">Number of Gold Medals:</label>
                        <div class="col-sm-8">
                            <input type="text" readonly class="form-control-plaintext" id="category" value="<?php echo $row['Gold'] ?>">
                        </div>
                    </div>

                    <hr>

                    <div class="form-group row">
                        <label for="category" class="col-sm-4 col-form-label">Number of Silver Medals:</label>
                        <div class="col-sm-8">
                            <input type="text" readonly class="form-control-plaintext" id="category" value="<?php echo $row['Silver'] ?>">
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <label for="category" class="col-sm-4 col-form-label">NUmber of Bronze Medals:</label>
                        <div class="col-sm-8">
                            <input type="text" readonly class="form-control-plaintext" id="category" value="<?php echo $row['Bronze'] ?>">
                        </div>
                    </div>


                </div>
            </div>
        </form>

    </div>


</body>

</html>