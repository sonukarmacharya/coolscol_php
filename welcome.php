<?php
session_start();
session_unset();
session_destroy();
?>
<?php	

echo "<html>
	<head>
			<title>|| Login ||</title>
			<link rel='stylesheet' href='pstyle.css'>
			</head>
   <body id='homew' class='hw'>";
   include('headcss.html');
   include('footcss1.html');
   echo"
     <h1>Welcome To CoolSchool Diary!!</h1><br/><br/>
      <form method='post' action='diarycheck.php'><p>
	  Email:<table border='0' cellspacing='0' class='tabtext'><tr><td> &nbsp;<input type='textbox' name='email' class='textbox' required value='".htmlentities($_POST['email'])."'></td></tr></table><br>
	  Password:<table class='tabtext' border='0' cellspacing='0'><tr><td> &nbsp;<input type='password' name='pw' class='textbox' required value='".htmlentities($_POST['pw'])."'></td></tr></table><br>
	  <input type='submit' value='Login' class='button'> 	  <input type='reset' value='Reset' class='button'><br/><br/><br/></p>
	   </form>
	  <form method='post' action='signupvalid.php'>
	<h1>No Account? Sign Up As:</h1><br/><p>
	<input type='radio' name='check' value='teacher' checked>  Teacher  
	<input type='radio' name='check' value='parent'>  Parent
	<br/><br/>
	 <input type='submit' value='Signup' class='button'></p>
	
	 </form>
	 </body>
	 </html>";
	 ?>	 