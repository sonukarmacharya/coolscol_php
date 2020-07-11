<?php
  require_once('dbconnect.php');
  include('headcss.html');
  include('footcss1.html');
echo"
<html>
<head>
<title>|| HOME ||</title>
  <style type='text/css'>
  .homes{
    top:15%;
    position:absolute;
    display:block;
  }
   
    .side1{
      height:250;
      width:700;
    }
    .im{
      margin-left:auto;
      margin-right:auto;
    }
    p{
      color:black;
        vertical-align: middle;
        font-family:consolas;
        font-size:14px;
        text-transform: capitalize;
    }
    .boxx,th{
      font-family:consolas;
      font-variant:small-caps;

      -moz-box-shadow:    1px 1px 3px 4px #ccc;
  -webkit-box-shadow: 1px 1px 3px 4px #ccc;
  box-shadow:         1px 1px 3px 4px #ccc;
  height:8%;
      margin-top:-0.5%;
    }
    th{
     border-radius:0% 70% 0% 70%;
      background-color:#CB6581;
      color:white;
      height:5%;
    }
   side{
      height:250;
      width:700;
    }

  </style>
</head>
<body id='home'>
<div class='homes'>
  <table class='tab' border='0' cellspacing='20' height='5%' width='100%' align='center' >
    <tr>
    <td class='boxx'>
  <table height='300' width='900' cellspacing='20'>
    <caption><p>UT Examination Schedule 2075<br/>Class 1 to 4</p></caption>
    
    <tr align='center' class='side1'>
      <th colspan='4'>Date</td>
      <th colspan='2'>Class 1 </td>
        <th colspan='2'>Class 2</td>
      <th colspan='2'>Class 3</td>
      <th colspan='2'>Class 4</td>
    </tr>
    <tr align='center' class='side1'>
      <td class='boxx' colspan='4'>02-14</td>
      <td class='boxx' colspan='2'>Math<br>Social/Moral science</td>
      <td class='boxx' colspan='2'>Math<br>English II</td>
      <td class='boxx' colspan='2'>Math<br>Sociak/Moral science</td>
      <td class='boxx' colspan='2'>Math<br>English II</td>
    </tr>
    <tr align='center' class='side1'>
      <td class='boxx' colspan='4'>02-16</td>
      <td class='boxx' colspan='2'>English I<br>English II</td>
      <td class='boxx' colspan='2'>Science<br>Nepali I</td>
       <td class='boxx' colspan='2'>English I<br>English II</td>
      <td class='boxx' colspan='2'>Science<br>Nepali I</td>
    </tr>
    <tr align='center'>
      <td class='boxx' colspan='4'>02-17</td>
      <td class='boxx' colspan='2'>Nepali I<br>Nepali II</td>
      <td class='boxx' colspan='2'>Social<br>English I</td>
       <td class='boxx' colspan='2'>Nepali I<br>Nepali II</td>
      <td class='boxx' colspan='2'>Social<br>English I</td>
    </tr>
    <tr align='center' class='side1'>
      <td class='boxx' colspan='4'>02-18</td>
      <td class='boxx' colspan='2'>Science<br>Drawing/GK</td>
      <td class='boxx' colspan='2'>Nepali II<br>Computer/GK/Dawing</td>
       <td class='boxx' colspan='2'>Science<br>Drawing/GK</td>
      <td class='boxx' colspan='2'>Nepali II<br>Computer/GK/Dawing</td>
    </tr>

  </table>
  </td>

    ";
    echo"

    <td class='boxx' >";
    include('slide.html');
    echo"</td>
    </tr>
    <tr>
    <td class='boxx im'><img src='ans.PNG' height='320' width='100%' align='center'></td>
    <td class='boxx' class='side'>
  <iframe src='princi.html' height='100%' width='100%'>
</td>

    </tr>
  </table>
  </div>
</body>
</html>";
?>

