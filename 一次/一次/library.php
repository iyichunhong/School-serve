// +----------------------------------------------------------------------
// | 学号：2017051604014
// +----------------------------------------------------------------------
// | Author: 刘慧敏
// +----------------------------------------------------------------------
 <?php 
 header("Content-Type:text/html; charset=utf-8");
 include 'top.php';
?>

<html>
<head>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<script>
function showlibrary()
{
	var a=document.getElementById('bookname').value;
	if(a=="")
	{
		alert('图书名称不能为空!');
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
        xmlHttp.open("post", "findbook.php"); 
        xmlHttp.send(formData); 
}
   
</script>
<div class="library">
	<form name="form" method="post" action="#" id="form">
	<table height="40" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td width="81" height="30" align="right"><img src="images/17.png" width="80" height="81">&nbsp;</td>
			<td width="500" height="30" valign="middle">
				<div align="left">&nbsp;<span class="">&nbsp;请输入图书名称:</span>
					<input type="text" name="bookname"  id="bookname" class="n" size="25" placeholder="请输入图书名称" class="inputcss" style="background-color:#e8f4ff" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
					<input type="hidden" name="jdcz" id="jdcz" value="jdcz">
					<input type="submit" name="submit" class="buttoncss" value="立即查找" onclick="showlibrary();return false;">
					
				</div></td>
		</tr>
		<tr><td colspan="2"><div id="aaaa"></div></td></tr>
		</table>
		</form>
</div>
</body>
</html>
<?php include "bottom.php"?>