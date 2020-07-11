<?php	
echo "<html>
<head>
			<title>Welcome</title>
			<link rel='stylesheet' href='pstyle.css'>
			</head>
   <body id='homew'>";
   include('headcss.html');
 
   echo"
     <h1>Welcome To CoolSchool Diary!!</h1><br/><br/><div>
      <form method='post' action='diarycheck.php'>
	  Email:<table border='0' cellspacing='0'><tr><td> <input type='textbox' name='email' class='textbox' required></td></tr></table><br><br/>
	  Password:<table border='0' cellspacing='0'><tr><td> <input type='password' name='pw' class='textbox' required></td></tr></table><br>
	  <input type='submit' value='Login' class='button'> 	  <input type='reset' value='Reset' class='button'><br/><br/></div>
	   </form> 
	  <form method='post' action='signupvalid.php'><div>
	<h1>No Account? Sign Up As:</h1>
	<input type='radio' name='check' value='teacher' checked>Teacher  
	<input type='radio' name='check' value='parent'>  Parent
	<br/><br/>
	 <input type='submit' value='Signup' class='button'></div>
	
	 </form>
	 </body>
	 </html>";
	 ?>

	 