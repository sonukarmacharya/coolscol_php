<?php
$default=$_POST;
	echo "<html>
		<head>
			<title>|| Sign up as Teacher ||</title>
			<link rel='stylesheet' href='pstyle.css'>
		</head>
		<body id='homew'>";
   include('headcss.html');include('footcss1.html');
   echo"
			<form method='post' action='teachersignupvalid.php' name='pform'>
				<h1>Signing Up As TEACHER</h1>
				<p><br/>
				Teacher ID: <input type='text' name='tid' value='".htmlentities($default['tid'])."' required placeholder='T###' class='textbox'><br/><br/>
				Email: <input type='email' name='pemail' value='".htmlentities($default['pemail'])."' required class='textbox'><br/><br/>
				Password: <input type='password' name='ppass1' value='".htmlentities($default['ppass1'])."' required class='textbox'><br/><br/>
				Confirm Password: <input type='password' name='ppass2'  value='".htmlentities($default['ppass2'])."' required class='textbox'><br/><br/>
				<input type='submit' value='Sign Up' class='button'> <input type='reset' value='Reset' class='button'>  <a href='wwelcome.php'><input type='button' class='button'  value='Go Back'></a></input>
				<br/></p>
			</form>
		</body>
	</html>";
?>