<?php
	$con=mysqli_connect("localhost","root","","CoolSchool");
	if(!$con)
	{
		die ("Connection Failed");
	}
	$sql="INSERT INTO Subject(Subid,Subname) VALUES('Sci','Science');";
	$sql.="INSERT INTO Subject(Subid,Subname) VALUES('Soc','Social');";
	$sql.="INSERT INTO Subject(Subid,Subname) VALUES('EnI','English I');";
	$sql.="INSERT INTO Subject(Subid,Subname) VALUES('EnII','English II');";
	$sql.="INSERT INTO Subject(Subid,Subname) VALUES('Math','Math');";
	$sql.="INSERT INTO Subject(Subid,Subname) VALUES('Nep','Nepali');";
	$sql.="INSERT INTO Subject(Subid,Subname) VALUES('Draw','Drawing');";


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