<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>The Admin</title>
		<link rel="icon" href="img/logo.png" type="image/x-icon">
	<link rel="stylesheet" href="http://localhost/Mark-E/css/main.css" type="text/css" media="all">
	<link rel="stylesheet" href="http://localhost/Mark-E/admin/css/main.css" type="text/css" media="all">
	<link rel="stylesheet" href="http://localhost/Mark-E/css/layout.css" type="text/css" media="all">
	<link rel="stylesheet" href="http://localhost/Mark-E/bootstrap-4.3.1-dist/css/bootstrap.min.css" type="text/css" media="all">
	 <script src="http://localhost/Mark-E/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="scale.css" type="text/css" media="all">
	<script src="http://localhost/Mark-E/js/jquery.min.js"></script>
	<script type="text/javascript" src="http://localhost/Mark-E/js/jquery.nicescroll-master/jquery.nicescroll.js"></script>
</head>
<body class="bg-white">

<style>
	
	
</style>
	<?php
	if(!isset($_COOKIE['Mid'])){
		echo "<script> window.location= 'http://localhost/Mark-E/';</script>";
	}
	?>

	<div id="inrtuy">
	
		<?php
		    require_once './foot.php';
			require_once './header.php';
		?>

		<div id="idwer-main" colspan="2">
	
		  <div  class="right" id="main-right" style="margin-top: 40px; max-height: 100%;">
         
          
            <div class="row" style="width: 100.5%;height: 100%; min-height: 430px;">
 					 <div class="col-sm-4 boe" style="min-height: 250px;">
 					 	<div class="circle bg-white stat firleft">
 					 		<hr class="my-4">
 					 		<div class="subject">
 					 			<button class="intent icon-ad add" value="New Exam">
 									
 								</button>
 								<button class="intent icon-ad">
 									
 								</button>
 								<button class="intent icon-ad ">
 									
 								</button>
 								<button class="intent icon-ad settings">
 									
 								</button>
 					 		</div>
 					 	</div>
 					 </div>
 					<div class="col-sm-4 boe " style="margin-left: ;">
 						<div class="circle bg-white stat mid">
 							<hr class="my-4">
							 <div id="search-upp" tabindex="1" style="width: 60%; margin-right: 20%; height: 25px; font-size: 11px; border-radius: 4px;">
       						<div id="hidwef" style="height: 100%; width: 100%; position: absolute;">
     						  <input id="sea-class" type="text" name="" placeholder="Search..." ng-model="search">
    						  <button id="subprosea" title="search"> &#128269;</button>
  								 </div>
     						   <div id="oversearch" onclick="werwer();" style="height: 25px; font-size: 10px; margin-top: -1px; border-radius: 4px;"> &#128269; search</div>
        			</div>
 							<div class="subject" style="padding-top:40px;"></div>
 						</div>
 				</div>
 				<div class="col-sm-4 boe " style="min-height: 250px;">
 						<div class="circle bg-white stat firight">
 							<hr class="my-4">
 							<div class="subject">
 								<button class="actions icon-ad search" value="Search">
 									
 								</button>
 								<button class="actions icon-ad group" value="USearch">
 									
 								</button>
 								<button class="actions icon-ad delete">
 									
 								</button>
 								<button class="actions icon-ad settings">
 									
 								</button>
 							</div>
 						</div>
 				</div>
		</div>
		</div>
	</div>

</div>
</div>
<?php
	 require_once './modal.php';
?>
	<script src="http://localhost/Mark-E/admin/js/main.js"></script>
	

<script type="text/javascript">
	get_sche();
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