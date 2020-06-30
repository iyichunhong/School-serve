// +----------------------------------------------------------------------
// | 学号：2017051604014
// +----------------------------------------------------------------------
// | Author: 刘慧敏
// +----------------------------------------------------------------------
<?php
header("Content-Type:text/html; charset=utf-8");
include_once 'class.php';

if (!($_POST['bookname'] and $_POST['index'] and $_POST['bookconcern'] and $_POST['bknumber'])){
	echo "输入不允许为空。单击<a href='javascript:onclik=history.go(-1)'>这里</a>返回";
}else{
	$a=new UseModel();
	$sqlstr = "insert into tb_library values('".$_POST['bookname']."','".$_POST['index']."','".$_POST['bookconcern']."','".$_POST['bknumber']."','".$_POST['borrow']."')";
	$result = $a->add($sqlstr, $conn);
	if ($result){
		echo "<script>alert('添加成功!');history.go(-1);</script>";
	}else {
		echo "<script>alert('添加失败');history.go(-1);</script>";
	}
}
?>