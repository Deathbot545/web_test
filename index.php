<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Auction System</title>
    <?php include('connect.php') ?>
    <!-- CSS only -->
    <script>
    function login() {
        window.open('lgup.html');
    }

    function signup() {
        window.open('sgup.html');
    }

    function dash() {
        window.open('dash.php');
    }

    function dd() {
        window.open('test.php')
    }

    function abou() {
        window.open('aboutus.html');
    }
    </script>

    <style>
    #navigator {
        line-height: 70px;
        height: 500px;
        width: 260px;
        float: left;

    }

    #section {
        float: inherit;
    }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

    <title> !</title>



    <header class="p-3 text-bg-dark">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 text-secondary" onclick="dash()">Home</a></li>
                    <li><a href="#" class="nav-link px-2 text-white" onclick="dd()">Features</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
                    <li><a href="#" class="nav-link px-2 text-white" onclick="abou()">About</a></li>
                </ul>

                <div class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-5" role="search" action="" method="post">
                    <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..."
                        id="gsearch" name="gsearch" aria-label="Search">
                </div>
                <div class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-5" role="search" action="" method="post">
                    <button type="submit" class="btn btn-primary" name="submit">Search</button>
                    <?php
                          include 'connect.php';
                          $ser = mysqli_real_escape_string($conn, $_POST['gsearch']);
                          $sqql = "SELECT * FROM Item, Photo WHERE Item.ItemID=Photo.ItemID AND Title='$ser' GROUP BY Title ;";
                          $result = mysqli_query($conn, $sqql);
                          if (mysqli_num_rows($result) == 1) {
                          }
                    ?>
                </div>



                <div class="text-end">
                    <a href="lgup.html">
                        <button" class="btn btn-outline-light me-2">Log</button>
                    </a>
                    <button type="button" class="btn btn-warning" onclick="signup()">Sign-up</button>
                </div>
            </div>
        </div>
    </header>
</head>

<body>
    <div>

        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <svg class="bd-placeholder-img" width="100%" height="100%" src="5-Auction-Tips-for-Beginners2.png">

                        <rect width="100%" height="100%" fill="#777" />

                    </svg>

                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Start Bidding Now.</h1>
                            <p>Find your new favorite instrument today.</p>
                            <p><a class="btn btn-lg btn-primary" onclick="login()" href="#">Sign up today</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#777" />
                    </svg>

                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Woodwind, Brass, Stringed, Percussion, and more.</h1>
                            <p>Discover a rare item and make it yours.</p>
                            <p><a class="btn btn-lg btn-primary" onclick="login()" href="#">Sign up now</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#777" />
                    </svg>

                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1>Now Featuring Percussion Instruments.</h1>
                            <p>Collectibles you won't find anywhere else.</p>
                            <p><a class="btn btn-lg btn-primary" onclick="login()" href="#">Sign Up and Browse</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </div>
    <!-- ==================================== -->
    <div id='navigator'>
        <nav>
            <div>
                <ul>
                    <h3>Catogory</h3>
                    <a href="#" class="list-group-item list-group-item-action">Automotive</a>
                    <a href="#" class="list-group-item list-group-item-action">Appliencence</a>
                    <a href="#" class="list-group-item list-group-item-action">Books</a>
                    <a href="#" class="list-group-item list-group-item-action disabled">Bulding Supply</a>
                    <a href="#" class="list-group-item list-group-item-action">Computers</a>
                    <a href="#" class="list-group-item list-group-item-action">Collectebles</a>
                    <a href="#" class="list-group-item list-group-item-action">Elctronics</a>
                    <a href="#" class="list-group-item list-group-item-action">Books</a>
                    <a href="#" class="list-group-item list-group-item-action">Farm And Equpment</a>
                    <a href="#" class="list-group-item list-group-item-action">Furniture</a>
                    <a href="#" class="list-group-item list-group-item-action">Genaral Equpment</a>
                    <a href="#" class="list-group-item list-group-item-action">Heavey Equipment</a>
                </ul>
            </div>
        </nav>
    </div>
    <div id="section">

        <h1 align='center'>last call Items</h1>
        <footer class="container py-5  ">
            <div class="row ">
                <?php $sql    = 'SELECT * FROM Item, Photo WHERE Item.ItemID=Photo.ItemID;';
        $result = mysqli_query($conn, $sql);
        $another = mysqli_fetch_all($result, MYSQLI_ASSOC);
        foreach ($another as $aanother) { ?>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h2><?php echo htmlspecialchars($aanother['Title']) ?></h2>
                            <img
                                src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($aanother['Photo']); ?>" />
                            <p class="card-text"><?php echo htmlspecialchars($aanother['Description']) ?></p>
                            <p class="card-text">Rs.<?php echo htmlspecialchars($aanother['StartBidAmount']) ?></p>
                            <a href="#" class="btn btn-primary">View</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </footer>

    </div>
</body>

</html>