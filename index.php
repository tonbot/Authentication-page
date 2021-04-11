<?php
require_once "include.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>HOME</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
     <link rel="stylesheet" href="index.css">
     <script  type="text/javascript" src="index.js" > </script>
     <script  type="text/javascript" src="jquery.js" > </script>
     
     
</head>
<body>
     
    <div class="container mt-5 shadow-lg">
         <div class="row ">
          <div class="col-sm-6 register  py-3 px-5"> <!-- Register column -->
               <h1 class="title text-center text-danger mt-3">Create Account</h1>
               <h6 class="text-center mb-3 ">Pls all fields are required</h6>
               <div class="text-dark text-center bg-warning py-2 border-circle" id="error"></div>
               <form method="post" class="mt-3">
                       <label for="username" class="text-left"><i class="fas fa-user mr-1"></i>Username <span class="text-danger">*</span></label>
                       <p><input class="form-control txt" type="text" id="username"></p>
                       <label for="Password" class="text-left"><i class="fas fa-lock mr-1"></i>Password <span class="text-danger">*</span></label>
                       <p><input class="form-control txt" type="password" id="password"></p>
                       <label for="Confirm Password" class="text-left"><i class="fas fa-lock mr-1"></i>Confirm Password <span class="text-danger">*</span></label>
                       <p><input class="form-control txt" type="password" id="confirmPassword"></p>
                       <p class="text-center" ><button class="btn text-white sign-up" type="button" onclick="register()"> Sign Up </button></p>
               </form>
          </div>  <!-- register column  ends here-->

          <div class="col-sm-6 login  px-1"> <!-- Login column -->
             <div class="bg-dark"><img src="slack-bot.jpg" width="100%" height="20%"></img></div>
             <p class="welcome text-center">Welcome Back</p>
             <h1 class="titleLogin mt-4 ">Login</h1>

             <form class="px-5 " method="post">
                       <div class=" text-white text-center bg-danger py-1 border-circle" id="lerror"></div>
                       <label for="username" class="text-left mt-3"><i class="fas fa-user fa-1x mr-1"></i>Username <span class="text-danger">*</span></label>
                       <p><input class="form-control ltxt" type="text" id="lUsername"></p>
                       <label for="Password" class="text-left"><i class="fas fa-lock fa-sm mr-1"></i>Password <span class="text-danger">*</span></label>
                       <p><input class="form-control ltxt" type="Password" id="lPassword"></p>
                       <a  href=""><h6 class="forgot">Forgot Password?</h6></a>
                       <p class="text-center" ><button class="btn mt-4 text-white sign-in" type="button" onclick="login()"> Sign In </button></p>
                      
                    </form>

          </div> <!-- Login column ends here-->

         </div>
    </div>


</body>
</html>