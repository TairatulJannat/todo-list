
<?php
	session_start();
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="htmlcss bootstrap menu, darken, on click dropdown, nav menu CSS examples" />
<meta name="description" content="Bootstrap 5 navbar submenu active rest screen overlay darken to get user's attention" />  

<title>To-Do List | Main Page </title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" type="text/css" href="css\list.css" />

<style type="text/css">

		table,
		table{ 
			margin-top: -2.5%;
			box-shadow: 5px 3px 3px grey;
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
	box-shadow: 0px 0px 200px 7px #ff6666;
	
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
	
	
	.dropdown-item{
		/* background-color: #ebd7d7!important; */
		text-shadow: none;
		
	}
	.dropdown-item:focus{
		background-color: red !important;
	}
	/* .logo{
		text-align: bottom;
	} */


			 
</style>

<script type="text/javascript">
	document.addEventListener("DOMContentLoaded", function(){

		document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown){
			
			everydropdown.addEventListener('shown.bs.dropdown', function () {
				el_overlay = document.createElement('span');
	        	el_overlay.className = 'screen-darken';
	        	document.body.appendChild(el_overlay)
			});

			everydropdown.addEventListener('hide.bs.dropdown', function () {
				document.body.removeChild(document.querySelector('.screen-darken'));
			});

		});

	}); 
	// DOMContentLoaded  end
</script>
</head>
