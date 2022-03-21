<?php
	session_start();
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="css\list.css" />
</head>
<style type="text/css">

		table,
		table{ margin-top: -2.5%;
		}
		table td {
			border: 1px solid  #cccccc ;
		}
			th {
			text-align: center;
			vertical-align: middle;
			font-size: 14px;
		}
		td {
			text-align: center;
			vertical-align: middle;
			font-size: 14px;
		} 
		
	.screen-darken{
		content: ''; 
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		background-color: rgba(0,0,0,.5);
		pointer-events: none;
		z-index:10; opacity:1; 
		visibility:visible;
		position: fixed;
	}

	.navbar{
		position: relative;
		z-index: 15;
	}

	.nav-item {
	transition: transform .2s; /* Animation */
	margin: 0 auto;
	}

	.nav-item:hover {
	-ms-transform: scale(1.2); 
	-webkit-transform: scale(1.2);
	transform: scale(1.2); 
	text-shadow: 2px 2px 4px #000000;
	}

	.container {

	padding-left: 0px;
	padding-right: 0px;
	box-shadow: 0px 0px 200px 0px #ff6666;
	
	}

	h2 {
		color: #a6a6a6;
		text-align: center;
		font-size: 12px;
		padding-top: 110px;
	}
	.bg-primary {
		background-color: #fd0d0d!important;
	}
	.py-5 {
	/* padding-top: 3rem!important; */
	padding-bottom: 0rem!important;
	}
	
	.dropdown-item{
		/* background-color: #ebd7d7!important; */
		text-shadow: none;
		
	}
	


			 
</style>
<body>
	
<nav class="navbar navbar-expand-lg navbar-dark bg-primary" >
					<div class="container-fluid" >
						<a class="navbar-brand" href="#"> <b>To-Do List</b></a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"  aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
						</button>
					
					<div class="collapse navbar-collapse" id="main_nav">
						<ul class="navbar-nav">
							<li class="nav-item dropdown">
								<a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> <i class="fa-solid fa-pen-to-square"></i> Input</a>
								<ul class="dropdown-menu">
								<!-- <?php echo $_SESSION['unit']?>  -->
									<li><a style="text-align: center;" class="dropdown-item"onclick ="getweeklyinput()" href="#">Weekly</a></li>
									<li><a style="text-align: center;" class="dropdown-item" onclick ="getmonthlyinput()" href="#">Monthly</a></li>
									<li><a style="text-align: center;" class="dropdown-item" onclick ="getquaterlyinput()" href="#">Quaterly</a></li>
									<li><a style="text-align: center;" class="dropdown-item" onclick ="getyearlyinput()" href="#">Yearly</a></li>
								</ul>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> <i class="fa-solid fa-table"></i> Report</a>
								<ul class="dropdown-menu" >
								<li><a style="text-align: center;" class="dropdown-item" href="#">Weekly</a></li>
								<li><a style="text-align: center;" class="dropdown-item" href="#">Monthly</a></li>
								<li><a style="text-align: center;" class="dropdown-item" href="#">Quaterly</a></li>
								<li><a style="text-align: center;" class="dropdown-item" href="#">Yearly</a></li>
								</ul>
							</li>
						</ul>
						<ul class="navbar-nav ms-auto">
							<li class="nav-item"><a class="nav-link" href="#"> <i class="fa-solid fa-circle-user"></i> <span><?php echo $_SESSION['username']?></span> </a></li>
							<li class="nav-item"><a class="nav-link" href="about.php"> <i class="fa-solid fa-circle-exclamation"></i> About</a></li>
							<li class="nav-item" id="response" ><a class="nav-link" href="logout.php"> <i class="fa-solid fa-right-from-bracket"></i> Logout </a></li>
						</ul>
					</div> <!-- navbar-collapse.// -->
					</div> <!-- container-fluid.// -->
</nav>
	
</body>
</html>

