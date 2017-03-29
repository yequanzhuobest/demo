<html>
<meta charset="utf-8"/>
<head>
</head>
<body>
<form method="post" name="form1" id="form1" action="">
 <tr>
 <td width="62" align="center"><input type="checkbox" name="conn_id_1" id="conn_id_1" value="1"/></td>
 <td>东邪</td>
 <td>PHP</td>
 <td>部门经理</td>
 <td>29</td>
 </tr>
 <br/><br/>
 <tr>
 <td width="62" align="center"><input type="checkbox" name="conn_id_2" id="conn_id_2" value="1"/></td>
 <td>西毒</td>
 <td>JAVA</td>
 <td>部门经理</td>
 <td>29</td>
 </tr>
 <br/><br/>
 <tr>
 <td width="62" align="center"><input type="checkbox" name="conn_id_3" id="conn_id_3" value="1"/></td>
 <td>南帝</td>
 <td>VB</td>
 <td>部门经理</td>
 <td>29</td>
 </tr>
 <br/><br/>
 <tr>
 <td width="62" align="center"><input type="checkbox" name="conn_id_4" id="conn_id_4" value="1"/></td>
 <td>北丐</td>
 <td>ASP</td>
 <td>部门经理</td>
 <td>29</td>
 </tr>
 <br/><br/>
 <tr>
 <input type="button" onclick="uncheckAll(form1,status)" value="不选">
 <input type="button" onclick="checkAll(form1,status)" value="全选">
 <input type="button" onclick="switchAll(form1,status)" value="反选">
 </tr>
</form>
<script>
 function uncheckAll(form1,status){ //不选
 var elements = document.getElementsByTagName('input'); //获取input标签
 for(var i=0;i<elements.length;i++){ //根据标签的长度执行循环
 if(elements[i].type == 'checkbox'){ //判断对象中元素的类型
 if(elements[i].checked==true){ //判断当checked的值为TURE时
 elements[i].checked=false; //将checked赋值为FALSE
 }
 }
 }
 }

 function checkAll(form1,status){ //全选
 var elements = document.getElementsByTagName('input');
 for(var i=0;i<elements.length;i++){
 if(elements[i].type == 'checkbox'){
 if(elements[i].checked==false){
 elements[i].checked=true;
 }
 }
 }
 }

 function switchAll(form1,status){ //反选
 var elements = document.getElementsByTagName('input');
 for(var i=0;i<elements.length;i++){
 if(elements[i].type == 'checkbox'){
 if(elements[i].checked==true){
 elements[i].checked=false;
 }else if(elements[i].checked==false){
 elements[i].checked=true;
 }
 }
 }
 }
</script>
</body>
</html>