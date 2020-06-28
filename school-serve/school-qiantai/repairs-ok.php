// +----------------------------------------------------------------------
// | 学号：2017051604059
// +----------------------------------------------------------------------
// | Author: 易春红
// +----------------------------------------------------------------------
<?php
header("Content-Type:text/html; charset=utf-8");
include 'top.php';
include_once 'class.php';
session_start();
$name=$_SESSION['name'];
$id=$_SESSION['id'];
?>
<div class="classroom-ok">
<?php 
if (!($_POST['tel'] and $_POST['date'] and $_POST['college'] and $_POST['Sroom'] and $_POST['project'] and $_POST['explain'])){
	echo "输入不允许为空。单击<a href='javascript:onclik=history.go(-1)'>这里</a>返回";
}else{
	$a=new UseModel();
	$sqlstr = "insert into tb_repairs values('$name','$id','".$_POST['tel']."','".$_POST['date']."','".$_POST['college']."','".$_POST['Sroom']."','".$_POST['project']."','".$_POST['explain']."')";
	$result = $a->add($sqlstr, $conn);
	if ($result){
		echo "<script>alert('添加成功!');history.go(-1);</script>";
	}else {
		echo "<script>alert('添加失败');history.go(-1);</script>";
	}
}
?>
</div>