<?php

$id =$_POST['userid'];
$pw=$_POST['userpw'];
$name=$_POST['username'];
$adr=$_POST['useraddr'];
$sid=$_POST['ssn'];
$phone=$_POST['phonenum'];
if($id==null||$pw==null||$name==null||$name==null||$sid==null||$phone==null){
	print "<script language=javascript> alert('빈칸이있습니다'); location.replace('Signup.php'); </script>";
}

else{

$connect = mysqli_connect('localhost','root');
mysqli_select_db($connect,'Login');

mysqli_query($connect,"set session character_set_connection=utf8;");
mysqli_query($connect,"set session character_set_result=utf8;");
mysqli_query($connect,"set session character_set_client=utf8;");

$sql="insert into user(id,pw,name,adr,sid,phone)";
$sql.="values('$id','$pw','$name','$adr','$sid','$phone')";

mysqli_query($connect,$sql);
mysqli_close($connect);

print "<script language=javascript> alert('회원가입이 완료되었습니다'); location.replace('Login.html'); </script>";
}

?>