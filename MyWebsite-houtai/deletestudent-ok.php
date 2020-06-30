<?php
// +----------------------------------------------------------------------
// | 学号：2017051604033
// +----------------------------------------------------------------------
// | 姓名：吴倩倩
// +----------------------------------------------------------------------
// | 本文件实现了删除学生信息功能
// +----------------------------------------------------------------------
?>
<?php
header("Content-Type:text/html; charset=utf-8");
include 'class.php';

$a=$_GET['username'];
$c=$_GET['studentID'];

$b=new UseModel();
$sql1="delete from tb_user Where username='$a' and studentID='$c'";
$result1=$b->delete($sql1, $conn);

if (!$result1){
	echo "<script>alert('删除失败!');history.go(-1);</script>";
}else {
	echo "<script>alert('删除成功!');</script>";
}
?>