<?php
	$con=mysqli_connect("localhost","root","","CoolSchool");
	if(!$con)
	{
		die ("Connection Failed");
	}
	$sql="INSERT INTO Thassub(Tid,Subid) VALUES('T010','Sci');";
	$sql.="INSERT INTO Thassub(Tid,Subid) VALUES('T009','Soc');";
	$sql.="INSERT INTO Thassub(Tid,Subid) VALUES('T008','Nep');";
	$sql.="INSERT INTO Thassub(Tid,Subid) VALUES('T007','Draw');";
	$sql.="INSERT INTO Thassub(Tid,Subid) VALUES('T006','Math');";
	$sql.="INSERT INTO Thassub(Tid,Subid) VALUES('T005','EnI');";
	$sql.="INSERT INTO Thassub(Tid,Subid) VALUES('T004','EnII');";
	$sql.="INSERT INTO Thassub(Tid,Subid) VALUES('T003','EnII');";
	$sql.="INSERT INTO Thassub(Tid,Subid) VALUES('T002','Nep');";
	$sql.="INSERT INTO Thassub(Tid,Subid) VALUES('T001','Math');";
	$sql.="INSERT INTO Thassub(Tid,Subid) VALUES('T011','Draw');";
	$sql.="INSERT INTO Thassub(Tid,Subid) VALUES('T012','Sci');";
	$sql.="INSERT INTO Thassub(Tid,Subid) VALUES('T013','Soc');";
	$sql.="INSERT INTO Thassub(Tid,Subid) VALUES('T014','EnI');";


	
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