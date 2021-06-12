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
<script>
function ck_passwd(){
	if(signup.userpw.value!=signup.userpwr.value){
		alert("비밀번호가 같지 않습니다");
		signup.userpw.value="";
		signup.userpwr.value="";
		signup.userpw.focus();
		return false;
	}
}
  function chk_id( )
  {
	if(signup.userid.value=='') {
		alert('아이디를 입력해 주세요');
		signup.userid.focus();
	} else {
window.open('id_chk.php?userid='+signup.userid.value,'IDwin', 'width=400, height=200,left=750,Top=130');
	}
  }

</script>
<form name=signup method=post action="insertuser_db.php">
<div id="home" class="big-bg">
 <?php include "header.php" ?>
   
   <div class="home-content wrapper">
   
	<p><h1>회원가입</h1><BR><BR>



    <input type="radio" name="vaorus" value="봉사자" ><strong>봉사자</strong>
    <input type="radio" name="vaorus" value="사용자" checked="checked"><strong>사용자</strong><br>
	<strong>아이디</strong>	<div style="text-align:center"> <INPUT type="text" name="userid" placeholder="아이디" style="WIDTH: 133pt; HEIGHT: 20pt; background:#9ba5a0; font-size:1.0em;">
	<INPUT type="button" value="확인" onClick="chk_id();" button style="WIDTH: 33pt; HEIGHT: 24pt; color:; background:#f1eac3; font-size:0.9em; "><BR>
	<strong>비밀번호</strong> 	<div style="text-align:center"><INPUT type="password" name="userpw" placeholder="비밀번호" style="WIDTH: 170pt; HEIGHT: 20pt;  background:#9ba5a0; font-size:1.0em;"><BR>
	<strong>비밀번호확인</strong>	<div style="text-align:center"><INPUT type="password" name="userpwr"  placeholder="비밀번호" onblur="ck_passwd()" style="WIDTH: 170pt; HEIGHT: 20pt;  background:#9ba5a0; font-size:1.0em;"><BR>
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