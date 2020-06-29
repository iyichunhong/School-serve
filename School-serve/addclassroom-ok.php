// +----------------------------------------------------------------------
// | 学号：2017051604012
// +----------------------------------------------------------------------
// | Author: 缪淑婷
// +----------------------------------------------------------------------
// | content: 教室预定(后台):添加教室
// +----------------------------------------------------------------------
<?php
header("Content-Type:text/html; charset=utf-8");
include_once 'class.php';

if (!($_POST['week'] and $_POST['weekday'] and $_POST['time'] and $_POST['floor'] and $_POST['number'])){
	echo "输入不允许为空。单击<a href='javascript:onclik=history.go(-1)'>这里</a>返回";
}else{
	$a=new UseModel();
	$sqlstr = "insert into tb_floor values('".$_POST['week']."','".$_POST['weekday']."','".$_POST['time']."','".$_POST['floor']."','".$_POST['number']."')";
	$result = $a->add($sqlstr, $conn);
	if ($result){
		echo "<script>alert('添加成功!');history.go(-1);</script>";
	}else {
		echo "<script>alert('添加失败');history.go(-1);</script>";
	}
}
?>