<!doctype html>

<html>
<head>
 <meta charset="UTF-8">
 <title>Helping</title>
 <meta name="description" content="ㅁㅁㅁ">
 <link rel="stylesheet" href="files/sub.css">
 <link rel="stylesheet" href="files/matching.css">
 <link rel="icon" type="image/png" href="files/smalllogo.png">
 </head>
<body>

<form name=newvol method=post action="newvol_db.php">
<div id="home" class="big-bg">
 <?php include "header.php" ?>
       <br>

   
   <div class="home-content wrapper">
   
	<p><h1>봉사입력</h1><BR><BR>



   
 <INPUT type="text" name="title" placeholder="제목(구인 화면에서 보이는 제목입니다)" style="WIDTH: 400pt; HEIGHT: 20pt;  background:#e1eec1; font-size:1.2em; text-align:center;"><br><br>
 <INPUT type="text" name="volstart" placeholder="봉사 시작시간(년/월/일/시간 단위까지 입력)" style="WIDTH: 400pt; HEIGHT: 20pt;  background:#e1eec1; font-size:1.2em; text-align:center;"><br><br>
 <INPUT type="text" name="voladd" placeholder="봉사 장소(도/시/구/동 단위까지 입력)" style="WIDTH: 400pt; HEIGHT: 20pt;  background:#e1eec1; font-size:1.2em; text-align:center;"><br><br>
 <INPUT type="text" name="volclass" placeholder="봉사종류입력" style="WIDTH: 400pt; HEIGHT: 20pt;  background:#e1eec1; font-size:1.2em; text-align:center;"><br><br>
 
 <INPUT type="text" name="volcontent" placeholder="봉사내용" style="WIDTH: 400pt; HEIGHT: 20pt;  background:#e1eec1; font-size:1.2em; text-align:center;"><br><br>
 <INPUT type="text" name="voltime" placeholder="봉사 시간(숫자만 입력하세요)" style="WIDTH: 400pt; HEIGHT: 20pt;  background:#e1eec1; font-size:1.2em; text-align:center;"><br><br>
 <INPUT type="text" name="addcontent" placeholder="주의사항/추가사항 입력" style="WIDTH: 400pt; HEIGHT: 20pt;  background:#e1eec1; font-size:1.2em; text-align:center;"><br><br>
 

	
<BR><INPUT type="submit" value="올리기" class="button"><br>
	

</p>
	
	</div>
    </div>
	


   </body>
  </html>