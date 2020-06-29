// +----------------------------------------------------------------------
// | 学号：2017051604012
// +----------------------------------------------------------------------
// | Author: 缪淑婷
// +----------------------------------------------------------------------
// | content: 教室预定(后台):选择教室
// +----------------------------------------------------------------------
<?php
header("Content-Type:text/html; charset=utf-8");
include 'class.php';
$a=new UseModel();
	$sql="select * from tb_floor";
	$result=$a->select($sql, $conn);
	$info = mysqli_fetch_array($result);

?>

<form method="get">
<div style="float:left; position:absolute;top:50px;left:50px">
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#FFFFFF">
<tr bgcolor="#74adaa" align="center">
<td width="300" height="25" align="center"><div align="center" style="color:#ffffff">周</div></td>
<td width="300"><div align="center" style="color:#ffffff">星期</div></td>
<td width="300"><div align="center" style="color:#ffffff">节次</div></td>
<td width="300"><div align="center" style="color:#ffffff">教学楼</div></td>
<td width="300"><div align="center" style="color:#ffffff">教室号</div></td>
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
</tr>
<?php 
}while ($info=mysqli_fetch_array($sql));
?>

</table>
</div>
</form>