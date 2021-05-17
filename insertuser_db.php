<?php
$voru=$_POST['vaorus'];
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

include "connect_db.php";

$sql="insert into user(voru,id,pw,name,adr,sid,phone)";
$sql.="values('$voru''$id','$pw','$name','$adr','$sid','$phone')";

mysqli_query($connect,$sql);
mysqli_close($connect);

print "<script language=javascript> alert('회원가입이 완료되었습니다'); location.replace('Login.html'); </script>";
}

?>