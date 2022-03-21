<?php
  // include('include\header.php');
  require_once('controlar\logincontrolar.php');
  // if(isset($_COOKIE['status']))
  // {
  //   if($_COOKIE['status']=='Admin')
  //   {
  //     header("Location: admin.php");
  //   }
  //   elseif($_COOKIE['status']=='Shop Owner')
  //   {
  //     header("Location: seller.php");
  //   }
  //   elseif($_COOKIE['status']=='Delivery Man')
  //   {
  //     header("Location: Deliveryman.php");
  //   }
  // }
?>

<!-- <body>

   <section>
   <div class ="container">
   <div class ="login">
   <form class="form" action="" method="post">
  <div class="form-group">
    <label for="Username">User Name</label>
    <input type="text" class="form-control mail" id="Username" placeholder="User Name"name="Username">
  </div>
  <div class="form-group">
    <label for="Password">Password</label>
    <input type="password" class="form-control password" id="Password" placeholder="Password"name="password">
  </div>

  <button type="submit" class="btn btn-primary " name ="loginuser" value="Register">Sign in</button>
  <div class="dropdown-divider"></div>
  <a class="signup1" href="signup.php">New around here? Sign up</a>
  
</form>
   </div>
   </div>
   </section>

   
    <?php
  // include('include\body.php');
  
?>


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
    <form action="" method="post">
      <h1>To-Do List</h1>
      <div>
        <input type="text" placeholder="Username"  name = "username" required="" id="username" />
      </div>
      <div>
        <input type="password" placeholder="Password" name = "password" required="" id="password" />
      </div>
      <div>
        <input type="submit" name ="loginuser" value="Log in"  style="margin-left: 33%;" />
      </div>
    </form><!-- form -->
    
  </section><!-- content -->
  
  <!-- <h2>© 2022 Treasury & Investor Relations</h2> -->
  
</div><!-- container -->

<h2 style="color:grey">© 2022 Treasury & Investor Relations</h2>
</body>
</html>


<?php
  // include('include\footer.php');
?>


