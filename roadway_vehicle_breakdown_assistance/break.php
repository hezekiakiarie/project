
 


<?php

?>
<!Doctype HTML>
	<html>
	

	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
* 
.menu {
  float: left;
  width: 20%;
}
.menuitem {
  padding: 8px;
  margin-top: 7px;
  border-bottom: 1px solid #f1f1f1;
}
.main {
  float: left;
  width: 60%;
  padding: 0 20px;
  overflow: hidden;
}


@media only screen and (max-width:800px) {
  
  .main {
    width: 80%;
    padding: 0;
  }
  .right {
    width: 100%;
  }
}
@media only screen and (max-width:500px) {

  .menu, .main, .right {
    width: 100%;
  }
}
</style>
	

		<title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="stylee.css" type="text/css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
	</head>

	
	
	<body>
	<div id="main">
		<div id="mySidenav" class="sidenav">
		<p class="logo"><span>Road</span> Assistance</p>
	  <a href="#" class="icon-a"><i class="fa fa-dashboard icons"></i>   Home</a>
	   <a href="registeradmin.php"class="icon-a"> <i class="fa fa-user icons"></i> Admin</a>
	  <a href="registration.php"class="icon-a"> <i class="fa fa-users icons"></i>   Mechanics</a>
	  <a href="register.php"class="icon-a"><i class="fa fa-users icons"></i>   Customers</a>
	  <a href="requestcustomer.php"class="icon-a"><i class="fa fa-shopping-bag icons"></i>   Request</a>
	  <a href="helpline/index.php"class="icon-a"><i class="fa fa-tasks icons"></i>   Help</a>
	  <a href="https://www.google.com/maps/@0.2528174,35.0938551,15z"class="icon-a"><i class="fa fa-map-marker" aria-hidden="true"></i> Location Map</a>
	   
	  <a href="comment.php" class="icon-a"><i class="fa fa-comment" aria-hidden="true"></i>   Feedback </a>
</div>
</div>

	
<div class="right">

		<div class="head">
			<div class="col-div-6">
	<span style="font-size:30px;cursor:pointer; color: white;" class="nav"  >☰ Home</span>
	<span style="font-size:30px;cursor:pointer; color: white;" class="nav2"  >☰ Home</span>
	</div>
		
		<div class="col-div-6">
		<div class="profile">
			<img src="garage2.jpg" class="pro-img" />
			<p>Mwangi kiarie <span> MWANGI PROJECT</span></p>
		</div>
	</div>
		<div class="clearfix"></div>
	</div>

		<div class="clearfix"></div>
		<br/>
	
		<div  class="col-div-3">
			<div class="box">
				<p>
					<?php
$mysqli =  mysqli_connect("localhost","root","","demo"); // for databse connection
$qry = mysqli_query($mysqli,"select * from users");
echo mysqli_num_rows($qry);
?>

					<br/><span><a href="#">Customers</a></span></p>
				<i class="fa fa-users box-icon"></i>
			</div>
		</div>
	
		<div class="col-div-3">
			<div class="box">
				<p>
					<?php
$mysqli =  mysqli_connect("localhost","root","","demo"); // for databse connection
$qry = mysqli_query($mysqli,"select * from mechanic");
echo mysqli_num_rows($qry);
?>


					<br/><span><a href="fetch.php">Approved Mechanics</a></span></p>
				
			</div>
		</div>
		<div class="col-div-3">
			<div class="box">
				<p>
					<?php
$mysqli =  mysqli_connect("localhost","root","","demo"); // for databse connection
$qry = mysqli_query($mysqli,"select * from request_customer");
echo mysqli_num_rows($qry);
?>

					<br/><span><a href="fetchorder.php">Requests</a></span></p>
				<i class="fa fa-shopping-bag box-icon"></i>
			</div>
		</div>
		<div class="col-div-3">
			<div class="box">
				<p>
					<?php
$mysqli =  mysqli_connect("localhost","root","","demo"); // for databse connection
$qry = mysqli_query($mysqli,"select * from request_mechanic");
echo mysqli_num_rows($qry);
?>
					<br/><span><a href="#" class="icon-a">mechanics request</a></span></p>
				<i class="fa fa-users box-icon"></i>
			</div>
		</div>
		
		</div>
		<div class="clearfix"></div>
		<br/><br/>
		<div class="col-div-8">
			<div class="box-8">
			<div class="content-box">
			
				<p>service areas <span>service areas</span></p>
				<br/>
				<table>
	  <tr>
	    <th>Company</th>
	    <th>County</th>
	    <th>Towns</th>
	  </tr>
	  <tr>
	    <td>Nairobi</td>
	    <td>Nakuru</td>
	    <td>Nakuru</td>
	  </tr>
	  <tr>
	    <td>Momambasa</td>
	    <td>Kisumu</td>
	    <td>Kisumu</td>
	  </tr>
	  <tr>
	    <td>Ernst Handel</td>
	    <td>Nairobi</td>
	    <td>Nairobi, Embakasi</td>
	  </tr>
	  <tr>
	    <td>Kakamega</td>
	    <td>Muranga</td>
	    <td>Muranga, Maragua</td>
	  </tr>
	  
	  
	</table>
			</div>
		</div>
		</div>

		<div class="col-div-4">
			<div class="box-4">
			<div class="content-box">
				<p>Service Delivery Efficiency<span>Service</span></p>

				<div class="circle-wrap">
	    <div class="circle">
	      <div class="mask full">
	        <div class="fill"></div>
	      </div>
	      <div class="mask half">
	        <div class="fill"></div>
	      </div>
	      <div class="inside-circle"> 90% </div>
	    </div>
	  </div>
			</div>
		</div>
		</div>
			
		<div class="clearfix"></div>
	</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>

	  $(".nav").click(function(){
	    $("#mySidenav").css('width','80px');
	    $("#main").css('margin-left','80px');
	    $(".logo").css('visibility', 'hidden');
	    $(".logo span").css('visibility', 'visible');
	     $(".logo span").css('margin-left', '-10px');
	     $(".icon-a").css('visibility', 'hidden');
	     $(".icons").css('visibility', 'visible');
	     $(".icons").css('margin-left', '-8px');
	      $(".nav").css('display','none');
	      $(".nav2").css('display','block');
	  });

	$(".nav2").click(function(){
	    $("#mySidenav").css('width','300px');
	    $("#main").css('margin-left','300px');
	    $(".logo").css('visibility', 'visible');
	     $(".icon-a").css('visibility', 'visible');
	     $(".icons").css('visibility', 'visible');
	     $(".nav").css('display','block');
	      $(".nav2").css('display','none');
	 });

	</script>
</div>
	</div>
    
	</body>
	
	



	</html>
