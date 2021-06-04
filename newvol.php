<!doctype html>

<html>
<head>
 <meta charset="UTF-8">
 <title>Helping</title>
 <meta name="description" content="ㅁㅁㅁ">
 <link rel="stylesheet" href="files/sub.css">
 <link rel="icon" type="image/png" href="files/smalllogo.png">
 </head>
<body>

<form name=newvol method=post action="newvol_db.php">
<div id="home" class="big-bg">
 <header class="page-header wrapper">
  <h1><a href="blogmain.html"><img class="logo" src="files/mainlogo.svg" alt="사이트 홈"></a></h1>
  <nav>
   <ul class="main-nav">
   <li><a href="Guide.html">소개</a></li>
   <li><a href="">구인구직</a></li>
   <li><a href="Vinfor.php">봉사현황</a></li>
   <li><a href="Service.html">고객센터</a></li>
   <li><a href="login.php">로그인</a></li>

   </ul>
   </nav>
   </header>
  <?php
session_start(); 
echo "<p align='right' style='font-size:20px'>";
echo "[ ";
echo  $_SESSION['id'];
echo  " ]님 환영합니다";
echo "</p>";
?>
   
   <div class="home-content wrapper">
   
	<p><h1>봉사입력</h1><BR><BR>



   
 <INPUT type="text" name="title" placeholder="제목(구인 화면에서 보이는 제목입니다)" style="WIDTH: 400pt; HEIGHT: 20pt;  background:#e1eec1; font-size:1.2em; text-align:center;"><br><br>
 <INPUT type="text" name="volstart" placeholder="봉사 시작시간(년/월/일/시간 단위까지 입력)" style="WIDTH: 400pt; HEIGHT: 20pt;  background:#e1eec1; font-size:1.2em; text-align:center;"><br><br>
 <INPUT type="text" name="volclass" placeholder="봉사종류입력" style="WIDTH: 400pt; HEIGHT: 20pt;  background:#e1eec1; font-size:1.2em; text-align:center;"><br><br>
 <INPUT type="text" name="volcontent" placeholder="봉사내용" style="WIDTH: 400pt; HEIGHT: 20pt;  background:#e1eec1; font-size:1.2em; text-align:center;"><br><br>
 <INPUT type="text" name="voltime" placeholder="봉사 시간(숫자만 입력하세요)" style="WIDTH: 400pt; HEIGHT: 20pt;  background:#e1eec1; font-size:1.2em; text-align:center;"><br><br>
 

	
<BR><INPUT type="submit" value="올리기" class="button"><br>
	

</p>
	
	</div>
    </div>
	


   </body>
  </html>