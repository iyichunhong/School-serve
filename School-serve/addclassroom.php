// +----------------------------------------------------------------------
// | 学号：2017051604012
// +----------------------------------------------------------------------
// | Author: 缪淑婷
// +----------------------------------------------------------------------
// | content: 教室预定(后台):选择教室详细信息
// +----------------------------------------------------------------------
<?php
header("Content-Type:text/html; charset=utf-8");
?>
<html>
<head>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<form action="addclassroom-ok.php" method="post" style="width:900px; height:400px; position:absolute; left:50px;top:50px;"> 
<table border="0" width="1000" bgcolor="#74adaa" cellpadding="0" style="border-radius:10px;">

<tr>
<td align="left" bgcolor="#74adaa"><h3><font color="#ffffff">日期选择:</font></h3></td>
<td width="30">
<select name="week" id="week" class="inputcss">
<option value="第一周" selected="selected">第一周</option>
<option value="第二周">第二周</option>
<option value="第三周">第三周</option>
<option value="第四周">第四周</option>
<option value="第五周">第五周</option>
<option value="第六周">第六周</option>
<option value="第七周">第七周</option>
<option value="第八周">第八周</option>
<option value="第九周">第九周</option>
<option value="第十周">第十周</option>
<option value="第十一周">第十一周</option>
<option value="第十二周">第十二周</option>
<option value="第十三周">第十三周</option>
<option value="第十四周">第十四周</option>
<option value="第十五周">第十五周</option>
<option value="第十六周">第十六周</option>
<option value="第十七周">第十七周</option>
<option value="第十八周">第十八周</option>
<option value="第十九周">第十九周</option>
<option value="第二十周">第二十周</option>
</select>
</td>
<td width="30">
<select name="weekday" id="weekday" class="inputcss">
<option value="周一" selected="selected">周一</option>
<option value="周二">周二</option>
<option value="周三">周三</option>
<option value="周四">周四</option>
<option value="周五">周五</option>
<option value="周六">周六</option>
<option value="周日">周日</option>
</select>
</td>
</tr>
<tr>
<td align="left" bgcolor="#74adaa"><h3><font color="#ffffff">时间节次:</font></h3></td>
<td>
<select name="time" class="inputcss" id="time">
<option value="1、2节" selected="selected">1、2节</option>
<option value="3、4节">3、4节</option>
<option value="5、6节">5、6节</option>
<option value="7、8节">7、8节</option>
<option value="9、10节">9、10节</option>
<option value="1、2、3、4节">1、2、3、4节</option>
<option value="5、6、7、8节">5、6、7、8节</option>
</select>
</td>
</tr>

<tr>
<td align="left" bgcolor="#74adaa"><h3><font color="#ffffff">教学楼&nbsp;&nbsp;&nbsp;&nbsp;:</font></h3></td>
<td>
<select name="floor" class="inputcss" id="floor">
<option value="特教楼" selected="selected">特教楼</option>
<option value="知行楼">知行楼</option>
<option value="弘德楼">弘德楼</option>
<option value="田家炳">田家炳</option>
<option value="图北楼">图北楼</option>
</select>
</td>
</tr>

<tr>
<td align="left" valign="top" bgcolor="#74adaa"><h3><font color="#ffffff">教室号:</font></h3></td>
<td bgcolor="#74adaa"><textarea rows="5" cols="50" name="number" class="inputcss"></textarea></td>
</tr>


<tr>
<td bgcolor="#74adaa">&nbsp;</td>
<td bgcolor="#74adaa" colspan="3" align="left"><input type="submit" class="submit" value="添加" "/>&nbsp;&nbsp;&nbsp;&nbsp;
</td>
</tr>
</table>
</form>
</body>
</html>
