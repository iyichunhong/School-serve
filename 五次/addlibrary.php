// +----------------------------------------------------------------------
// | 学号：2017051604014
// +----------------------------------------------------------------------
// | Author: 刘慧敏
// +----------------------------------------------------------------------
<?php
 header("Content-Type:text/html; charset=utf-8");
?>

<html>
<head>

<link href="css/style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
/*宿舍保修*/
.addlibrary{
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
<form action="addlibrary-ok.php" method="post" >
<table class="addlibrary">
<tr>
<td height="46" colspan="2" ><font size="+2">添加图书</font></td>
</tr>

<tr>
<td width="150" height="20" align="left"><h3><font >图书名称:</font></h3></td>
<td width="500" height="20"><input size=30 type="text" name="bookname" /></td>

<td width="200" height="20" align="left"><h3><font >图书索引号:</font></h3></td>
<td width="500" height="20"><input size=30 type="text" name="index" /></td>
</tr>

<tr>
<td width="200" height="20" align="left"><h3><font >图书出版社:</font></h3></td>
<td width="500" height="20"><input size=30 type="text" name="bookconcern"/></td>

<td width="100" height="20" align="left"><h3><font >馆藏数量:</font></h3></td>
<td width="300" height="20" ><input size=30 type="text" name="bknumber"/></td>
</tr>

<tr>
<td width="150" height="20" align="left"><h3><font >是否可借:</font></h3></td>
<td width="500" height="20"><input size=30 type="text" name="borrow" placeholder="可借输入1，不可借输入0"/></td>
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