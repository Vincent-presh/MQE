<?php
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	if(isset($_COOKIE['Mid'])){
	header('Location:http://localhost/Mark-E/home');
	
	}else{
		require( dirname( __FILE__ ) . '/pages/login.php' );
		exit;
	}
	exit;
?>