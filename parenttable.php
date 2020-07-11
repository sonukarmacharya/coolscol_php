<?php
	$con=mysqli_connect("localhost","root","","CoolSchool");
	if(!$con)
	{
		die ("Connection Failed");
	}
	$sql="CREATE TABLE Parent(Pid VARCHAR(6) PRIMARY KEY,
							  Sid VARCHAR(6) NOT NULL,
							  Firstname VARCHAR(25) NOT NULL,
							  Lastname VARCHAR(25) NOT NULL,
							  Email VARCHAR(40),
							  Password VARCHAR(40),
							  FOREIGN KEY (Sid) REFERENCES Student(Sid))";

	if(mysqli_query($con,$sql))
	{
		$sql="CREATE TABLE S_has_P(Pid VARCHAR(6) NOT NULL,
							  Sid VARCHAR(6) NOT NULL,
							  FOREIGN KEY (Sid) REFERENCES Student(Sid),
							  FOREIGN KEY (Pid) REFERENCES Parent(Pid))";
		if(mysqli_query($con,$sql)){
			include('insertclass.php');
			include('insertsubject.php');
			include('insertstu.php');
			include('inserteacher.php');
			include('Thassub.php');
	}
}
	else
	{
			echo "Error!!!".mysqli_error($con);
	}
?>	