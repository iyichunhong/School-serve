// +----------------------------------------------------------------------
// | 学号：2017051604059
// +----------------------------------------------------------------------
// | Author: 易春红
// +----------------------------------------------------------------------
<?php
 header("Content-Type:text/html; charset=utf-8");
include 'class.php';
session_start();
$name=$_SESSION['name'];
$id=$_SESSION['id'];

$d=new UseModel();
$sql="select * from tb_user where username='".$name."' and studentID='".$id."'";
$e=$d->select($sql, $conn);
$result=mysqli_fetch_array($e);
$a=$result['tel'];
$b=$result['Sroom'];
$c=$result['college'];

$f=new UseModel();
$sql1="insert into tb_exigence values('$name','$c','$b','$a')";
$result1=$f->add($sql1, $conn);

if (!$result1){
	echo "<script>alert('报修失败');history.go(-1);</script>";
}else {
	echo "<script>alert('报修成功');history.go(-1);</script>";
}
?>