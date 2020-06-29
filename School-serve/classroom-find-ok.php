// +----------------------------------------------------------------------
// | 学号：2017051604012
// +----------------------------------------------------------------------
// | Author: 缪淑婷
// +----------------------------------------------------------------------
// | content: 教室预定(后台):选择教室无效
// +----------------------------------------------------------------------
<?php
include 'class.php';
header("Content-Type:text/html; charset=utf-8");
$week = $_GET['week'];
$weekday = $_GET['weekday'];
$time = $_GET['time'];
$floor=$_GET['floor'];


$a=new UseModel();
$sql="select * from tb_floor where week='".$week."' and  weekday='".$weekday."' and time='".$time."' and floor='".$floor."'";
$b=$a->select($sql, $conn);
$result=mysqli_fetch_array($b);

if ($result==true)
{
	echo $result['number'];
}else {
	echo "<script>alert('暂无教室信息')</script>";
	exit;
}
?>