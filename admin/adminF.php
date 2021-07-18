
<?php
session_start();
if (!isset($_SESSION['id'])) {
  header('location:admin_login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin's Feature</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- Link is using for google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
	<style type="text/css">
		.admin{
			background: url('../homepage/assets/img/bgs.jpg')no-repeat center center fixed ;
			-moz-background-size: cover;
			-webkik-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}

		.a{
      margin-left: 200px;
      margin-top: 200px;
      font-size: 55px;
 text-transform: capitalize;
 font-weight: 700;
 
 color: gray;
    }
	</style>
</head>


<body class="admin">
<!--<header class="headerdiv">
	<div class="logodiv">
			<a href="index.html"><img src="mainlogo.gif"></a>
		</div>
	</header>-->
	<?php
	include('nav_for_admin.php');
	?>
<main class="teachermain">
	<section class="leftteacher">
		<h2>
			
		</h2>
		<h1>
			
		</h1>
		<p>
			
		</p>
	</section>
	<section class="middleteacher">
		
	<section class="rightteacher">
		
		
		
	</section>
</main>
<div class="a">
   <h1> <?php echo "Hello, Your ID is: ".$_SESSION['id'] ;   ?>
   </h1>
</div>


</body>
</html>

</html>