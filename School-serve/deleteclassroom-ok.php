// +----------------------------------------------------------------------
// | 学号：2017051604012
// +----------------------------------------------------------------------
// | Author: 缪淑婷
// +----------------------------------------------------------------------
// | content: 教室预定(后台):删除教室成功
// +----------------------------------------------------------------------
<?php
header("Content-Type:text/html; charset=utf-8");
include 'class.php';


$b=new UseModel();
$sql1="delete from tb_floor Where number='$a'";
$result1=$b->delete($sql1, $conn);



if (!$result1){
	echo "<script>alert('删除失败!');history.go(-1);</script>";
}else {
	echo "<script>alert('删除成功!');</script>";
}
?>