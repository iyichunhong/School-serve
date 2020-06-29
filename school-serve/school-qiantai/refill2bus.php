// +----------------------------------------------------------------------
// | 学号：2017051604059
// +----------------------------------------------------------------------
// | Author: 易春红
// +----------------------------------------------------------------------
<?php 
 header ( "Content-type: text/html; charset=utf-8" );
include "class.php";
session_start();
$a=$_SESSION['name'];
$b=$_SESSION['id'];
?>
<html>
<head>
<style type="text/css">
.k{
color:#FFFFFF;
}
body
{
background-color:#74adaa;
}
</style>
</head>
<body>
<script>


function check()
{
	var a=document.getElementById('money').value;
	if(a=="")
	{
		alert('请输入充值金额!');
		return false;
	}
    var elements = document.getElementsByClassName("money");

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
            	 document.getElementById('aaa').innerHTML = xmlHttp.responseText;
            }
        }
        xmlHttp.open("post", "showrefillbus.php"); 
        xmlHttp.send(formData); 
}</script>

<table cellpadding="5px" class="k">
	<tr>
		<td>请输入你要充值的金额：&nbsp;&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="money" name="money" class="money"></td>
	</tr>
	<tr>
		<td align="right"><input type="button" value="确定" onclick="check();"></td>
	</tr>
	<tr>
		<td><div id="aaa"></div></td>
    </tr>
</table>

</body>
</html>