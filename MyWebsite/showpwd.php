<?php
// +----------------------------------------------------------------------
// | 学号：2017051604033
// +----------------------------------------------------------------------
// | 姓名：吴倩倩
// +----------------------------------------------------------------------
// | 本文件实现了前台密码找回结果界面及功能
// +----------------------------------------------------------------------
?>
<html>
<head>
<title>找回密码</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
</head>
<body>
<?php
 include("conn/conn.php");
 include "class.php";
 header ( "Content-type: text/html; charset=utf-8" );
 $daan=$_POST['daan'];
 $username=$_POST['username'];
 $a=new UseModel();
 $sql="select * from tb_user where username='".$username."'";
 $b=$a->select($sql,$conn);
 $info=mysqli_fetch_assoc($b);
 if($info['answer']!=$daan)
 {
 	echo "<script>alert('答案输入错误');history.back();</script>";
 	exit;
 }
 else 
 {
?>
<table border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
	<td><img src="images/s.jpg" width="130" height="80"></td>
	<td><h1>找回密码</h1></td>
</tr>
  <tr >
    <td><div align="center"><h3>名字:</h3></div></td>
    <td ><div align="left"><?php echo $username;?></div></td>
  </tr>
  <tr>
    <td ><div align="center"><h3>密码:</h3></div></td>
    <td ><div align="left"><?php echo $info['password'];?></div></td>
  </tr>
  <tr>
    <td height="25" colspan="2"><div align="center"><input name="submit" type="button" id="submit" onClick="window.close()"  value="确定">
    </div></td>
  </tr>
</table>
<?php
  }
?>


</body>
</html>
