<?php
// +----------------------------------------------------------------------
// | 学号：2017051604033
// +----------------------------------------------------------------------
// | 姓名：吴倩倩
// +----------------------------------------------------------------------
// | 本文件实现了前台登录检测以及自动登录功能
// +----------------------------------------------------------------------
?>
<?php
header ( "Content-type: text/html; charset=utf-8" );
 session_start();
 include "class.php";
 header("conten-type:text/html;charset=utf-8");
 //数据库验证是否为合法用户
 $name=$_POST['username'];
 $password=$_POST['userpwd'];
 $id=$_POST['id'];
 $a=new UseModel;
 $sql="select * from tb_user where studentID='".$id."'";
 $b=$a->select($sql,$conn);
 if($b)
 {
 	$row=mysqli_fetch_assoc($b);
 	if($row['password']=$password)
 	{
 		$_SESSION['name']=$name;
 		$_SESSION['id']=$id;
 		$_SESSION['password']=$password;
 		$_SESSION['time']=time();
 		$o=time();
 		if(isset($_POST['jizhu'])&&$_POST['jizhu']="on")
 		{
 			//将用户名和密码保存到cookie中
 			$cookie_expire=time()+2592000;//将密码保存一个月的时间，超过一个月的话用户需要重新登录
 			setcookie("user","$name",$cookie_expire);
 			setcookie("id","$id",$cookie_expire);
 			setcookie("password","$password",$cookie_expire);
 			setcookie("next",'yes',$cookie_expire);
 			setcookie("time",$o,$cookie_expire);
 		}
 		echo "<script>alert('登录成功');location='main.php';</script>";
 	}
 }
  else
 {
 	echo "<script>alert('用户名或者密码错误');location='index.php';</script>";
 }
?>
