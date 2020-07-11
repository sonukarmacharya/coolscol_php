<?php
session_start();
if(isset($_SESSION["iid"])){
	echo "<html><head>
	<title>|| Check ||</title>
			<link rel='stylesheet' href='pstyle.css'>
		</head><body id='homew'>";
   include('headcss.html');include('footcss1.html');
	echo "<h1>Welcome to Parent Page</h1><br/>";
	$classrad=$_POST['classrad'];
	$datenow=date('Y-m-d');
	echo "<form method='post' action='parentlogged1.php'><p><input type='text' value='$datenow' name='dat' placeholder='YYYY-MM-DD' class='textbox'> <input type='hidden' name='clasrad' value='".$classrad."'> <br/><br/><input type='submit' value='Show homework' class='button'> <br/><br/>";
	echo"<a href='pradio.php'><input type='button' class='button'  value='Go Back'></a></input><br/><br/><a href='logout.php'><input type='button' class='button'  value='Logout'></a></p></form></body></html>";
}
else{
	header('location:wwelcome.php');
}
		?>					