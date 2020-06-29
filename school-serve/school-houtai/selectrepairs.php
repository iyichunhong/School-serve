// +----------------------------------------------------------------------
// | 学号：2017051604059
// +----------------------------------------------------------------------
// | Author: 易春红
// +----------------------------------------------------------------------
<?php
header("Content-Type:text/html; charset=utf-8");
include 'class.php';
$a=new UseModel();
	$sql="select * from tb_repairs";
	$result=$a->select($sql, $conn);
	$info = mysqli_fetch_array($result);

?>

<form method="get">
<div style="float:left; position:absolute;top:50px;left:50px">
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#FFFFFF">
<tr bgcolor="#74adaa" align="center">
<td width="150" height="25" align="center"><div align="center" style="color:#ffffff">报修人</div></td>
<td width="83"><div align="center" style="color:#ffffff">学号</div></td>
<td width="200"><div align="center" style="color:#ffffff">楼栋号</div></td>
<td width="100"><div align="center" style="color:#ffffff">联系电话</div></td>
<td width="100"><div align="center" style="color:#ffffff">寝室号</div></td>
<td width="100"><div align="center" style="color:#ffffff">报修日期</div></td>
<td width="200"><div align="center" style="color:#ffffff">报修项目</div></td>
<td width="300"><div align="center" style="color:#ffffff">报修说明</div></td>
</tr>
<?php 
do {
?>
<tr bgcolor="#74adaa">
<td height="25"><div align="center" style="color:#ffffff"><?php echo $info['username'];?></div></td>
<td height="25"><div align="center" style="color:#ffffff"><?php echo $info['studentID'];?></div></td>
<td height="25"><div align="center" style="color:#ffffff"><?php echo $info['college'];?></div></td>
<td height="25"><div align="center" style="color:#ffffff"><?php echo $info['tel'];?></div></td>
<td height="25"><div align="center" style="color:#ffffff"><?php echo $info['Sroom'];?></div></td>
<td height="25"><div align="center" style="color:#ffffff"><?php echo $info['date'];?></div></td>
<td height="25"><div align="center" style="color:#ffffff"><?php echo $info['project'];?></div></td>
<td height="25"><div align="center" style="color:#ffffff"><?php echo $info['explain'];?></div></td>
</tr>
<?php 
}while ($info=mysqli_fetch_array($result));
?>

</table>
</div>
</form>