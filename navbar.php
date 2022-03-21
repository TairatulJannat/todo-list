
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