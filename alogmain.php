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
 <?php include "header.php" ?>

       <br>

  
   <div class="home-content wrapper">
    <h2 class="page-title">We Help The People.</h2>
	<p> 작은 봉사로 행복을 느끼세요. 우리는 언제나 어디서나 봉사할수 있도록 당신을 돕습니다.</p>
	<a class="button" href="voloruser.php">봉사시작하기</a>
	<?php if($id){?>
	<a class="button" href="userorvol2.php">매칭정보확인</a>
  <?php } ?>
	</div>
    </div>
   </body>
  </html>