<?php
	$con=mysqli_connect("localhost","root","","CoolSchool");
	if(!$con)
	{
		die ("Connection Failed");
	}
	$sql="INSERT INTO Teacher(Tid,Firstname,Lastname) VALUES('T010','Nima','Bhandari');";
	$sql.="INSERT INTO Teacher(Tid,Firstname,Lastname) VALUES('T009','Babina','Shakya');";
	$sql.="INSERT INTO Teacher(Tid,Firstname,Lastname) VALUES('T008','Dipesh','Mainali');";
	$sql.="INSERT INTO Teacher(Tid,Firstname,Lastname) VALUES('T007','Sudil','Maharjan');";
	$sql.="INSERT INTO Teacher(Tid,Firstname,Lastname) VALUES('T006','Prabha','Shrestha');";
	$sql.="INSERT INTO Teacher(Tid,Firstname,Lastname) VALUES('T005','Meena','Basnyat');";
	$sql.="INSERT INTO Teacher(Tid,Firstname,Lastname) VALUES('T004','Sanjog','Tiwari');";
	$sql.="INSERT INTO Teacher(Tid,Firstname,Lastname) VALUES('T003','Himmat','Pandey');";
	$sql.="INSERT INTO Teacher(Tid,Firstname,Lastname) VALUES('T002','Radha','Shrestha');";
	$sql.="INSERT INTO Teacher(Tid,Firstname,Lastname) VALUES('T001','Sangita','Lama');";
	$sql.="INSERT INTO Teacher(Tid,Firstname,Lastname) VALUES('T011','Durga','Silwal');";
	$sql.="INSERT INTO Teacher(Tid,Firstname,Lastname) VALUES('T012','Siddha','Shakya');";
	$sql.="INSERT INTO Teacher(Tid,Firstname,Lastname) VALUES('T013','Ashok','Bhandari');";
	$sql.="INSERT INTO Teacher(Tid,Firstname,Lastname) VALUES('T014','Dhana','Maharjan');";

	
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