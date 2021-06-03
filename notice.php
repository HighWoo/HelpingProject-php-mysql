<?php include "connect_db.php"; ?>
<!doctype html>
<head>
<meta charset="UTF-8">
<title>게시판</title>
<link rel="stylesheet" type="text/css" href="/css/style1.css" />
<meta name="description" content="ㅁㅁㅁ">
 <link rel="stylesheet" href="files/main.css">
 <link rel="icon" type="image/png" href="files/smalllogo.png">
</head>
<body>
<script>
function membercheck()
  {
  var userid = document.getElementById("uid").value;
	if(userid) {
	  url="member_check.php?userid="+userid;
	  window.open(url,'IDwin', 'width=400, height=200,left=750,Top=130');
		
	} else {
	  alert('아이디를 입력해 주세요');
		userid.focus();
	}
  }
</script>
<div id="home" class="big-bg">
 <header class="page-header wrapper">
  <h1><a href="alogmain.html"><img class="logo" src="files/mainlogo.svg" alt="사이트 홈"></a></h1>
  <nav>
   <ul class="main-nav">
   <li><a href="aGuide.html">소개</a></li>
   <li><a href="notice.php">구인구직</a></li>
   <li><a href="Vinfor.php">봉사현황</a></li>
   <li><a href="Service.php">고객센터</a></li>
   <li><a href="informod.php">내정보</a></li>
   <li><a href="blogmain.html" onclick="alert('로그아웃 되었습니다');">로그아웃</a></li>
   </ul>
   </nav>
   </header>
   <?php
   session_start(); // 세션
   if($_SESSION['voru']=="봉사자")
   {
   ?>
   
   
<div id="board_area1"> 
  <h1>구인게시판</h1>
  <h4>어려움을 겪고 있는 이들이 봉사활동자를 찾고 있는 게시판입니다.</h4>
    <table class="list-table">
      <thead>
          <tr>
              <th width="70">번호</th>
                <th width="500">내용</th>
                <th width="120">아이디</th>
                <th width="100">봉사날짜</th>
                <th width="100">봉사장소</th>
            </tr>
        </thead>
        <?php
        // board테이블에서 idx를 기준으로 내림차순해서 5개까지 표시
          $sql = ("select * from umat order by Number desc limit 0,5"); 
          $fetch=mysqli_query($connect, $sql) ;
            while($board = mysqli_fetch_array($fetch))
            {
              //title변수에 DB에서 가져온 title을 선택
              $title=$board["VolunteerWork"]; 
              if(strlen($title)>30)
              { 
                //title이 30을 넘어서면 ...표시
                $title=str_replace($board["VolunteerWork"],mb_substr($board["VolunteerWork"],0,30,"utf-8")."...",$board["VolunteerWork"]);
              }
        ?>
      <tbody>
        <tr>
          <td width="70"><?php echo $board['Number']; ?></td>
          <td width="500"><?php echo $title;?></td>
          <td width="120"><?php echo $board['SeekerID']?></td>
          <td width="100"><?php echo $board['SeekerTime']?></td>
          <td width="100"><?php echo $board['ServiceLocation']; ?></td>
        </tr>
      </tbody>
      <?php } ?>
    </table>
    <div id="write_btn">
    
      <a href="Vol.html"><button>구직 게시판에 글쓰기</button></a>
    </div>
     <div class="member_ck">
    <div style="text-align:center"><strong>회원정보 조회하기</strong> 
    <form method=post action="member_check.php">
    <INPUT type="text" name="userid" id="uid" placeholder="아이디" style="WIDTH: 133pt; HEIGHT: 20pt; background:#9ba5a0; font-size:1.0em;">
	  <INPUT type="button" value="확인" onClick="membercheck();" button style="WIDTH: 33pt; HEIGHT: 24pt; color:; background:#f1eac3; font-size:0.9em; "><BR>
	  </form>
    </div>
  </div>
  
  <?php
  }
  else if($_SESSION['voru']=="사용자"){
    
    ?>

<div id="board_area2"> 
  <h1>구직게시판</h1>
  <h4>현재 봉사활동을 찾고있는 게시판입니다.</h4>
    <table class="list-table">
      <thead>
          <tr>
              <th width="70">번호</th>
                <th width="500">원하는봉사활동</th>
                <th width="120">아이디</th>
                <th width="100">봉사가능시간</th>
            </tr>
        </thead>
        <?php

          $sql = ("select * from vmat order by Number desc limit 0,5"); 
          $fetch=mysqli_query($connect, $sql) ;
            while($board = mysqli_fetch_array($fetch))
            {
              //title변수에 DB에서 가져온 title을 선택
              $title=$board["DesiredVolunteer"]; 
              if(strlen($title)>30)
              { 
                //title이 30을 넘어서면 ...표시
                $title=str_replace($board["DesiredVolunteer"],mb_substr($board["DesiredVolunteer"],0,30,"utf-8")."...",$board["DesiredVolunteer"]);
              }
        ?>
      <tbody>
        <tr>
          <td width="70"><?php echo $board['Number']; ?></td>
          <td width="500"><?php echo $title;?></td>
          <td width="120"><?php echo $board['VseekerID']?></td>
          <td width="100"><?php echo $board['VseekerTime']?></td>
        </tr>
      </tbody>
      <?php } ?>
    </table>
    <div id="write_btn">
    
      <a href="user.html"><button>구인 게시판에 글쓰기</button></a>
    </div>
    <div class="member_ck">
    <div style="text-align:center"><strong>회원정보 조회하기</strong> 
    <form method=post action="member_check.php">
    <INPUT type="text" name="userid" id="uid" placeholder="아이디" style="WIDTH: 133pt; HEIGHT: 20pt; background:#9ba5a0; font-size:1.0em;">
	  <INPUT type="button" value="확인" onClick="membercheck();" button style="WIDTH: 33pt; HEIGHT: 24pt; color:; background:#f1eac3; font-size:0.9em; "><BR>
	  </form>
    </div>
    
  </div>
  
</body>
</html>

<?php

}
?>