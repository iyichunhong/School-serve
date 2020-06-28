// +----------------------------------------------------------------------
// | 学号：2017051604059
// +----------------------------------------------------------------------
// | Author: 易春红
// +----------------------------------------------------------------------
<?php 

header("Content-Type:text/html; charset=utf-8");

include "class.php";
$a=$_POST['name'];
$b=$_POST['sex'];
$c=$_POST['college'];
$d=$_POST['nu'];
$e=$_POST['time'];
$f=$_POST['backtime'];
$g=$_POST['where'];
$h=$_POST['tel'];
$i=$_POST['jianhuren'];
$j=$_POST['tele'];
$k=$_POST['why'];
$l=$_POST['beizu'];
$m=$_POST['studentID'];
$n=$_POST['co'];
$ll=new UseModel();
$sql="insert into tb_fromtheregister values('$a','$m','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$n');";
$kk=$ll->add($sql, $conn);
if($kk==true)
{
 echo  "<script>alert('离校登记成功！');history.go(-1);</script>";
}
else 
{
	echo "<script>alert('离校登记失败！');history.go(-1);</script>";
}
?>