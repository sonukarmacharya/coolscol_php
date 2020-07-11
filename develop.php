<html>
	<head>
		<style type="text/css">
			td.td1{
        height: 70%;
         width: 25%;
         padding-bottom: 30px;
         padding-top: 30px;
         margin-right:40px;
			}	

			.t1{
				background-color: Bisque;
    			color: white;
				}
			.container {
    			position: relative;
   				 width: 120%;
				}

.image {
  opacity: 0.7;
  display: block;
  width: 100%;
  height: 70%;
  transition: .5s ease;
  backface-visibility: hidden;
  margin-left: -10px;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.container:hover .image {
  opacity: 0.3;
}

.container:hover .middle {
  opacity: 1;
}

.text {
  background-color: Teal;
  color: white;
  font-size: 16px;
  padding: 20px 32px;
  margin-left:50px;
}

.topnav {
    background-color: #333;
    overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
    float: right;
    color: #f2f2f2;
    text-align: center;
    padding: 25px 40px;
    text-decoration: unset;
    font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
    background-color: Light Blue;
    color: white;

    }

    .text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
}


		</style>
	</head>
	<body bgcolor="Bisque">
		<form method="post">
		<table class="t1" border='0' height='20%' width='100%'>
			
			<tr>
				<td rowspan="5" colspan="5"><img src="logo.png" width="100px" height="100px"></img>
				</td>
			</tr>

			<tr>
			</tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr> </table>
        <table class="t1" border='0' height='5%' width='100%'>
       <tr>  
        <div class="topnav">
          <a href="abc.php">About</a>
          <a href="abc.php">News</a>
          <a href="abc.php">Contact</a>
         <a class="active" href="abc.php">Home</a>
        </div>
			  </div>
			</tr>	
			</table>
      <table border='0' height='100%' width='100%' cellpadding='50px' cellspacing='50px'>
        <tr><td class='td1'><div class="container">
          <img src="b.jpg" alt="Avatar" class="image"  style="width:100%">
        <div class="overlay">
          <div class="text">Sujata Khadka</a></div>
          </div></div></td>

          <td class='td1'><div class="container">
          <img src="b.jpg" alt="Avatar" class="image" style="width:100%" >
           <div class="overlay">
          <div class="text">Dipa Rokka</a></div>
          </div></div></td>

          <td class='td1'><div class="container">
          <img src="b.jpg" alt="Avatar" class="image" style="width:100%" >
           <div class="overlay">
          <div class="text">Laxmi Manandhar</a></div>
          </div></div></td>

          <td class='td1'><div class="container">
          <img src="b.jpg" alt="Avatar" class="image" style="width:100%">
         <div class="overlay">
          <div class="text">Sonu Karmacharya</a></div>
          </div></div></td>
         </tr>  
       </table>   
			
	</body>
</html>					