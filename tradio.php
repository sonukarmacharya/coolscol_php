<?php
session_start();
?>
<?php
if(isset($_SESSION["iid"])){
echo"
<html>
<head>
<title>|| Assign ||</title>
	<link rel='stylesheet' href='pstyle.css'>
</head>
<body id='homew'>";
   include('headcss.html');
   include('footcss1.html');
   
   echo"
<form method='post' action='teacherlogged.php'><p>
	<h1>Select Subject To Assign Homework</h1><br/><p>
				<input type='radio' name='subrad' id='Sci' value='Sci'>  Science 
						<input type='radio' name='subrad' value='Soc'  id='Soc'>  Social 
						<input type='radio' name='subrad' value='EnI'  id='EnI'>  English I 
						<input type='radio' name='subrad' value='EnII'  id='EnII'>  English II <br/><br/>
						<input type='radio' name='subrad' value='Math'  id='Math'>  Math 
						<input type='radio' name='subrad' value='Nep' id='Nep'>  Nepali 
						<input type='radio' name='subrad' value='Draw' id='Draw'>  Drawing<br/><br/></p><p>
						<input type='submit' class='button' value='Assign!'> <a href='logout.php'><input type='button' class='button'  value='Logout'></a></input></p>
						</p>
					</form>
			</body>
	</html>";
}
else{
	header('location:wwelcome.php');
}
	
	?>