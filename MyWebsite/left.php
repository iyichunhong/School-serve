<?php
// +----------------------------------------------------------------------
// | 学号：2017051604033
// +----------------------------------------------------------------------
// | 姓名：吴倩倩
// +----------------------------------------------------------------------
// | 本文件实现了前台首页左部内容设计
// +----------------------------------------------------------------------
?>
<?php 
include 'class.php';
?>
<html>
<head>
<link href="css/left.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="title-left">
<img src="images/1.png" width="25" height="25" border="0">

<h2 class="h1" align="center">最新公告</h2>

<?php 
$a=new UseModel();
$sql="select * from tb_gonggao order by time desc limit 0,4";
$result=$a->select($sql, $conn);
$info=mysqli_fetch_array($result);
if ($info==false){
?>
<table>
<tr>
<td height="20" align="center" style="color:#ffffff">本站暂无公告</td>
</tr>
</table>
<?php 
}else {
	do{
?>
<table>
<tr>
<td height="20"><div align="center"><table width="180" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>

<td width="164" height="24"><div align="left"><a href="b.php?id=<?php echo $info['id'];?>">
<?php
$str= substr($info['title'], 0,24);
echo <<<std
<nobr style="color:#ffffff">$str
std;

if (strlen($info['title'])>24){
	echo "...";
}
?>
</a></div></td>
</tr>
</table>
</div></td>
</tr>
</table>
<?php 
	}
	while ($info=mysqli_fetch_array($result));
}
?>
</div>

<div class="schedule">
<img src="images/15-05.png" width="30" height="30" border="0">
<p class="h1" align="center">日程</p>
<?php 
$b=new UseModel();
$sql1="select * from tb_schedule order by time desc limit 0,4";
$result1=$b->select($sql1, $conn);
$info=mysqli_fetch_array($result1);
if ($info==false){
?>
<table>
<tr>
<td height="20" align="center" style="color:#FFFFFF;">本站暂无日程</td>
</tr>
</table>
<?php 
}else {
	do{
?>

<table>
<tr>
<td height="20"><div align="left"><table  width="2" border="0" align="center" cellpadding="0" cellspacing="0">

<?php 
$str=substr($info['content'], 0,24);

echo <<<std
<nobr style="color:#ffffff">$str
std;
if (strlen($info['content'])>24){
	echo "...";
}

$str1=substr($info['time'], 0,16);

echo <<<std
&nbsp;&nbsp;&nbsp;$str1
std;
if (strlen($info['time'])>16){
	echo "...";
}
?>
</table>
</div></td>
</tr>
</table>

<?php 
	}
	while ($info=mysqli_fetch_array($result1));
}
?>
</div>
</body>
</html>