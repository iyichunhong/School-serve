// +----------------------------------------------------------------------
// | 学号：2017051604059
// +----------------------------------------------------------------------
// | Author: 易春红
// +----------------------------------------------------------------------
<?php
header("Content-Type:text/html; charset=utf-8");
include 'class.php';

$a=$_GET['username'];
$b=$_GET['studentID'];

$c=new UseModel();
$sql1="delete from tb_repairs Where username='$a' and studentID='$b'";
$result1=$c->delete($sql1, $conn);



if (!$result1){
	echo "<script>alert('删除失败!');history.go(-1);</script>";
}else {
	echo "<script>alert('删除成功!');</script>";
}
?>