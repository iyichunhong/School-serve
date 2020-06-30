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
$c=new UseModel();
	$sql="select * from tb_classroom";
	$result=$c->select($sql, $conn);
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
<td width="300"><div align="center" style="color:#ffffff">教学楼</div></td>
<td width="300"><div align="center" style="color:#ffffff">教室</div></td>
<td width="400"><div align="center" style="color:#ffffff">操作</div></td>
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
<td height="25"><div align="center" style="color:#ffffff"><?php echo $info['select5'];?></div></td>
<td height="25"><div align="center" style="color:#ffffff"><?php echo $info['classroom'];?></div></td>
<td height="25"><div align="center" style="color:#ffffff">
<?php 
$a=$info['username'];
$b=$info['studentID'];
echo "<a href='deleteclassroom-apply-ok.php?username=$a & studentID=$b'>删除</a>";
?>
</div></td>
</tr>
<?php 
}while ($info=mysqli_fetch_array($result));
?>

</table>
</div>
</form>