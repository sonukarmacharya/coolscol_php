<?php
$default=$_POST;
	echo "<html>
		<head>
		<title>|| Sign up as Parent ||</title>
			
			<link rel='stylesheet' href='pstyle.css'>
		</head>
		<body id='homew'>";
   include('headcss.html');include('footcss1.html');
 
   echo"<table border='0' cellspacing='0'>
			<form method='post' action='parentsignupvalid.php' name='pform'>
				<h1>Signing Up As PARENT</h1><br/>
				<p>
				Parent ID: <input type='text' name='pid' required class='textbox' placeholder='Same as Student ID'><br/><br/>
				Email: <input type='email' name='pemail' required class='textbox'><br/><br/>
				Password: <input type='password' name='ppass1' required class='textbox'><br/><br/>
				Confirm Password: <input type='password' name='ppass2' required class='textbox'><br/><br/>
				<input type='submit' value='Sign Up' class='button'> <input type='reset' value='Reset' class='button'>  <a href='wwelcome.php' ><input type='button' class='button'  value='Go Back'></a></input>
				</p>
			</form>
			</table>	
		</body>
	</html>";

?>