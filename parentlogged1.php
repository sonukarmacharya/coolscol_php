<?php
session_start();?>
<?php


$classrad=$_POST['classrad'];
$date=$_POST['dat'];

$con=mysqli_connect("localhost","root","","CoolSchool");
		if(!$con){
			die("<p>Error in connecting to db!</p>");
		}
if(isset($_SESSION["iid"])){
	echo "<html><head>
    <title>|| Check ||</title>
			<link rel='stylesheet' href='pstyle.css'>
		</head><body id='homew'>";
   include('headcss.html');include('footcss1.html');

   echo"
        <h1>Showing homeworks for ".$date."</h1><br/>
        <table border='2' cellspacing='0' width='100%' height='30%' align='center'><tr><th>Science</th><th>Social</th><th>English I </th><th>English II</th><th>Math</th><th>Nepali</th><th>Drawing</th></tr><tr>";

	$sql="SELECT Homeworks FROM Homework WHERE Cid='$classrad' AND Subid='Sci' AND Dates='$date'";
    $result=mysqli_query($con,$sql);
   if(mysqli_num_rows($result)<1){
    	echo "<th>No Homework for Today!</th>";
    }
    else{
    	while($row=mysqli_fetch_assoc($result)){
    		echo "<td>".$row['Homeworks']."</td>";
	    }
	}

	$sql="SELECT Homeworks FROM Homework WHERE Cid='$classrad' AND Subid='Soc' AND Dates='$date'";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)<1){
    	echo "<th>No Homework for Today!</th>";
    }
    else{
    	while($row=mysqli_fetch_assoc($result)){
    		echo "<td>".$row['Homeworks']."</td>";
	    }
	}

	$sql="SELECT Homeworks FROM Homework WHERE Cid='$classrad' AND Subid='EnI' AND Dates='$date'";
	$result=mysqli_query($con,$sql);   
    if(mysqli_num_rows($result)<1){
    	echo "<th>No Homework for Today!</th>";
    }
    else{
    	while($row=mysqli_fetch_assoc($result)){
    		echo "<td>".$row['Homeworks']."</td>";
	    }
	}

	$sql="SELECT Homeworks FROM Homework WHERE Cid='$classrad' AND Subid='EnII' AND Dates='$date'";
	$result=mysqli_query($con,$sql);  
    if(mysqli_num_rows($result)<1){
    	echo "<th>No Homework for Today!</th>";
    }
    else{
    	while($row=mysqli_fetch_assoc($result)){
    		echo "<td>".$row['Homeworks']."</td>";
	    }
	}

	$sql="SELECT Homeworks FROM Homework WHERE Cid='$classrad' AND Subid='Math' AND Dates='$date'";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)<1){
    	echo "<th>No Homework for Today!</th>";
    }
    else{
    	while($row=mysqli_fetch_assoc($result)){
    		echo "<td>".$row['Homeworks']."</td>";
	    }
	}

	$sql="SELECT Homeworks FROM Homework WHERE Cid='$classrad' AND Subid='Nep' AND Dates='$date'";
	$result=mysqli_query($con,$sql);  	
		if(mysqli_num_rows($result)<1){
    	echo "<th>No Homework for Today!</th>";
    }
    else{
    	while($row=mysqli_fetch_assoc($result)){
    		echo "<td>".$row['Homeworks']."</td>";
	    }
	}

	$sql="SELECT Homeworks FROM Homework WHERE Cid='$classrad' AND Subid='Draw' AND Dates='$date'";
	$result=mysqli_query($con,$sql); 
    if(mysqli_num_rows($result)<1){
    	echo "<th>No Homework for Today!</th>";
    }
    else{
    	while($row=mysqli_fetch_assoc($result)){
    		echo "<td>".$row['Homeworks']."</td>";
	    }
	}

echo "</tr></table>";
	echo"<br/><p><a href='pradio.php'><input type='button' class='button'  value='Go Back'></a></p>";
	echo"</body></html>";
}
else{
    header('location:wwelcome.php');
}

	?>