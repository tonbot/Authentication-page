# Authentication-page
#author: AJIBOYE TOYIN THEOPHILUS


  PLS READ THIS TO UNDERSTAND FULLY HOW THIS PROJECT WORK.
  
  Here i will highlight some the questions you might want to ask about this project and provid the answer for each question.
  
1.  WHAT IS THE TITLE OF THIS PROJECT?
     Answer: AUTHENTICATION PAGE.
  
2.  WHAT PROGRAMMING LANGUAGE AND RESOURCES USED FOR THIS PROJECT?
     Answer: The programming language and resources used for this project is listed below:
        1. PHP ( FOR SERVER SCRIPTING )
        2. JAVASCRIPT ( FOR FRONT END )
        3. AJAX (FOR PASSING DATA FROM FRONT END TO BACKEND FOR PROCESSING)
        4. BOOTSTRAP (FOR STYLING )
        5. CSS (FOR STYLING)
        6. FONTAWESOME (FOR ADDING SOME ICONS)
        7. JQUERY ( FOR FRONT END)
       
   Note: No database engine is used for this project. The scope of storing user profile in this project is that user profile is stored in a folder in C:/ directory with 
    username.txt 
         e.g( C:\slackTaskUser\tonbot.txt) 
                  tonbot.txt file has content of the user which is (user supply password and user supply name)
                  
          THIS IS THE SAMPLE CODE THAT STORE USER PROFILE
                        
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
    THE EXACT CODE CAN BE LOCATED IN signup.php
       
3.   HOW MANY PAGES DOES THE PROJECT CONTAIN?
    Answer: TWO PAGES 
            1.INDEX.PHP
            2.PROFILE.PHP
            
4.  CAN YOU BRIEFLY EXPLAIN THE FUNCTIONALITY OF THE PROJECT?
    Answer: yes.
       The index.php of this project comprises of two sections 
         1.Sign up section
         2.Login section
         
           ->  Sign up: The Sign up section allows user with no account to register. It is so user friendly and its a very easy form to fill because it only ask for three information 
             from the user which are: username,password, and confirm password.
              This section has only one SUBMIT BUTTON which call a function to validate user input. if user input validation returns success user can then be properly registered and 
             then alert message of succesfull registration is returned back to the user. But, if validation returns false, error alert message is given to the user telling the user why
             is registration is not successful and allow user to correct his/her error.
             
           -> Login : The login section allow user with account to login to their profile. if user doesnt have an account and try to login and error message will be alerted that no user account 
              can be found for this user. 
           
          Profile.php 
       After user is successfully login the project creates a section for the user and log user in to their profile.
        in user profile, user has the ability to reset their password and log out at anytime.
       
