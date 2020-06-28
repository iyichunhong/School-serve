// +----------------------------------------------------------------------
// | 学号：2017051604014
// +----------------------------------------------------------------------
// | Author: 刘慧敏
// +----------------------------------------------------------------------
<?php
header("Content-Type:text/html; charset=utf-8");
session_start();
  include_once 'conn/conn.php';
  $name=$_POST['username'];
  $reply_name=$_POST['Name'];
  $reply_message=$_POST['message'];
  $reply_time=date('Y-m-d h:i:s', time());
  $sql="update swzl set reply_name='$reply_name',reply_time='$reply_time',reply_message='$reply_message' where username='$name'"; 
  if(mysqli_query($conn,$sql))
	echo"<script>alert('留言发表成功！');window.location.href='info.php';</script>";
  else
	echo"<script>alert('留言发表失败！');</script>";
?>