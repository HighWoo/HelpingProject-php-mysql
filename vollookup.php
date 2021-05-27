<?php
	
	
	include "connect_db.php";
	

	$sql = "select * from volcontent";                      
	$result = mysqli_query ($connect, $sql);          
	$count = mysqli_num_fields($result);
	mysqli_close($connect);   

?>

<!doctype html>

 <head>
 
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Helping</title>

 <meta name="description" content="ㅁㅁㅁ">
 <link rel="stylesheet" href="files/sub.css">
 <link rel="icon" type="image/png" href="files/smalllogo.png">
 
 </head>
 
 <center>
<body>
<div id="home" class="big-bg">
 <header class="page-header wrapper">
  <h1><a href="blogmain.html"><img class="logo" src="files/mainlogo.svg" alt="사이트 홈"></a></h1>
  <nav>
   <ul class="main-nav">
    <li><a href="aGuide.html">소개</a></li>
   <li><a href="notice.php">구인구직</a></li>
   <li><a href="Vinfor.php">봉사현황</a></li>
   <li><a href="Service.html">고객센터</a></li>
    <li><a href="Service.html">내정보</a></li>
  <li><a href="blogmain.html" onclick="alert('로그아웃 되었습니다');">로그아웃</a></li>

   </ul>
   </nav>
   </header>
<h1 >[봉사활동 내역조회]<BR>다음은 회원님이 진행하신 봉사활동 내역입니다</h1>
<HR size=4>


	<br>
		<H3>봉 사 내 역</H3><br>
<table border="1">
    
    <tr>
        <th>봉사일자</th>
        <th>봉사분류</th> 
        <th>봉사활동내역</th> 
        <th>봉사시간</th>
		<th>봉사번호</th>
    </tr>
  
    		 
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


<UL type="disc">

</UL>

        



 <HR size=4><BR>


 </font>

<div style= "text-align:center;">고객문의 000-000-0000<BR><BR></div>
<font size="1" color=""><BR>@capston 8team helping</font>
 </body>
 
 </center>
</html>