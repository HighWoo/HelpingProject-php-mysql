<!doctype html>
<html>
<head>
 <meta charset="UTF-8">
 <meta name="description" content="ㅁㅁㅁ">
 <link rel="stylesheet" href="files/sub.css">
   <link rel="stylesheet" href="files/matching.css">
 <link rel="icon" type="image/png" href="files/smalllogo.png">
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Helping</title>
 </head>
<body>
<div id="home" class="big-bg">
 <header class="page-header wrapper">
  <h1><a href="blogmain.html"><br><img class="logo" src="files/mainlogo.svg" alt="사이트 홈"></a></h1>
  <nav>
   <ul class="main-nav">
   <li><a href="aGuide.html">소개</a></li>
   <li><a href="notice.php">구인구직</a></li>
   <li><a href="Vinfor.php">봉사현황</a></li>
   <li><a href="Service.php">고객센터</a></li>
    <li><a href="informod.php">내정보</a></li>
  <li><a href="blogmain.html" onclick="alert('로그아웃 되었습니다');">로그아웃</a></li>

   </ul>
   </nav>
   </header>
          <br>
  <?php
session_start(); 
echo "<p align='right' style='font-size:20px' >";
echo "  -----[      ";
echo  $_SESSION['voru'];

echo "    ";
echo  $_SESSION['name'];
echo  " 님 환영합니다 ]-----";
	
echo "</p>";
?>
   
   <div class="home-content wrapper">
   

 

<center>
<body>
<h1>내정보</h1><BR>
<h3>원하는 항목을 클릭하세요</h3><BR><BR>	

<UL type="disc">
</UL>

<input class="button" type="button" onClick="location.href='informodlogin.php'" value="정보 수정" button style="WIDTH: 250pt; HEIGHT: 100pt; color:white;  font-size:2.0em; text-align:center;">
<input class="button" type="button" onClick="location.href='vollookup.php'" value="봉사내역조회" button style="WIDTH: 250pt; HEIGHT: 100pt; color:white;  font-size:2.0em; text-align:center;">
<input  class="button" type="button" onClick="location.href='userorvol2.php'" value="봉사진행현황" button style="WIDTH: 250pt; HEIGHT: 100pt; color:white;  font-size:2.0em; text-align:center;">






 </font>



 </body>
 
 </center>
</html>

