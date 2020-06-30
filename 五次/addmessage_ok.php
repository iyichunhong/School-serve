// +----------------------------------------------------------------------
// | 学号：2017051604014
// +----------------------------------------------------------------------
// | Author: 刘慧敏
// +----------------------------------------------------------------------
<?php
header("Content-Type:text/html; charset=utf-8");
include_once 'conn/conn.php';
function getip() { 
	$IP=getenv('REMOTE_ADDR'); 
	$IP_ = getenv('HTTP_X_FORWARDED_FOR'); 
	if (($IP_ != "") && ($IP_ != "unknown")) $IP=$IP_; 
	return $IP; 
} 
session_start();
$name=$_POST['user_name'];
$id=$_POST['user_id'];
  $ip=getip(); 
  $fabu=$_POST['post_fabu'];
  //$name=$_POST['user_name']; 
  //$id=$_POST['user_id']; 
  $qq=$_POST['user_qq'];
  $tel=$_POST['user_tel']; 
  $title=$_POST['post_title'];
  $info=$_POST['post_info']; 
  $time=date('Y-m-d h:i:s', time()); 
  $sql="insert into swzl (username,studentID,qq,tel,ip,title,info,time,fabu) values ('$name','$id','$qq','$tel','$ip','$title','$info','$time','$fabu')"; 
  if(mysqli_query($conn,$sql))
	echo"<script>alert('表单提交成功！');window.location.href='main.php';</script>";
  else
	echo"<script>alert('表单提交失败！');history.back()</script>;";
?>