<?php
session_start();
if(isset($_SESSION["iid"])){
	$aa=$_SESSION["iid"];
	$con=mysqli_connect("localhost","root","","CoolSchool");
		if(!$con){
			die("<p>Error in connecting to db!</p>");
		}
echo"<html>
<head>
<title>|| Check ||</title>
			<link rel='stylesheet' href='pstyle.css'>
		</head>
<body id='homew'>";
   include('headcss.html');include('footcss1.html');
echo"
<form method='post' action='parentlogged1.php'><p class='classfont'>
	<h1>Select CLASS To Check Homework</h1><br/><p>";

$idd=0;
$sql="SELECT Pid FROM Parent WHERE Email='$aa'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_assoc($result)){
		$rr=$row["Pid"];

		$sql2="SELECT Sid FROM S_has_P WHERE Pid='$rr'";
		$result2=mysqli_query($con,$sql2);
		if(mysqli_num_rows($result2)>0){
		while($row2=mysqli_fetch_assoc($result2)){
			$id2=$row2["Sid"];

		$sql3="SELECT Cid FROM Student WHERE Sid='$id2'";
		$result3=mysqli_query($con,$sql3);
		if(mysqli_num_rows($result3)>0){
			while($row3=mysqli_fetch_assoc($result3)){
				$idd=$row3["Cid"];
	   		echo"
				<input type='radio' name='classrad' id='".$idd."' value='".$idd."' checked>&nbsp;&nbsp;".$idd."  ";
			}
    	}
	}
}
}
}

	$datenow=date('Y-m-d');
	echo "<br/><br/></p><p><input type='date' name='dat' class='textbox' value='".$datenow."'> <br/><br/><input type='submit' value='Show homework' class='button'>
						<a href='wwelcome.php'><input type='button' class='button'  value='Go Back'></a></input>  <a href='logout.php'><input type='button' class='button'  value='Logout'></a></input>
					</p></p>
					</form>
				</body>
			</html>";
		}
		 else{
        header('location:wwelcome.php');
    }
			?>