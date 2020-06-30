// +----------------------------------------------------------------------
// | 学号：2017051604012
// +----------------------------------------------------------------------
// | Author: 缪淑婷
// +----------------------------------------------------------------------
// | content: 教室预定(后台):删除教室
// +----------------------------------------------------------------------
<?php
header("Content-Type:text/html; charset=utf-8");
include 'class.php';
$b=new UseModel();
	$sql="select * from tb_floor";
	$result=$b->select($sql, $conn);
	$info = mysqli_fetch_array($result);

?>

<form method="get">
<div style="float:left; position:absolute;top:50px;left:50px">
<table width="1000" border="0" align="left" cellpadding="0" cellspacing="1" bgcolor="#FFFFFF">
<tr bgcolor="#74adaa" align="center">
<td width="150" height="25" align="center"><div align="center" style="color:#ffffff">周</div></td>
<td width="83"><div align="center" style="color:#ffffff">星期</div></td>
<td width="100"><div align="center" style="color:#ffffff">节次</div></td>
<td width="100"><div align="center" style="color:#ffffff">教学楼</div></td>
<td width="300"><div align="center" style="color:#ffffff">教室号</div></td>
<td width="100"><div align="center" style="color:#ffffff">操作</div></td>
</tr>
<?php 
do {
?>
<tr bgcolor="#74adaa">
<td height="25"><div align="center" style="color:#ffffff"><?php echo $info['week'];?></div></td>
<td height="25"><div align="center" style="color:#ffffff"><?php echo $info['weekday'];?></div></td>
<td height="25"><div align="center" style="color:#ffffff"><?php echo $info['time'];?></div></td>
<td height="25"><div align="center" style="color:#ffffff"><?php echo $info['floor'];?></div></td>
<td height="25"><div align="center" style="color:#ffffff"><?php echo $info['number']?></div></td>
<td height="25"><div align="center" style="color:#ffffff">
<?php 
$a=$info['number'];
echo "<a href='deleteclassroom-ok.php?number=$a'>删除</a>";
?>
</div></td>
</tr>
<?php 
}while ($info=mysqli_fetch_array($result));
?>

</table>
</div>
</form>