<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pornhub.com</title>
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
      </script>
     
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
     <title>Fuck you too !</title>
     
 

      <header class="p-3 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 text-secondary" onclick="dash()">Home</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
          <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
          <li><a href="#" class="nav-link px-2 text-white">About</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
          <button type="button" class="btn btn-outline-light me-2" onclick="login()">Login</button>
          <button type="button" class="btn btn-warning" onclick="signup()">Sign-up</button>
        </div>
      </div>
    </div>
  </header>
      
    <main>
      <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-secondary">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
          <h1 class="display-4 fw-normal">Fuck You !</h1>
          <p class="lead fw-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple’s marketing pages.</p>
          <a class="btn btn-outline-light" href="#">Coming soon</a>
        </div>
      </div>
    
      
    </main>
    
    <div class="container">
     <h1> This is container class </h1>
     <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
     Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
     Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
     Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. </p>
    </div>
     
      
    </head>
    <body >
        <h1 align='center'>Ohh YEAH !!!</h1>
        <footer class="container py-5">
            <div class="row">
             <?php $sql    = 'SELECT * FROM actor';
              $result = mysqli_query($con, $sql);
              $another = mysqli_fetch_all($result,MYSQLI_ASSOC); foreach($another as $aanother){?> 
              <div class="col-sm-6">
               <div class="card">
                  <div class="card-body">
                  <h5 class="card-title"><?php echo htmlspecialchars($aanother['name'])?></h5>
                  <p class="card-text"><?php echo htmlspecialchars($aanother['country'])?></p>  
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
               </div>
              </div>
             <?php }?> 
            </div> 
            </footer>
    </body>  
</html>