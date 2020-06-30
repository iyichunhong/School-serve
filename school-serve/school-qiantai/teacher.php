// +----------------------------------------------------------------------
// | 学号：2017051604059
// +----------------------------------------------------------------------
// | Author: 易春红
// +----------------------------------------------------------------------
<?php
include "top.php";
?>
<html>
<head>
<style type="text/css">
.td
{

color:#FFFFFF;
}
.ta
{
background-color:#74adaa;
position:absolute;
top:160px;
left:130px;
}
.tdd
{
color:#FFFFFF;
font-size:20px;
}
select
{
color:#74adaa;
}
.buttoncss {
    font-family: "Tahoma";
    font-size: 15pt; color: #003399;
    border: 1px #003399 solid;
    color:006699;
    BORDER-BOTTOM: #93bee2 1px solid; 
    BORDER-LEFT: #93bee2 1px solid; 
    BORDER-RIGHT: #93bee2 1px solid; 
    BORDER-TOP: #93bee2 1px solid;
    background-color: #e8f4ff;
    CURSOR: hand;
    font-style: normal ;
}
</style>
</head>
<body>
<script>
function showteacher()
{
    var elements = document.getElementsByClassName("o");

    var formData =new FormData();
    for(var i=0; i<elements.length; i++)
    {
        
        formData.append(elements[i].name,elements[i].value);
        
    }

    var xmlHttp = new XMLHttpRequest();
        xmlHttp.onreadystatechange = function()
        {
            if(xmlHttp.readyState == 4 && xmlHttp.status == 200)
            {
            	 document.getElementById('ooo').innerHTML = xmlHttp.responseText;
            }
        }
        xmlHttp.open("post", "showteacher.php"); 
        xmlHttp.send(formData); 
}
</script>
<table class="ta" width="1000" >
	<tr>
		<td colspan="3" height="8"></td>
	</tr>
	<tr>
		<td class="tdd" valign="middle">&nbsp;&nbsp;&nbsp;<img src="images/8.png" width="30ox" height=30px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;筛选信息：&nbsp;&nbsp;</td>
		<td class="td">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;老师学院：&nbsp;&nbsp;<select name="teachercollege" class="o">
														<option value="计算机与信息科学学院" selected>计算机与信息科学学院</option>
														<option value="初等教育学院">初等教育学院</option>
														<option value="传媒学院">传媒学院</option>
														<option value="地理与旅游学院">地理与旅游学院</option>
														<option value="化学学院">化学学院</option>
														<option value="教育科学学院">教育科学学院</option>
														<option value="经济与管理学院">经济与管理学院</option>
														<option value="历史与社会学院">历史与社会学院</option>
														<option value="美术学院">美术学院</option>
														<option value="生命与科学学院">生命与科学学院</option>
														<option value="外国语学院">外国语学院</option>
														<option value="文学院">文学院</option>
														<option value="物理与电子工程学院">物理与电子工程学院</option>
														<option value="音乐学院">音乐学院</option>
														<option value="数学科学学院">数学科学学院</option>
					                                  </select>
		</td>
		<td width="200px"></td>
	</tr>
	<tr>
		<td colspan="2"></td>
		<td align="center"><input type="button" value="确定" class="buttoncss" onclick="return showteacher()"></td>
	</tr>
	<tr>
		<td colspan="3" height="340px"><div id="ooo"></div></td>
	</tr>

</table>
</body>
</html>
<?php include "bottom.php";?>