<?php
// +----------------------------------------------------------------------
// | 学号：2017051604033
// +----------------------------------------------------------------------
// | 姓名：吴倩倩
// +----------------------------------------------------------------------
// | 本文件实现了添加学生信息界面
// +----------------------------------------------------------------------
?>
<?php
 header("Content-Type:text/html; charset=utf-8");
?>
<head>
<style type="text/css">
.addstudent{
	background-color:#74adaa;
	color:#FFFFFF;
	border-radius:10px;
	border:1px solid #74adaa;
	position:absolute;
	top:50px;
	left:50px;
	width:1000px;
	height:400px;
}
</style>
</head>
<body>
<form action="addstudent-ok.php" method="post" >
<table class="addstudent">
<tr>
<td height="46" colspan="2" ><font size="+2">添加学生</font></td>
</tr>

<tr>
<td width="150" height="20" align="left"><h3><font >学生姓名:</font></h3></td>
<td width="500" height="20"><input size=30 type="text" name="username" /></td>

<td width="200" height="20" align="left"><h3><font >学生学号:</font></h3></td>
<td width="500" height="20"><input size=30 type="text" name="studentID" /></td>
</tr>

<tr>
<td width="200" height="20" align="left"><h3><font >学生密码:</font></h3></td>
<td width="500" height="20"><input size=30 type="text" name="password"/></td>
</tr>

<tr>
<td>&nbsp;</td>
<td  align="center"><input type="submit" class="submit" value="添加" />&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" class="reset" value="重置" />
</td>
</tr>
</table>
</form>

</body>
</html>