<?php
echo
"<html>
<head>
	<title></title>
	<link rel='stylesheet' type='text/css' href='css.css'>
	<link rel='stylesheet' type='text/css' href='pstyle.css'>
	<style>
		.mp  {
			height:70%;
			width:80%;
			}
		
	</style>
</head>

<body class='devs' id='dev'>";
include('headcss.html');include('footcss1.html');
echo"

<h1>Welcome To Location </h1>
<center><table class='mp'>
<tr>
<th>DAV map</th>
<th>CoolSchool office map</th>
</tr>
<tr>
<td>";
include('hmmap.html');
echo"</td><td>";
include('myofc.html');
echo"</td>
</tr>
<tr>
<td>Telephone:4670688,2013263</td>
<td>Telephone:9861845592,9818267244</td>

</tr>
<tr>
<td>E-mail:davschool@wlink.com.np</td>
<td>E-mail:cool@school.com.np</td>

</tr>

</table></center>";
echo "</body></html>";

?>