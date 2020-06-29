// +----------------------------------------------------------------------
// | 学号：2017051604012
// +----------------------------------------------------------------------
// | Author: 缪淑婷
// +----------------------------------------------------------------------
// | content: 教室预定(后台):添加教室信息
// +----------------------------------------------------------------------
<?php
header("Content-Type:text/html; charset=utf-8");
include 'class.php';
session_start();
$name=$_SESSION['name'];
$id=$_SESSION['id'];
?>
<div class="classroom-ok">
<?php
if (!($_POST['college'] and $_POST['tel'] and $_POST['select'] and $_POST['select1'] and $_POST['select2'] and $_POST['select3'] and $_POST['select4'] and $_POST['use'] and $_POST['request'] and $_POST['select5'] and $_POST['classroom'])){
	echo "<script>alert('输入不允许为空!');history.go(-1);</script>";
}else {
	$a=new UseModel();
	$sqlstr = "insert into tb_classroom values('$name','$id','".$_POST['college']."','".$_POST['tel']."','".$_POST['select']."','".$_POST['select1']."','".$_POST['select2']."','".$_POST['select3']."','".$_POST['select4']."','".$_POST['use']."','".$_POST['request']."','".$_POST['select5']."','".$_POST['classroom']."')";
	$result = $a->add($sqlstr, $conn);
	if ($result){
		echo "<script>alert('添加成功!');history.go(-1);</script>";
	}else {
		echo "<script>alert('添加失败');history.go(-1);</script>";
	}
}
?>
</div>