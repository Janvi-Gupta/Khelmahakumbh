<?php
    include("../Connection.php");
    // include("../navbar.html");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coach</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- css  -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/coach.css">

    <script>
        const box = document.getElementById('box');

        function handleRadioClick(){
            if (document.getElementById('show').checked) {
                box.style.display = 'block';
            } else {
                box.style.display = 'none';
            }
        }

        const radioButtons = document.querySelectorAll('input[name="Physical_desablity"]');
        radioButtons.forEach(radio => {
            radio.addEventListener('click', handleRadioClick);
        });
    </script>

</head>

<body>
    <nav class="navbar navbar-expand-lg" style="background-color:#133b70;">
        <div class="container-fluid mt-3">
            <a class="navbar-brand" href="#"><img src="../assets/images/logo.png" width="240" alt="" /></a>
            <button justify-content-end class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                        <a href="" class="nav-link dropdown-toggle main" data-bs-toggle="dropdown" style="color: #ff6131 !important; background-color: white !important;">Registration</a>
                        <div class="dropdown-menu">
                            <a href="../player registration/playernew.php" class="dropdown-item">Player<br>
                                Registration</a>
                            <hr class="dropdown-divider">
                            <a href="../Teams registration/teams_form.php" class="dropdown-item">Team<br> Registration</a>
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
    <div class="container my-5">
        <center>
            <h3 class="animate-charcter">COACH REGISTRATION</h3>
        </center>
        <form action="../password.php" method="POST" enctype="multipart/form-data">
            <div class="page1 border border-dark p-4 m-4">
                <h4 class="animate-charcter">1. Personal Details</h4>
                <div class="form-group">

                    <div class="row">
                        <div class=" col-md-4">
                            <label class="col-form-label">Surname:*</label>
                            <input type="text" class="form-control" name="lname" id="c_sname" required="true" pattern="[a-zA-Z][a-zA-Z\s]*" required maxlength="30" />
                        </div>
                        <div class=" col-md-4">
                            <label class="col-form-label">First name:*</label>
                            <input type="text" class="form-control" name="fname" required="true" pattern="[a-zA-Z\s][a-zA-Z\s]*" required maxlength="30" />
                        </div>
                        <div class=" col-md-4">
                            <label for="f_h_name" class="col-form-label">Father/Husband's name:*</label>
                            <input type="text" class="form-control" name="mname" id="f_h_lname" required="true" pattern="[a-zA-Z\s][a-zA-Z\s]*" required maxlength="30" />
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="radio d-md-flex">
                                <label for="c_name" class="col-form-label">Gender:*</label>
                                <div class="form-check mx-md-5 my-2">
                                    <input type="radio" name="gender" checked id="maleRadio" value="Male"> Male
                                </div>
                                <div class="form-check mx-mf-5 my-2">
                                    <input type="radio" name="gender" id="femaleRadio" value="Female"> Female
                                </div>
                                <div class="form-check mx-md-5 my-2">
                                    <input type="radio" name="gender" id="otherRadio" value="Other"> Other
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-4">
                            <label for="c_name" class="col-form-label">Relation:*</label>
                            <select class="form-select" aria-label="" name = "relation">
                                <option selected>Choose</option>
                                <option value="Father">Father</option>
                                <option value="Husband">Husband</option>
                            </select>
                        </div> -->
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="birthday" class="col-form-label">Birthday:*</label><br>
                            <input class="form-control" type="date" id="birthday" name="dob" required="true" />
                            <br />
                        </div>

                        <div class="playerReg col-md-6">
                            <label for="" class="col-form-label ">Category:*</label>
                            <select name="category" class="form-control " required="true">
                                <option hidden> Select Your category</option>
                                <option name="Open">Open</option>
                                <option name="ST">ST</option>
                                <option name="SC">SC</option>
                                <option name="OBC">OBC</option>
                                <option name="Other">Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="c_name" class="col-form-label">Regular qualification:*</label>
                            <select class="form-select" aria-label="" name="Regular_qualification">
                                <option selected>Choose</option>
                                <option value="HSC">HSC</option>
                                <option value="DIPLOMA">DIPLOMA</option>
                                <option value="GRADUATE">GRADUATE</option>
                                <option value="POST GRADUATE">POST GRADUATE</option>
                                <option value="OTHERS">OTHERS</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="c_name" class="col-form-label">Adhar Number:*</label>
                            <input min="1" max="12" type="text" class="form-control" name="adhar" id="adhar" required="true" required />
                        </div>
                        <!-- <div class="col-md-4">
                            <label for="c_name" class="col-form-label">Marital Status:*</label>

                            <select class="form-select" aria-label="" name="marital_status">
                                <option selected>Choose</option>
                                <option value="Married">Married</option>
                                <option value="Unmarried">Unmarried</option>
                                <option value="Separated">Separated</option>
                            </select>
                        </div> -->
                    </div>

                </div>
            </div>



            <div class="page2 border border-dark p-4 m-4">
                <h4 class="animate-charcter">2. Address Details</h4>
                <div class="form-group">

                    <!-- <div class="row">
                        <div class="col-md-8">
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="checkBox"
                                    onclick="FillAddressInput()">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Same as communication address
                                </label>
                            </div>
                        </div>
                    </div> -->

                    <div class="row">
                        <div class=" col-md-6">
                            <label for="c_name" class="col-form-label">Communication Address:*</label>
                            <input type="text" class="form-control" name="address" id="address" required="true" required maxlength="30" />
                        </div>
                        <div class=" col-md-6">
                            <label for="c_name" class="col-form-label">City/Village:*</label>
                            <input type="text" pattern="[a-zA-Z][a-zA-Z\s]*" class="form-control" name="vc" id="ccity" required="true" required maxlength="30" />
                        </div>
                        <!-- <div class=" col-md-6">
                            <label for="c_name" class="col-form-label">Permanent Address:*</label>
                            <input type="text" class="form-control" name="paddress" id="paddress" required="true"
                                required maxlength="30" />
                        </div> -->
                    </div>

                    <div class="row">
                        <div class=" col-md-6">
                            <label for="c_name" class="col-form-label">Taluka:*</label>
                            <select class="form-control " required="true" name="zone" id="zone">
                                <option hidden>Select your district</option>

                                <?php
                                $district = "SELECT * FROM taluka";
                                $fetch = mysqli_query($connect, $district);
                                while ($result = mysqli_fetch_array($fetch)) {
                                ?><option><?php echo $result['taluka_name']; ?> </option><?php
                                                                                        }
                                                                                            ?>
                            </select>
                        </div>
                        <div class=" col-md-6">
                            <label for="c_name" class="col-form-label">District:*</label>
                            <select class="form-control " required="true" name="d_name" id="d_name">
                                <option hidden>Select your district</option>
                                <?php
                                $district = "SELECT * FROM district";
                                $fetch = mysqli_query($connect, $district);
                                while ($result = mysqli_fetch_array($fetch)) {
                                ?><option><?php echo $result['district_name']; ?> </option><?php
                                                                                        }
                                                                                            ?>
                            </select>
                        </div>

                        <!-- <div class=" col-md-6">
                            <label for="c_name" class="col-form-label">State:*</label>
                            <input pattern="[a-zA-Z][a-zA-Z\s]*" type="text" class="form-control" name="pstate"
                                id="pstate" required="true" required" maxlength="30" />
                        </div> -->
                    </div>

                    <div class="row">
                        <div class=" col-md-6">
                            <label for="c_name" class="col-form-label">Pincode*</label>
                            <input type="text" pattern=".{6}" class="form-control" name="pincode" id="cpin" required="true" required maxlength="30" />
                        </div>
                        <div class=" col-md-6">
                            <label for="c_name" class="col-form-label">State:*</label>
                            <input pattern="[a-zA-Z][a-zA-Z\s]*" type="text" class="form-control" name="state" id="cstate" required="true" required maxlength="30" />
                        </div>
                        <!-- <div class=" col-md-6">
                            <label for="c_name" class="col-form-label">District:*</label>
                            <input type="text" pattern="[a-zA-Z][a-zA-Z\s]*" class="form-control" name="pdis" id="pdis"
                                required="true" required maxlength="30" />
                        </div> -->
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <label for="c_name" class="col-form-label">Mobile Number (Whatsapp number)</label>
                            <input type="text" class="form-control" name="mobile" id="mobile1" required="true" pattern="[7-9]{1}[0-9]{9}">
                        </div>

                        <div class=" col-md-6">
                            <label for="c_name" class="col-form-label">Email:*</label>
                            <input type="email" class="form-control" name="email" id="email" required="true" required />
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-6">
                            <label for="c_name" class="col-form-label">Nationality:*</label>
                            <input type="text" class="form-control" name="nation" id="nation" required="true" required" maxlength="30" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="page4 border border-dark p-4 m-4">
                <h4 class="animate-charcter">3. Game Details</h4>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="c_name" class="col-form-label">Qualification:*</label>
                            <select class="form-select" aria-label="" name="Regular_qualification">
                                <option selected>Choose</option>
                                <option value="HSC">HSC</option>
                                <option value="DIPLOMA">DIPLOMA</option>
                                <option value="GRADUATE">GRADUATE</option>
                                <option value="POST GRADUATE">POST GRADUATE</option>
                                <option value="OTHERS">OTHERS</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="c_name" class="col-form-label">Game name:*</label>
                            <select name="game" class="form-control " required="true" id="game">
                                <option hidden>Select Game</option>
                                <?php
                                $district = "SELECT * FROM game";
                                $fetch = mysqli_query($connect, $district);
                                while ($result = mysqli_fetch_array($fetch)) {
                                ?><option><?php echo $result['game_name']; ?> </option><?php
                                                                                    }
                                                                                        ?>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="c_name" class="col-form-label">Game Experience(in years):*</label>
                            <input type="number" class="form-control" name="Experience" id="Experience" required="true" required maxlength="1" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="page6 border border-dark p-4 m-4">
                <h4 class="animate-charcter">4. Body Fitness Details
                </h4>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="c_name" class="col-form-label">Height(in cm)
                                :*</label>
                            <input type="text" pattern="[0-9]+([,\.][0-9]+)?" class="form-control" name="height" id="height" required="true" required" />
                        </div>
                        <div class="col-md-4">
                            <label for="c_name" class="col-form-label">Weight(in kg)
                                :*</label>
                            <input type="text" pattern="[0-9]+([,\.][0-9]+)?" class="form-control" name="weight" id="weight" required="true" required" />
                        </div>
                        <div class="col-md-4">
                            <label for="c_name" class="col-form-label"> Blood Group:*</label>
                            <select class="form-select" aria-label="" name="blood_group">
                                <option selected>Choose</option>
                                <option value="A+">A+</option>
                                <option value="B+">B+</option>
                                <option value="O+">O+</option>
                                <option value="AB+">AB+</option>
                                <option value="A-">A-</option>
                                <option value="B-">B-</option>
                                <option value="O-">O-</option>
                                <option value="AB-">AB-</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                        <div class="radio d-md-flex">
                                <label for="c_name" class="col-form-label">Physical Disability
                                    :*</label>
                                <div class="form-check mx-md-5 my-2">
                                    <input type="radio" name="Physical_desablity" id="show" value="show"> Yes
                                </div>
                                <div class="form-check mx-mf-5 my-2">
                                    <input type="radio" name="Physical_desablity" id="hide" checked value="hide">No
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                    </div>

                </div>
            </div>

            <div class="page7 border border-dark p-4 m-4">
                <h4 class="animate-charcter">5. Document upload details
                </h4>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="c_name" class="col-form-label">Current full-length photo:*</label><br>
                            <input type="file" name="photo" id="photo" class="Photo" required accept=".png, .jpg, .jpeg">
                        </div>

                        <div class="col-md-6">
                            <label for="c_name" class="col-form-label">Game Qualification certificate
                                :*</label><br>
                            <input type="file" name="coachcerti" id="game_quali_certi" class="game_quali_certi" required accept=".png, .jpg, .jpeg, .pdf">
                        </div>

                        <div class="col-md-6" id="box" style="display: none;">
                            <label for="c_name" class="col-form-label">Disability certificate
                                :*</label><br>
                            <input type="file" name="coachpd" id="disability_Certy" class="disability_Certy" accept=".png, .jpg, .jpeg, .pdf">
                            </input>
                        </div>
                    </div>
                    <div class="row">
                        <!-- <div class="col-md-6">
                            <label for="c_name" class="col-form-label">Qualification certificate:*</label><br>
                            <input type="file" name="studentphoto" id="Quali_certi" class="Quali_certi" required
                                accept=".png, .jpg, .jpeg, .pdf">
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="taxbox">
                <input id="checkbox" type="checkbox" style="margin-left:2%;" require />
                <label for="checkbox"> I accepted that all my details are correct.</label>
            </div>
            <center> <input type="submit" value="Register" name="coach" class="btn btn-primary btn-lg my-2 py-2">   </center>
        </form>
    </div>
   
    <!-- <script src="script.js"></script> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>