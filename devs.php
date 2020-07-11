<?php
include('footcss1.html');
echo "<html>
		<head>
			<style type='text/css'>
			.rowsp{
				width:10%
			}
			p,table{
				text-align: justify;
	color:#061A30;
	font-family: consolas;
	font-size: 20px;
			}
			.down{
				position:absolute;
				bottom:0px;
			}
			</style>
		</head><body>";
	
	echo "<table border='1' width='100%'>";
	
	echo "<tr>
			<td rowspan='3' class='rowsp'><img src='t1.png' width='100' height='100'></td>
			<td>Name:Sujata Khadka</td>
			<td>Name:Dipa Rokka</td>
			<td rowspan='3' class='rowsp'><img src='t2.png' width='100' height='100'></td>
			</tr>";
	echo "<tr>
		    <td>Contact:9807654321</td>
		    <td>Contact:9876543210</td>
		    </tr>";

	echo "<tr>
		    <td>Email:Suju@gmail.com</td>
		    <td>Email:Dipa@gmail.com</td>
		    </tr></table>";	  

	echo "
		  <p align='center'>About Coolschool!! Our company is a web-design based company formed in 2018. Whenever I get a package of plain M&Ms, I make it my duty to continue the strength and robustness of the candy as a species. To this end, I hold M&M duels. Taking two candies between my thumb and forefinger, I apply pressure, squeezing them together until one of them cracks and splinters. That is the 'loser,' and I eat the inferior one immediately. The winner gets to go another round. I have found that, in general, the brown and red M&Ms are tougher, and the newer blue ones are genetically inferior. I have hypothesized that the blue M&Ms as a race cannot survive long in the intense theatre of competition that is the modern candy and snack-food world.

              Occasionally I will get a mutation, a candy that is misshapen, or pointier, or flatter than the rest. Almost invariably this proves to be a weakness, but on very rare occasions it gives the candy extra strength In this way, the species continues to adapt to its environment.

              When I reach the end of the pack, I am left with one M&M, the strongest of the herd. Since it would make no sense to eat this one as well, I pack it neatly in an envelope and send it to:

              M&M Mars, A Division of Mars, Inc. Hackettstown, NJ 17840-1503 U.S.A.

         along with a 3x5 card reading, 'Please use this M&M for breeding purposes.'

     This week they wrote back to thank me, and sent me a coupon for a free 1/2 pound bag of plain M&Ms. I consider this 'grant money.' I have set aside the weekend for a grand tournament. From a field of hundreds, we will discover the True Champion. There can be only one.</p>";	      
echo "<table border='1' width='100%' class='down'>";
	echo "<tr>
			<td rowspan='3' class='rowsp'><img src='t3.png' width='100' height='100'></td>
			<td>Name:Laxmi Manandhar</td>
			<td>Name:Sonu karmacharya</td>
			<td rowspan='3' class='rowsp'><img src='t4.png' width='100' height='100'></td>
			</tr>";
	echo "<tr>
		    <td>Contact:9801112233</td>
		    <td>Contact:9832145678</td>
		    </tr>";

	echo "<tr>
		    <td>Email:lux@gmail.com</td>
		    <td>Email:sonu@gmail.com</td>
		    </tr>";	    	    

	echo "</body></html></table>";
?>	