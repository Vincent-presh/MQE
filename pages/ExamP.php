<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exam Schedules</title>
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


	<style type="text/css">
		@media screen and (max-width: 565px){
div#idwer-main #main-right {
    padding-bottom: 80px;
}
}
	</style>

	<div id="inrtuy" class="bg-white">
			<?php
			require_once './foot.php';
			require_once './header.php';
		?>

	<style type="text/css">

	.tyi{
	width: 100%;
	max-width: 390px;
	min-height: 400px;
	position: relative;
    display: flex;
  	flex-wrap: wrap;
  	 justify-content: center;
  padding: 40px 0%;
  margin: 0px auto;
  margin-top: 15px;
  border-radius: 7px;
  border-top: 1px solid rgba(0, 0, 0, 0.1);
  box-shadow: 9px 10px 0px 6px rgba(0, 0, 0, 0.1);
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        box-sizing: content-box;
    height: 100%;
	}
	.tyi > .under{
		height: 80px;
		padding: 10px 6%;
		width: 100%;
	}
	.under .imager{
		height: 100%;
		width: auto;
		max-width: 60px;
		min-width: 40px;
		border-radius: 50%;
			float: left;
	}
	.imager img{
		border-radius: 50%;
		height: 100%;
	}

	.righyww{
		float: right;
		width: calc(100% - 90px);
		height: 100%;
		position: relative;
	}
.floow{
	float: right;
	height: 60%;
	width: 0px;
	border-left:12px dotted #c5c3c4;
	cursor: pointer;
	position: absolute;
	margin-top: -45px;
}

.text-uppercase {
    font-size: .8rem;
    font-family: 'Aileron';
    text-transform: uppercase;
    letter-spacing: .15rem;
    float: left;
    color: black;
    width: calc(100% - 20px);
    height: 14px;
}

@keyframes placeHolderShimmer{
    0%{
        background-position: -468px 0
    }
    100%{
        background-position: 468px 0
    }
}

.animated-background {
    animation-duration: 1s;
    animation-fill-mode: forwards;
    animation-iteration-count: infinite;
    animation-name: placeHolderShimmer;
    animation-timing-function: linear;
    background: #f6f7f8;
    background: linear-gradient(to right, #eeeeee 8%, #dddddd 18%, #eeeeee 33%);
    background-size: 800px 104px;     position: relative;
}
.small {
    font-size: 80%;
    letter-spacing: .10rem;
    font-weight: 400;
    float: left;
    color: rgba(0,0,0,.5)!important;
    width: calc(100% - 20px);
    height: 12px;
}


	@media screen and (max-width : 765px) {
		.tyi{
			 padding: 70px 14%;
		}
		.tyi > .under{
			padding: 0px 14%;
		}
	}
	@media screen and (max-width : 575px) {
		.tyi{
			 padding: 50px 0%;
		}
		.tyi > .under{
			padding: 0px 8%;
		}
	}

</style>

<div class="tyi">
	<div class="under">
		<div class="imager animated-background">
			<img src="">
		</div>
		<div class="righyww">
			<h4 class="text-uppercase animated-background"></h4>
			<h1 class="small animated-background"></h1>
			<div class="floow animated-background"></div>
		</div>
	</div>
	<div class="under">
		<div class="imager animated-background">
			<img src="">
		</div>
		<div class="righyww">
			<h4 class="text-uppercase animated-background"></h4>
			<h1 class="small animated-background"></h1>
			<div class="floow animated-background"></div>
		</div>
	</div>
	<div class="under">
		<div class="imager animated-background">
			<img src="">
		</div>
		<div class="righyww">
			<h4 class="text-uppercase animated-background"></h4>
			<h1 class="small animated-background"></h1>
			<div class="floow animated-background"></div>
		</div>
		
	</div>
	<div class="under">
		<div class="imager animated-background">
			<img src="">
		</div>
		<div class="righyww">
			<h4 class="text-uppercase animated-background"></h4>
			<h1 class="small animated-background"></h1>
			<div class="floow animated-background"></div>
		</div>
	</div>
	
</div>

	</div>
<script src="<?php echo $hostname; ?>js/main.js"></script>

<script type="text/javascript">getdet();get_sche();
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