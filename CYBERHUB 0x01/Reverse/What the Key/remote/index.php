<form action="" method="post">
<p>Please enter the key!</p>
<input type="text" name="key" />
<button type="submit">Go!</button>
</form>
<!-- You are not supposed to attack this -->
<?php
error_reporting(0);
if(isset($_POST)){
	if(isset($_POST['key'])){
		if($_POST['key'] === '3133338'){
			print "The flag is: CYBERHUB{d9bb9f152023ff8d548f4a4430358bb1}";
		}else{
			print "Wrong key!";
		}
	}
}
?>
