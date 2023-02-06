<?php

    include("../Connection.php");
    // include("../navbar.html");

        // $district = "SELECT * FROM district";
        // $fetch = mysqli_query($connect,$district);

        // while ($result = mysqli_fetch_array($fetch))
        // {
        //  echo "<h1>{$result['district_name']}</h1>";
        // }
?>

<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

        <title>Team_Registration</title>

        <!-- css  -->
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" href="../assets/css/teams.css">
</head>

<body>

<nav class="navbar navbar-expand-lg" style="background-color:#133b70;">
    <div class="container-fluid">
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
            <a href="#" class="nav-link dropdown-toggle main" data-bs-toggle="dropdown" style="color: #ff6131 !important; background-color: white !important;">Registration</a>
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

  <div class="container mt-3">
    <center><h2 style="text-align: center" class="my-3 animate-charcter">TEAM REGISTRATION</h2></center>
    
    <form action="../password.php" method="POST">
      <div class="form-group">

        <div class="team p-4 m-3" style="border: 2px solid #133b70">
          <h4 class="animate-charcter">1. Team Details</h4>
          <div class="row">
            <div class="col-md-4">
              <label for="t_name" class="col-form-label">Team Name:*</label>
              <input type="text" class="form-control" name="team_name" id="team_name" pattern="[a-zA-Z][a-zA-Z\s]*" required maxlength="30" />
            </div>

            <div class="col-md-4">
              <label for="" class="col-form-label">Game Name:*</label>
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
              <label for="c_name" class="col-form-label" required>Sub Game :*</label>
              <select class="form-select" aria-label="">
                <option hidden>Choose Sub-game</option>
                <option value="race1">100 Meter</option>
              </select>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <label for="c_name" class="col-form-label" required>Age Group :*</label>
              <select class="form-select" aria-label="">
                <option hidden>Choose Age-group</option>
                <option value="under14">Under 14</option>
                <option value="under16">Under 16</option>
                <option value="above18">Above 18</option>
              </select>
            </div>

            <div class="col-md-6">
              <label for="total_member" class="col-form-label">Total Members :*</label>
              <input type="text" class="form-control" name="members" id="members" required="true" pattern="[0-9]{2}*" required maxlength="2" />
            </div>
          </div>
        </div>

        <div class="leader p-4 m-3" style="border: 2px solid #133b70">
          <h4 class="animate-charcter">2. Leader Details</h4>
          <div class="row">
            <div class="col-md-4">
              <label for="c_fname" class="col-form-label">First name:*</label>
              <input type="text" class="form-control" name="fname" id="fname" required="true" pattern="[a-zA-Z\s][a-zA-Z\s]*" required maxlength="30" />
            </div>
            <div class="col-md-4">
              <label for="f_h_name" class="col-form-label">Father/Husband's name:*</label>
              <input type="text" class="form-control" name="mname" id="mname" required="true" pattern="[a-zA-Z\s][a-zA-Z\s]*" required maxlength="30" />
            </div>
            <div class="col-md-4">
              <label for="c_sname" class="col-form-label">Surname:*</label>
              <input type="text" class="form-control" name="lname" id="lname" required="true" pattern="[a-zA-Z][a-zA-Z\s]*" required maxlength=" 30 " />
            </div>
          </div>

          <div class=" row ">
            <div class="playerReg col-md-4">
              <label for="" class="col-form-label ">Gender:*</label>
              <select name="gender" class="form-control " required="true">
                <option hidden></option>
                <option name="male">Male</option>
                <option name="female">Female</option>
                <option name="other">Other</option>
              </select>
            </div>

            <div class="playerReg col-md-4 my-1">
              <label for="birthday">Birthday:</label><br>
              <input type="date" class="form-control" id="birthday" name="birthday" style="width: inherit;color: #495057; border: 1px solid #ced4da;" required="true" />
            </div>

            <div class="col-md-4">
              <label for="c_name" class=" col-form-label ">Height(in cm) :*</label>
              <input type="text" pattern="^[0-9]*$" class="form-control" name="height1" id="height1" required />
            </div>
          </div>

          <div class=" row ">
            <div class=" col-md-4 ">
              <label for="c_name" class="col-form-label">Weight(in kg) :*</label>
              <input type="text" pattern="^[0-9]*$" class="form-control " name="weight" id="weight" required />
            </div>

            <div class="playerReg col-md-4">
              <label for="" class="col-form-label ">Category:*</label>
              <select name="category" class="form-control " required="true">
                <option hidden></option>
                <option name="Open">Open</option>
                <option name="ST">ST</option>
                <option name="SC">SC</option>
                <option name="OBC">OBC</option>
                <option name="Other">Other</option>
              </select>
            </div>

            <div class="col-md-4">
              <div class="playerReg">
                <label for="" class="col-form-label">Aadhar No.:*</label>
                <input type="text" class="form-control" placeholder="Enter 12 digit adhar no." name="adhar" id="adhar" pattern="[1-9]{1}[0-9]{11}" maxlength="12" required="true" />
              </div>
            </div>
          </div>
        </div>
        <div class=" comm m-3 p-4 " style=" border: 2px solid #133b70 ">
          <h4 class="animate-charcter">3. Communication Details</h4>
          <div class=" form-group ">
            <div class=" row ">
              <div class=" col-md-4 ">
                <label for="c_name" class="col-form-label">Communication Address:*</label>
                <input type="text" class="form-control" name="add" id="add" required maxlength="30" />
              </div>

              <div class=" col-md-4 ">
                <label for=" c_name " class=" col-form-label ">District:*</label>
                <input type=" text " class=" form-control " name="d_name" id=" d_name " required=" true " required maxlength=" 30 " />
              </div>

              <div class=" col-md-4 ">
                <label for=" c_name " class=" col-form-label ">City/Taluka:*</label>
                <input type="text" class=" form-control" name="city" id="city" required maxlength="30" />
              </div>
            </div>

            <div class=" row ">
              <div class=" col-md-4 ">
                <label for=" c_name " class=" col-form-label ">State:*</label>
                <input type=" text " class=" form-control " name="state" id="state " required maxlength=" 30 " />
              </div>

              <div class=" col-md-4 ">
                <label for=" c_name " class=" col-form-label ">Pincode*</label>
                <input type="text" pattern="[38]{2}[0-9]{4}" class="form-control" name="pincode" id="pincode" required maxlength="6" />
              </div>

              <div class=" col-md-4 ">
                <label for="c_name" class=" col-form-label ">Nationality:*</label>
                <input type="text" class=" form-control" name="nation" id="nation " required maxlength=" 30 " />
              </div>
            </div>

            <div class=" row ">
              <div class=" col-md-4 ">
                <label for="c_name" class=" col-form-label ">Mobile Number :</label>
                <input type="text" class="form-control" name="contact" id="contact" required="true" pattern="[6-9]{1}[0-9]{9}" maxlength="10" placeholder="Enter Contact No" />
              </div>

              <div class=" col-md-4 ">
                <label for=" c_name " class=" col-form-label ">Email:*</label>
                <input type="email" class="form-control" name="email" id="email" required="true" />
              </div>

              <div class="playerReg col-md-4 my-1">
                <label for="usr">Parent's Contact No:*</label>
                <input type="text" class="form-control" name="pcontact" id="contact" required="true" pattern="[6-9]{1}[0-9]{9}" maxlength="10" placeholder="Enter Contact No" />
              </div>
            </div>
          </div>
        </div>

        <div class="taxbox">
          <input id="checkbox" type="checkbox" style="margin-left:2%;" require />
          <label for="checkbox"> I accepted that all my details are correct.</label>
        </div>

        <center>
          <input type="submit" name="team" value="Register" class="btn btn-lg my-2 py-2" />
        </center>
      </div>
    </form>
    
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>  
   
</body>

</html>