<?php
	$con=mysqli_connect("localhost","root","","CoolSchool");
	if(!$con)
	{
		die ("Connection Failed");
	}
	$sql="INSERT INTO S_has_P(Pid,Sid) VALUES('S1a01','S1a01');";

	$sql.="INSERT INTO S_has_P(Pid,Sid) VALUES('S1b02','S1b02');";

	$sql.="INSERT INTO S_has_P(Pid,Sid) VALUES('S2a01','S2a01');";
	$sql.="INSERT INTO S_has_P(Pid,Sid) VALUES('S2a01','S4b10');";

	$sql.="INSERT INTO S_has_P(Pid,Sid) VALUES('S2b02','S2b02');";

	$sql.="INSERT INTO S_has_P(Pid,Sid) VALUES('S3a01','S3a01');";

	$sql.="INSERT INTO S_has_P(Pid,Sid) VALUES('S3b02','S3a02');";

	$sql.="INSERT INTO S_has_P(Pid,Sid) VALUES('S4a01','S3a01');";

	$sql.="INSERT INTO S_has_P(Pid,Sid) VALUES('S4b02','S3b02');";

	
	
	if(mysqli_multi_query($con,$sql))
	{
			echo "inserted successfully!!!";
	}
	else
	{
			echo "Error!!!".mysqli_error($con);
	}
?>	