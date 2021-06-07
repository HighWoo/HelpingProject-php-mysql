 <?php
	
	
	session_start();

	include "connect_db.php";
	
	$inid= $_SESSION['id'];
	
	$sql = "select * from volcontents where id='$inid' ";                      
	$result = mysqli_query ($connect, $sql);          
	$count = mysqli_num_fields($result);
	
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

 <link rel="stylesheet" href="files/matching.css">
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
    <li><a href="Service.html">내정보</a></li>

  <li><a href="blogmain.html" onclick="alert('로그아웃 되었습니다');">로그아웃</a></li>

   </ul>
   </nav>
   </header>

<h1 ><hr>
  <?php
 
   if($_SESSION['voru']=="봉사자")
	   
   {
   ?>
   
   
<div id="board_area1"> 
  <?php 
   echo $inid;
   echo "님이 신청하신 봉사입니다";
  ?>
  <table class="list-table">
      <thead>
          <tr>
              <th width="100">봉사번호</th>
              <th width="500">제목</th>
			  <th width="120">시작일자</th>
              <th width="120">봉사내용</th>
			  <th width="120">봉사시간</th>
			  <th width="60">생성자</th>
			  <th width="120">채택여부</th>
            </tr>
        </thead>
        <?php
		$sid=$_SESSION['id'];
		  $sql = "select volapp.volnum,volcontents.title,volcontents.volstart,volcontents.volclass,volcontents.voltime,volcontents.id
		  from volcontents,volapp where volapp.id='$sid' and volcontents.volnum=volapp.volnum order by volnum asc"; 
		  $result = mysqli_query($connect, $sql);
		  
            while($board = mysqli_fetch_array($result))
            {
    
        ?>
      <tbody>
        <tr>
		  
          <td width="70" name="num"><?php echo $board['volnum']; ?></td>
		  <td width="500"><a href="myappvol_info.php?volnum=<?php echo $board["volnum"];?>"><?php echo $board['title'];?></a></td>
          <td width="120" name="address"><?php echo $board['volstart']; ?></td>
	      <td width="120" name="address"><?php echo $board['volclass']; ?></td>
		   <td width="120" name="address"><?php echo $board['voltime']; ?></td>
		  <td width="60" name="address"><?php echo $board['id']; ?></td>
        </tr>
      </tbody>
      <?php 
    
		  }?>
    </table>
  <?php
  }
  else if($_SESSION['voru']=="사용자"){
    
    ?>

<div id="board_area2"> 
    <?php 
   echo $inid;
   echo "님이 올린 봉사게시글입니다";
   
  ?>
  <hr>
   <div id="board_area"> 
  
    <table class="list-table">
      <thead>
          <tr>
                <th width="70">봉사번호</th>
                <th width="500">제목</th>
				<th width="120">시작일자</th>
                <th width="120">봉사시간</th>
				<th width="60">생성자</th>
            </tr>
        </thead>
        <?php
		$sid=$_SESSION['id'];
		  $sql = "select volnum,title,volstart,voltime,id from volcontents where id='$sid' order by volnum asc"; 
		  $result = mysqli_query($connect, $sql);
		  
            while($board = mysqli_fetch_array($result))
            {
    
        ?>
      <tbody>
        <tr>
		  
          <td width="70" name="num"><?php echo $board['volnum']; ?></td>
		  <td width="500"><a href="volunteers.php?volnum=<?php echo $board["volnum"];?>"><?php echo $board['title'];?></a></td>
          <td width="120" name="address"><?php echo $board['volstart']; ?></td>
	      <td width="120" name="address"><?php echo $board['voltime']; ?></td>
		  <td width="60" name="address"><?php echo $board['id']; ?></td>
        </tr>
      </tbody>
      <?php 
    
		  }?>
    </table>

  </div>
  
</body>
</html>

<?php

}
?>

  
  
    		 
<?php


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