<!DOCTYPE html>
<html>
<head>
	<title>Erik Solutions</title>
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php
    require_once 'host.php';
  ?>
    <link rel="icon" href="img/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo $hostname;?>css/main.css" type="text/css" media="all">
  <link rel="stylesheet" href="<?php echo $hostname;?>css/layout.css" type="text/css" media="all">
  <script src="<?php echo $hostname;?>js/jquery.min.js"></script>
  
</head>
<body class="bg-white">
	<?php
		if(!isset($_COOKIE['Mid'])){
		echo "<script> window.location= '$hostname';</script>";
		}
	?>
<div id="logger">
		<div id="mainer" class="bg-white" style="padding-bottom: 10px;">

<div id="loadert">
	<div id="placefake"></div>
	<img id="logo" style="" src="img/logo.png" height="100%" width="100%">
</div>
<div class="power" style="font-family: 'InFormal Style Thin'; font-weight: bold; width: 100%; text-align: center;">Time to be a Champion .  .  .</div>
</div>
</div>
</body>

<script type="text/javascript">

function getlink(){
  var vars ={};
  var parts = window.location.href.replace(
    /[?&]+([^=&]+)=([^&]*)/gi,
     function(m,key,value) {
      vars[key] = value
    });
  return vars; 
}

function getCookiechat(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

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

function getewqop(argument) {
	// body...
	var name=getlink()["name"];
	if (name!=undefined) {
		window.location="intercept?id=5i4J8eryvYr86jo9r8hDsew83iy3kQZJHDNgMrwPouAnfyfro&name="+name+"";
		return;
	}
alert("There was an error");
return;
}

document.getElementById("logo").onload=function(){
setTimeout(function(){ getewqop()}, 5000);
};
</script>
</html>