<!doctype html>

<html>
<head>
 <meta charset="UTF-8">
 <title>Helping</title>
 <meta name="description" content="ㅁㅁㅁ">
 <link rel="stylesheet" href="files/main.css">
  <link rel="stylesheet" href="files/matching.css">
 <link rel="icon" type="image/png" href="files/smalllogo.png">
 </head>

<body>

<div id="home" class="big-bg">
 <header class="page-header wrapper">
 
  <h1><a href="alogmain.php"><br><img class="logo" src="files/mainlogo.svg" alt="사이트 홈"></a></h1>
  <nav>
   <ul class="main-nav">
   <li><a href="aGuide.html">소개</a></li>
  
   <li><a href="voloruser.php">구인구직</a></li>

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
    <h2 class="page-title">We Help The People.</h2>
	<p> 작은 봉사로 행복을 느끼세요. 우리는 언제나 어디서나 봉사할수 있도록 당신을 돕습니다.</p>
	<a class="button" href="voloruser.php">봉사시작하기</a>
	<a class="button" href="userorvol2.php">매칭정보확인</a>
    
	</div>
    </div>
   </body>
  </html>