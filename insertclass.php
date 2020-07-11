<?php
	$con=mysqli_connect("localhost","root","","CoolSchool");
	if(!$con)
	{
		die ("Connection Failed");
	}
	$sql="INSERT INTO Class(Cid) VALUES('1A');";
	$sql.="INSERT INTO Class(Cid) VALUES('2A');";
	$sql.="INSERT INTO Class(Cid) VALUES('3A');";
	$sql.="INSERT INTO Class(Cid) VALUES('4A');";
	$sql.="INSERT INTO Class(Cid) VALUES('1B');";
	$sql.="INSERT INTO Class(Cid) VALUES('2B');";
	$sql.="INSERT INTO Class(Cid) VALUES('3B');";
	$sql.="INSERT INTO Class(Cid) VALUES('4B');";


	if(mysqli_multi_query($con,$sql))
	{
			echo "inserted successfully!!!";
	}
	else
	{
			echo "Error!!!".mysqli_error($con);
	}
	mysqli_close($con);
?>	