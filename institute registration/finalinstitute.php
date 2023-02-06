<?php
include("../Connection.php");
// include("../navbar.html");

if (isset($_POST['ok'])) {
  $nameofInstitute = $_POST['sname'];
  $typeofRegistration = $_POST['type'];
  $principal = $_POST['principalname'];
  $principalContactno = $_POST['mobile1'];
  $email = $_POST['Email'];
  $ptteachername = $_POST['ptteachername'];
  $ptcontactno = $_POST['mobile2'];
  $district = $_POST['district'];
  $taluka = $_POST['taluka'];
  $village = $_POST['village'];
  $scaddress = $_POST['address'];
  $pincode = $_POST['pincode'];

  $institute = "INSERT INTO  institutes ( Institute_name ,  Email ,  Address ,  City ,  District ,  Taluka ,  Pincode ,  Principal_name ,  Principal_contactno ,  PT_name ,  PT_contactno ,  Type_of_registration ) VALUES
          ( '$nameofInstitute','$email','$scaddress','$village','$district','$taluka','$pincode','$principal','$principalContactno','$ptteachername','$ptcontactno','$typeofRegistration' )";
  $res = mysqli_query($connect, $institute);

  if ($res) {
    echo '<script>alert("Registation Successful.")</script>';
  } else {
    echo mysqli_error($connect);
  }
} else {
  echo mysqli_error($connect);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Institute Registration</title>

  <!-- css  -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/institute.css">

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
            <a href="#" class="nav-link dropdown-toggle main" data-bs-toggle="dropdown">Registration</a>
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
  <section id="cor"></section>
  <form action="finalinstitute.php" method="POST" enctype="multipart/form-data">
    <div id="page">
      <div class="col-md-10 mx-auto my-3">
        <center>
          <h3 class="dept-title my-3 animate-charcter" style="text-transform: uppercase">
            Institute Registration
          </h3>
        </center>

        <div class="px-3 mb-4 pt-3 apply" style="border: 1px solid #003865">
          <h4 class="animate-charcter">1. School and College Registration:</h4>
          <div class="InstiteReg">
            <div class="row">
              <div class="col-md-4">
                <label for="i_name" class="col-form-label">Types Of Registration:*</label>
                <select name="type" class="form-control" aria-label="">
                  <option value="college">College Leval</option>
                  <option value="school">School Leval</option>
                </select>
              </div>

              <div class="col-md-4">
                <label for="i_name" class="col-form-label">Types Of School/Collage:*</label>
                <select class="form-control" aria-label="">
                  <option value="college">GTU</option>
                  <option value="school">GU</option>
                </select>
              </div>

              <div class="col-md-4">
                <label for="i_name" class="col-form-label">Name Of School/Collage:*</label>
                <select class="form-control" aria-label="" name="sname">
                  <option value="college">a1</option>
                  <option value="school">a2</option>
                  <option value="school">a3</option>
                </select>
              </div>
            </div>

            <div class="row">
              <div class="InsReg col-md-4">
                <label class="col-form-label">Name Of Principal:*</label>
                <input type="text" class="form-control" placeholder="Enter Principal Name" name="principalname" id="principalname" required="true" pattern="[a-zA-Z][a-zA-Z\s]*" maxlength="20" />
              </div>

              <div class="col-md-4">
                <label for="m_numberprinciple1" class="col-form-label">Mobile Number Of Principal:*</label>
                <input type="text" class="form-control" name="mobile1" id="mobile1" placeholder="Enter Mobile Number" required="true" pattern="[6-9]{1}[0-9]{9}" />
              </div>
              <div class="InsReg col-md-4">
                <label for="Email" class="col-form-label">Email:*</label>
                <input type="text" class="form-control" placeholder="Email" name="Email" id="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" maxlength="25" />
              </div>
            </div>

            <div class="row">
              <div class="InsReg col-md-4">
                <label for="m_number" class="col-form-label">PT Teacher's Name:*</label>
                <input type="text" class="form-control" placeholder="Enter PT Teacher Name" name="ptteachername" id="ptteachername" required="true" pattern="[a-zA-Z][a-zA-Z\s]*" maxlength="20" />
              </div>

              <div class="col-md-4">
                <label for="m_number1" class="col-form-label">Mobile Number Of PT Teacher:*</label>
                <input type="text" class="form-control" name="mobile2" id="mobile2" placeholder="Enter Mobile Number" required="true" pattern="[6-9]{1}[0-9]{9}" />
              </div>
            </div>

            <br />
          </div>
        </div>

        <div class="px-3 mb-4 pt-3 apply" style="border: 1px solid #003865">
          <h4 class="animate-charcter">2. Address and Contact Details:</h4>
          <div class="InsReg">
            <div class="row">
              <div class="instituteReg col-md-4">
                <div class="form-group my-1">
                  <label for="District">District:*</label>
                  <input type="District" pattern="[a-zA-Z\s][a-zA-Z\s]*" class="form-control" required="true" maxlength="20" id="District" placeholder="Enter District Address" name="district" />
                </div>
              </div>

              <div class="instituteReg col-md-4">
                <div class="form-group my-1">
                  <label for="Taluka">Taluka:*</label>
                  <input type="Taluka" pattern="[a-zA-Z\s][a-zA-Z\s]*" class="form-control" required="true" maxlength="20" id="Taluka" placeholder="Enter Taluka Address" name="taluka" />
                </div>
              </div>

              <div class="instituteReg col-md-4">
                <div class="form-group my-1">
                  <label for="Village">Village:*</label>
                  <input type="Village" pattern="[a-zA-Z\s][a-zA-Z\s]*" class="form-control" required="true" maxlength="20" id="Village" placeholder="Enter Village Address" name="village" />
                </div>
              </div>
            </div>

            <div class="row">
              <div class="instituteReg col-md-4">
                <label for="School/Collage Address" class="col-form-label">
                  Address Of School/Collage:*</label>
                <input type="text" class="form-control" placeholder="Enter School/Collage Address" name="address" id="School/Collage Address" required="true" pattern="[a-zA-Z\s][a-zA-Z\s]*" maxlength="100" />
              </div>

              <div class="instituteReg col-md-4">
                <label for="usr">Pincode *</label>
                <input type="text" class="form-control" id="contact" required="true" pattern="[1-9]{1}[0-9]{5}" maxlength="06" placeholder="Enter pincode" name="pincode" />
              </div>
            </div>
            <br />
          </div>
        </div>
      </div>
    </div>

    <div class="taxbox">
      <input id="checkbox" type="checkbox" style="margin-left:9%;" require />
      <label for="checkbox"> I accepted that all my details are correct.</label>
    </div>

    <center>
      <input type="submit" value="Register" class="btn btn-primary btn-lg" name="ok" />
    </center>
    <br />

  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>