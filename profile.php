<?php
require_once "include.php";
?> 
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>PROFILE</title>
     <script  type="text/javascript" src="index.js" > </script>
     <script>
         ////check if user has a session 
         let checkuser=sessionStorage.getItem("username");
         if (checkuser==null){
             location.href="index.php";
         }
         function logout(){
             sessionStorage.clear();
             location.href="index.php";
         }
         function reset(){
            let checkuser=sessionStorage.getItem("username");
            document.getElementById("caution").innerHTML="Caution: Your username is "+ checkuser + " and your password is about to be changed."
         }
     </script>
 </head>
 <body>
     
       <div class="container bg-light py-3 my-5">
           <h1 class="text-center">WELCOME TO TONBOT ASSIGNMENT PROFILE</h1>
           <h3 class="text-center">I love Zuri Trainning</h3>
           <p class="text-center"><button class="btn text-white btn-danger px-5 py-2 shadow-sm mt-5" type="button" onclick="logout()">Logout</button>
             <span><button class="btn text-white btn-primary px-5 py-2 shadow-sm mt-5" type="button" data-toggle="modal" data-target="#myModal" onclick="reset()">Reset Password</button>
            </span>
          </p>
           <h6 class="text-center" >caution: pressing the logout button will log you out immediately</h6>
       </div>





       <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">RESET PASSWORD</h4>
      </div>
      <div class="modal-body">
          <form method="POST" >
          <p class="text-center"><input class="form-control" type="text" id="newpassword" placeholder="Enter new password"></p>
          <p class="text-center px-5"><button class="btn btn-success px-5 shadow" onclick="change()" type="button" >RESET</button></p>
          <h6 class="text-center text-danger" id="caution" > </h6>
          </form>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


 </body>
 </html>