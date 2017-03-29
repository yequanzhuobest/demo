<html>
	<head>
	
		<title>无限分类管理里信息</title>
	</head>
	<body>
		<center>
		<?php
		
			include "menu.php";
		?>
		<h3>浏览分类信息</h3>
		
		<select name="typeid">
		
		<?php
			require "config.php";

			$link = @mysql_connect(HOST,USER,PASS)or die("数据库连接失败");
			mysql_select_db(DBNAME,$link);
			mysql_query("set names utf8");
			$sql = "select * from type order by concat (path,id)";
			
			$res = mysql_query($sql);
			
			while($row=mysql_fetch_assoc($res)){
				
				$m = substr_count($row['path'],",")-1;
				
				//缩进的个子数目
				$kong = str_pad("",$m*6*3,"&nbsp;");
				
				if($row['pid']==0){
					$dd = "disabled";
				}else{
					$dd = "";
				}
				echo "<option {$dd} value='{$row['id']}'>{$kong}{$row['name']}</option>";
			}
			mysql_free_result($res);
			mysql_close($link);
		?>
		
		</select>
	
	</center>
	
	
	</body>






















</html>