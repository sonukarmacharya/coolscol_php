<?php

$default=$_POST;
	echo "<html>
		<head>
			<title>|| Sign up as Parent ||</title>
			<link rel='stylesheet' href='pstyle.css'>
		</head>
		<body id='homew'>";
   include('headcss.html');include('footcss1.html');
   echo"
			<form method='post' action='parentsignupvalid.php' name='pform'>
				<h1>Signing Up As PARENT</h1><br/>
				<p>
				Parent ID: <input type='text' name='pid'  value='".htmlentities($default['pid'])."' required class='textbox' placeholder='Same as Student ID'><br/><br/>
				Email: <input type='email' name='pemail' value='".htmlentities($default['pemail'])."' required class='textbox'><br/><br/>
				Password: <input type='password' name='ppass1' value='".htmlentities($default['ppass1'])."' required class='textbox'><br/><br/>
				Confirm Password: <input type='password' name='ppass2'  value='".htmlentities($default['ppass2'])."' required class='textbox'><br/><br/>
				<input type='submit' value='Sign Up' class='button'> <input type='reset' value='Reset' class='button'>  <a href='wwelcome.php'><input type='button' class='button'  value='Go Back'></a></input>
				</p>
			</form>
		</body>
	</html>";
?>