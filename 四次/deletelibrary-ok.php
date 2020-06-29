// +----------------------------------------------------------------------
// | 学号：2017051604014
// +----------------------------------------------------------------------
// | Author: 刘慧敏
// +----------------------------------------------------------------------
<?php
header("Content-Type:text/html; charset=utf-8");
include 'class.php';

$a=$_GET['bookname'];
$b=$_GET['index'];


$c=new UseModel();
$sql1="delete from tb_library Where bookname='$a'";
$result1=$c->delete($sql1, $conn);



if (!$result1){
	echo "<script>alert('删除失败!');history.go(-1);</script>";
}else {
	echo "<script>alert('删除成功!');</script>";
}
?>