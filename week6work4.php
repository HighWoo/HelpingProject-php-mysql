<?php
$start = mktime(12,00,00,8,8,2005);
$std1=date("Y-m-d일 H:i:s 부터",$start);
$end=mktime(5,15,25,12,25,2020);
$std2=date("Y-m-d일 H:i:s 까지",$end);
$count=$end-$start;
$total1=($count/86400);
$total2=intval(($count%86400)/3600);


echo "mktime()함수와 date()함수의 사용<br>";
echo "-------------------------<br>";
echo "-시작일 : {$std1}<br>";
echo "-------------------------<br>";
echo "-종료일 : {$std2}<br>";
echo "-------------------------<br>";
echo "시작일로부터 종료일까지 <b>[".number_format($count)."]초</b>가 경과되었으며<br>";
echo "날짜로 환산하면 <b>[".number_format($total1)."일 {$total2}시간]</b>이 경과되었습니다<br>";
?>
