<?php
    include("nav.html");
    include("../../Connection.php");
    // include("../../mail.php");

    // session_start();
    // $id=$_SESSION['id'];
     
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <!-- <link href="css/styles.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="css/styles.css?v=<?php echo time(); ?>">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

    <script src="js/scripts.js"></script>

    <!-- css  -->
    <link rel="stylesheet" href="assets/css/profile.css">

</head>

<body>
    <div class="container mt-5">
    <form action="" method="POST">

    <?php 
        // $query = "SELECT * FROM coach_registration WHERE coach_id='$id'"; 

            // echo $id;
                
                ?>
                <div class="row p-4" style="margin: 0 auto;">
                    <div class="col-md-5" style="background-color: #f0f0f0;">
                        <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class=" mt-5" width="180px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><br><span class="font-weight-bold"> <a href="#" class="fa fa-facebook"></a>
                                <a href="#" class="fa fa-twitter"></a> <a href="#" class="fa fa-linkedin"></a></span></div>
                        <div class="icon-set">
    
                        </div>
                    </div>
                    <div class="col-md-7">
    
                        <div class="form-group row" style="align-item:center">
                            <label for="name" class="col-sm-4 col-form-label">Name:</label>
                            <div class="col-sm-8">
                                <input type="text" readonly class="form-control-plaintext" id="name" value="Kapil Dev">
                            </div>
    
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label for="Email" class="col-sm-4 col-form-label">Email:</label>
                            <div class="col-sm-8">
                                <input type="text" readonly class="form-control-plaintext" id="Email" value="kd200@gmail.com">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label for="gender" class="col-sm-4 col-form-label">Gender:</label>
                            <div class="col-sm-8">
                                <input type="text" readonly class="form-control-plaintext" id="gender" value="Male">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label for="birthday" class="col-sm-4 col-form-label">Date of Birth:</label>
                            <div class="col-sm-8">
                                <input type="text" readonly class="form-control-plaintext" id="birthday" value="29/05/1970">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label for="Contact Number" class="col-sm-4 col-form-label">Contact Number:</label>
                            <div class="col-sm-8">
                                <input type="text" readonly class="form-control-plaintext" id="Contact Number" value="9879767059">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label for="category" class="col-sm-4 col-form-label">Category:</label>
                            <div class="col-sm-8">
                                <input type="text" readonly class="form-control-plaintext" id="category" value="Open">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label for="Address" class="col-sm-4 col-form-label">Address:</label>
                            <div class="col-sm-8">
                                <input type="text" readonly class="form-control-plaintext" id="Address" value="Bandra">
                            </div>
                        </div>
                    </div>
                </div>
    </form>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>