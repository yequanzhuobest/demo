<?php
//实现无限分类的信息添加和删除等操作

require "config.php";

$link = @mysql_connect(HOST,USER,PASS)or die("数据库连接失败");
mysql_select_db(DBNAME,$link);
mysql_query("set names utf8");

switch($_GET['action']){
	case "add":
	
		//获取信息
		$name = $_POST["name"];
		$pid = $_POST["pid"];
		$path = $_POST["path"];
		
		$sql = "insert into type values(null,'$name','$pid','$path')";
		$res = mysql_query($sql,$link);
		if($res == true){
			echo "添加成功";
			
		}else
		{
			echo "添加失败";
			
		}
		echo "<br/><a href='add.php'>继续添加</a>";
		break;
		
	case "del":
	
		//获取删除的id号,拼装sql语句
		$id = $_GET['id'];
		$sql = "delete from type where id={$id} or path like '%,{$id},%'";
		//执行删除
		
		mysql_query($sql,$link);
		
		//输出删除的行数
		echo "成功删除".mysql_affected_rows($link)."行";
	
		break;
	
}

mysql_close($link);





?>