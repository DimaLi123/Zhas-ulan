<?php 
echo "<body bgcolor=#00BFFF>";

	$link = mysqli_connect("localhost","root","")
	or die("Connection disabled".mysqli_error());

	mysqli_select_db($link,"zhasulan")
	or die("DB er:".mysqli_error());
	mysqli_query($link,"SET NAMES UTF-8");

 ?>