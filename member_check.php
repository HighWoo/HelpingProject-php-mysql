<?php
	$userid=$_GET['userid'];            
	include "connect_db.php";
	$sql="select name,adr,phone from user where id='$userid' ";
	$fetch=mysqli_query($connect, $sql);
	$board = mysqli_fetch_array($fetch)
	
?>

<html>
	<head><title> 회원정보 조회하기 </title>
	</head>
	<body>
	<form name="chkid">
	<table width="350" border="1" bordercolor="white" align="center" cellpadding="5" >
	<tr bgcolor="#f1eac3"><td><font color="black"> <회원정보 조회하기> 
	</font></td>
	</tr>
	<tr height="120"><td align="center"> 

<?php 
		echo "[ ";
		echo $userid; 
		echo " ] 의 회원정보입니다. <br> ";
?>
          
            
  <input type="button" name="Button" value=" 닫기 " onClick="self.close();"></td>
	</tr>
	</table>
	<table>
	<thead>
            <tr>
              <th width="70">이름</th>
                <th width="500">주소</th>
                <th width="120">전화번호</th>
            </tr>
          </thead>
          <tbody>
        <tr>
          <td width="80"><?php echo $board['name']; ?></td>
          <td width="500"><?php echo $board['adr'];?></td>
          <td width="120"><?php echo $board['phone']?></td>
        </tr>
      </tbody>
	</table>
	</form>
	</body>
</html>