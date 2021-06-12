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
	 <link rel="icon" type="image/png" href="files/smalllogo.png">
    </head>
	 <center>
<body>
<div id="home" class="big-bg">
 <?php include "header.php" ?>
    <body>
        <h1 class="display-4">봉사게시판</h1>
        
        <?php
		
	

            include ("connect_db.php");
            $currentPage = 1;
            if (isset($_GET["currentPage"])) {
                $currentPage = $_GET["currentPage"];
            }
 
         
            
            
            $sqlCount = "SELECT count(*) FROM volcontents";
			
            $resultCount = mysqli_query($connect,$sqlCount);
		
            if($rowCount = mysqli_fetch_array($resultCount)){
                $totalRowNum = $rowCount["count(*)"]; 
            }
           
            if($resultCount) {
         
            } else {
                echo "결과 없음: ".mysqli_error($connect);
            }
                        
            $rowPerPage = 5;   
            $begin = ($currentPage -1) * $rowPerPage;
        
            $sql = "SELECT * FROM volcontents order by volnum desc limit ".$begin.",".$rowPerPage."";
            $result = mysqli_query($connect,$sql);
       
            if($result) {
                echo "조회 성공";
            } else {
                echo "결과 없음: ".mysqli_error($connect);
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
                            echo "<a href='/volcontetst.php?volnum=".$row["volnum"]."'>";
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
                            echo "<td><a href='/sujungpage.php?volnum=".$row["volnum"]."'>수정</a></td>";
                            echo "<td><a href='/deletepage.php?volnum=".$row["volnum"]."'>삭제</a></td>";
                        ?>
                </tr>
            <?php
                }
            ?>
        </table>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <?php

            if($currentPage > 1 ) { 
          
                echo "<a class='btn btn-primary' href ='/boforepage.php?currentPage=".($currentPage-1)."'>이전</a>&nbsp;&nbsp;&nbsp;&nbsp;";
            }
 
            $lastPage = ($totalRowNum-1) / $rowPerPage;
 
            if (($totalRowNum-1) % $rowPerPage !=0) { 
                $lastPage += 1;
            }
      
            if($currentPage < $lastPage) { 
               
                echo "<a class='btn btn-primary' href='nextpage.php?currentPage=".($currentPage+1)."'>다음</a>";
            }
            mysqli_close($connect);
        ?>
        &nbsp;&nbsp;
        <a class="btn btn-primary" href="/board_add_form.php">글 쓰기</a>
        <br><br><br><br><br>
        <script type="text/javascript" src="js/bootstrap.js"></script>
    </body>
</html>
