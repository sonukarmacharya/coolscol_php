<?php
	$con=mysqli_connect("localhost","root","","CoolSchool");
	if(!$con)
	{
		die ("Connection Failed");
	}
	$sql="INSERT INTO Parent(Pid,Sid,Firstname,Lastname) VALUES('S1a01','S1a01','Gita','Khadka');";

	$sql.="INSERT INTO Parent(Pid,Sid,Firstname,Lastname) VALUES('S1a03','S1a03','Shyam','Thapa');";

	$sql.="INSERT INTO Parent(Pid,Sid,Firstname,Lastname) VALUES('S1b04','S1b04','Puja','Khadka');";

	$sql.="INSERT INTO Parent(Pid,Sid,Firstname,Lastname) VALUES('S2a06','S2a06','Sita','Karmacharya');";

	$sql.="INSERT INTO Parent(Pid,Sid,Firstname,Lastname) VALUES('S2b07','S2b07','Kamal','Baskota');";

	$sql.="INSERT INTO Parent(Pid,Sid,Firstname,Lastname) VALUES('S2b11','S2b11','Sudarsan','Jha');";

	$sql.="INSERT INTO Parent(Pid,Sid,Firstname,Lastname) VALUES('S3a04','S3a04','Kumar','Magar');";

	$sql.="INSERT INTO Parent(Pid,Sid,Firstname,Lastname) VALUES('S3a07','S3a15','Devi','Gurung');";

	$sql.="INSERT INTO Parent(Pid,Sid,Firstname,Lastname) VALUES('S3a15','S3a15','Sharadha','Poudel');";

	$sql.="INSERT INTO Parent(Pid,Sid,Firstname,Lastname) VALUES('S3b10','S3b10','Basanti','Siwakoti');";

	$sql.="INSERT INTO Parent(Pid,Sid,Firstname,Lastname) VALUES('S4a12','S4a12','Hema','Kafle');";

	$sql.="INSERT INTO Parent(Pid,Sid,Firstname,Lastname) VALUES('S4a14','S4a14','Anita','Shrestha');";

	$sql.="INSERT INTO Parent(Pid,Sid,Firstname,Lastname) VALUES('S4b11','S4b11','Saisa','Mishra');";

	$sql.="INSERT INTO Parent(Pid,Sid,Firstname,Lastname) VALUES('S4b13','S4b13','Anita','Manandhar');";
	
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