<?php
// session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="assets/css/login.css">

</head>

<body>
    <?php

    include("connection.php");

    if (isset($_POST['submit'])) 
    {
        $role = $_POST['role1'];
        $uname = $_POST['username'];
        $pass = $_POST['password'];

        $login = "SELECT * FROM login WHERE role1='$role' AND username='$uname' AND password='$pass'";

        if ($result = mysqli_query($connect, $login))
        {
            while ($row = mysqli_fetch_assoc($result))
            {

                if ($row['role1'] == $role && $row['username'] == $uname && $row['password'] == $pass) 
                {
                    if ($row['role1'] == "coach") 
                    {
                        $query = "SELECT coach_id FROM coach_registration WHERE email='$uname'";
                        $data = mysqli_query($connect, $query);
                        while ($info = mysqli_fetch_assoc($data))
                        {
                            $id = $info['coach_id'];
                        }
                        //echo $id;
    
                        header("Location: Dashboard/dashboard/coach.php?id=$id");
                    }
                    else if ($row['role1'] == "player") 
                    {
                        $query = "SELECT player_id FROM player WHERE email='$uname'";
                        $data = mysqli_query($connect, $query);
                        while ($info = mysqli_fetch_assoc($data)) {
                            $id2 = $info['player_id'];

                        }

                        header("Location: Dashboard/dashboard/coach_request.php?id=$id2");
                    }
                    else if ($row['role1'] == "team") 
                    {
                        header('Location: Dashboard/dashboard/team.php');
                    }
                    else
                    {
                        header('Location: Dashboard/dashboard/institute.php');
                    }
                } 
                else {
                    ?>
                    <script type="text/javascript">alert("Wrong credentials entered....");</script>
                    <?php
                }
            }
        } 
        else {
                ?>
                <script> document.getElementById("validate").value = "Please enter valid data"; </script>
                <?php
               }
    }
    ?>

    <section class="vh-100 bg-image">
        <div class="mask d-flex align-items-center h-100">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px; ">
                            <div class="card-body">
                                <center>
                                    <h2 class="text-uppercase text-center mb-3 animate-charcter">Login</h2>
                                </center>

                                <form method="POST" action="">
                                    <div class="">
                                        <select name="role1" class="form-control form-control-lg mb-4" required="true">
                                            <option hidden>Select Role</option>
                                            <option name="player" value="player">Player</option>
                                            <option name="coach" value="coach">Coach</option>
                                            <option name="team" value="team">Team</option>
                                            <option name="institute" value="institute">Institute</option>
                                        </select>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input required placeholder="Enter Username" name="username" type="text"
                                            id="form3Example1cg" class="form-control form-control-lg" />
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input required placeholder="Enter Password" name="password" type="password"
                                            id="form3Example4cg" class="form-control form-control-lg" />
                                    </div>
                                    <div class="form-outline mb-4">
                                        <p id="validate" style="display:none;"> Enter Valid Data</p>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button type="submit" name="submit"
                                            class="btn btn-primary btn-block btn-lg text-body">
                                            Login
                                        </button>
                                    </div>

                                    <h6 class="text-center text-muted mt-2 mb-0">
                                        New user?
                                        <!-- <a href="" class="fw-bold text-body"><u>Register</u></a> -->
                                    </h6>
                                    <center>
                                        <div class="dropdown">
                                            <a class="btn btn-secondary dropdown-toggle btn-lg"
                                                style="display: flex; align-items: center; color: #212529; justify-content: center;"
                                                href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                Register
                                            </a>

                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <li><a class="dropdown-item"
                                                        href="./player registration/playernew.php">Player
                                                        Registration</a></li>
                                                <li><a class="dropdown-item"
                                                        href="./Teams registration/teams_form.php">Team Registration</a>
                                                </li>
                                                <li><a class="dropdown-item" href="./coach registration/coach.php">Coach
                                                        Registration</a></li>
                                                <li><a class="dropdown-item"
                                                        href="./institute registration/finalinstitute.php">Institute
                                                        Registration</a></li>
                                            </ul>
                                        </div>
                                    </center>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>

</html>