<?php
	$con=mysqli_connect("localhost","root","","CoolSchool");
	if(!$con)
	{
		die ("Connection Failed");
	}
	$sql="INSERT INTO Student(Sid,Firstname,Lastname,Cid) VALUES('S1a01','Sonu','Karmacharya','1A');";
	$sql.="INSERT INTO Student(Sid,Firstname,Lastname,Cid) VALUES('S1a03','Anil','Thapa','1A');";
	$sql.="INSERT INTO Student(Sid,Firstname,Lastname,Cid) VALUES('S1b04','Sonika','Khadka','1B');";
	$sql.="INSERT INTO Student(Sid,Firstname,Lastname,Cid) VALUES('S1b05','Amrita','Baskota','1B');";
	$sql.="INSERT INTO Student(Sid,Firstname,Lastname,Cid) VALUES('S2a06','Shreeya','Magar','2A');";
	$sql.="INSERT INTO Student(Sid,Firstname,Lastname,Cid) VALUES('S2b07','Devendra','Gurung','2B');";
	$sql.="INSERT INTO Student(Sid,Firstname,Lastname,Cid) VALUES('S3a07','Abhinas','Jha','3A');";
	$sql.="INSERT INTO Student(Sid,Firstname,Lastname,Cid) VALUES('S3a04','Maya','Siwakoti','3A');";
	$sql.="INSERT INTO Student(Sid,Firstname,Lastname,Cid) VALUES('S3b10','Basanta','Kafle','3B');";
	$sql.="INSERT INTO Student(Sid,Firstname,Lastname,Cid) VALUES('S2b11','Angel','Poudel','2B');";
	$sql.="INSERT INTO Student(Sid,Firstname,Lastname,Cid) VALUES('S4a12','Samjhana','Shrestha','4A');";
	$sql.="INSERT INTO Student(Sid,Firstname,Lastname,Cid) VALUES('S4b13','Laxmi','Manandhar','4B');";
	$sql.="INSERT INTO Student(Sid,Firstname,Lastname,Cid) VALUES('S4a14','Sagar','Mishra','4A');";
	$sql.="INSERT INTO Student(Sid,Firstname,Lastname,Cid) VALUES('S3a15','Sanjeeb','Lama','3A');";
	$sql.="INSERT INTO Student(Sid,Firstname,Lastname,Cid) VALUES('S4b11','Sujata','Khadka','4B');";
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