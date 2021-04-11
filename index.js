
function register(){
    let username=document.getElementById("username").value;
    let password=document.getElementById("password").value;
    let confirmPassword=document.getElementById("confirmPassword").value;
    let error=document.getElementById("error");
     
           username=validate(username);
           password=validate(password);
           confirmPassword=validate(confirmPassword);
                
           if (username==="empty" || password==="empty" ||  confirmPassword==="empty" ){
               error.innerHTML="ALL FIELSDS ARE REQUIRED"
               error.style.color="red";
               error.style.display="block";             
           }else{
               if (password != confirmPassword ){
                     error.innerHTML="Password did not match"
                     error.style.color="red";
                     error.style.display="block";  
               }else{
                     ajax(username,password);
               }
           }
           
}

function ajax(username,password){
    let error=document.getElementById("error");
    let xhr=new XMLHttpRequest();
let fd=new FormData();
  fd.append("username", username);
  fd.append("password", password);
                 xhr.open("post", "http://localhost/SLACKTASK/signup.php", true);
                 xhr.onreadystatechange=function(){
                            if (xhr.readyState=="4" && xhr.status=="200"){
                               let response=this.responseText;
                               if (response==="exist"){
                                   error.innerHTML="User with this username exist";
                                   error.style.display="block"
                               }else if (response==="success"){
                                error.innerHTML="Your account has been successfully created";
                                error.style.backgroundColor ="green";
                                error.style.display="block";
                               }
                                
                            }
                 }
                 xhr.send(fd);
}


////function that validate user input
function validate(data){
    if (data==null || data==""){
        return "empty"; 
    }
    else {
        let data1=data;
            data1=data1.trim();
            return data1;
    }
 }

      //jquery that hide error message onclick of the textbox
                 $(document).ready(function(){
                     $(".txt").click(function(){
                         $("#error").hide();
                     })
                     $(".ltxt").click(function(){
                        $("#lerror").hide();
                    })
                 })
       ///it ends here

 //////function that allows login
       function login(){
        let username=document.getElementById("lUsername").value;
        let password=document.getElementById("lPassword").value;
       
        let error=document.getElementById("lerror");
         
               username=validate(username);
               password=validate(password);
                   
               if (username==="empty" || password==="empty"){
                   error.innerHTML="ALL FIELSDS ARE REQUIRED"
                   error.style.display="block";             
               }else{
                loginajax(username,password);
                   }
               
       }

 function loginajax(username,password){
        let error=document.getElementById("lerror");
        let xhr=new XMLHttpRequest();
        let fd=new FormData();
      fd.append("lusername", username);
      fd.append("lpassword", password);
     
                     xhr.open("post", "http://localhost/SLACKTASK/loginajax.php", true);
                     xhr.onreadystatechange=function(){
                                if (xhr.readyState=="4" && xhr.status=="200"){
                                   let response=this.responseText;
                                        if (response=="uservalid"){
                                            sessionStorage.setItem("username", username);
                                            location.href="profile.php";
                                        }else{
                                            error.innerHTML="Username/Password not correct"
                                            error.style.display="block";       
                                        }
                                   }
                                    
                                }
                                xhr.send(fd);
                     }
                    
    ///reset password
    function change(){
        let feedback=document.getElementById("caution");
        let rpassword=document.getElementById("newpassword").value;
        let rusername=sessionStorage.getItem("username");
                let xhr=new XMLHttpRequest();
        let fd=new FormData();
      fd.append("rusername", rusername);
      fd.append("rpassword", rpassword);
     
                     xhr.open("post", "http://localhost/SLACKTASK/resetpassword.php", true);
                     xhr.onreadystatechange=function(){
                                if (xhr.readyState=="4" && xhr.status=="200"){
                                   let response=this.responseText;
                                      
                                        alert(response);
                                        document.getElementById("newpassword").value="";
                                       
                                   }
                                    
                                }
                                xhr.send(fd);
                     }

    