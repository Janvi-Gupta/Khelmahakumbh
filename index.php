<!DOCTYPE html>
<html lang="en">

<head>
    <title>Khel Mahakumbh</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- css link  -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Google font link  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Raleway&family=Roboto&display=swap" rel="stylesheet">

    <!-- font-awesome link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- animation on scroll -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

    <!-- iconify  -->
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
</head>

<body>

    <!-- navigation bar  -->
    <nav class="navbar navbar-expand-lg" style="background-color:#133b70;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="assets/images/logo.png" width="240" alt="" /></a>
            <button justify-content-end class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="justify-content-end collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link main" aria-current="page" href="index.php" style="color: #ff6131 !important; background-color: white !important;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="login.php">Login</a>

                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Registration</a>
                        <div class="dropdown-menu">
                            <a href="player registration/playernew.php" class="dropdown-item">Player<br>
                                Registration</a>
                            <hr class="dropdown-divider">
                            <a href="Teams registration/teams_form.php" class="dropdown-item">Team<br> Registration</a>
                            <hr class="dropdown-divider">
                            <a href="coach registration/coach.php" class="dropdown-item">Coach<br> Registration</a>
                            <hr class="dropdown-divider">
                            <a href="institute registration/finalinstitute.php" class="dropdown-item">Institute<br>
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


    <!-- carousel -->
    <div class="caro">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" style="height:70vh;">
                    <img style="width: 100vw;
                    height: 100%;" src="assets/images/caro1.jpeg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block" style="background-color: #ff6131;opacity: 0.7;width: fit-content;margin: 0 auto;padding: 1rem;">
                        <h1 style="font-family: 'Raleway', sans-serif;" data-aos="fade-up-right">Khel Mahakumbh</h1>
                        <p style="font-family: 'Raleway', sans-serif;" data-aos="fade-up-left">A Platform Where Talent
                            Meets Passions</p>
                    </div>
                </div>
                <div class="carousel-item" style="height:70vh;">
                    <img style="width: 100vw;
                    height:100%;" src="assets/images/caro2.jpg" class="d-block w-100" alt="...">

                </div>
                <div class="carousel-item" style="height:70vh;">
                    <img style="width: 100vw;
                    height: 100%;" src="assets/images/caro3.jpg" class="d-block w-100" alt="...">

                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


    <!-- card group  -->
    <div class="cardGroup ">
        <div class="row" style="width: 100%;margin: 2rem auto;">

            <!-- card 1 -->
            <div class="col-md-4 mt-2">
                <div class="card" data-aos="fade-up">
                    <div class=" row" style="text-align: center;font-size:larger;">
                        <div class="col-md-4">
                            <img class="mt-3" src="assets/images/PM.png" alt="">
                        </div>
                        <div class="col-md-8 mt-3">
                            <p><strong> Shri Narendra Modi </strong><br>
                                Hon'ble Prime Minister of <br>India</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- card 2 -->
            <div class="col-md-4 mt-2">
                <div class="card" data-aos="fade-up">
                    <div class="row" style="text-align: center;font-size:larger;">
                        <div class="col-md-4">
                            <img class="mt-3" src="assets/images/CM.png" alt="">
                        </div>
                        <div class="col-md-8 mt-3">
                            <p><strong>Shri Bhupendrabhai Patel </strong><br>
                                Hon'ble Chief Minister of <br>Gujarat</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- card 3 -->
            <div class="col-md-4 mt-2">
                <div class="card" data-aos="fade-up">
                    <div class="row" style="text-align: center;font-size:larger;">
                        <div class="col-md-4">
                            <img class="mt-3" src="assets/images/MINISTER.png" alt="">
                        </div>
                        <div class="col-md-8 mt-3">
                            <p><strong>Shri Harshbhai Sanghavi</strong><br>
                                Hon'ble Minister - Sports, Youth & Cultural Activities Department</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row" style="width: 100%;margin: 2rem auto;">

            <!-- card 4 -->
            <div class="col-md-4 mt-2">
                <div class="card" data-aos="fade-up">
                    <div class="row" style="text-align: center;font-size:larger;">
                        <div class="col-md-4">
                            <img class="mt-3" src="assets/images/PRINCIPAL_SECRETARY.png" alt="">
                        </div>
                        <div class="col-md-8 mt-3">
                            <p><strong>Shri Ashwini Kumar, IAS </strong><br>
                                Principal Secretary, Sports, Youth & Cultural Activities Department</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- card 5 -->
            <div class="col-md-4 mt-2">
                <div class="card" data-aos="fade-up">
                    <div class="row" style="text-align: center;font-size:larger;">
                        <div class="col-md-4">
                            <img class="mt-3" src="assets/images/SECRETARY.png" alt="">
                        </div>
                        <div class="col-md-8 mt-3">
                            <p><strong>Shri R. D. Bhatt, G.A.S</strong><br>
                                Secretary, Sports Authority of<br> Gujarat</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="row" style="width: 100%;margin: 1rem auto;">
        <div class="col-md-8 mt-2" style="margin: 0 auto">
            <div class="intro p-2">
                <h3 class="animate-charcter" style="text-align: center;color:#113669 !important;font-weight:bold" class="mt-2" data-aos="fade-right">Welcome to Sports
                    Authority of
                    Gujarat</h3>
                <p data-aos="flip-down" style="background-color: #ff6131;color:white; text-align: justify;
                text-justify: inter-word;" class="p-3">As stated in the objective letter of the Sports Authority of
                    Gujarat, this authority will promote and develop sports activities in line with the sports policy of
                    the State and the Government of India.
                    <br><br>The following two objectives are determined from the ongoing activities of this authority.
                    <br><span style="color: #113669;font-weight: 800;">1. Encouraging excellence</span><br>&#x2022;
                    Excellence is
                    promoted with the
                    aim of imparting specific skills in
                    the field of sports. In addition, its quality is enhanced by providing special training, sports
                    equipment and infrastructural facilities.<br><span style="color: #113669;font-weight: 800;">2.
                        Strategy formation</span><br>&#x2022; Strategy design involves a
                    variety of activities to achieve these objectives. Which also automatically determines its
                    operational objectives.
                </p>

                <h3 class="animate-charcter" data-aos="fade-right">Games</h3>
                <!-- game cards  -->
                <section class="gameCard">
                    <div class="container">
                        <!-- card 1 -->
                        <div class="card" data-aos="zoom-in">
                            <div class="imgBx">
                                <img src="assets/images/Kho-Kho.jpg">
                            </div>
                            <div class="content">
                                <h3>Kho-Kho</h3>
                            </div>
                        </div>
                        <!-- card 2 -->
                        <div class="card" data-aos="zoom-in">
                            <div class="imgBx">
                                <img src="assets/images/badminton.jpg">
                            </div>
                            <div class="content">
                                <h3>Badminton</h3>
                            </div>
                        </div>
                        <!-- card 3 -->
                        <div class="card" data-aos="zoom-in">
                            <div class="imgBx">
                                <img src="assets/images/wrestling.jpg">
                            </div>
                            <div class="content">
                                <h3>Wrestling</h3>
                            </div>
                        </div>

                        <!-- card 4 -->
                        <div class="card" data-aos="zoom-in">
                            <div class="imgBx">
                                <img src="assets/images/chess.jpg">
                            </div>
                            <div class="content">
                                <h3>Chess</h3>
                            </div>
                        </div>

                        <!-- card 5 -->
                        <div class="card" data-aos="zoom-in">
                            <div class="imgBx">
                                <img src="assets/images/archery.jpg">
                            </div>
                            <div class="content">
                                <h3>Archery</h3>
                            </div>
                        </div>

                        <!-- card 6 -->
                        <div class="card" data-aos="zoom-in">
                            <div class="imgBx">

                                <img src="assets/images/volleyball.jpg">
                            </div>
                            <div class="content">
                                <h3>Volleyball</h3>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <!-- Highlighted images  -->
        <div class="col-md-3 mt-2" style="margin: 0 auto;">
            <h3 class="animate-charcter" data-aos="fade-left"> Highlights</h3>
            <div class="row mt-3" data-aos="flip-left">
                <img src="assets/images/image1.jpg" alt="">
            </div>
            <div class="row mt-3" data-aos="flip-left">
                <img src="assets/images/image2.jpg" alt="">
            </div>
            <div class="row mt-3" data-aos="flip-left">
                <img src="assets/images/image3.jpg" alt="">
            </div>
            <div class="row mt-3" data-aos="flip-left">
                <img src="assets/images/image1.jpg" alt="">
            </div>
        </div>
    </div>

    <!-- footer  -->
    <footer class="text-center text-lg-start " style="color: white !important;background-color:  #133b70 !important;">
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <div class="me-5 d-none d-lg-block">
                <span><br>Get connected with us on social networks:</span>
            </div>
            <div>
                <div class="hover-effect1">
                    <ul>
                        <li>
                            <a href="#." title="linkedin">
                                <iconify-icon icon="akar-icons:linkedin-fill" style="color:  #133b70;" width="23" height="23"></iconify-icon>
                            </a>
                        </li>
                        <li>
                            <a href="#." title="insta">
                                <iconify-icon icon="akar-icons:instagram-fill" style="color:  #133b70;" width="23" height="23"></iconify-icon>
                            </a>
                        </li>
                        <li>
                            <a href="#." title="Facebook">
                                <iconify-icon icon="brandico:facebook" style="color:  #133b70;" width="23" height="23">
                                </iconify-icon>
                            </a>
                        </li>
                        <li>
                            <a href="#." title="twitter">
                                <iconify-icon icon="bi:twitter" style="color:  #133b70;" width="23" height="23">
                                </iconify-icon>
                            </a>
                        </li>
                        <!-- <li>
                            <a href="#." title="github"><i class="fa fa-github "></i></a>
                        </li> -->

                    </ul>
                </div>
        </section>
        <section class="footerLinkWrap">
            <div class="container">
                <div class="row">
                    <div class="footerLink"><br>
                        <p class="text-center"> <a href=" #">Terms of Use</a> | <a href="#">Privacy
                                Policy</a> | <a href="#">Copyright
                                Policy</a> | <a href="#">Accessibility Statement</a> | <a href="#">Help</a>
                        </p>
                    </div>

                </div>
            </div>
        </section>
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            Copyright © Sports Authority of Gujarat,<br />
            Sports, Youth and Cultural Activities Department , Government of Gujarat.
            <a class="text-reset fw-bold" href="#"><br>Last updated on: 13-10-2022</a>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 700,
        });
    </script>
</body>

</html>