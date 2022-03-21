<?php
require_once ('head.php')
?>
<body>


	<header class="section-header py-4">
	</header> <!-- section-header.// -->

	<div class="container">
				<img  class="watermark" src="include\robi_logo_raw.png" alt="robi logo"  
						style="width:500px;
									height:500px;
									position: absolute;
									left: 350px;
									top: 90px;
									z-index: -1;
									opacity: 0.3;" />
				<!-- ============= COMPONENT ============== -->
				<?php
				require_once ('navbar.php')
				?>
				<!-- ============= COMPONENT END// ============== -->



				<div id="table"></div>


   <!-- <button>submit</button> -->
	</div><!-- container //  -->
  
  <h2 style="color:gray;text-align: center;">© 2022 Treasury & Investor Relations</h2>
  

	

</body>
<script>
	 
function getweeklyinput(){
	//  var searchkey= input.value ;
	var unit= "<?php echo $_SESSION["unit"]; ?>"
//  window.alert(unit);
  var xhttp=new XMLHttpRequest();
  xhttp.onreadystatechange=function(){
    if(this.readyState == 4 && this.status == 200){
 
      document.getElementById("table").innerHTML =this.responseText;
      // document.alert(this.responseText);
	//   console.log(123);
    }
  };
  xhttp.open("GET","filtertable.php?key="+unit+"&type="+'weekly'+"&id=<?php echo $_SESSION["username"]; ?>",true);
  xhttp.send();

}

function getmonthlyinput(){
	//  var searchkey= input.value ;
	var unit= "<?php echo $_SESSION["unit"]; ?>"
//  window.alert(unit);
  var xhttp=new XMLHttpRequest();
  xhttp.onreadystatechange=function(){
    if(this.readyState == 4 && this.status == 200){
 
      document.getElementById("table").innerHTML =this.responseText;
    //   document.alert(this.responseText);
	//   console.log(123);
    }
  };
  xhttp.open("GET","filtertable.php?key="+unit+"&type="+'monthly'+"&id=<?php echo $_SESSION["username"]; ?>",true);
  xhttp.send();

}
function getyearlyinput(){
	//  var searchkey= input.value ;
	var unit= "<?php echo $_SESSION["unit"]; ?>"
//  window.alert(unit);
  var xhttp=new XMLHttpRequest();
  xhttp.onreadystatechange=function(){
    if(this.readyState == 4 && this.status == 200){
 
      document.getElementById("table").innerHTML =this.responseText;
    //   document.alert(this.responseText);
	//   console.log(123);
    }
  };
  xhttp.open("GET","filtertable.php?key="+unit+"&type="+'yearly'+"&id=<?php echo $_SESSION["username"]; ?>",true);
  xhttp.send();

}
function getquaterlyinput(){
	//  var searchkey= input.value ;
	var unit= "<?php echo $_SESSION["unit"]; ?>"
//  window.alert(unit);
  var xhttp=new XMLHttpRequest();
  xhttp.onreadystatechange=function(){
    if(this.readyState == 4 && this.status == 200){
 
      document.getElementById("table").innerHTML =this.responseText;
    //  
    }
  };
  xhttp.open("GET","filtertable.php?key="+unit+"&type="+'quaterly'+"&id=<?php echo $_SESSION["username"]; ?>",true);
  xhttp.send();

}

function updateWeek(id,weekno){
  var unit= "<?php echo $_SESSION["unit"]; ?>"
//  window.alert(unit);
  var xhttp=new XMLHttpRequest();
  xhttp.onreadystatechange=function(){
    if(this.readyState == 4 && this.status == 200){
 
      document.getElementById("table").innerHTML =this.responseText;
      // document.alert(this.responseText);
	//   console.log(123);
    }
  };
  xhttp.open("GET","weekTableUpdate.php?key="+unit+"&type="+'weekly'+"&id="+id+"&weekno="+weekno,true);
  xhttp.send();
  // getmonthlyinput();
}
function updatemonth(id,monthno){
  var unit= "<?php echo $_SESSION["unit"]; ?>"
//  window.alert(unit);
  var xhttp=new XMLHttpRequest();
  xhttp.onreadystatechange=function(){
    if(this.readyState == 4 && this.status == 200){
 
      document.getElementById("table").innerHTML =this.responseText;
      // document.alert(this.responseText);
	//   console.log(123);
    }
  };
  xhttp.open("GET","monthTableUpdate.php?key="+unit+"&type="+'monthly'+"&id="+id+"&monthno="+monthno,true);
  xhttp.send();
  // getmonthlyinput();
}

function updatequater(id,quaterno){
  var unit= "<?php echo $_SESSION["unit"]; ?>"
//  window.alert(unit);
  var xhttp=new XMLHttpRequest();
  xhttp.onreadystatechange=function(){
    if(this.readyState == 4 && this.status == 200){
 
      document.getElementById("table").innerHTML =this.responseText;
      // document.alert(this.responseText);
	//   console.log(123);
    }
  };
  xhttp.open("GET","quaterTableUpdate.php?key="+unit+"&type="+'quaterly'+"&id="+id+"&quaterno="+quaterno,true);
  xhttp.send();
  // getmonthlyinput();
}
function updateyear(id,yearno){
  var unit= "<?php echo $_SESSION["unit"]; ?>"
//  window.alert(unit);
  var xhttp=new XMLHttpRequest();
  xhttp.onreadystatechange=function(){
    if(this.readyState == 4 && this.status == 200){
 
      document.getElementById("table").innerHTML =this.responseText;
      // document.alert(this.responseText);
	//   console.log(123);
    }
  };
  xhttp.open("GET","yearTableUpdate.php?key="+unit+"&type="+'yearly'+"&id="+id+"&yearno="+yearno,true);
  xhttp.send();
  // getmonthlyinput();
}
// function logout()
// {
// //    alert("hello");

//      session_destroy();
// }
</script>
</html>