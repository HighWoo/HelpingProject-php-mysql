<!doctype html>
<?php
function checkid(){
	$connect = mysqli_connect('localhost','root');
    mysqli_select_db($connect,'Login');
	$checkid="select id from user";
	mysqli_query($connect,$checkid);
   if($checkid)
?>
<html>
<head>
 <meta charset="UTF-8">
 <title>Helping</title>
 <meta name="description" content="ㅁㅁㅁ">
 <link rel="stylesheet" href="files/sub.css">
 <link rel="icon" type="image/png" href="files/smalllogo.png">
 </head>
<body>
<form name=f2 method=post action="insertuser_db.php">
<div id="home" class="big-bg">
 <header class="page-header wrapper">
  <h1><a href="blogmain.html"><img class="logo" src="files/mainlogo.svg" alt="사이트 홈"></a></h1>
  <nav>
   <ul class="main-nav">
   <li><a href="Guide.html">소개</a></li>
   <li><a href="">구인구직</a></li>
   <li><a href="Vinfor.html">봉사현황</a></li>
   <li><a href="Service.html">고객센터</a></li>
   <li><a href="">로그인</a></li>

   </ul>
   </nav>
   </header>
   
   <div class="home-content wrapper">
   
	<p><h1>회원가입</h1><BR><BR>




	<strong>아이디</strong>	<div style="text-align:center"> <INPUT type="text" name="userid" placeholder="아이디" style="WIDTH: 133pt; HEIGHT: 20pt; background:#9ba5a0; font-size:1.0em;">
	<INPUT type="button" value="확인" button style="WIDTH: 33pt; HEIGHT: 24pt; color:; background:#f1eac3; font-size:0.9em; onclick="checkid();""><BR>
	<strong>비밀번호</strong> 	<div style="text-align:center"><INPUT type="password" name="userpw" placeholder="비밀번호" style="WIDTH: 170pt; HEIGHT: 20pt;  background:#9ba5a0; font-size:1.0em;"><BR>
	<strong>비밀번호확인</strong>	<div style="text-align:center"><INPUT type="password" name="userpwr" placeholder="비밀번호" style="WIDTH: 170pt; HEIGHT: 20pt;  background:#9ba5a0; font-size:1.0em;"><BR>
	<strong>이름</strong> 	<div style="text-align:center"><INPUT type="text" name="username" placeholder="이름" style="WIDTH: 170pt; HEIGHT: 20pt;  background:#9ba5a0; font-size:1.0em;"><BR>
	<strong>주소</strong>	<div style="text-align:center"> <INPUT type="text" name="useraddr" placeholder="주소 예)17869 경기도 평택시 서동대로 3825 " style="WIDTH: 170pt; HEIGHT: 20pt;  background:#9ba5a0; font-size:1.0em;"><BR>
	<strong>주민등록번호</strong>	<div style="text-align:center"> <INPUT type="password" name="ssn" placeholder="주민등록번호 (13자리 -제외)" style="WIDTH: 170pt; HEIGHT: 20pt;  background:#9ba5a0; font-size:1.0em;"><BR>
	<strong>전화번호</strong>	<div style="text-align:center"> <INPUT type="text" name="phonenum" placeholder="전화번호 (-)를 제외하고 입력" style="WIDTH: 170pt; HEIGHT: 20pt;  background:#9ba5a0; font-size:1.0em;"><BR>
	
	
	<BR><INPUT type="submit" value="회원가입" button style="WIDTH: 70pt; HEIGHT: 30pt; color:; background:#f1eac3; font-size:1em;">
	

</p>
	
	</div>
    </div>
	


   </body>
  </html>