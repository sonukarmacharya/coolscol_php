<?php
	$con=mysqli_connect("localhost","root","","CoolSchool");
	if(!$con)
	{
		die ("Connection Failed");
	}
	$sql="INSERT INTO Student(Sid,Firstname,Lastname,Cid) VALUES('S1a01','Sonu','Karmacharya','1A');";
	$sql.="INSERT INTO Student(Sid,Firstname,Lastname,Cid) VALUES('S1a02','Anil','Thapa','1A');";
	$sql.="INSERT INTO Student(Sid,Firstname,Lastname,Cid) VALUES('S1b01','Sonika','Khadka','1B');";
	$sql.="INSERT INTO Student(Sid,Firstname,Lastname,Cid) VALUES('S4b10','Soniya','Bajracharya','4B');";
	$sql.="INSERT INTO Student(Sid,Firstname,Lastname,Cid) VALUES('S1b02','Amrita','Baskota','1B');";
	$sql.="INSERT INTO Student(Sid,Firstname,Lastname,Cid) VALUES('S2a01','Shreeya','Magar','2A');";
	$sql.="INSERT INTO Student(Sid,Firstname,Lastname,Cid) VALUES('S2b02','Devendra','Gurung','2B');";
	$sql.="INSERT INTO Student(Sid,Firstname,Lastname,Cid) VALUES('S3a01','Abhinas','Jha','3A');";
	$sql.="INSERT INTO Student(Sid,Firstname,Lastname,Cid) VALUES('S3a02','Maya','Siwakoti','3A');";
	$sql.="INSERT INTO Student(Sid,Firstname,Lastname,Cid) VALUES('S3b01','Basanta','Kafle','3B');";
	$sql.="INSERT INTO Student(Sid,Firstname,Lastname,Cid) VALUES('S2b02','Angel','Poudel','2B');";
	$sql.="INSERT INTO Student(Sid,Firstname,Lastname,Cid) VALUES('S4a01','Samjhana','Shrestha','4A');";
	$sql.="INSERT INTO Student(Sid,Firstname,Lastname,Cid) VALUES('S4b02','Laxmi','Manandhar','4B');";
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