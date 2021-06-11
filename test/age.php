 <?php 
 include "connect_db.php";
 $sql= "select * from user where id='test'"; // id 입력
 $result = mysqli_query ($connect, $sql); 
 $row_count = mysqli_fetch_assoc($result);
 $row_count['sid']; // 주민번호 13자리
 substr($row_count['sid'],0,2); // 주민번호 앞 두자리
 date_default_timezone_set('Asia/Seoul'); // 서울 시간 고정
 $date = date('Y'); // 2021 올해 년도
 if(substr($row_count['sid'],6,1)=='1'||substr($row_count['sid'],6,1)=='2'){
   $age=$date-(int)substr($row_count['sid'],0,2)-1900+1;
   echo $age;
   }
  else if(substr($row_count['sid'],6,1)=='3'||substr($row_count['sid'],6,1)=='4'){
    $age=$date-(int)substr($row_count['sid'],0,2)-2000+1;
    echo $age;
    }
    if(substr($row_count['sid'],6,1)=='1'||substr($row_count['sid'],6,1)=='3'){
      echo "남성";
      }
    else if (substr($row_count['sid'],6,1)=='2'||substr($row_count['sid'],6,1)=='4'){
      echo "여성";
      }
    
 ?>