<?php
	$r=$_POST['check'];
	if($r=='parent'){
		header('location:1parentsignup.php');
	}
	else{
		header('location:1teachersignup.php');
	}

?>