<?php
session_start();
$subid=$_POST['subid'];
$hw=$_POST['t2a'];
if(isset($_SESSION["iid"])){
echo "<html><head><title>|| Assign to 2A ||</title>
			<link rel='stylesheet' href='pstyle.css'>
		</head><body id='homew'>";
   include('headcss.html');
		$con=mysqli_connect("localhost","root","","CoolSchool");
		if(!$con){
			die("<p>Error in connecting to db!</p>");
		}

$dat=date('Y-m-d');
$sql1="SELECT Cid,Subid,Dates FROM Homework WHERE Cid='2A' AND Subid='$subid' AND Dates='$dat'";
$result=mysqli_query($con,$sql1);
if(mysqli_num_rows($result)>0){
	echo "<script type='text/Javascript'>
						alert('Homework has already been inserted for today!!');
					</script>";
	include('tradio.php');
}
else{
$sql1="INSERT INTO Homework(Cid,Subid,Homeworks,Dates) VALUES ('2A','$subid','$hw','$dat')";
if(mysqli_query($con,$sql1)){
	
		$dat=date('Y-m-d');

echo "<form method='post' action='tview.php'>
<p><input input type='date' value='$dat' name='dat' class='textbox'> <input type='hidden' name='classrad' value='1B'> 
 <br/><br/><input type='submit' value='Show homework' class='button'> 
  <br/><br/><a href='logout.php'><input type='button' class='button'  value='Logout'></a></input><br/><br/>  <a href='tradio.php'><input type='button' class='button'  value='Go Back'></a></input></p>";
	}
}
echo "</body></html>";
}
else{
	header('location:wwelcome.php');
}

?>