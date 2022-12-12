<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dash Board</title>
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

    function cc() {
      window,
      open('vehicle.php')
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

    .navbar-nav{
      float: right;
    }
    
  </style>
  

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

  <title>Seller Dashboard</title>



  <header class="p-3 text-bg-dark">
  <ul class="navbar-nav ml-auto d-flex flex-row">
      <!-- My account -->
      <li class="nav-item me-3 me-lg-0 d-none d-sm-inline-block dropdown">
          <a class="nav-link dropdown-toggle" id="new-mdb-technologies-dropdown"  >
          <?php
      
         echo "".$username.""

      ?>
          </a>
  </li>
            
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle ml-2" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          
            <img alt="user avatar" src="https://mdbootstrap.com/img/new/avatars/1.jpg" class="avatar avatar-24 photo rounded-circle z-depth-0" height="24" width="24">
           
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-info"  x-placement="null" style="">
          <a class="dropdown-item" href="/user-profile">My profile</a>
          <hr class="my-0">
          
        </div>
      </li>
    </ul>
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <div class="text-end">
          <a href="lgup.html">
            <button" class="btn btn-outline-light me-2">Log out</button>
          </a>
        </div>
      </div>
    </div>
  </header>



</head>

<body>
<hr class="my-4" />
<main role="main" class="container">
      <div class="card">
        <h1>Seller Dashboard</h1>
        <p class="lead">Add your items below.</p>
        <a class="btn btn-lg btn-primary"  role="button">Add Biding Item</a>
      </div>
    </main>
    


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
                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($aanother['Photo']); ?>" />
                <p class="card-text"><?php echo htmlspecialchars($aanother['Description']) ?></p>
                <a href="#" class="btn btn-primary">View</a>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </footer>

  </div>
</body>
          
</body>

</html>