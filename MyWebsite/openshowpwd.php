<?php
// +----------------------------------------------------------------------
// | 学号：2017051604033
// +----------------------------------------------------------------------
// | 姓名：吴倩倩
// +----------------------------------------------------------------------
// | 本文件实现了前台找回密码界面及功能
// +----------------------------------------------------------------------
?>
<html>
<head>
<title>找回密码</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
<?php
 include("conn/conn.php");
 include "class.php";
 header ( "Content-type: text/html; charset=utf-8" );
?>
</head>
<body>
<?php 
$name=$_POST['n'];
$studentID=$_POST['s'];
?>
<script>
 function openfindpwd()
	{
		window.open("showpwd.php","newframe","left=400,top=200,width=400,height=200,menubar=no,toolbar=no,location=no,scrollbars=no,location=no");
	}
</script>
<form action="showpwd.php" method="post">
<table>
<tr>
	<td><img src="images/l.png" width="130" height="80"></td>
	<td><h1>找回密码</h1></td>
</tr>
<tr>
	<td>这是你的密保问题：</td>
	<td>
		<?php
		$a=new UseModel();
		$sql="select * from tb_user where studentID='".$studentID."'";
		$b=$a->select($sql,$conn);
		$row=mysqli_fetch_array($b);
		 if($row==true)
		 {
		 	echo $row['question'];
		 }
		 else 
		 {
		 	echo "<script>alert('无此用户');history.back()</script>";
		 	exit;
		 }
		 ?>
	</td>
</tr>
<tr>
	<td>请输入你的密保答案：</td>
	<td>
		<input type="text" name="daan" size="30" style="background-color:#e8f4ff" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">	
		<input type="hidden" name="username" value="<?php echo $name;?>">
	</td>
</tr>
<tr>
<td colspan="2" align="right">
	<h3><a href="javascript:openfindpwd()"><input type="submit" value="确定"></a></h3>
</td>
</tr>
</table>
</form>
</body>
</html>

