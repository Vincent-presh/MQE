<html>
<head>
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<?php
		require_once 'host.php';
	?>
	<link rel="icon" href="img/logo.png" type="image/x-icon">
	<link rel="stylesheet" href="css/form.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/Login.css" type="text/css" media="all">
	<script src="js/jquery.min.js"></script>
</head>
<body class="bg-white">

	<?php
	if(isset($_GET['details'])){
		$empty="Username or Password is incorrect";
	}
	?>
	<div style=" position: absolute; 
	height: 100%; min-height: 50%; 
	top: 0px;
	width: 100%; z-index: -1; bottom: 0;
	    background-position: center;
    background-repeat: no-repeat;
    background-attachment: scroll;
    background-size: cover;
	background: #f2f2f2;">
</div>
	
	  <div id="logger">
	
		<div id="tower"><a href="">Not yet registered? Click here</a></div>
		<div id="mainer" class="bg-white">
			<form action="./actions/functions.php" method="Post">
		<table id="inrtuye" >
			<tr id="header">
					<td>
					<img src="<?php echo $hostname;?>img/Mqelogo.png" class="App-logo" alt="logo"/>
				</td>
			</tr>
			<tr id="firstf" class="form emailer phone">
				<td > 
					<i class="fa fa-user icon"></i>
					<input id="ider" type="text" name="EmPhone" placeholder="Email Or Phone" required/>
				</td>
			</tr>
			<tr id="secof" class="form password">
				<td>
					<i class="fa fa-key icon"></i>
					<input class="password" type="password" name="EmPasso" placeholder="Password" required/>
				</td>
			</tr>
			<tr id="thirf" class="form submit">
					<td >
					<button class="subbte 1" type="submit">Submit</button>
					</td>
			</tr>
   			<tr id="demif" class="form response">
					<td>
						<?php if(isset($empty)){ echo $empty;}?>
					 </td>
			</tr>

			<tr id="semi" class="link send">
					<td>
						 <a href=""> Forget Password??</a>
					</td>
			</tr>

			<tr id="final" class="footer power">
				<td>. Powered By Erik Solutions .</td>
			</tr>
		</table>
	</form>
		</div>
	</div>
<script type="text/javascript">
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

}</script>
</body>
</html>