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
<div id="home" class="big-bg">
 <?php include "header.php"; 
 $id=$_SESSION['id'];
 include ("connect_db.php"); 
 $query = "select * from user where id ='$id'";
 $result = $connect->query($query);
 $rows = mysqli_fetch_array($result);

 
 ?>
  
<br><div style= "font-size:3em; color:black; text-align:center;">[정보수정]</div>


<div style= "font-size:1em; color:black; text-align:center;">정보수정 창입니다<BR>수정할 정보를 입력하고 등록 버튼을 눌러주세요</div>
<SCRIPT language="javascript">


</SCRIPT>

<FORM action=user_modify.php method=post name=form1 onsubmit="return check();"><BR>

	
	<strong><div style="text-align:center">비밀번호</strong></div> 	<div style="text-align:center"><INPUT type="password" name="userpw" placeholder="비밀번호" style="WIDTH: 170pt; HEIGHT: 20pt; color:black; background:white; font-size:1.0em;"><BR><BR>
	<strong>비밀번호확인</strong>	<div style="text-align:center"><INPUT type="password" name="userpwr" placeholder="비밀번호재입력" style="WIDTH: 170pt; HEIGHT: 20pt; color:black; background:white; font-size:1.0em;"><BR><BR>
	<strong>주소</strong>	<div style="text-align:center"> <INPUT type="text" name="useraddr" value="<?php echo $rows['adr']; ?>" placeholder="<?php echo $rows['adr']; ?>" style="WIDTH: 170pt; HEIGHT: 20pt; color:black; background:white; font-size:1.0em;"><BR><BR>
	<strong>전화번호</strong>	<div style="text-align:center"> <INPUT type="text" name="phonenum" value="<?php echo $rows['phone']; ?>" placeholder="<?php echo $rows['phone']; ?>" style="WIDTH: 170pt; HEIGHT: 20pt; color:black; background:white; font-size:1.0em;"><BR><BR>
	
	
	
	<BR><INPUT class="button" type="submit" value="수정완료" >
	
</FORM>
</UL>
<BR>

<BR>



</BODY>
</center>
</HTML>