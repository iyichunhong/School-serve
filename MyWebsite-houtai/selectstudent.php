<?php
// +----------------------------------------------------------------------
// | 学号：2017051604033
// +----------------------------------------------------------------------
// | 姓名：吴倩倩
// +----------------------------------------------------------------------
// | 本文件实现了查看学生信息功能
// +----------------------------------------------------------------------
?>
<?php
header("Content-Type:text/html; charset=utf-8");
include 'class.php';
$b=new UseModel();
	$sql="select * from tb_user";
	$result=$b->select($sql, $conn);
	$info = mysqli_fetch_array($result);

?>

<form method="get">
<div style="float:left; position:absolute;top:50px;left:50px">
<table width="1000" border="0" align="left" cellpadding="0" cellspacing="1" bgcolor="#FFFFFF">
<tr bgcolor="#74adaa" align="center">
<td width="150" height="25" align="center"><div align="center" style="color:#ffffff">学生姓名</div></td>
<td width="83"><div align="center" style="color:#ffffff">学生学号</div></td>
</tr>
<?php 
do {
?>
<tr bgcolor="#74adaa">
<td height="25"><div align="center" style="color:#ffffff"><?php echo $info['username'];?></div></td>
<td height="25"><div align="center" style="color:#ffffff"><?php echo $info['studentID'];?></div></td>
</tr>
<?php 
}while ($info=mysqli_fetch_array($result));
?>

</table>
</div>
</form>