<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign-up</title>

<?php
		require_once 'host.php';
	?>
	<link rel="icon" href="img/logo.png" type="image/x-icon">
	<link rel="stylesheet" href="css/main.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/form.css" type="text/css" media="all">
</head>
<body class="bg-white">

	<div id="logger">
		<div id="mainer" class="bg-white">
			<form action="<?php echo $host;?>actions/signer.php" method="Post">
		<table id="inrtuye">
			<tr id="header">
				<td>
					<img src="img/logo.png">
				</td>
			</tr>
			<tr id="firstf" class="form emailer phone">
				<td> 
					<i class="fa fa-user icon"></i>
					<input id="ider" type="text" name="Emid" placeholder="Email Or Phone" required>
				</td>
			</tr>
			<tr id="secof" class="form name">
				<td>
					<i class="fa fa-firn icon"></i>
					<input class="firname" type="text" name="Emfirst" placeholder="First Name" required>
				</td>
			</tr>
			<tr id="secof" class="form name">
				<td>
					<i class="fa fa-secn icon"></i>
					<input class="lasname" type="text" name="Emsec" placeholder="Last Name" required>
				</td>
			 </tr>
			 <tr id="secof" class="form name">
				<td>
					<i class="fa fa-secn icon"></i>
					<input class="lasname" type="text" name="Emdept" placeholder="Department" required>
				</td>
			 </tr>
			<tr id="secof" class="form password">
				<td>
					<i class="fa fa-key icon"></i>
					<input class="password" type="password" name="Emencrpyt" placeholder="Password" required>
				</td>
			 </tr>
			<tr id="thirf" class="form submit">
				<td>
						<button class="subbte 1" type="submit">Submit</button>
					</td>
			</tr>
		
			<tr id="final" class="footer power">
				<td>. Powered By Erik Solutions .</td>
			</tr>
		</table>
		</form>
		</div>
	</div>

</body>
</html>