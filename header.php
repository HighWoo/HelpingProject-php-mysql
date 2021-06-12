 <?php 
 session_start();
    $id="";

    if( isset($_SESSION['id'])) $id= $_SESSION['id'];
 ?>
 <link rel="stylesheet" href="files/matching.css">
 <header class="page-header wrapper">
  <h1><a href="alogmain.php"><br><img class="logo" src="files/mainlogo.svg" alt="사이트 홈"></a></h1>
  <nav>
   <ul class="main-nav">
   <li><a href="aGuide.php">소개</a></li>
   <?php if(!$id){ ?>
   <li><a href="Login.php">구인구직</a></li>
   <?php } else { ?>
   <li><a href="voloruser.php">구인구직</a></li>
   <?php }?>
   
   <li><a href="Vinfor.php">봉사현황</a></li>
   <li><a href="Service.php">고객센터</a></li>
   <?php if(!$id) { ?>
   <li><a href="Login.php">로그인</a></li>
   <?php } else { ?>
   <li><a href="informod.php">내정보</a></li>
   <li><a href="logout.php">로그아웃</a></li>
   <?php } ?>
   
   </ul>
   </nav>
   </header>