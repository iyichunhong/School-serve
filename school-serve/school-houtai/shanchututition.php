// +----------------------------------------------------------------------
// | 学号：2017051604055
// +----------------------------------------------------------------------
// | Author: 陈明欣
// +----------------------------------------------------------------------
<?php 
include "conn/conn.php";
$a=$_GET['name'];
$b=$_GET['studentID'];
$p="delete from tb_tuition where name='$a' and studentID='$b'";
$w=mysqli_query($conn,$p);
if($w) 
{
	echo "<script>alert('删除信息成功');history.go(-1);</script>";
}
else
{
	echo "<script>alert('删除信息失败');history.go(-1);</script>";
}
?>