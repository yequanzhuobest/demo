﻿<html>
<head>

<title>商品信息管理</title>
</head>
<body>
	<center>
	<?php
	
	include("menu.php");

	?>
	<h3>发布商品信息</h3>
	<form action="action.php?action=add" method="post" enctype="multipart/form-data">
	<table border="0" width="300">
		<tr>
			<td align="right">名称</td>
			<td><input type="text" name="name"/></td>
		</tr>
		<tr>
			<td align="right">类型</td>
			<td>
			<select name="typeid">
				<?php
				include("dbconfig.php");
				foreach($typelist as $k=>$v){
					echo "<option value='{$k}'>{$v}</option>";
				}
				
				?>
				</select>
			</td>
		</tr>
		<tr>
			<td align="right">单价</td>
			<td><input type="text" name="price"/></td>
		</tr>
		<tr>
			<td align="right">库存</td>
			<td><input type="text" name="total"/></td>
		</tr>
		<tr>
			<td align="right">图片</td>
			<td><input type="file" name="pic"/></td>
		</tr>
		<tr>
			<td align="right">描述</td>
			<td><textarea rows="5" cols="20" name="note"></textarea></td>
		</tr>
		<tr>
			
			<td colspan="2" align="center">
			<input type="submit" value="添加"/>&nbsp;&nbsp;&nbsp;
			<input type="reset" value="重置"/>
			</td>
		</tr>
	</table>
	</form>
</center>
</body>




</html>