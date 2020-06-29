// +----------------------------------------------------------------------
// | 学号：2017051604055
// +----------------------------------------------------------------------
// | Author: 陈明欣
// +----------------------------------------------------------------------
<?php 
 header ( "Content-type: text/html; charset=utf-8" );
include "class.php";
session_start();
$a=$_SESSION['name'];
$b=$_SESSION['id'];
$p=$_POST['money'];
//查询一卡通的余额
$sql="select * from tb_card where name='$a' and studentID='$b'";
$c=new UseModel();
$l=$c->select($sql,$conn);
$row=mysqli_fetch_array($l);
if($row==true)
{
	$u=$row['balance'];
}
else 
{
	echo "无此用户";
	exit;
}
//判断一卡通的余额是否足够去缴纳费用
if($u<$p)
{
	echo "<script>alert('一卡通余额不足')</script>";
}
else 
{
	$sql1="update tb_card set balance=balance-'$p'";
	$c=new UseModel();
	$l=$c->change($sql1,$conn);
	$sql2="update tb_tuition set balance=balance+'$p'";
	$t=new UseModel();
	$y=$t->change($sql2, $conn);
	if($l && $y)
	{
		echo "充值成功！";
	}
    
}
		 
		 
		 ?>