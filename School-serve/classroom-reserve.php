// +----------------------------------------------------------------------
// | 学号：2017051604012
// +----------------------------------------------------------------------
// | Author: 缪淑婷
// +----------------------------------------------------------------------
// | content: 教室预定的导航条：查询、申请
// +----------------------------------------------------------------------

<?php
header("Content-Type:text/html; charset=utf-8");
include 'top.php';
?>

<html>
<head>
<style type="text/css">

a{
text-decoration:none;
color:#ffffff;
}

.frame{
border-radius:10px;
background-color:#74adaa;
border:1px solid #74adaa;
position:absolute;
left:10%;
top:40%;
width:1100px;
height:400px;
}

.classroom{
border-radius:10px;
background-color:#74adbc;
width:1100px;
height:100px;
position:absolute;
top:30%;
left:10%;
}

td{
font-weight:blod;
font-size:24px;
}
</style>
</head>
<body>

<div class="classroom">
<table align="center">
<?php echo "<br>";?>
<tr><td><a href="classroom-find.php" target="frame">&nbsp;&nbsp;&nbsp;查询教室&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></td>
<td><a href="classroom-apply.php" target="frame">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;申请教室&nbsp;&nbsp;&nbsp;</a></td>
</tr>
</table>
</div>

<iframe name="frame" class="frame"></iframe>
</body>
</html>