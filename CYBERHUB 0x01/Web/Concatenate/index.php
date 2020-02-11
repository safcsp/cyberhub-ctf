<!DOCTYPE html>
<html>
	<head>
		<title>No thing Here</title>
	</head>
	<body>
		<br><br><br><br><center><h1>Deep Searching, and use ur brain.</h1></center>
	</body>
	<!-- <a href="?source=1"> Here </a>-->
</html>
<?php

include('flag.php');

if( @$_GET['source'] == 1 ){
	highlight_file(__FILE__);
	die();
}

if( @$_GET['in1'] && @$_GET['in2'] )
{
	$input1 = $_GET['in1'];
	$input2 = $_GET['in2'];
	if( $input1 !== $input2 && @hash("md5", $salt.$input1) === @hash("md5", $salt. $input2) )
	{
		echo $flag;

	} else {

		echo "Sorry this value not valid.";
	}
} else{
	exit();
}

?>