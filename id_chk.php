<?php
	$userid=$_GET['userid'];            
	include "connect_db.php";
	$sql="select count(*) from user where id='$userid' ";
	$res=mysqli_query($connect, $sql);
	$rs=mysqli_fetch_array($res);
	$num=$rs[0];
?>

<html>
	<head><title> 아이디 중복검사 </title>
	</head>
	<body>
	<form name="chkid">
	<table width="350" border="1" bordercolor="white" align="center" cellpadding="5" >
	<tr bgcolor="#f1eac3"><td><font color="black"> <중복검사> 
	</font></td>
	</tr>
	<tr height="120"><td align="center"> 

<?php 
	if($num>0) { 
		echo "[ ";
		echo $userid; 
		echo " ] 는 이미 사용 중인 아이디입니다. <br> ";
		echo " 새로운 아이디를 입력하세요.<br><br>";

	} else {
		echo "[ ";
		echo $userid;
		echo " ] 는 사용가능한 아이디 입니다.<br><br> ";
	} 
?>

  <input type="button" name="Button" value=" 닫기 " onClick="self.close();"></td>
	</tr>
	</table>
	</form>
	</body>
</html>