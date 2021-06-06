<?php
	
	session_start();
	$inid= $_SESSION['id'];
	
	include "connect_db.php";
	$sql3 = "select volnum from volcontents";  
	$result3 = mysqli_query ($connect, $sql3);   
	

	
	$sql = "select * from volapp where id='$inid' ";  
	$result = mysqli_query ($connect, $sql); 
	$count = mysqli_num_fields($result);
	

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

    <li><a href="aGuide.html">소개  </a></li>
   <li><a href="notice.php">구인구직</a></li>
   <li><a href="Vinfor.php">봉사현황</a></li>
   <li><a href="Service.html">고객센터</a></li>
    <li><a href="informod.php">내정보</a></li>
  <li><a href="blogmain.html" onclick="alert('로그아웃 되었습니다');">로그아웃</a></li>

   </ul>
   </nav>
   </header>
<HR>

<h1 >
<?php

	echo $inid;
?>   
님의 봉사 지원 내역<BR>

<HR size=4>


	<br>
	
<table border="1">
    
    <tr>
		<th>구인자</th> 
		<th>게시판번호</th> 
        <th>봉사 제목</th>
        <th>시작 일시</th> 
       
		
		
    </tr>
  
    		 
<?php
	
	$sql2 = "select title,volstart from volcontents";  
	$result2 = mysqli_query ($connect, $sql2);          
	$count2 = mysqli_num_fields($result2);
	
	
	
	while($rows=mysqli_fetch_row($result)){
		$ary = mysqli_fetch_array($result3);
		
		
		
		
		echo "<tr>";
		if($rows[1]==$ary[0]){
			for ($a =0; $a < $count; $a++)
			{
				
				echo "<td> $rows[$a] </td>";
				
			
				
					
			}
		
			$cart=mysqli_fetch_row($result2);
			
			for ($b =0; $b < $count2; $b++)
					{
						
						echo "<td> $cart[$b] </td>";
						
					
			
				}
		}
		echo "<tr>";
		
		
	}
	
	
	mysqli_close($connect); 	
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

