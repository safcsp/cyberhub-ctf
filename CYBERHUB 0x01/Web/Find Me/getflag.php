<?php

session_start();

if ($_SESSION['getit'] != 1 ){
	echo "<script>alert('it\'s not easy, try hard.');</script>";
	header("Location: index.php");
}
$win =  "CYBERHUB{Th!s@I$@Aw3s0m3}";

echo $win;

header("Location: index.php");