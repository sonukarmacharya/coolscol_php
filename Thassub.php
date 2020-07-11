<?php
session_start();
	$con=mysqli_connect("localhost","root","","CoolSchool");
	if(!$con)
	{
		die ("Connection Failed");
	}
	$sql="CREATE TABLE Thassub(Tid VARCHAR(6) PRIMARY KEY,
							  Subid VARCHAR(6) NOT NULL,
							  FOREIGN KEY (Tid) REFERENCES Teacher(Tid),
							  FOREIGN KEY (Subid) REFERENCES Subject(Subid))";
	if(mysqli_query($con,$sql))
	{
			include('insertthassub.php');
			include('insertparent.php');
			include('s_has_p.php');
	}
	else
	{
			echo "Error!!!".mysqli_error($con);
	}
?>	