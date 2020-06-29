// +----------------------------------------------------------------------
// | 学号：2017051604014
// +----------------------------------------------------------------------
// | Author: 刘慧敏
// +----------------------------------------------------------------------
<?php
header("Content-Type:text/html; charset=utf-8");
include_once 'conn/conn.php';
  $name=$_POST['name']; 
  $id=$_POST['id']; 
  $qq=$_POST['qq'];
  $tel=$_POST['tel']; 
  $title=$_POST['title'];
  $info=$_POST['info']; 
  $sql="update swzl set studentID='$id',qq='$qq',tel='$tel',title='$title',info='$info' where username='$name'"; 
  if(mysqli_query($conn,$sql))
	echo"<script>alert('信息修改成功！');window.location.href='message_info.php';</script>";
  else
	echo"<script>alert('信息修改失败！');history.back();</script>;";
?>