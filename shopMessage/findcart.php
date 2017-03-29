<html>
	<head>
		<title>商品信息管理</title>
	</head>
	<body>
		<center>
			<?php  
			error_reporting(0);
			include("menu.php"); //导入导航栏  ?>
			<h3>搜索商品信息<h3>
			
			<form action="findcart.php" method="get">
				商品名称:<input  type ="text" name="name" size="8" value="<?php echo $_GET['name'];?>"/>&nbsp;
			
				商品单价:<input  type ="text" name="price" size="8" value="<?php echo $_GET['price'];?>"/>&nbsp;
				<input type="submit" value="搜索"/>
			</form>
			
			<table border="1" width="700">
				<tr>
					<th>商品编号</th>
					<th>商品名称</th>
					<th>商品图片</th>
					<th>单价</th>
					<th>库存量</th>
					<th>添加时间</th>
					<th>操作</th>
				</tr>
	
				<?php
		
					//封装搜索信息
				$wherelist = array();
				if(!empty($_GET['name'])){
					$wherelist[] ="name like '%{$_GET['name']}%'";
				}
				
				
				
				if(!empty($_GET['price'])){
					$wherelist[]="price like '%{$_GET['price']}%'";
				}
				
				//组装搜索条件，合并sql语句
				
				if(count($wherelist)>0){
					$where = " where ".implode(" and ",$wherelist);
				}
				echo $where;
				
				//从数据库中读取信息并输出到浏览器表格中
				//1.导入配置文件 
					require("dbconfig.php");
				//2. 连接数据库，并选择数据库
					$link = @mysql_connect(HOST,USER,PASS)or die("数据库连接失败");
					mysql_select_db(DBNAME,$link);
					mysql_set_charset('utf8');
				
				//3. 执行商品信息查询
					$sql = "select * from shopmsg {$where}";
					$result = mysql_query($sql,$link);
					
				//4. 解析商品信息（解析结果集）
					while($row = mysql_fetch_assoc($result)){
						echo "<tr>";
						echo "<td>{$row['id']}</td>";
						echo "<td>{$row['name']}</td>";
						echo "<td><img src='./uploads/s_{$row['pic']}'/></td>";
						echo "<td>{$row['price']}</td>";
						echo "<td>{$row['total']}</td>";
						echo "<td>".date("Y-m-d H:i:s",$row['addtime'])."</td>";
						echo "<td> 
								<a href='action.php?action=del&id={$row['id']}&picname={$row['pic']}'>删除</a> 
								<a href='edit.php?id={$row['id']}'>修改</a>
								<a href='addcart.php?id={$row['id']}'>放入购物车</a>
								
								
								</td>";
								
						echo "</tr>";
					}
				
				//5. 释放结果集，关闭数据库
		
				
				?>
			</table>
		
		</center>
	</body>
</html>