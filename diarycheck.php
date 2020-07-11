<?php
session_start();
$_SESSION['iid']=$_POST['email'];
?>
<?php
if(isset($_SESSION["iid"])){
	$em=$_POST['email'];
	$pw=$_POST['pw'];
	echo "<html>
				<head>
					<title>Sign up</title>
				</head><body>";
	$con=mysqli_connect("localhost","root","","CoolSchool");
		if(!$con){
			die("<p>Error in connecting to db!</p>");
		}
	$sql="SELECT Tid FROM Teacher WHERE Email='$em' AND Password='$pw'";
	$result=mysqli_query($con,$sql);
	if(mysqli_num_rows($result)>0){
		
		header("location:tradio.php");
	}
	else{
		$sql="SELECT * FROM Parent WHERE Email='$em' AND Password='$pw'";
		$result=mysqli_query($con,$sql);
		if(mysqli_num_rows($result)>0){
			header("location:pradio.php");
		}
		else{
			echo "<script type='text/Javascript'>
						alert('Invalid username or password!');
					</script></body></html>";
			include("welcome.php");
		}
	}
}
else{
	header('location:wwelcome.php');
}
?>