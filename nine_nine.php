<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>九九乘法表</title>
</head>
<body>
<table border="1" cellpadding="0" cellspacing="0" class="tableStyle">
    <caption>
        <h1>九九乘法表</h1>
    </caption>
<?php
for ($a=1; $a<10; $a++)          //1层循环
{
echo "<tr>";
for ($b=1; $b<=$a; $b++) {       //2层循环控制1层循环输出
    echo "<td>";
    echo "$a * $b =".$a * $b;    //输出结果
    echo "</td>";
}
echo "</tr>";
}
?>
</table>
</body>
</html>