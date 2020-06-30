<?php
// +----------------------------------------------------------------------
// | 学号：2017051604033
// +----------------------------------------------------------------------
// | 姓名：吴倩倩
// +----------------------------------------------------------------------
// | 本文件实现了添加学生信息功能
// +----------------------------------------------------------------------
?>
<?php
header("Content-Type:text/html; charset=utf-8");
include_once 'class.php';

if (!($_POST['username'] and $_POST['studentID'] and $_POST['password'] )){
	echo "输入不允许为空。单击<a href='javascript:onclik=history.go(-1)'>这里</a>返回";
}else{
	$a=new UseModel();
	$sqlstr = "insert into tb_user(username,password,studentID) values('".$_POST['username']."','".$_POST['password']."','".$_POST['studentID']."')";
	$result = $a->add($sqlstr, $conn);
	if ($result){
		echo "<script>alert('添加成功!');history.go(-1);</script>";
	}else {
		echo "<script>alert('添加失败');history.go(-1);</script>";
	}
}
?>