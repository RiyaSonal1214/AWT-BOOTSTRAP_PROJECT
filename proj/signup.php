<?php include 'con_db.php'; ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Electronica</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
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
      #map {
        height: 50%;
        /* The height is 400 pixels */
        width: 100%;
        /* The width is the width of the web page */
      }
    </style>
   </head>
   <!-- body -->
   <body class="main-layout" onload="getLocation();">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="img/loading.gif" alt="#" /></div>
      </div>
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

              <div class="text-end">
               <a href="form.php" class="btn btn-outline-light me-2">Login</a>
            <a href="" class="btn btn-warning" data-toggle="modal" data-target="#modalRegisterForm">Sign Up</a>
              </div>
            </div>
          </div>
      </header>

      <main>
      <!-- end header -->
      <!-- map -->
     
      <!-- end map -->
      <!-- contact -->
      <div class="container">
          <br>
          <div class="row">
            <div class="col-md-3"></div>
          <div class="col-md-6">
          <form action="" method="post">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Sign up</h4>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form ">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="name" name="name" placeholder="Enter Username" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-name">Your name</label>
        </div>
        <div class="md-form ">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="email" id="email" name="email" placeholder="Enter Email" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-email">Your email</label>
        </div>

        <div class="md-form ">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="password" id="pass" name="pass" placeholder="Enter password" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-pass">Your password</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button id="insert" type="Sign Up" name="insert" class="btn btn-warning">Sign Up</button>
      </div>
    </div>
</form>
</div>
</div>
</div>
                            <br>
</main>
    <!-- end contact -->

      <!--  footer --> 




     <footr>
         <div class="footer">
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
         
      </div>
      </footr>
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
    if(isset($_POST['insert']))
    {
        $uname=mysqli_real_escape_string($con,$_POST['name']);
        $pass=mysqli_real_escape_string($con,$_POST['pass']);
        $email=mysqli_real_escape_string($con,$_POST['email']);

        $qry=mysqli_query($con,"SELECT * FROM register WHERE Uname='$uname'");
        $rows=mysqli_num_rows($qry);
            if($rows<=0)
            {
                    $sql=mysqli_query($con,"INSERT INTO `register`(`Name`, `Uname`, `Email`, `Password`) VALUES ('$uname','$uname','$email','$pass')");
                    if($sql)
                    {
                        echo '<script>alert("User Added Successfully. Please Login to continue"); window.location="form.php"; </script>';
                    }
                    else
                    {
                       echo '<script>alert("Failed"); window.location="index.php"; </script>'; 
                    }
            }
            else
            {
                    echo '<script>alert("User Already Exists"); window.location="index.php"; </script>';
            }

        }



?>