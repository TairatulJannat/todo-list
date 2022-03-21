<?php
// Start the session
session_start();

	require_once('models\db_connect.php') ;
	$name="";
	$username="";
	$err_name="";
	$err_username="";
	$password="";
	$err_password="";
	$err_cpassword="";
	$hasError=false;

	
	if(isset($_POST["loginuser"])){
		// echo "123";
		if(empty($_POST["username"])){
			$err_username= "Username required";
			
			$hasError = true;
		}else{
			$username=$_POST["username"];
		}
		if(empty($_POST["password"])){
			$err_password="Password Required";
			$hasError=true;
		}else{
			$password=$_POST["password"];
		}
		if(!$hasError){
			//$password = md5($password);
			if($s=authenticate($username,$password)){
                if (!empty($s))
				{
					$_SESSION["username"] = $username;
					$_SESSION["unit"] = $s['unit'];
					if (empty($s['logintime'])){

						header("Location: Changepass.php");
					   	
					   	setcookie("unit",$s['unit'],time()+600);

					}
					else{
						header("Location: Dashboard.php");
						
						setcookie("unit",$s['unit'],time()+600);
					}
					
					
				}
				
				else {header("Location: login.php");}  
		}
    }
}
function authenticateunameuser($username)
{
	$query="SELECT `Username` from user where Username='$username'";
	$result = getAssocArray($query);
	
	if($result){
		$result = $result[0];   
	}
	return $result;
}
// function authenticateunamereq($username)
// {
// 	$query="SELECT `Username` from signup_req where Username='$username'";
// 	$result = getAssocArray($query);
// 	if($result){
// 		$result = $result[0];   
// 	}
// 	return $result;
// }
// 	function insertUser($username,$name,$address,$District,$phonenum,$email,$status,$shopname,$shopadd,$shopdis,$vhicle,$password){
// 		//$password = md5($password);
// 		$query = "INSERT INTO `signup_req` VALUES ('$username','$name','$address','$District','$phonenum','$email','$status','$shopname','$shopadd','$shopdis','$vhicle','$password')";

// 		execute($query);
// 	}
	function authenticate($username,$password){
        $query = "SELECT * from user where Username='$username' and `password`='$password'";
       
        $result = getAssocArray($query);
        
		if($result){
            $result = $result[0];   
		}
		return $result;
		
		
	}
	function getinfofromusertable($username)
	{
		$query=" SELECT * FROM `user` WHERE Username='$username'";
		$result = getAssocArray($query);
        
		if($result){
            $result = $result[0];   
		}
		return $result;

	}
	if (isset($_POST['cngpass']))
	{
		if(empty($_POST['newpass']))
		{
			
			$err_newpass="New pass Required";
			$hasError=true;
		}
		else 
		{
			$cap=false;
			$sml = false;
			$num = false;
			 //  window.alert(newpass);
			if($_POST['newpass'] == "") {  
				$hasError=true; 
			 
			 }
			 else{
				 if(strlen($_POST['newpass']) < 8) {  
					$hasError=true;
					 
				 }
				 else if(strlen($_POST['newpass'])> 15) {  
					$hasError=true; 
					  
				 }
				 else { 
					if(!preg_match('/[A-Z]/', $_POST['newpass'])){
						$hasError=true;
					}
					if(!preg_match('/[a-z]/', $_POST['newpass'])){
						$hasError=true;
					}
					if(!preg_match('/[0-9]/', $_POST['newpass'])){
						$hasError=true;
					}
					else{
						$newpass=$_POST['newpass'];
					}
				   // alert("Password is correct");  
				 }   
			   
			  } 
			
		}
		if (!$hasError)
		{
			if ($_POST["newpass"] === $_POST["confirmpass"]) {
				updateUserpass($newpass,$_POST['username']);
				header("Location: Dashboard.php");
			 }
			 else {
				header("Location: login.php");
			 }
			

		}
		
	}
	function updateUserpass($pass,$uname)
	{
		$date = date('Y-m-d H:i:s');
		$query="UPDATE `user` SET `password`='$pass' , `logintime`= '$date' WHERE Username='$uname'";
		// echo $query;
		execute($query);
		
	}
	function getall_area()
	{
		$query ="SELECT * FROM `citys` ";
		$result = getAssocArray($query);
		return $result;

	}
?>