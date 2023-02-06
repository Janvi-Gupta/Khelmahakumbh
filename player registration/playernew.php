<?php
include("../connection.php");
// include("../navbar.html");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Player Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/styles.css"> -->
    <!-- <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script> -->

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->

    <!-- css  -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/playernew.css">

    <script>
        function showhidediv() {
            var stgame = document.getElementById("s_t_game");
            var showhide = document.getElementById("showhide");
            showhide.style.display = stgame.value == "team" ? "block" : "none";
        }
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg" style="background-color:#133b70;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="../assets/images/logo.png" width="240" alt="" /></a>
            <button justify-content-end class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="justify-content-end collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../index.php">Home</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../login.php">Login</a>

                    </li>
                    <li class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle main" data-bs-toggle="dropdown"
                            style="color: #ff6131 !important; background-color: white !important;">Registration</a>
                        <div class="dropdown-menu">
                            <a href="../player registration/playernew.php" class="dropdown-item">Player<br>
                                Registration</a>
                            <hr class="dropdown-divider">
                            <a href="../Teams registration/teams_form.php" class="dropdown-item">Team<br>
                                Registration</a>
                            <hr class="dropdown-divider">
                            <a href="../coach registration/coach.php" class="dropdown-item">Coach<br> Registration</a>
                            <hr class="dropdown-divider">
                            <a href="../institute registration/finalinstitute.php" class="dropdown-item">Institute<br>
                                Registration</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Games</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="cor"></section>

    <form action="../password.php" method="post">
        <div id="page">
            <div class="col-md-10 mx-auto my-5 ">
                <center>
                    <h2 class="dept-title animate-charcter" style="text-transform: uppercase;">Player Registration</h2>
                </center>
                <div class="px-3 mb-4 pt-3 apply">
                    <div class="playerReg">

                        <div class="part1 p-4" style="border: 2px solid #133b70">
                            <h4 class="animate-charcter"> 1. Personal Information</h4>
                            <div class="row">
                                <div class="playerReg col-md-4">
                                    <label for="" class="col-form-label">First Name:*</label>
                                    <input type="text" class="form-control" placeholder="Enter First Name" name="fname"
                                        id="fname" required="true" pattern="[a-zA-Z][a-zA-Z\s]*" maxlength="30" />
                                </div>
                                <div class="playerReg col-md-4">
                                    <label for="" class="col-form-label">Father's/ Husband's Name:*</label>
                                    <input type="text" class="form-control" placeholder="Enter Father's/ Husband's Name"
                                        name="mname" id="mname" required="true" pattern="[a-zA-Z\s][a-zA-Z\s]*"
                                        maxlength="30" />
                                </div>
                                <div class="playerReg col-md-4">
                                    <label for="" class="col-form-label">Surname:*</label>
                                    <input type="text" class="form-control" placeholder="Enter Surname" name="lname"
                                        id="lname" required="true" pattern="[a-zA-Z\s][a-zA-Z\s]*" maxlength="30" />
                                </div>
                            </div>

                            <div class="row">
                                <div class="playerReg col-md-4 ">
                                    <label for="" class="col-form-label ">Age Group:*</label>
                                    <select name="age" class="form-control " required="true">
                                        <option hidden>Select Age Group</option>
                                        <option>Children (00-14 years)</option>
                                        <option>Youth (15-24 years)</option>
                                        <option>Adults (25-50 years)</option>
                                    </select>
                                </div>

                                <div class="playerReg col-md-4">
                                    <label for="" class="col-form-label ">Gender:*</label>
                                    <select name="gender" class="form-control " required="true">
                                        <option hidden>Select Gender</option>
                                        <option name="male">Male</option>
                                        <option name="female">Female</option>
                                        <option name="other">Other</option>
                                    </select>
                                </div>

                                <div class="playerReg col-md-4 my-1">
                                    <label for="birthday">Birthday:</label><br>
                                    <input type="date" class="form-control" id="birthday" name="birthday"
                                        style="width: inherit;color: #495057; border: 1px solid #ced4da;"
                                        required="true" />
                                </div>
                            </div>

                            <div class="row part1">

                                <div class="playerReg col-md-4">
                                    <label for="" class="col-form-label ">Category:*</label>
                                    <select name="category" class="form-control " required="true">
                                        <option hidden>Select Category</option>
                                        <option name="Open">Open</option>
                                        <option name="ST">ST</option>
                                        <option name="SC">SC</option>
                                        <option name="OBC">OBC</option>
                                        <option name="Other">Other</option>
                                    </select>
                                </div>

                                <div class="playerReg col-md-4">
                                    <label for="" class="col-form-label">Game Name:*</label>
                                    <select name="game" class="form-control " required="true" id="game">
                                        <option hidden>Select Game</option>
                                        <?php
                                        $district = "SELECT * FROM game";
                                        $fetch = mysqli_query($connect, $district);
                                        while ($result = mysqli_fetch_array($fetch)) {
                                        ?>
                                        <option>
                                            <?php echo $result['game_name']; ?>
                                        </option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="playerReg col-md-4 ">
                                    <label for="" class="col-form-label ">Game Type:*</label>
                                    <select id="s_t_game" onchange="showhidediv()" class="form-control "
                                        required="true">
                                        <option hidden>Select Game</option>
                                        <option value="single">Single</option>
                                        <option value="team">Team</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <div class="playerReg">
                                        <label for="" class="col-form-label">Aadhar No.:*</label>
                                        <input type="text" class="form-control" placeholder="Enter 12 digit adhar no."
                                            name="adhar" id="adhar" pattern="[1-9]{1}[0-9]{11}" maxlength="12"
                                            required="true" />
                                    </div>
                                </div>

                                <div class="playerReg col-md-4">
                                    <label for="" class="col-form-label">Weight(kg):*</label>
                                    <input type="text" class="form-control" placeholder="Enter your weight"
                                        name="weight" pattern="^[0-9]*$" id="wei" required="true" maxlength="30" />
                                </div>
                                <div class="playerReg col-md-4">
                                    <label for="" class="col-form-label">Height(cm):*</label>
                                    <input type="text" class="form-control" placeholder="Enter your height(in cm)"
                                        name="height" id="hei" pattern="^[0-9]*$" required="true" maxlength="30" />
                                </div>

                            </div>

                            <div class="row">
                                <div class="playerReg col-md-4">
                                    <div class="form-group my-3" id="showhide" style="display:none;">
                                        <label for="">Team Reference Id:*</label>
                                        <input type="text" class="form-control" maxlength="10"
                                            id="team_ref" placeholder="Enter Team Reference Number" name="team_ref">
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="part2 p-4 mt-4" style="border: 2px solid #133b70">
                            <h4 class="animate-charcter"> 2. Communication Information</h4>

                            <div class="row">
                                <div class="playerReg col-md-4">
                                    <label for="" class="col-form-label">Village/City:*</label>
                                    <input type="text" class="form-control" placeholder="Enter your Village" name="vc"
                                        id="Village" required="true" pattern="[a-zA-Z\s][a-zA-Z\s]*" maxlength="30" />
                                </div>
                                <div class="playerReg col-md-4">
                                    <div class="form-group ">
                                        <label for="" class="col-form-label">District name:*</label>
                                        <select class="form-control " required="true" name="d_name" id="d_name">
                                            <option hidden>Select your district</option>
                                            <?php
                                            $district = "SELECT * FROM district";
                                            $fetch = mysqli_query($connect, $district);
                                            while ($result = mysqli_fetch_array($fetch)) {
                                            ?>
                                            <option>
                                                <?php echo $result['district_name']; ?>
                                            </option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="playerReg col-md-4">
                                    <div class="form-group">
                                        <label for="" class="col-form-label">Zone/ Taluka:*</label>
                                        <select class="form-control " required="true" name="zone" id="zone">
                                            <option hidden>Select your district</option>
                                            <?php
                                            $district = "SELECT * FROM taluka";
                                            $fetch = mysqli_query($connect, $district);
                                            while ($result = mysqli_fetch_array($fetch)) {
                                            ?>
                                            <option>
                                                <?php echo $result['taluka_name']; ?>
                                            </option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">




                                <div class="playerReg col-md-4">
                                    <div class="form-group my-2">
                                        <label for="email">Email Address:*</label>
                                        <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                                            class="form-control" required="true" maxlength="50" id="email"
                                            placeholder="Enter Email ID" name="email">
                                    </div>
                                </div>
                                <div class="playerReg col-md-4 my-2">
                                    <label for="usr">Contact No:*</label>
                                    <input type="text" class="form-control" id="contact" required="true"
                                        pattern="[6-9]{1}[0-9]{9}" maxlength="10" placeholder="Enter Contact No"
                                        name="contact">
                                </div>
                                <div class="playerReg col-md-4 my-2">
                                    <div class="form-group ">
                                        <label for="">Address:*</label>
                                        <textarea maxlength="100" class="form-control" name="address" required
                                            placeholder="Enter your address"
                                            style="width:100%; height:20px;"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="playerReg col-md-4">
                                    <div class="form-group my-1">
                                        <label for="">Pincode:*</label>
                                        <input type="text" class="form-control" required="true"
                                            pattern="[38]{2}[0-9]{4}" maxlength="6" id="pincode"
                                            placeholder="Enter Pincode" name="pincode">
                                    </div>
                                </div>

                                <div class="playerReg col-md-4 my-1">
                                    <label for="usr">Parent's Contact No:*</label>
                                    <input type="text" class="form-control" name="pcontact" id="contact" required="true"
                                        pattern="[6-9]{1}[0-9]{9}" maxlength="10" placeholder="Enter Contact No" />
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="part2 p-4 mt-4" style="border: 2px solid #003865">
                            <h4 class="animate-charcter"> 3. Achievement</h4>
                            <div class="certi">
                                <div class="row mb-3">
                                    <div class="player-achieve col-md-4">
                                        <label for="" class="col-form-label">Medals:*</label>
                                        <select name="age" class="form-control" required="true">
                                            <option hidden>Select Medal:*</option>
                                            <option>Gold Medal</option>
                                            <option>Silver Medal</option>
                                            <option>Bronze Medal</option>
                                            <option>None</option>
                                        </select>
                                    </div>
                                    <div class="player-achieve col-md-4">
                                        <label for="" class="col-form-label">Levels:*</label>
                                        <select name="age" class="form-control" required="true">
                                            <option hidden>Select Level:*</option>
                                            <option>Block</option>
                                            <option>District</option>
                                            <option>State</option>
                                            <option>Final</option>
                                            <option>National</option>
                                            <option>InterNational</option>
                                            <option>None</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="" class="col-form-label">Achievement certificate
                                            :*</label><br>
                                        <input type="file" name="certi" id="certi" class="certi" required
                                            accept=".png, .jpg, .jpeg, .pdf">

                                        </input>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="taxbox">
                            <input id="checkbox" type="checkbox" style="margin-left:1%;" required />
                            <label for="checkbox"> I accepted that all my details are correct.</label>
                        </div>
                        <center> <input type="submit" value="Register" name="player"
                                class="btn btn-primary btn-lg my-2 py-2"> </center>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- <script src="script.js"></script> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>