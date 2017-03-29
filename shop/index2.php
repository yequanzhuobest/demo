<html>
	<head>
	
		<title>无限分类管理里信息</title>
	</head>
	<body>
		<center>
		<?php
		
			include "menu.php";
		?>
		<h3>分层浏览分类信息</h3>
		<table width="600" border="1">
		
		<tr>
		
		<th>id号</th><th>类别名称</th><th>父id</th><th>路径</th><th>操作</th>
		
		<?php
		error_reporting(0);
			require "config.php";

			$link = @mysql_connect(HOST,USER,PASS)or die("数据库连接失败");
			mysql_select_db(DBNAME,$link);
			mysql_query("set names utf8");
			
			$pid = $_GET['pid'] +0;
			
			$sql = "select * from type where pid = {$pid} order by concat (path,id) ";
			
			$res = mysql_query($sql);
			
			while($row=mysql_fetch_assoc($res)){
				echo "<tr>";
				echo "<td>{$row['id']}</td>";
				echo "<td><a href ='index2.php?pid={$row['id']}'>{$row['name']}</a></td>";
				echo "<td>{$row['pid']}</td>";
				echo "<td>{$row['path']}</td>";
				echo "<td><a href='add.php?pid={$row['id']}&name={$row['name']}&path={$row['path']}{$row['id']},'>添加子类</a>
				<a href='action.php?action=del&id={$row['id']}'> 删除</a>
				
				</td>";
					
				
				echo "</tr>";
			}
			mysql_free_result($res);
			mysql_close($link);
		?>
		
		
		
		
		<tr/>
		
		
		</table>
	</center>
	
	
	</body>






















</html>