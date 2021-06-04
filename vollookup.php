<?php
	
	session_start();


	
	include "connect_db.php";
	$sql = "select * from volcontents";  
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

    <li><a href="aGuide.html">소개  </a></li>
   <li><a href="notice.php">구인구직</a></li>
   <li><a href="Vinfor.php">봉사현황</a></li>
   <li><a href="Service.html">고객센터</a></li>
    <li><a href="informod.php">내정보</a></li>
  <li><a href="blogmain.html" onclick="alert('로그아웃 되었습니다');">로그아웃</a></li>

   </ul>
   </nav>
   </header>

<h1 >[봉사활동 내역조회]<BR>
<?php

   echo "<H1> ";
   echo $_SESSION['id'];
   echo "님의 봉사활동 내역입니다.<H1>";
?>   
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

<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <link rel="stylesheet" href="/css/bootstrap.css">
    </head>
    <body>
        <h1 class="display-4">봉사게시판</h1>
        
        <?php
		
	


            $currentPage = 1;
            if (isset($_GET["currentPage"])) {
                $currentPage = $_GET["currentPage"];
            }
 
            //mysqli_connect()함수로 커넥션 객체 생성
            $conn = mysqli_connect("localhost", "root");
            //커넥션 객체 생성 확인
            if($conn) {
                echo "연결 성공<br>";
            } else {
                die("연결 실패 : " .mysqli_error());
            }
            mysqli_select_db($conn,'Login');
            //페이징 작업을 위한 테이블 내 전체 행 갯수 조회 쿼리
            $sqlCount = "SELECT count(*) FROM volcontents";
			
            $resultCount = mysqli_query($conn,$sqlCount);
		
            if($rowCount = mysqli_fetch_array($resultCount)){
                $totalRowNum = $rowCount["count(*)"];   //php는 지역 변수를 밖에서 사용 가능.
            }
            //행 갯수 조회 쿼리가 실행 됐는지 여부
            if($resultCount) {
                echo "행 갯수 조회 성공 : ". $totalRowNum."<br>";
            } else {
                echo "결과 없음: ".mysqli_error($conn);
            }
                        
            $rowPerPage = 5;   //페이지당 보여줄 게시물 행의 수
            $begin = ($currentPage -1) * $rowPerPage;
            //board 테이블을 조회해서 board_no, board_title, board_user, board_date 필드 값을 내림차순으로 정렬하여 모두 가져 오는 쿼리
            //입력된 begin값과 rowPerPage 값에 따라 가져오는 행의 시작과 갯수가 달라지는 쿼리
            $sql = "SELECT * FROM volcontents order by volnum desc limit ".$begin.",".$rowPerPage."";
            $result = mysqli_query($conn,$sql);
            //쿼리 조회 결과가 있는지 확인
            if($result) {
                echo "조회 성공";
            } else {
                echo "결과 없음: ".mysqli_error($conn);
            }
        ?>
        <table class="table table-bordered">
            <tr>
                <td>봉사번호</td>
                <td>봉사제목</td>
                <td>봉사종류</td>
                <td>봉사시간</td>
                <td>수정</td>
                <td>삭제</td>
            </tr>
            <?php
                //반복문을 이용하여 result 변수에 담긴 값을 row변수에 계속 담아서 row변수의 값을 테이블에 출력한다.
                while($row = mysqli_fetch_array($result)){ 
            ?>
                <tr>
                    <td>
                        <?php
                            echo $row["volnum"];
                        ?>
                    </td>
                    <td>
                        <?php
                            echo "<a href='/board_detail.php?volnum=".$row["volnum"]."'>";
                            echo $row["title"];
                            echo "</a>";
                        ?>
                    </td>
                    <td>
                        <?php
                            echo $row["volclass"];
                        ?>
                    </td>
                    <td>
                        <?php
                            echo $row["voltime"];
                        ?>
                    </td>
                        <?php
                            echo "<td><a href='/board_update_form.php?volnum=".$row["volnum"]."'>수정</a></td>";
                            echo "<td><a href='/board_delete_form.php?volnum=".$row["volnum"]."'>삭제</a></td>";
                        ?>
                </tr>
            <?php
                }
            ?>
        </table>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <?php
            //currentPage 변수가 1보다 클때만 이전 버튼이 활성화 되도록 함
            if($currentPage > 1 ) { 
                //이전 버튼이 클릭될때 GET방식으로 currentPage변수 값에 1을 뺀 값이 넘어가도록 함
                echo "<a class='btn btn-primary' href ='/board_list.php?currentPage=".($currentPage-1)."'>이전</a>&nbsp;&nbsp;&nbsp;&nbsp;";
            }
 
            $lastPage = ($totalRowNum-1) / $rowPerPage;
 
            if (($totalRowNum-1) % $rowPerPage !=0) { 
                $lastPage += 1;
            }
            //lastPage변수가 currentPage 변수보다 클때만 다음 버튼이 활성화 되도록 함
            if($currentPage < $lastPage) { 
                //다음 버튼이 클릭될때 GET방식으로 currentPage변수 값에 1을 더한 값이 넘어가도록 함
                echo "<a class='btn btn-primary' href='/board_list.php?currentPage=".($currentPage+1)."'>다음</a>";
            }
            mysqli_close($conn);
        ?>
        &nbsp;&nbsp;
        <a class="btn btn-primary" href="/board_add_form.php">글 쓰기</a>
        <br><br><br><br><br>
        <script type="text/javascript" src="js/bootstrap.js"></script>
    </body>
</html>
