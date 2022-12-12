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
        function login(){
         window.open('lgup.html');
       }
        function signup(){
          window.open('sgup.html');
        }  
        function dash(){
          window.open('dash.html');
        }
        function dd(){
          window.open('test.php')
        }
        function cc(){
          window,open('vehicle.php')
        }
      </script>
     
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
 
     <title>Fuck you too !</title>
     
 

      <header class="p-3 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 text-secondary" onclick="dash()">Home</a></li>
          <li><a href="#" class="nav-link px-2 text-white" onclick="dd()">Features</a></li>
          <li><a href="#" class="nav-link px-2 text-white" >Pricing</a></li>
          <li><a href="#" class="nav-link px-2 text-white" onclick="cc()">FAQs</a></li>
          <li><a href="#" class="nav-link px-2 text-white">About</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
          <a href="lgup.html" ><button" class="btn btn-outline-light me-2">Login</button></a>
          <button type="button" class="btn btn-warning" onclick="signup()">Sign-up</button>
        </div>
      </div>
    </div>
  </header>
      
    <main>
      
       
        
  <h1 class="visually-hidden">Features examples</h1>

          <p class="pb-5 border-bottom" ></p>
          <a class="btn btn-outline-light" href="#">Coming soon</a>
      
    
      
    </main>
     
    </head>
    <body >
    
        <h1 align='center'>last call Items</h1>
        <footer class="container py-5  ">
            <div class="row ">
             <?php $sql    = 'SELECT * FROM Item, Photo WHERE Item.ItemID=Photo.ItemID;';
              $result = mysqli_query($conn, $sql); 
              $another = mysqli_fetch_all($result,MYSQLI_ASSOC); foreach($another as $aanother){?> 
              <div class="col-sm-6">
               <div class="card" >
                  <div class="card-body">
                  <h2><?php echo htmlspecialchars($aanother['Title']) ?></h2>
                  <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($aanother['Photo']); ?>" />
                  <p class="card-text"><?php echo htmlspecialchars($aanother['Description'])?></p>  
                  <a href="#" class="btn btn-primary">View</a>
                  </div>
               </div>
              </div>
             <?php }?> 
            </div> 
            </footer>
    </body>  
</html>