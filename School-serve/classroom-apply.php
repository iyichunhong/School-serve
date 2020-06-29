// +----------------------------------------------------------------------
// | 学号：2017051604012
// +----------------------------------------------------------------------
// | Author: 缪淑婷
// +----------------------------------------------------------------------
// | content: 教室预定(后台):教室信息
// +----------------------------------------------------------------------
<?php
header("Content-Type:text/html; charset=utf-8");
?>
<html>
<head>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<form action="classroom-apply-ok.php" method="post" style="width:900px; height:400px; position:absolute;"> 
<table border="0" width="1000px" bgcolor="#74adaa" cellpadding="0" style="border-radius:10px;">

<tr>
<td align="right" bgcolor="#74adaa" style="border-radius:10px;"><h3><font color="#ffffff">学&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;号:</font></h3></td>
<td bgcolor="#74adaa" width="30"><input  size=25 type="text" name="studentID" class="inputcss"/></td>


<td align="right" bgcolor="#74adaa"><h3><font color="#ffffff">&nbsp;&nbsp;&nbsp;&nbsp;校&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;区:</font></h3></td>
<td width="30">
<select name="select" class="inputcss">
<option value="大学城校区" selected="selected">大学城校区</option>
<option value="沙坪坝校区">沙坪坝校区</option>
<option value="北碚校区">北碚校区</option>
</select>
</td>

<td align="right" bgcolor="#74adaa"><h3><font color="#ffffff">星&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;期:</font></h3></td>
<td>
<select name="select3" class="inputcss">
<option value="请选择" selected="selected">&nbsp;&nbsp;请选择&nbsp;&nbsp;</option>
<option value="一">一</option>
<option value="二">二</option>
<option value="三">三</option>
<option value="四">四</option>
<option value="五">五</option>
<option value="六">六</option>
<option value="日">日</option>
</select>
</td>

</tr>

<tr>
<td align="right" bgcolor="#74adaa"><h3><font color="#ffffff">姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名:</font></h3></td>
<td  bgcolor="#74adaa"><input size=25 type="text" name="username" class="inputcss" /></td>

<td  align="right" bgcolor="#74adaa"><h3><font color="#ffffff">开始周&nbsp;&nbsp;&nbsp;&nbsp;:</font></h3></td>
<td>
<select name="select1" class="inputcss">
<option value="请选择" selected="selected">&nbsp;&nbsp;请选择&nbsp;&nbsp;</option>
<option value="第一周">第一周</option>
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

<td  align="right" bgcolor="#74adaa"><h3><font color="#ffffff">结束周&nbsp;&nbsp;&nbsp;&nbsp;:</font></h3></td>
<td>
<select name="select2" class="inputcss">
<option value="请选择" selected="selected">&nbsp;&nbsp;请选择&nbsp;&nbsp;</option>
<option value="第一周">第一周</option>
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

</tr>

<tr>
<td align="right" bgcolor="#74adaa"><h3><font color="#ffffff">学&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;院:</font></h3></td>
<td bgcolor="#74adaa"><input size=25 type="text" name="college" class="inputcss" /></td>
<td align="right" bgcolor="#74adaa"><h3><font color="#ffffff">时间节次:</font></h3></td>
<td>
<select name="select4" class="inputcss">
<option value="请选择" selected="selected">&nbsp;&nbsp;请选择&nbsp;&nbsp;</option>
<option value="1、2节">1、2节</option>
<option value="3、4节">3、4节</option>
<option value="5、6节">5、6节</option>
<option value="7、8节">7、8节</option>
<option value="9、10节">9、10节</option>
<option value="1、2、3、4节">1、2、3、4节</option>
<option value="5、6、7、8节">5、6、7、8节</option>
</select>
</td>
<td align="right" bgcolor="#74adaa"><h3><font color="#ffffff">教学楼&nbsp;&nbsp;&nbsp;&nbsp;:</font></h3></td>
<td>
<select name="select5" class="inputcss">
<option value="请选择" selected="selected">&nbsp;&nbsp;请选择&nbsp;&nbsp;</option>
<option value="特教楼">特教楼</option>
<option value="知行楼">知行楼</option>
<option value="弘德楼">弘德楼</option>
<option value="田家炳">田家炳</option>
<option value="图北楼">图北楼</option>
</select>
</td>
</tr>

<tr>
<td  align="right" bgcolor="#74adaa"><h3><font color="#ffffff">联系方式:</font></h3></td>
<td bgcolor="#74adaa"><input size=25 type="text" name="tel" class="inputcss" /></td>
<td align="right" valign="top" bgcolor="#74adaa"><h3><font color="#ffffff">主要用途:</font></h3></td>
<td bgcolor="#74adaa"><textarea  rows="5" cols="50" name="use" class="inputcss" ></textarea></td>




</tr>

<tr>
<td  align="right" bgcolor="#74adaa"><h3><font color="#ffffff">教&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;室:</font></h3></td>
<td  bgcolor="#74adaa"><input size=25 type="text" name="classroom" class="inputcss" /></td>

<td align="right" valign="top" bgcolor="#74adaa"><h3><font color="#ffffff">相关要求:</font></h3></td>
<td bgcolor="#74adaa"><textarea rows="5" cols="50" name="request" class="inputcss"></textarea></td>


</tr>

<tr>
<td bgcolor="#74adaa">&nbsp;</td>
<td bgcolor="#74adaa" colspan="3" align="right"><input type="submit" class="submit" value="提交" />&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" class="reset" value="重置" />
</td>
</tr>

</table>
</form>
</body>
</html>