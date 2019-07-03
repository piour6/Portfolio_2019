<?php

	session_start();
	
	$_SESSION['lang']=$_GET['l'];

	require('lang/'.$_SESSION['lang'].'.php');

	header("location: ".$_SERVER['HTTP_REFERER']);

?>
