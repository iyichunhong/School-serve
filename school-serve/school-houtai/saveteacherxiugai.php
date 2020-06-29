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
$sql="update tb_teacher values set name='$a' college='$b' sex='$c' xuewei='$d' xueli='$e' tel='$f' qq='$g' lijin='$j' where name='$";
$result=$i->add($sql, $conn);
if($result)
{
	echo "老师信息修改成功";
}
else
{
	echo "老师信息修改失败";
}
?>