
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
///reset variables
    $rusername=$_POST["rusername"] ;
    $rpassword=$_POST["rpassword"] ;
    if (isset($rusername) && isset( $rpassword) ){  
        if (file_exists("C:\\slackTaskUser\\".$rusername.".txt")=="TRUE"){
        
           if( file_put_contents("C:\\slackTaskUser\\".$rusername.".txt" , $rpassword."\n".$rusername)){
              echo ("PASSWORD CHANGED SUCCESSFULLY");
           }
           
              
           
        }
    }
}
    ?>