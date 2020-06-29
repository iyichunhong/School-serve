// +----------------------------------------------------------------------
// | 学号：2017051604014
// +----------------------------------------------------------------------
// | Author: 刘慧敏
// +----------------------------------------------------------------------
<?php
header("Content-Type:text/html; charset=utf-8"); 
session_start();
  include_once 'conn/conn.php';
  $sql="delete from swzl where studentID=".$_GET['id'];
  if(mysqli_query($conn,$sql))
	echo"<script>alert('信息修改成功！');window.location.href='message_info.php';</script>";
  else
	echo"<script>alert('信息修改失败！');history.back();</script>;";
?>