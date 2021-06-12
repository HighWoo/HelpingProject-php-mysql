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
$sql.="values('$voru','$id','$pw','$name','$adr','$sid','$phone')";

mysqli_query($connect,$sql);


 $sql1= "select * from user where id='$id'"; // id 입력
 $result1 = mysqli_query ($connect, $sql1); 
 $row_count = mysqli_fetch_assoc($result1);
 $row_count['sid']; // 주민번호 13자리
 substr($row_count['sid'],0,2); // 주민번호 앞 두자리
 date_default_timezone_set('Asia/Seoul'); // 서울 시간 고정
 $date = date('Y'); // 2021 올해 년도
 $age=0;
 $sex=null;
 if(substr($row_count['sid'],6,1)=='1'||substr($row_count['sid'],6,1)=='2'){
   $age=$date-(int)substr($row_count['sid'],0,2)-1900+1;
   }
  else if(substr($row_count['sid'],6,1)=='3'||substr($row_count['sid'],6,1)=='4'){
    $age=$date-(int)substr($row_count['sid'],0,2)-2000+1;
    }
    if(substr($row_count['sid'],6,1)=='1'||substr($row_count['sid'],6,1)=='3'){
      $sex="남자";
      }
    else if (substr($row_count['sid'],6,1)=='2'||substr($row_count['sid'],6,1)=='4'){
      $sex="여자";
      }
	  
	
	  $sql2="update user set age='$age',sex='$sex' where id='$id'";
	  mysqli_query($connect,$sql2);
	  mysqli_close($connect);



 

print "<script language=javascript> alert('회원가입이 완료되었습니다'); location.replace('Login.php'); </script>";
}

?>