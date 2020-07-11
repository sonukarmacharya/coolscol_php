<?php
 echo    "<html><head>
    <title>|| Admission ||</title>
    <style type='text/css'>

    .fe{
           color:black; 
           font-family:consolas;
           font-variant: small-caps;
          width:90%;
          font-size:28px;
          text-indent: 100px;
  text-align: justify;
  margin: 0 auto;
}
    .boxx{
      -moz-box-shadow:    3px 3px 5px 6px #ccc;
  -webkit-box-shadow: 3px 3px 5px 6px #ccc;
  box-shadow:         3px 3px 5px 6px #ccc;

      margin-top:-10%;
    }
    th{
      border-radius:0% 70% 0% 70%;
      background-color:#98FFA6;
    }

    .list{
      list-style-type: decimal;
      padding-left:80px;
      font-family:consolas;
      font-variant: small-caps;
      font-size:25px;
    }

   
    </style>
    <link rel='stylesheet' type='text/css' href='pstyle.css'>
    <link rel='stylesheet' type='text/css' href='css.css'>
  </head><body id='fee' class='fee'>";
   include('headcss.html');include('footcss1.html');
  echo" 
<h1>Welcome To Admissions</h1><br/>
  <p class='fe'>Admission opens in the month of Chaitra from Kindergarten to Class IV. Interested students need to Complete Admission Procedures in order to get admission.  Students are selected based on their written examination followed by parents/guardians interview.<br></p>

  <p><br/><h1>Registration fee</h1> </p>
  <p class='fe'>Registration fee is required for each child before enrolling the DAV. Registration fee is not refundable. Security deposit (refundable) will also be made at the time of registration.</p><br/><br>
  
  <p><br/><h1>Documents Required for Enrollment</h1></p><p class='fe'>
<ol class='list'>
 <li> 2 copies of passport size photographs</li>
 <li>Photocopy of the birth certificate</li>
 <li>Parents id(citzenship/licence)</li>
  <li>Photocopy of the latest  result</li>
  <li>Original Transfer Certificate from the previous school</li></ol></p><br><br>";

echo"
  <table border='0' width='95%' align='center' cellspacing='20'><br/>
<h1>Fee Structure</h1>
<tr>
          <th class='boxx'>Require</th>
        <th class='boxx'>Pay-time</th>
        <th class='boxx'>Class-fee</th>
        <th class='boxx'>1</th>
        <th class='boxx'>2</th>
        <th class='boxx'>3</th>
        <th class='boxx'>4</th>
      </tr>

    <tr>
         <td class='boxx'>Compulsary</td>
         <td class='boxx'>Yearly</td>
         <td class='boxx'>Admission</td>
         <td class='boxx'>20000</td>
         <td class='boxx'>20000</td>
         <td class='boxx'>30000</td>
         <td class='boxx'>28000</td>
       </tr>
         <tr>
              <td class='boxx'>Optional</td>
              <td class='boxx'>Monthly</td>
              <td class='boxx'>Transportation</td>
              <td class='boxx'>1500</td>
              <td class='boxx'>1500</td>
              <td class='boxx'>2000</td>
              <td class='boxx'>2000</td>
       </tr>
         <tr>
              <td class='boxx'>Optional</td>
              <td class='boxx'>Yearly</td>
              <td class='boxx'>Tuition</td>
              <td class='boxx'>1500</td>
              <td class='boxx'>1500</td>
              <td class='boxx'>2000</td>
              <td class='boxx'>2000</td>
       </tr>
         <tr>
              <td class='boxx'>Compulsary</td>
              <td class='boxx'>Monthly</td>
              <td class='boxx'>medical</td>
              <td class='boxx'>200</td>
              <td class='boxx'>200</td>
              <td class='boxx'>200</td>
              <td class='boxx'>200</td>
          </tr>
            <tr>
              <td class='boxx'>Optional</td>
              <td class='boxx'>Monthly</td>
              <td class='boxx'>Hostel</td>
              <td class='boxx'>3500</td>
              <td class='boxx'>3500</td>
              <td class='boxx'>3000</td>
              <td class='boxx'>3000</td>
          </tr>
            <tr>
              <td class='boxx'>Compulsary</td>
              <td class='boxx'>Monthly</td>
              <td class='boxx'>ECA games/outing</td>
              <td class='boxx'>500</td>
              <td class='boxx'>500</td>
              <td class='boxx'>500</td>
              <td class='boxx'>500</td>
          </tr>
       </tr>";

     echo "</table><br/><br/></body></html>";

  ?>


