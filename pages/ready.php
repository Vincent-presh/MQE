<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MQ-E </title>
<?php
		require_once 'host.php';
	?>
		<link rel="icon" href="img/logo.png" type="image/x-icon">
	<link rel="stylesheet" href="<?php echo $hostname;?>css/main.css" type="text/css" media="all">
	<link rel="stylesheet" href="<?php echo $hostname;?>css/layout.css" type="text/css" media="all">
	<link rel="stylesheet" href="<?php echo $hostname;?>css/exam.css" type="text/css" media="all">
	<script src="<?php echo $hostname;?>js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.nicescroll-master/jquery.nicescroll.js"></script>
</head>
<body class="bg-white" oncontextmenu="false">
	
	<?php
	if(!isset($_COOKIE['Mid'])){
		echo "<script> window.location= '$hostname';</script>";
	}
	else if(!isset($_COOKIE['Mid-start'])){

	}
	?>
	<div id="inrtuy" class="bg-white">
			<?php
			require_once './header.php';
		?>

		<div id="idwer-main" colspan="2">
		
			<div  class="right" id="main-right">
			<div id="sche" class="box">
				<div class="Exam holder" style="">
				<div class="lds-ripple wert"><div></div><div></div></div>
							 <div class="reawt">
							 Exam is preparing...</div>
               </div>
			 </div>
		</div>
	</div>

	<?php
	    require_once './lad.php';
			require_once './foot.php';
			?>
	</div>
<script src="<?php echo $hostname;?>js/main.js"></script>
<script src="<?php echo $hostname;?>js/exam.js"></script>
<script type="text/javascript">getdet();

var name=getlink()["name"];
getpreewrt(name);
 $('.fa-menu').click(function(){  
    getmenu();
   });

var nighter=getCookiechat("nighty");
if (nighter=="yes") {
	    $(".bg-white").addClass("bg-night");
    $(".bg-night").removeClass("bg-white");
    $("input[name=nightery]").val('yes');
}
else if (nighter=="no") {
	$(".bg-night").addClass("bg-white");
      $(".bg-white").removeClass("bg-night");
      $("input[name=nightery]").val('no');
}
else{

}
</script>
</body>
</html>