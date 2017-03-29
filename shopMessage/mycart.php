<?php

session_start();

?>

<html>
	<head>
		<title>商品信息管理</title>
	</head>
	<body>
		<center>
			<?php  include("menu.php"); //导入导航栏  ?>
			<h3>浏览我的购物车<h3>
			<table border ="1" width="600">
				<tr>
					<th>商品id号</th>
					<th>商品名称</th>
					<th>商品图片</th>
					<th>单价</th>
					<th>数量</th>
					<th>小计</th>
					<th>操作</th>
				
				</tr>
				<?php
				error_reporting(0);
					foreach($_SESSION["shoplist"] as $row){
						echo "<tr>";
						echo "<td>{$row['id']}</td>";
						echo "<td>{$row['name']}</td>";
						echo "<td><img src='./uploads/s_{$row['pic']}'/></td>";
						echo "<td>{$row['price']}</td>";
						echo "<td>{$row['num']}</td>";
						echo "<td>".($row['price']*$row['num'])."</td>";
						echo "<td>
							<a href='clearcart.php?id={$row['id']}'>删除

							</a>
							</td>";
						echo "</tr>";
						$sum+=($row["price"]*$row["num"]);
					}
				
				?>
				<tr>
				<th>总计金额：</th>
				<td colspan="6" align="right"><?php  echo $sum;?></td>
				</tr>
			
			
			</table>
		</center>
	</body>
</html>