<?php

include ("connect_db.php"); 

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
<form name=appvol method=post action="fincheck.php">
<div id="home" class="big-bg">
  <?php include "header.php" ?>
 
       <div id="board_area"> 
   <?php
		  $nums=$_GET['volnum'];
          $sql = "select * from volcontents where volnum='$nums'"; 
		  $result = mysqli_query($connect, $sql);
		  $board = mysqli_fetch_array($result);
        ?>
  <br><h1>지원한 봉사활동</h1>
  <h4>지원하신 봉사활동의 상세정보 입니다 정보를 확인하신 후 확인버튼을 꼭 눌러주세요</h4>
    <table class="list-table">
      <thead>
          <tr>
                <th width="100">번호</th>
                <th width="700">제목</th>
               
			    <th width="100">시작시간</th>
				<th width="100">아이디</th>
            </tr>
			
        </thead>
		<tbody>
        <tr>
          <td> <Input type="hidden" name="volnuma" value="<?php echo $board['volnum']; ?>" style="width=70;"><?php echo $board['volnum']; ?></td>
          <td width="500"><?php echo $board['title']?></a></td>
		  <td width="100"><?php echo $board['volstart']; ?></td>
		  <td width="100"><?php echo $board['id']; ?></td>

        </tr>
      </tbody>
		 
    </table>
	<table class="list-table">
     <thead>
		<tr>
			    <th width="1000">주소</th>
				
			</tr>
			 </thead>
     
      <tbody>
        <tr>
          
           <td width="1000"><?php echo $board['voladd']?></td>
		  
          

        </tr>
      </tbody>
       </table>
	<table class="list-table">
     <thead>
		<tr>
			    <th width="1000">내용</th>
				
			</tr>
			 </thead>
     
      <tbody>
        <tr>
          
          <td width="1000"><?php echo $board['volcontent']?></a></td>
		  
          

        </tr>
      </tbody>
       </table>
	   <table class="list-table">
	   <thead>
		<tr>
			    
				<th width="1000">추가사항</th>
			</tr>
			 </thead>
			 <tbody>
        <tr>
        
	
          
		  <td width="1000"><?php echo $board['addcontent']?></a></td>
          

        </tr>
      </tbody>
	    </table>
		 <br><center><h1>봉사받을분 정보</h1></center>
	<table class="list-table">
	
     <thead>
	    
		<tr>
			    <th width="200">아이디</th>
				<th width="200">이름</th>
				<th width="200">나이</th>
				<th width="200">성별</th>
				<th width="200">전화번호</th>
				
			</tr>
			 </thead>
			  
		
      <?php 
	      $uid=$board['id'];
	      $usql="select * from user where id='$uid'";
		  $uresult = mysqli_query($connect,$usql);
		  $uboard = mysqli_fetch_array($uresult);
		  
				?>
      <tbody>
        <tr>
          
           <td width="200"><?php echo $uboard['id']?></td>
		   <td width="200"><?php echo $uboard['name']?></td>
		   <td width="200"><?php echo $uboard['age']?></td>
		   <td width="200"><?php echo $uboard['sex']?></td>
		   <td width="200"><?php echo $uboard['phone']?></td>
          

        </tr>
		
      </tbody>
		  
	 
       </table>
		
		 

	   <br>
	   <?php
	      $usql1="select volapp.id from volapp,volcontents where volapp.volnum='$nums' and volapp.volnum=volcontents.volnum and volcontents.checka=1";
		  $uresult1 = mysqli_query($connect,$usql1);
		  $uboard1 = mysqli_num_rows($uresult1);
	
	   if($uboard1==0){ //완전확인된 값이 없으면 버튼을 표기
	   echo "<input type=\"submit\" value=\"확인\" class=\"button\" href=\"fincheck.php\">";
	   }
		 ?>
  </div>
       </form>
    </body>
</html>
