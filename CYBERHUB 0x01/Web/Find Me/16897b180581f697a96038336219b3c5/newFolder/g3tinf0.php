<?php 

if($_SERVER['REQUEST_METHOD'] != "GET"){ die("<script>alert('Login first.');location.href='../../index.php'</script>"); }

$con = mysqli_connect('localhost', 'root', '', 'findme_db');

$username = @$_GET['uname'];

$sql = "SELECT * FROM users WHERE username = '$username'";

$res = @mysqli_query($con, $sql);

$row = @mysqli_fetch_array($res);

if ( $row["username"] == $username ){ echo "Exist"; } else {echo "Not Exist";}