// +----------------------------------------------------------------------
// | 学号：2017051604059
// +----------------------------------------------------------------------
// | Author: 易春红
// +----------------------------------------------------------------------
<?php 
include "conn/conn.php";
$a=$_GET['name'];
$b=$_GET['college'];
$p="delete from tb_teacher where name='$a' and college='$b'";
$w=mysqli_query($conn,$p);
if($w) 
{
	echo "<script>alert('删除老师信息成功');history.go(-1);</script>";
}
else
{
	echo "<script>alert('删除老师信息失败');history.go(-1);</script>";
}
?>