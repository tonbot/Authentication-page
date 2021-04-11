<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
  
    ///login variable
   $lusername=$_POST["lusername"] ;
   $lpassword=$_POST["lpassword"] ;
       if (isset($lusername) && isset( $lpassword) ){  
 ///login code
        if( ($lusername!=null || $lusername!="") || ($lpassword!=null || $lpassword!="") ){
           if (file_exists("C:\\slackTaskUser\\".$lusername.".txt")=="TRUE"){
               $file=fopen("C:\\slackTaskUser\\".$lusername.".txt", "r");
               if($file){
                   $passwordcheck=fgets($file);
                   $lpassword=intval($lpassword);

                  
                   if ($passwordcheck == $lpassword){
                       echo ("uservalid");
                   } else {
                       echo ("usernotvalid");
                   }
               }
                  }
        }
    } 


}
    
?>