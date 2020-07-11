<?php
session_start();
if(isset($_SESSION["iid"])){
echo "<html><head>
<title>|| Assign ||</title>
			<link rel='stylesheet' href='pstyle.css'>
		</head><body id='homew'>";
   include('headcss.html');include('footcss1.html');
	echo "<h1>Welcome to Teacher Page</h1><br/>";
	$subb=$_POST['subrad'];
	echo "<h1>INSERT INTO ".$subb."</h1><br/>";
	echo "
	<table border='2' cellspacing='0' width='80%' align='center'>
			<tr>
			<td>Class 1A:</td>
			<td><form method='post' action='assignteacher1a.php'><textarea rows='1' cols='60' name='t1a' class='textbox'></textarea><input type='hidden' name='subid' value='".$subb."'>
			  <input type='submit' class='button' value='Assign'></form></td>
			</tr>

			<tr>
			<td>Class 1B:</td>
			<td><form method='post' action='assignteacher1b.php'><textarea rows='1' cols='60' name='t1b' class='textbox'></textarea> <input type='hidden' name='subid' value='".$subb."'>
			  <input type='submit' class='button' value='Assign'></form></td>
			</tr>

			<tr>
			<td>Class 2A:</td>
			<td><form method='post' action='assignteacher2a.php'><textarea rows='1' cols='60' name='t2a' class='textbox'></textarea>  <input type='hidden' name='subid' value='".$subb."'>
			  <input type='submit' class='button' value='Assign'></form></td>
			</tr>

			<tr>
			<td>Class 2B:</td>
			<td><form method='post' action='assignteacher2b.php'><textarea rows='1' cols='60' name='t2b' class='textbox'></textarea> <input type='hidden' name='subid' value='".$subb."'>
			  <input type='submit' class='button' value='Assign'></form></td>
			</tr>

			<tr>
			<td>Class 3A:</td>
			<td><form method='post' action='assignteacher3a.php'><textarea rows='1' cols='60' name='t3a' class='textbox'></textarea>  <input type='hidden' name='subid' value='".$subb."'>
			  <input type='submit' class='button' value='Assign'></form></td>
			</tr>

			<tr>
			<td>Class 3B:</td>
			<td><form method='post' action='assignteacher3b.php'><textarea rows='1' cols='60' name='t3b' class='textbox'></textarea>  <input type='hidden' name='subid' value='".$subb."'>
			  <input type='submit' class='button' value='Assign'></form></td>
			</tr>

			<tr>
			<td>Class 4A:</td>
			<td><form method='post' action='assignteacher4a.php'><textarea rows='1' cols='60' name='t4a' class='textbox'></textarea>  <input type='hidden' name='subid' value='".$subb."'>
			  <input type='submit' class='button' value='Assign'></form></td>
			</tr>

			<tr>
			<td>Class 4B:</td>
			<td><form method='post' action='assignteacher4b.php'><textarea rows='1' cols='60' name='t4b' class='textbox'></textarea> <input type='hidden' name='subid' value='".$subb."'>
			  <input type='submit' class='button' value='Assign'></form></td>
			</tr>";
	echo "</table>";
	echo"<br/><p><a href='tradio.php'><input type='button' class='button'  value='Go Back'></input> <a href='logout.php'><input type='button' class='button'  value='Logout'></a></input><br/>";
	echo"</p></form></body></html>";
}
else{
	header('location:wwelcome.php');
}
?>
