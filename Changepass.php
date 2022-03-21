<?php
//session_start(); 
// include("include\heading_after_login.php");
require_once('controlar\logincontrolar.php');
$values =getinfofromusertable($_SESSION["username"])
?>
<!-- <body>
<div class ="container">
   <div class ="cngpass">
   <form class="form" action="" method="post">
   <table class="tab">
          <tr>
            <td>
              <div class="cmailt">
              UserID:
              </div>
            </td>
            <td>
              <input class="cmailb"type="text" placeholder=" Email" aria-label="cmail" name ='uname' value=""readonly>
            </td>
            
          </tr>
          <tr>
            <td>
                <div class="cpasst">
                Current Cassword:
              </div>
            </td>
            <td>
            <input class="cpassb"type="password" placeholder="Password" aria-label="pass"value=""readonly>
            </td>
          </tr>
          <tr>
            <td>
                <div class="newpasst">
                New Password:
              </div>
            </td>
            <td>
             <input class="newpassb"type="text" placeholder="New password" aria-label="newpass" name='newpass'>
            </td>
          </tr>
          <tr>
          <td colspan="2">
          <input style ="margin-top:40px;margin-left:35%;margin-bottom:40px;"type="submit" name ="cngpass" value="Change Password" class ="btn btn-danger center">
          </td>
          </tr>
          
  </table>
  
</form>

   </div>
   </div>
    <?php include("include\body.php")?>
</body> -->

<html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title>TO-DO List</title>
<link rel="stylesheet" type="text/css" href="css\list.css" />
	<style> 
			h2{
				color: #cccccc;
				text-align: center;
				font-size: 12px;	
				padding-top: 110px;
			 }
       body{
        background-repeat: no-repeat;
        background-attachment: fixed;
       }
	</style>
</head>
<body>

<img src="include\robi.png" alt="robi logo"  
		 style="object-fit:cover;
        width:180px;
        height:180px;
		    position: relative;
  		  left: 600px ;
			  margin-top: 1.5%;
			  margin-bottom: 1%; "/>

<div class="container">
  <section id="content">
    <form  id="myForm" action="" method="post">
      <h1>Change Password</h1>
      <div>
        <input type="text" placeholder="Username"  name = "username" value="<?php echo $values['Username']?>" id="username" readonly /><br><br> 
      </div>
      <div>
        <input type="password" placeholder="Password"  name = "password" value="<?php echo $values['password']?>" id="password" readonly  /><br><br> 
      </div>
      <div>
        <input type="password" placeholder="New password" onfocusout="passwordCheck()" name = "newpass" required="" id="newpassword" />
       <br><br> <span id = "message" style="color:red"> </span>
      </div>
      <div>
        <input type="password" placeholder="Confirm password" onfocusout="matchPassword()" name = "confirmpass" required="" id="confirmpassword" />
        <span id = "message" style="color:red"> </span>
      </div>
        <div>
          <p style="color:red"> <b>Notes:</b></p>
          <p style="color:red">1.Your password contain at least one character of a-z,A-Z and 0-9.</p>
          <p style="color:red">2.Password minimum of 8 and maximum of 12 character</p>
        </div>
      <div>
        <input type="submit" name ="cngpass"  value="Login"  style="margin-left: 33%;"  />
      </div>
      
    </form><!-- form -->
    
  </section><!-- content -->
  
  <h2 style="color:grey">© 2022 Treasury & Investor Relations</h2>
  
</div><!-- container -->
</body>
<script>
  function passwordCheck(){
   var newpass = document.getElementById('newpassword').value
   let cap=false;
   let sml = false;
   let num = false;
    //  window.alert(newpass);
   if(newpass == "") {  
     document.getElementById("message").innerHTML = "**Fill the password please!";  
     return false;  
    }
    else{
        if(newpass.length < 8) {  
            document.getElementById("message").innerHTML = "**Password length must be atleast 8 characters";  
            return false; 
        }
        else if(newpass.length > 15) {  
            document.getElementById("message").innerHTML = "**Password length must not exceed 15 characters";  
            return false;  
        }
        else { 
          var i=0;
          var character=''; 
            while (i <= newpass.length){
              character = newpass.charAt(i);
              if (!isNaN(character * 1)){
                num = true;
              }else{
              if (character == character.toUpperCase()) {
                cap = true;
              }
              if (character == character.toLowerCase()){
                sml = true;
              }
            }
            i++;
          }
              if(!num || !cap || !sml){
                document.getElementById("message").innerHTML = "**Your password contain at least one character of a-z,A-Z and 0-9."; 
              }
          // alert("Password is correct");  
        }   
      
     } 
  }

    function matchPassword() {  
      
      // window.alert(121);
      var pw1 = document.getElementById("newpassword").value;  
      var pw2 = document.getElementById("confirmpassword").value; 
      if(newpassword.length != 0) {

        if(pw1 == pw2)  
        {  

          // window.alert("Password created successfully");
          // document.getElementById("myForm").submit();
          return true;     
           
        } else {  
          window.alert("Passwords did not match");
          return false;    
        }  


      }
        
 

  }

</script>
</html>

