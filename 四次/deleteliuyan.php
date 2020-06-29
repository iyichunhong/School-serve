// +----------------------------------------------------------------------
// | 学号：2017051604014
// +----------------------------------------------------------------------
// | Author: 刘慧敏
// +----------------------------------------------------------------------
<?php
header("Content-Type:text/html; charset=utf-8"); 
session_start();
  include_once 'conn/conn.php';
  $sql="update swzl set reply_name='',reply_time='',reply_message='' where studentID=".$_GET['id'];
  if(mysqli_query($conn,$sql))
	echo"<script>alert('留言删除成功！');window.location.href='liuyan_info.php';</script>";
  else
	echo"<script>alert('留言删除失败！');history.back();</script>;";
?>