// +----------------------------------------------------------------------
// | 学号：2017051604014
// +----------------------------------------------------------------------
// | Author: 刘慧敏
// +----------------------------------------------------------------------
<?php
header("Content-Type:text/html; charset=utf-8");
include 'class.php';
$c=new UseModel();
	$sql="select * from tb_library";
	$result=$c->select($sql, $conn);
	$info = mysqli_fetch_array($result);

?>

<form method="get">
<div style="float:left; position:absolute;top:50px;left:50px">
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#FFFFFF">
<tr bgcolor="#74adaa" align="center">
<td width="300" height="25" align="center"><div align="center" style="color:#ffffff">图书名称</div></td>
<td width="300"><div align="center" style="color:#ffffff">索引号</div></td>
<td width="300"><div align="center" style="color:#ffffff">出版社</div></td>
<td width="100"><div align="center" style="color:#ffffff">数量</div></td>
<td width="100"><div align="center" style="color:#ffffff">是否可借</div></td>
<td width="100"><div align="center" style="color:#ffffff">操作</div></td>
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
<td height="25"><div align="center" style="color:#ffffff">
<?php 
$a=$info['bookname'];
$b=$info['index'];
echo "<a href='deletelibrary-ok.php?bookname=$a & index=$b'>删除</a>";
?>
</div></td>
</tr>
<?php 
}while ($info=mysqli_fetch_array($result));
?>

</table>
</div>
</form>