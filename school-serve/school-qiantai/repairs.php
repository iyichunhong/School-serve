// +----------------------------------------------------------------------
// | 学号：2017051604059
// +----------------------------------------------------------------------
// | Author: 易春红
// +----------------------------------------------------------------------
<?php
 header("Content-Type:text/html; charset=utf-8");
include 'top.php';
?>

<html>
<head>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
/*宿舍保修*/
.repairs{
	background-color:#74adaa;
	color:#FFFFFF;
	border-radius:10px;
	border:1px solid #74adaa;
	position:absolute;
	top:160px;
	left:200px;
	width:900px;
	height:400px;
}

</style>
</head>
<body>
<form action="repairs-ok.php" method="post" >
<table class="repairs">
<tr>
<td height="46" colspan="2" ><font size="+2">寝室报修</font></td>
</tr>

<tr>
<td width="150" height="20" align="left"><h3><font >报修姓名:</font></h3></td>
<td width="500" height="20"><input size=30 type="text" name="username" class="inputcss"/></td>

<td width="100" height="20" align="left"><h3><font>楼栋号:</font></h3></td>
<td>
<select name="college" class="inputcss">
<option value="请选择" selected="selected">请选择</option>
<option value="清风苑B栋">清风苑B栋</option>
<option value="惠风苑A栋">惠风苑A栋</option>
<option value="惠风苑C栋">惠风苑C栋</option>
<option value="嘉风苑A栋">嘉风苑A栋</option>
<option value="畅风苑">畅风苑</option>
<option value="雅风苑B栋">雅风苑B栋</option>
<option value="和风苑E栋">和风苑E栋</option>
<option value="硕博楼">硕博楼</option>
<option value="培训楼">培训楼</option>
<option value="和风苑B栋">和风苑B栋</option>
<option value="和风苑C栋">和风苑C栋</option>
<option value="和风苑D栋">和风苑D栋</option>
<option value="清风苑A栋">清风苑A栋</option>
<option value="清风苑C栋">清风苑C栋</option>
<option value="惠风苑B栋">惠风苑B栋</option>
<option value="雅风苑A栋">雅风苑A栋</option>
<option value="雅风苑C栋">雅风苑C栋</option>
<option value="嘉风苑B栋">嘉风苑B栋</option>
</select>
</td>
</tr>

<tr>
<td width="100" height="20" align="left"><h3><font >联系电话:</font></h3></td>
<td width="500" height="20"><input size=30 type="text" name="tel" class="inputcss"/></td>

<td width="100" height="20" align="left"><h3><font >寝室号:</font></h3></td>
<td width="300" height="20" ><input size=30 type="text" name="Sroom" class="inputcss"/></td>
</tr>

<tr>
<td width="150" height="20" align="left"><h3><font >报修日期:</font></h3></td>
<td width="500" height="20"><input size=30 type="text" name="date" class="inputcss"/></td>

<td width="150" height="20" align="left"><h3><font>报修项目:</font></h3></td>
<td>
<select name="project" class="inputcss">
<option value="请选择" selected="selected">请选择</option>
<option value="水电报修">水电报修</option>
<option value="门窗书柜">门窗书柜</option>
</select>
</td>
</tr>

<tr>
<td align="left" valign="top"><h3><font >报修说明:</font></h3></td>
<td ><textarea rows="8" cols="50" name="explain" class="inputcss"></textarea></td>
</tr>

<tr>
<td>&nbsp;</td>
<td  align="center"><input type="submit" class="submit" value="提交" />&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" class="reset" value="重置" />
</td>
</tr>

</table>
</form>

</body>
</html>
<?php include "bottom.php";?>