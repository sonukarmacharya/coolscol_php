<?php

$valid=0;
echo "<html><head>
<title>|| Sign up as Teacher ||</title>
		</head><body>";
		$con=mysqli_connect("localhost","root","","CoolSchool");
		if(!$con){
			die("<p>Error in connecting to db!</p>");
		}

$p="/^([0-9A-za-z#_]){6,}$/";
$tid=$_POST['tid'];
$em=$_POST['pemail'];
$p1=$_POST['ppass1'];
$p2=$_POST['ppass2'];

$sql1="SELECT * FROM Teacher WHERE Tid='$tid' LIMIT 1";
$result=mysqli_query($con,$sql1);
if(mysqli_num_rows($result)!=1){
	
	echo "<script type='text/Javascript'>
						alert('Invalid ID!');
					</script>";
	$valid=1;
}

$sql="SELECT Email FROM Parent";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_assoc($result)){
		if(strcmp($em,$row["Email"])==0){
			echo "<script type='text/Javascript'>
					alert('Please insert a unique email id. This id is already taken!');
				</script>";
				$valid=1;
				break;
		}
    }
}

$sql="SELECT Email FROM Teacher";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_assoc($result)){
		if(strcmp($em,$row["Email"])==0){
			echo "<script type='text/Javascript'>
					alert('Please insert a unique email id. This id is already taken!');
				</script>";
				$valid=1;
				break;
		}
    }
}

if(!preg_match($p,$p1)){
	echo "<script type='text/Javascript'>
						alert('Please enter valid password with atleast 6 characters!');
					</script>";
	$valid=1;
}
if(strcmp($p1,$p2)!=0){
	echo "<script type='text/Javascript'>
						alert('Two passwords do not match! Please enter again!');
					</script>";
	$valid=1;
}

if($valid==1){
	include('teachersignup.php');
}
else{
	$con=mysqli_connect("localhost","root","","CoolSchool");
		if(!$con){
			die("<p>Error in connecting to db! </p>");
		}
	$sql="UPDATE Teacher SET Email='$em',Password='$p1' WHERE Tid='$tid'";
	if(mysqli_query($con,$sql)){
		echo "<script type='text/Javascript'>
						alert('Successfully Signed Up As TEACHER!!');
					</script>";
		include('wwelcome.php');
	}
}
echo "</body></html>";

?>