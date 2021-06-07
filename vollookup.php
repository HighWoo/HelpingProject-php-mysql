<?php

session_start(); 
include ("connect_db.php"); 

	$inid= $_SESSION['id'];
	
	$sql = "select * from volcontents where id='$inid' ";                      
	$result = mysqli_query ($connect, $sql);          
	$count = mysqli_num_fields($result);
	mysqli_close($connect);   
?>
<!DOCTYPE html>

<html>
    <head>
	  <meta charset="UTF-8">
	  <meta name="Generator" content="EditPlus®">
	  <meta name="Author" content="">
	  <meta name="Keywords" content="">
	  <meta name="Description" content="">
	  <title>Helping</title>

	 <meta name="description" content="ㅁㅁㅁ">
	 <link rel="stylesheet" href="files/sub.css">
	 <link rel="stylesheet" href="files/matching.css">
	 <link rel="icon" type="image/png" href="files/smalllogo.png">
    </head>
	 <center>
<body>
<form name=appvol method=post action="app_db.php">
<div id="home" class="big-bg">
 <header class="page-header wrapper">
  <h1><a href="alogmain.php"><br><img class="logo" src="files/mainlogo.svg" alt="사이트 홈"></a></h1>
  <nav>
   <ul class="main-nav">

    <li><a href="aGuide.html">소개  </a></li>
   <li><a href="notice.php">구인구직</a></li>
   <li><a href="Vinfor.php">봉사현황</a></li>
   <li><a href="Service.html">고객센터</a></li>
    <li><a href="informod.php">내정보</a></li>
  <li><a href="blogmain.html" onclick="alert('로그아웃 되었습니다');">로그아웃</a></li>

   </ul>
   </nav>
   </header>
 <div id="board_area"> 

  <center><br><br><br><h1><?php echo $_SESSION['id']; ?> 님이 수료한 봉사내역</h1>
  </center>
  
    <table class="list-table">
    <thead>
    <tr>
        <th width="300">봉사분류</th>
        <th width="100">봉사일자</th> 
        <th width="170">봉사제목</th> 
        <th width="500">봉사내용</th>
		<th width="180">봉사시간</th>
		<th width="200">봉사위치</th>
		<th width="450">봉사주의사항</th>
		<th width="100">번호</th>
		<th width="120">구인자</th>
    </tr>
   </thead>
    		 
<?php

	
	while($rows=mysqli_fetch_row($result)){
		
		echo "<tr>";
		for ($a =0; $a < $count; $a++)
		{
			echo "<td> $rows[$a] </td>";
		}
		echo "<tr>";
	}
?>

    </table>

  </div>

       
    </body>
</html>
