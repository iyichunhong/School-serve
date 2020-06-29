// +----------------------------------------------------------------------
// | 学号：2017051604014
// +----------------------------------------------------------------------
// | Author: 刘慧敏
// +----------------------------------------------------------------------
<table>
<tr>
<td>
<div align="center" style=" position:absolute;top:100px;left:400px">
<?php
include 'class.php';
$name = $_POST['bookname'];

if ($name != ""){
	$a=new UseModel();
	$sql="select * from tb_library where bookname like '%".$name."%'";
	$result=$a->select($sql, $conn);
}
$info = mysqli_fetch_array($result);
if ($info==false){
	echo "没有符合条件的数据!";
}else {
?>
</div>
</td>
</tr>
</table>
<form method="get">
<div style="float:left; position:absolute;top:100px;left:200px">
<table width="530" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#FFFFFF">
<tr bgcolor="#74adaa" align="center">
<td width="150" height="25" align="center"><div align="center" style="color:#ffffff">图书名称</div></td>
<td width="83"><div align="center" style="color:#ffffff">索引号</div></td>
<td width="100"><div align="center" style="color:#ffffff">出版社</div></td>
<td width="50"><div align="center" style="color:#ffffff">数量</div></td>
<td width="100"><div align="center" style="color:#ffffff">是否可借</div></td>
</tr>
<?php 
do {
?>
<tr bgcolor="#74adaa">
<td height="25"><div align="center" style="color:#ffffff"><?php echo $info['bookname'];?></div></td>
<td height="25"><div align="center" style="color:#ffffff"><?php echo $info['index'];?></div></td>
<td height="25"><div align="center" style="color:#ffffff"><?php echo $info['bookconcern'];?></div></td>
<td height="25"><div align="center" style="color:#ffffff"><?php echo $info['bknumber'];?></div></td>
<td height="25"><div align="center" style="color:#ffffff">
<?php 
if ($info['borrow']==1){
echo "是";
}else{
	echo "否";
}
?></div></td>
</tr>
<?php 
}while ($info=mysqli_fetch_array($result));
}
?>

</table>
</div>
</form>