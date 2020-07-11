<?php
	$con=mysqli_connect("localhost","root","");
	if(!$con)
	{
		die ("Connection Failed");
	}
	else
	{
		$sql="CREATE DATABASE CoolSchool";
		
		if(mysqli_query($con,$sql))
		{
			mysqli_close($con);
			$con=mysqli_connect("localhost","root","","CoolSchool");
			if(!$con)
			{
				die ("Connection Failed");
			}
			$sql="CREATE TABLE Class(Cid VARCHAR(25) PRIMARY KEY)";
			if(mysqli_query($con,$sql))
			{
				$sql="CREATE TABLE Subject(Subid VARCHAR(25) PRIMARY KEY,Subname VARCHAR(25) NOT NULL)";
				if(mysqli_query($con,$sql))
				{
						$sql="CREATE TABLE class_has_sub(Cid VARCHAR(6) NOT NULL,Subid VARCHAR(6) NOT NULL,FOREIGN KEY (Cid) REFERENCES Class(Cid),FOREIGN KEY (Subid) REFERENCES Subject(Subid))";
						if(mysqli_query($con,$sql))
						{
								$sql="CREATE TABLE Homework(Cid VARCHAR(6) NOT NULL,
							  Subid VARCHAR(25) NOT NULL,
							  Homeworks VARCHAR(500) NOT NULL,
							  Dates DATE,
							  FOREIGN KEY (Cid) REFERENCES Class(Cid),
							  FOREIGN KEY (Subid) REFERENCES Subject(Subid)
							  )";
								if(mysqli_query($con,$sql))
								{
									$sql="CREATE TABLE Teacher(Tid VARCHAR(6) PRIMARY KEY,
							  Firstname VARCHAR(25) NOT NULL,
							  Lastname VARCHAR(25) NOT NULL,
							  Email VARCHAR(40),
							  Password VARCHAR(40)
							  )";
								if(mysqli_query($con,$sql))
								{
										$sql="CREATE TABLE teaches_in(Tid VARCHAR(6) NOT NULL,
								Cid VARCHAR(6) NOT NULL,
							  FOREIGN KEY (Cid) REFERENCES Class(Cid),
							 FOREIGN KEY (Tid) REFERENCES Teacher(Tid))";
								if(mysqli_query($con,$sql))
								{
										$sql="CREATE TABLE Student(Sid VARCHAR(6) PRIMARY KEY,
							  Firstname VARCHAR(25) NOT NULL,
							  Lastname VARCHAR(25) NOT NULL,
							  Cid VARCHAR(6) NOT NULL,
							  FOREIGN KEY (Cid) REFERENCES Class(Cid))";
								if(mysqli_query($con,$sql))
								{
										
			include('parenttable.php');
	
								}
								}
								}
								}
						}
				}	
			}
		}
		else
		{
				echo "Error!!!";
		}
	}
?>	