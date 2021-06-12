<?php
	
	
	include "connect_db.php";
	

	$sql = "select *from user";                      
	$result = mysqli_query ($connect, $sql);          
	$count = mysqli_num_fields ($result);             
	

	$row_count = mysqli_num_rows($result);
	$usercnt = $row_count;
	
	$sql= "select * from volcontents";
	$result = mysqli_query ($connect, $sql); 
	$row_count = mysqli_num_rows($result);
	$volcnt=$row_count;
	
	$sql= "select * from user where voru='사용자'";
	$result = mysqli_query ($connect, $sql); 
	$row_count = mysqli_num_rows($result);
	$auser=$row_count;
	
	$sql= "select * from user where voru='봉사자'";
	$result = mysqli_query ($connect, $sql); 
	$row_count = mysqli_num_rows($result);
	$buser=$row_count;
	
	 
  
?>

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
 <?php include "header.php" ?>
<font size="4" ><br><br><br>
	<div style= "font-size:2em; text-align:center;"><hr>사이트 이용현황<hr></div><br><br>
	<div style= "font-size:1.5em; text-align:center;">
	총 회원 수는 
<?php
		echo "<B> $usercnt  </B>";
?>
	명 으로

	</div>
	<br>	<br>
		<div style= "font-size:1.5em; text-align:center;">
	사용자 수는 
<?php
		echo "<B> $auser  </B>";
?>
	명 / 봉사자 수는 
<?php
		echo "<B> $buser  </B>";
?>
 명 입니다.
	<br><br><br>
	현재 봉사자를 모집중인 봉사활동은
	<?php
		echo "<B>$volcnt</B>";
?>
건 입니다<br><br><br>사이트를 이용해 주셔서 감사합니다
</div>


	

	</body>



	

</html>	


             
             
