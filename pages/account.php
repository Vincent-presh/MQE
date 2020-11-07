<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Account </title>
	<?php
		require_once 'host.php';
	?>
		<link rel="icon" href="img/logo.png" type="image/x-icon">
	<link rel="stylesheet" href="<?php echo $hostname;?>css/main.css" type="text/css" media="all">
	<link rel="stylesheet" href="<?php echo $hostname;?>css/layout.css" type="text/css" media="all">
	<script src="<?php echo $hostname;?>js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.nicescroll-master/jquery.nicescroll.js"></script>
</head>
<body class="bg-white">

	<?php
	require_once 'host.php';
	if(!isset($_COOKIE['Mid'])){
		echo "<script> window.location= '$hostname';</script>";
	}
	?>

	<div id="inrtuy" class="bg-white">
	
		<?php
				require_once './foot.php';
			require_once './header.php';
		?>

		<div id="idwer-main" colspan="2">
	
			<div  class="right" id="main-right" style="padding-bottom: 76px;">
				<div class="rowew">
					<div class="boxer bg-white point">
						 <div class="carde py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-map-marked-alt text-primary mb-2"></i>
              <div class="observ" id="prof-pic"><img class="pic-loader yreire"id="pic-loadere" src="<?php echo $hostname;?>img/bagh4.png" height="100%" width="100%"/></div>
              <h4 class="text-uppercase m-0">Welcome <font id="namwer"></font></h4>
              <hr class="my-4">
              <div class="small text-black-50"><font>Mark-E is an online academic competition for students across the world. Test yourself with friends and family and be rewarded!!!</font></div>
            </div>
          </div>
					</div>
			<div class="boxer bg-white point">
				<div class="carde py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-map-marked-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">You can check out...<font id="namwer"></font></h4>
              <hr class="my-4">
              <div class="small text-black-50"><a id="actor" href="ExamPlan" style="margin-left: 18.5%; font-size: 9px;"><button class="center-d bg-white">Quiz Plan</button></a>
          <a id="actor" href="Manager" style="margin-left: 18.5%; font-size: 9px;"><button class="center-d bg-white">Manage Account</button></a>
          </div>
            </div>
          </div>
					</div>
			<div class="boxer bg-white point">
				<div class="carde py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-map-marked-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Mq-e Rules<font id="namwer"></font></h4>
              <hr class="my-4">
              <div class="small text-black-50">
					1. Each question is 15seconds.<br>
					<br>
					2. Ensure your internet connection isnt slow.<br>
					<br>
					3. Answer correctly and Win.
         	  </div>
            </div>
          </div>
					</div>

				<div class="boxer bg-white point">
									 <div class="carde py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-map-marked-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Whats Happening...<font id="namwer"></font></h4>
              <hr class="my-4">
        
            </div>
          </div>
					</div>

				
			 </div>
		</div>
		

	</div>
<script src="<?php echo $hostname;?>js/main.js"></script>

<script type="text/javascript">getdet();
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