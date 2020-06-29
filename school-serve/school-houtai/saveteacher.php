// +----------------------------------------------------------------------
// | 学号：2017051604059
// +----------------------------------------------------------------------
// | Author: 易春红
// +----------------------------------------------------------------------
<?php
include "class.php";
$a=$_POST['name'];
$b=$_POST['teachercollege'];
$c=$_POST['s'];
$d=$_POST['x'];
$e=$_POST['l'];
$f=$_POST['tel'];
$g=$_POST['qq'];
$h=$_POST['j'];
$i=new UseModel();
$sql="insert into tb_teacher values('$a','$b','$c','$d','$e','$f','$g','$h')";
$result=$i->add($sql, $conn);
if($result)
{
	echo "老师信息添加成功";
}
else
{
	echo "老师信息添加失败";
}
?>