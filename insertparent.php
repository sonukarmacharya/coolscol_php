<?php
	$con=mysqli_connect("localhost","root","","CoolSchool");
	if(!$con)
	{
		die ("Connection Failed");
	}
	$sql="INSERT INTO Parent(Pid,Sid,Firstname,Lastname) VALUES('S1a01','S1a01','Gita','Khadka');";


	$sql.="INSERT INTO Parent(Pid,Sid,Firstname,Lastname) VALUES('S1b02','S1b02','Puja','Khadka');";

	$sql.="INSERT INTO Parent(Pid,Sid,Firstname,Lastname) VALUES('S2a01','S2a01','Sita','Karmacharya');";

	$sql.="INSERT INTO Parent(Pid,Sid,Firstname,Lastname) VALUES('S2b02','S2b02','Kamal','Baskota');";

	$sql.="INSERT INTO Parent(Pid,Sid,Firstname,Lastname) VALUES('S3a01','S3a01','Kumar','Magar');";

	$sql.="INSERT INTO Parent(Pid,Sid,Firstname,Lastname) VALUES('S3b02','S3b02','Devi','Gurung');";

	$sql.="INSERT INTO Parent(Pid,Sid,Firstname,Lastname) VALUES('S4a01','S4a01','Sharadha','Poudel');";

	$sql.="INSERT INTO Parent(Pid,Sid,Firstname,Lastname) VALUES('S4b02','S4b02','Basanti','Siwakoti');";

	
	
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