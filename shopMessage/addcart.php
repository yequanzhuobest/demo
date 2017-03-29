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
			<h3>添加商品到购物车<h3>
			
				<?php
				//从数据库中读取要购买的信息并添加到购物车中
				//1.导入配置文件 
					require("dbconfig.php");
				//2. 连接数据库，并选择数据库
					$link = @mysql_connect(HOST,USER,PASS)or die("数据库连接失败");
					mysql_select_db(DBNAME,$link);
					mysql_set_charset('utf8');
				
				//3. 执行商品信息查询
					$sql = "select * from shopmsg where id ={$_GET['id']}";
					$result = mysql_query($sql,$link);
					
					if(empty($result) || mysql_num_rows($result)==0){
						die("没有找到购买的信息");
					}else{
						$shop = mysql_fetch_assoc($result);
						//var_dump($shop);
					}
					
					$shop["num"]=1;
					
					//var_dump($shop);数量跌加
					if(isset($_SESSION["shoplist"][$shop["id"]])){
						$_SESSION["shoplist"][$shop["id"]]["num"]++;
					}else{
						$_SESSION["shoplist"][$shop["id"]]=$shop;
					}
					
				
				?>

		
		</center>
	</body>
</html>