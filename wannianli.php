<?php
error_reporting(0);
//万年历
//1 获取当前的信息（当前的年和月）
$year = $_GET['y']?$_GET['y']:date('Y');

$mon = $_GET['m']?$_GET['m']:date('m');
//2 计算出当前月有几天和1号是星期几
$day = date("t",mktime(0,0,0,$mon,1,$year));
$w = date("w",mktime(0,0,0,$mon,1,$year));
//3 输出日期的头部信息
echo "<center>";
echo "<h1>{$year}年{$mon}月</h1>";
echo "<table width='600' border = '1'>";
echo "<tr>";
echo "<th>星期日</th>";
echo "<th>星期一</th>";
echo "<th>星期二</th>";
echo "<th>星期三</th>";
echo "<th>星期四</th>";
echo "<th>星期五</th>";
echo "<th>星期六</th>";
echo "</tr>";


//4 循环遍历日期信息
$dd = 1;

while($dd <= $day)
{	
	echo "<tr>";
	for($i=0;$i<7;$i++)
	{
		if($dd <= $day && ($w <= $i || $dd!=1))
		{
			echo "<td>{$dd}</td>";
			$dd++;
		}else
		{
			echo "<td>&nbsp</td>";
		}
		
		
	}
	echo "</tr>";
}


echo "</table>";




//5 输出上一个月和下一个月的链接
$prey = $nexty = $year;
$prem = $nextm =$mon;
if($prem <= 1)
{
	$prem = 12;
	$prey--;
	
}else{
	$prem--;
}
if($nextm >= 12)
{
	$nextm = 1;
	$nexty++;
}else{
	$nextm++;
}


echo "<h3><a href='wannianli.php?y={$prey}&m={$prem}'>上一月</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo "<a href='wannianli.php?y={$nexty}&m={$nextm}'>下一月</a></h3>";
echo "</center>";

?>