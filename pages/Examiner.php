<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Account </title>
		<link rel="icon" href="img/logo.png" type="image/x-icon">
	<link rel="stylesheet" href="http://localhost/Mark-E/css/main.css" type="text/css" media="all">
	<link rel="stylesheet" href="http://localhost/Mark-E/css/layout.css" type="text/css" media="all">
	<link rel="stylesheet" href="http://localhost/Mark-E/css/exam.css" type="text/css" media="all">
	<script src="http://localhost/Mark-E/js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.nicescroll-master/jquery.nicescroll.js"></script>
</head>
<body>
	
	<?php
	if(!isset($_COOKIE['Mid'])){
		echo "<script> window.location= 'http://localhost/Mark-E/';</script>";
	}
	else if(!isset($_COOKIE['Mid-start'])){

	}
	?>
	<div id="inrtuy">
			<?php
			require_once './foot.php';
			require_once './header.php';
		?>

		<div id="idwer-main" colspan="2">
			
			<div  class="right" id="main-right">
			<div id="sche" class="box">
				<div class="Exam holder anime" style="">
				<ul>
					<li>
						1. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						<br>
					<b>a </b><input type="radio" name="1" value="a"> <span>  sikdjsnhdjsd</span><br>
					<b>b </b><input type="radio" name="1" value="b"> <span> sikdjsnhdjsd</span><br>
					<b>c </b><input type="radio" name="1" value="c"> <span> sikdjsnhdjsd</span><br>
					<b>d</b><input type="radio" name="1" value="d"> <span>  sikdjsnhdjsd</span>
					</li>
					
				</ul>
				<button type="button" class="nexter">Next</button>
               </div>
			 </div>
		</div>
	</div>

	</div>
<script src="http://localhost/Mark-E/js/main.js"></script>
<script type="text/javascript">getdet();

var name=getlink()["name"];

 $('.fa-menu').click(function(){  
    getmenu();
   });
</script>
</body>
</html>