<?php 
 if ($_SERVER["REQUEST_METHOD"]=="POST"){
      $username=$_POST["username"];
      $password=$_POST["password"];
     
        
           if( ($username==null || $username=="") || ($password==null || $password=="") ){
              echo ("ERROR");
           }else {
                   //check if username exists;
                   if (file_exists("C:\\slackTaskUser\\".$username.".txt")=="TRUE"){
                       echo ("exist");
                   } else{
                       $filename=fopen("C:\\slackTaskUser\\".$username.".txt", "w");
                       $write=fwrite($filename, $password."\n"); //write password to user file
                       $write=fwrite($filename, $username);       //write username to user file
                       fclose($filename);
                       echo ("success");
                   }
           }

           

 }
?>