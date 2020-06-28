// +----------------------------------------------------------------------
// | 学号：2017051604059
// +----------------------------------------------------------------------
// | Author: 易春红
// +----------------------------------------------------------------------
<html>
<head>
<style type="text/css">
.h
{
background-color:#74adaa;
color:#FFFFFF;
}
</style>
</head>
<body bgcolor=#74adaa>
<script>
function showbalance()
{
	var a=document.getElementById('yuan').value;
	if(a=="")
	{
		alert('请输入姓名!');
		return false;
	}
	var b=document.getElementById('numb').value;
	if(b=="")
	{
		alert('请输入学号!');
		return false;
	}
    var elements = document.getElementsByClassName("n");

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
            	 document.getElementById('aaaa').innerHTML = xmlHttp.responseText;
            }
        }
        xmlHttp.open("post", "showcardbalance.php"); 
        xmlHttp.send(formData); 
}
function showbalance2()
{
	var a=document.getElementById('yuan').value;
	if(a=="")
	{
		alert('请输入姓名!');
		return false;
	}
	var b=document.getElementById('numb').value;
	if(b=="")
	{
		alert('请输入学号!');
		return false;
	}
	openfindpwd();
}
function openfindpwd()
{
	window.open("refill2card.php","newframe","left=400,top=200,width=400,height=200,menubar=no,toolbar=no,location=no,scrollbars=no,location=no");
}   
</script>
<form method="get" action="#" id="form" name="form">
<table class="h">
<tr>
	<td>一卡通&nbsp;&nbsp;
		姓名：&nbsp;&nbsp;<input type="text" name="yuan" id="yuan" id="yuan" class="n">
		学号:&nbsp;&nbsp;<input type="text" name="numb" id="numb" placeholder="请输入学号" class="n">&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="submit" value="查询" onclick="showbalance();return false;">
		<input type="button" value="充值" onclick="showbalance2();return false;">
	</td>
</tr>
<tr>
	<td><div id="aaaa"></div></td>
</tr>

</table>
</form>
</body>
</html>