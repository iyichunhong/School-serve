// +----------------------------------------------------------------------
// | 学号：2017051604014
// +----------------------------------------------------------------------
// | Author: 刘慧敏
// +----------------------------------------------------------------------
<?php
header("Content-Type:text/html; charset=utf-8");
include 'top.php';
include 'class.php';
session_start();
$name=$_SESSION['name'];
$id=$_SESSION['id'];

$a=$_GET['bookname'];
$b=$_GET['index'];

$c=new UseModel();
$sql1="insert into tb_borrowbk values('$name','$id','$a','$b')";
$result1=$c->add($sql1, $conn);

if (!$result1){
	echo "<script>alert('借书失败!');history.go(-1);</script>";
}else {
	echo "<script>alert('借书成功!');history.go(-1);</script>";
}
?>
<html>
<head>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>

<div class="library">
<table>
<tr>
<td></td>
</tr>
</table>
</div>

</body>
</html>

