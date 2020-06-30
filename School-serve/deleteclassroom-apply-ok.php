// +----------------------------------------------------------------------
// | 学号：2017051604012
// +----------------------------------------------------------------------
// | Author: 缪淑婷
// +----------------------------------------------------------------------
// | content: 教室预定(后台)
// +----------------------------------------------------------------------
<?php
header("Content-Type:text/html; charset=utf-8");
include 'class.php';

$a=$_GET['username'];
$b=$_GET['studentID'];

$c=new UseModel();
$sql1="delete from tb_classroom Where username='$a' and studentID='$b'";
$result1=$c->delete($sql1, $conn);



if (!$result1){
	echo "<script>alert('删除失败!');history.go(-1);</script>";
}else {
	echo "<script>alert('删除成功!');</script>";
}
?>