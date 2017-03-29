<?php

//删除购物车session中的信息
session_start();

if($_GET['id']){
	unset($_SESSION["shoplist"][$_GET['id']]);
}else{
	unset($_SESSION["shoplist"]);//清空session
}




header("location:mycart.php");

