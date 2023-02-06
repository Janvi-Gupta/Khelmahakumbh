<?php
    // include("nav.html");
    include("../../Connection.php");
    // include("../../mail.php");  

    session_start();
    $id=$_SESSION['id'];
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width" , initial-scale="1">
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Team Leader Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <!-- <link href="css/styles.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="css/styles.css?v=<?php echo time(); ?>">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>

    <script>
        //for displying popup on any action
        $('#myModal').modal(options);
    </script>

</head>

<body class="sb-nav-fixed">


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>

    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <img src="" />
            <a class="navbar-brand ps-3" href="player.php">Student</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!">
                <i class="fas fa-bars"></i>
            </button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" data-toggle="modal" data-target="#mail">
                                <div class="sb-nav-link-icon">
                                    <i class="fas fa-tachometer-alt"></i>
                                </div>
                                Add Members
                            </a>

                            <a class="nav-link" href="coach_request.php?id='$id'">
                                <div class="sb-nav-link-icon">
                                    <i class="fas fa-user-alt"></i>
                                </div>
                                Coach Requests
                            </a>

                            <a class="nav-link" href="coach_data.php">
                                <div class="sb-nav-link-icon">
                                    <i class="fas fa-user-alt"></i>
                                </div>
                                All Coach
                            </a>
                                        
                            <a class="nav-link" href="../../login.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-alt"></i></div>
                                Logout
                            </a>

                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </body>

    </html>


    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-5">

                <h1 style="margin-left:14%; margin-top:80px;">Student Name</h1>
                <ol class="breadcrumb" style="margin-left:14%; margin-top:10px;">
                    <li class="breadcrumb-item active">Teams</li>
                </ol>

                <div class="row">

                </div>

                <div class="card mb-4" style="margin-left:14%; margin-top:10px;">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        All Teams
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Sr.No</th>
                                    <th>Player Name</th>
                                    <th>Player Email</th>
                                    <th colspan="2">View Details</th>
                                </tr>
                            </thead>

                            <?php
                            $ref = "SELECT team_ref FROM player WHERE ";
                            $coachname = "SELECT * from player p JOIN team t ON t.team_ref = p.team_ref WHERE p.team_ref = '5Whtxp7u'";

                            $conn = mysqli_query($connect, $coachname);
                            $count = 1;
                            echo $id;
                            while ($row = mysqli_fetch_array($conn)) {
                            ?>
                                <tbody>
                                    <tr>
                                        <td style="    text-align: center; vertical-align: middle;"><?php echo ($count++); ?></td>
                                        <!-- <td style="display: flex; justify-content: center; align-items: center;"><img src="../dashboard/assets/img/user/" width="70" height="70" style="border-radius: 50%;"></td> -->
                                        <td style="width:25%;     text-align: center; vertical-align: middle;"><?php echo $row['f_name'];
                                                                                                                echo " " . $row['m_name'];
                                                                                                                echo " " . $row['l_name']; ?></td>
                                        <td style="    text-align: center; vertical-align: middle;"><?php echo $row['email']; ?></td>
                                        <td style="    text-align: center; vertical-align: middle;" colspan="2">
                                            <div style="display: flex; justify-content: center;">
                                                <button class="btn btn-primary btn-center" value="Team Request" data-toggle="modal" data-target="#exampleModalCenter">View Details</button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody> <?php
                                        }

                                            ?>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Button trigger modal -->
            <center>
                <button type="button" class="btn btn-primary m-3" data-toggle="modal" data-target="#mail">
                    Add Members
                </button>
            </center>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content" style="flex-wrap: wrap;
    align-content: center;">
                        <div class=" modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Team Details</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <b> Team Name : TechBenders <br />
                                Leader : Janvi Gupta <br />
                                Leader's Mail : janvi@gmail.com<br />
                                Members : Aayushi, Hardi , Khushi , Krupalee , Bharti
                                Achivements : 5 <br />
                            </b>
                        </div>
                        <div class="modal-footer" style="display: flex; justify-content: center;">
                            <!-- <button type="button" class="btn btn-primary">Send Request</button> -->
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Approve</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Disapprove</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="mail" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content" style="flex-wrap: wrap; align-content: center;">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Add Members</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <table>
                                <tr>
                                    <td>
                                        <label for="" class="col-form-label me-2">Name:*</label>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" placeholder="Enter Member's Name" name="" id="" required="true" pattern="" maxlength="30" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="" class="col-form-label me-2">From:*</label>
                                    </td>
                                    <td>
                                        <input type="email" class="form-control" placeholder="Enter Leader's Email" name="" id="" required="true" pattern="" maxlength="30" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="" class="col-form-label me-2">To:*</label>
                                    </td>
                                    <td>
                                        <input type="email" class="form-control" placeholder="Enter Member's Email" name="" id="" required="true" pattern="" maxlength="30" />
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="modal-footer" style="display: flex; justify-content: center;">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

</body>

</html>