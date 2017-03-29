<html>
<meta charset="utf-8"/>
<body>
 <?php
/* 时间与时间戳
date_default_timezone_set("Asia/shanghai");
echo "当前时间为：".date('Y-m-d H:i:s');
echo "<br/>转换成时间戳为:".time(); */
?> 


<?php
/*比较时间大小

 date_default_timezone_set("Asia/ShangHai"); //设定时间区域
 $time = date("Y年m月d日");
 $time_1 = time();
 $time_2 = strtotime("10 November 2016");
 if($time_2<$time_1){
 echo $time."比2016年11月10日大";
 }elseif($time_2>$time_1){
 echo $time."比2016年11月10日小";
 }else{
 echo $time."与2016年11月10日相等";
 } */
?>

<?php

date_default_timezone_set("Asia/ShangHai"); //设定时间区域
echo "当前时间：".date('Y-m-d H:i:s')."<br/>"; //获取当前时间
$time = time();
$time_r = strtotime('1 January 2017'); //设定目标时间
echo "距2017年元旦还有<b style='color:red;'>".ceil((($time_r - $time)/(3600*24)))."</b>天"; 
?>
</body>
</html> 