<?php include 'con_db.php'; ?>
<!DOCTYPE html>
<html lang="zxx">

  <head>
      <title>Electronica</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta charset="utf-8">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link href="carousel.css" rel="stylesheet">

    <link href="../carousel/carousel.rtl.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="cs/sty.css">
    <!--Bootsrap 4 CDN-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    </head>
  <body>
    
   <header class="p-3 bg-dark text-white">
          <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
              <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
              </a>

              <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="index.php" class="nav-link px-2 text-secondary">Home</a></li>
                <li><a href="product.php" class="nav-link px-2 text-white">Products</a></li>
                <li><a href="about.php" class="nav-link px-2 text-white">About</a></li>
                <li><a href="blog.php" class="nav-link px-2 text-white">Blog</a></li>
                <li><a href="contact.php" class="nav-link px-2 text-white">Contact Us</a></li>
              </ul>

              <form class="col-12 col-lg-5 mb-3 mb-lg-0 me-lg-3">
              </form>

            </div>
          </div>
      </header>

      <main>

        <div class="container">
          <br>
          <div></div>
          <form action="#" method="post">
  <div class="d-flex justify-content-center h-100">
    <div class="card">
      <div class="card-header">
        <h3>Sign In</h3>
      </div>
      <div class="card-body">
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="username" name="name">
            
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" class="form-control" placeholder="password" name="pwd">
          </div>          <div class="form-group">
            <input type="submit" name="login" value="Login" class="btn float-right login_btn">
          </div>
      </div>
      <div class="card-footer">
        <div class="d-flex justify-content-center links">
          Don't have an account?<a href="signup.php">Sign Up</a>
        </div>
      </div>
    </div>
  </div>
</form>
</div>
<br>

      <!--  footer --> 


<footer class="page-footer font-small p-3 bg-dark text-white">

     <!-- Footer Links -->
            <div class="container">
            <div class="row">
               <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                  <div class="contact">
                     <h3>conatct us</h3>
                     <span>123 Second Street Fifth Avenue,<br>
                       xyz, 
                        +91 9865321470</span>
                  </div>
               </div>
                 <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                  <div class="contact">
                     <h3>ADDITIONAL LINKS</h3>
                     <ul class="lik">
                         <li> <a href="#">About us</a></li>
                         <li> <a href="#">Terms and conditions</a></li>
                         <li> <a href="#">Privacy policy</a></li>
                         <li> <a href="#">News</a></li>
                          <li> <a href="#">Contact us</a></li>
                     </ul>
                  </div>
               </div>
                 <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                  <div class="contact">
                     <h3>service</h3>
                      <ul class="lik">
                    <li> <a href="#"> Data recovery</a></li>
                         <li> <a href="#">Computer repair</a></li>
                         <li> <a href="#">Mobile service</a></li>
                         <li> <a href="#">Network solutions</a></li>
                          <li> <a href="#">Technical support</a></li>
                  </div>
               </div>
            </div>
         </div>
         
    <!-- Footer Links -->

  </footer>
      <!-- end footer -->
      <!-- Javascript files--> 
      <script src="js/jquery.min.js"></script> 
      <script src="js/popper.min.js"></script> 
      <script src="js/bootstrap.bundle.min.js"></script> 
      <script src="js/jquery-3.0.0.min.js"></script> 
      <script src="js/plugin.js"></script> 
      <!-- sidebar --> 
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script> 
      <script src="js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         $(".zoom").hover(function(){
         
         $(this).addClass('transition');
         }, function(){
         
         $(this).removeClass('transition');
         });
         });
         
      </script> 


   </body>
</html>

<?php
  if(isset($_POST['login']))
  {

    $u_name=mysqli_real_escape_string($con,$_POST['name']);
    $pwd=mysqli_real_escape_string($con,$_POST['pwd']);

          $sql=mysqli_query($con,"SELECT * FROM register where Uname='$u_name' and Password='$pwd'") or die(mysqli_error($con));
          $rows=mysqli_num_rows($sql);
          $fetch=mysqli_fetch_array($sql);
          if($rows==1)
          {
              session_start();
        $_SESSION['Uid']=$fetch['Uid'];
        $_SESSION['Uname']=$fetch['Uname'];
        echo '<script>alert("Welcome '.$fetch['Uname'].' "); window.location="logout.php"; </script>';
          }
          else
          {
              echo '<script>alert("Username and password doesnot Match"); </script>';
          }
  }

 ?>