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
	$sql="select * from tb_classroom";
	$result=$a->select($sql, $conn);
	$info = mysqli_fetch_array($result);

?>

<form method="get">
<div style="float:left; position:absolute;top:50px;left:50px">
<table width=1000px; border="0" align="left" cellpadding="0" cellspacing="1" bgcolor="#FFFFFF">
<tr bgcolor="#74adaa" align="center">
<td width="300" height="50" align="center"><div align="center" style="color:#ffffff">姓名</div></td>
<td width="300"><div align="center" style="color:#ffffff">学号</div></td>
<td width="300"><div align="center" style="color:#ffffff">学院</div></td>
<td width="300"><div align="center" style="color:#ffffff">联系方式</div></td>
<td width="300"><div align="center" style="color:#ffffff">校区</div></td>
<td width="300"><div align="center" style="color:#ffffff">开始周</div></td>
<td width="300"><div align="center" style="color:#ffffff">结束周</div></td>
<td width="300"><div align="center" style="color:#ffffff">星期</div></td>
<td width="300"><div align="center" style="color:#ffffff">时间节次</div></td>
<td width="300"><div align="center" style="color:#ffffff">主要用途</div></td>
<td width="300"><div align="center" style="color:#ffffff">相关要求</div></td>
<td width="300"><div align="center" style="color:#ffffff">教学楼</div></td>
<td width="300"><div align="center" style="color:#ffffff">教室</div></td>
</tr>
<?php 
do {
?>
<tr bgcolor="#74adaa">
<td height="50"><div align="center" style="color:#ffffff"><?php echo $info['username'];?></div></td>
<td height="50"><div align="center" style="color:#ffffff"><?php echo $info['studentID'];?></div></td>
<td height="50"><div align="center" style="color:#ffffff"><?php echo $info['college'];?></div></td>
<td height="25"><div align="center" style="color:#ffffff"><?php echo $info['tel'];?></div></td>
<td height="25"><div align="center" style="color:#ffffff"><?php echo $info['select'];?></div></td>
<td height="25"><div align="center" style="color:#ffffff"><?php echo $info['select1'];?></div></td>
<td height="25"><div align="center" style="color:#ffffff"><?php echo $info['select2'];?></div></td>
<td height="25"><div align="center" style="color:#ffffff"><?php echo $info['select3'];?></div></td>
<td height="25"><div align="center" style="color:#ffffff"><?php echo $info['select4'];?></div></td>
<td height="25"><div align="center" style="color:#ffffff"><?php echo $info['use'];?></div></td>
<td height="25"><div align="center" style="color:#ffffff"><?php echo $info['request'];?></div></td>
<td height="25"><div align="center" style="color:#ffffff"><?php echo $info['select5'];?></div></td>
<td height="25"><div align="center" style="color:#ffffff"><?php echo $info['classroom'];?></div></td>
</tr>
<?php 
}while ($info=mysqli_fetch_array($result));
?>

</table>
</div>
</form>