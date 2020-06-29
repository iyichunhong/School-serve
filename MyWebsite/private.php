<?php
// +----------------------------------------------------------------------
// | 学号：2017051604033
// +----------------------------------------------------------------------
// | 姓名：吴倩倩
// +----------------------------------------------------------------------
// | 本文件实现了前台个人中心内容设计
// +----------------------------------------------------------------------
?><?php
include 'class.php';
header("Content-Type:text/html; charset=utf-8");
session_start();
$name=$_SESSION['name'];
$id=$_SESSION['id'];

$a=new UseModel();
$sql="select * from tb_user where username='".$name."' and studentID='".$id."'";
$b=$a->select($sql, $conn);
$result=mysqli_fetch_array($b);
?>

<html>
<head>
<link href="css/private.css" rel="stylesheet" type="text/css" />
<title>个人中心</title>
<style type="text/css">
td{
color:#74adaa;
}
</style>
</head>
<script type="text/javascript">
function openchangepwd()
{
	window.open("changepwd.php","newframe","left=400,top=200,width=400,height=200,menubar=no,toolbar=no,location=no,scrollbars=no,location=no");
}
</script>
<body style="background-color:#74adaa;">

<div class="private-top" align="center">
<table class="private-font"><tr><td style="color:#000000">个人中心</td>
</tr></table>

<div align="right">
<table>
<tr>
<td align="right" width="100"><a href="main.php" style="color:#ffffff;font-weight:bold;font-size:20px;">返回主页</a></td>
<td align="right" width="100"><a href="logout.php" style="color:#ffffff;font-weight:bold;font-size:20px;">退出登录</a></td></tr>
</table>
</div>

</div>

<div class="private">
<div class="private-img">

<table>
<tr>
<td><div align="left"><img src="images/hu.jpg" width="100" height="100" ></div></td>
</tr>
<tr><td><div align="center"><?php echo $name;?></div></td></tr>

<tr><td><div align="center"><?php echo $id;?></div></td></tr>
</table>
</div>

<form >
<div class="private-msg">
<table cellspacing="1">
<?php echo "<br>";?>
<tr>
<td>&nbsp;&nbsp;&nbsp;学院:&nbsp;&nbsp;&nbsp;</td>
<td><div align="center" ><?php echo $result['xueyuan'];?></div></td>
</tr>
<tr>
<td>&nbsp;&nbsp;&nbsp;楼栋:&nbsp;&nbsp;&nbsp;</td>
<td><div align="center"><?php echo $result['college'];?></div></td>
</tr>

<tr>
<td>&nbsp;&nbsp;&nbsp;房间号:&nbsp;&nbsp;&nbsp;</td>
<td><div align="center"><?php echo $result['Sroom'];?></div></td>
</tr>

<tr>
<td>&nbsp;&nbsp;&nbsp;电话号:&nbsp;&nbsp;&nbsp;</td>
<td><div align="center"><?php echo $result['tel'];?></div></td>
</tr>

<tr>
<td>&nbsp;&nbsp;&nbsp;Email:&nbsp;&nbsp;&nbsp;</td>
<td><div align="center"><?php echo $result['email'];?></div></td>
</tr>

</table>
</div>
</form>
</div>

<div class="private2-calendar">
<?php include 'calendar.php';?>
</div>

<div class="private1">
<table  class="private1-font">
<tr><td><a href="mylostmessege.php" target="frame">&nbsp;&nbsp;&nbsp;我的丢失物品&nbsp;&nbsp;&nbsp;</a></td>
<td><a href="mybook.php" target="frame">&nbsp;&nbsp;&nbsp;我的图书信息&nbsp;&nbsp;&nbsp;</a></td>
<td><a href="myrepairs.php" target="frame">&nbsp;&nbsp;&nbsp;我的报修信息&nbsp;&nbsp;&nbsp;</a></td>
<td><a href="myclassroom.php" target="frame">&nbsp;&nbsp;&nbsp;我的教室预定信息&nbsp;&nbsp;&nbsp;</a></td>

</tr>
</table>
<iframe name="frame" class="frame"></iframe>
</div>



</body>
</html>