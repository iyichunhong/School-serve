// +----------------------------------------------------------------------
// | 学号：2017051604012
// +----------------------------------------------------------------------
// | Author: 缪淑婷
// +----------------------------------------------------------------------
// | content: 周边服务(后台):优惠活动
// +----------------------------------------------------------------------
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
    <body>
    <script>
    function showserver()
    {
    	var a=document.getElementById('lei').value;
    	if(a=="")
    	{
    		alert('请输入所属大类型!');
    		return false;
    	}
    	var b=document.getElementById('leixing').value;
    	if(b=="")
    	{
    		alert('请输入所属小类型');
    		return false;
    	}
    	var c=document.getElementById('time').value;
    	if(c=="")
    	{
    		alert('请输入优惠时间段!');
    		return false;
    	}
    	var e=document.getElementById('where').value;
    	if(e=="")
    	{
    		alert('请输入优惠地点!');
    		return false;
    	}
    	var f=document.getElementById('guiz').value;
    	if(f=="")
    	{
    		alert('请输入优惠规则!');
    		return false;
    	}
    	var g=document.getElementById('url').value;
    	if(g=="")
    	{
    		alert('请输入宣传图片地址!');
    		return false;
    	}
        var elements = document.getElementsByClassName("v");

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
                	alert(xmlHttp.responseText);
                }
            }
            xmlHttp.open("post", "saveserve.php"); 
            xmlHttp.send(formData); 
    }
    
    </script>
        <table width="100%" border="0" cellpadding="0" cellspacing="0">

            <tr>
                <td valign="top" bgcolor="#F7F8F9">
                    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr><td colspan="2" valign="top">&nbsp;</td><td>&nbsp;</td><td valign="top">&nbsp;</td></tr>
                        <tr>
                            <td colspan="4">
                                <table>
                                    <tr>
                                        <td width="100" align="center"><img src="Images/3.png" /></td>
                                        <td valign="bottom"><h3 style="letter-spacing:1px;">请填写要添加优惠的详细信息</h3></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td height="40" colspan="4">
                                <table width="100%" height="1" border="0" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
                                    <tr><td></td></tr>
                                </table>
                            </td>
                        </tr>
                        <!-- 添加栏目开始 -->
                        <tr>
                            <td width="2%">&nbsp;</td>
                            <td width="96%">
                                <table width="100%">
                                    <tr>
                                        <td colspan="2">
                                            <form>
                                                <table width="100%" class="cont">
                                                    <tr>
                                                        <td width="2%">&nbsp;</td>
                                                        <td>优惠所属大类型：</td>
                                                        <td width="20%"><input class="v" type="text" name="lei" id="lei"></td>
                                                        <td>设置所属的大类型</td>
                                                        <td width="2%">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                        <td>优惠所属小类型：</td>
                                                        <td>
                                                            <input type="text" class="v" name="leixing" id="leixing">
                                                        </td>
                                                        <td>设置老师所属学院</td>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                        <td>优惠的时间：</td>
                                                        <td>
                                                            <input type="text" class="v" name="time" id="time">
                                                        </td>
                                                        <td>设置优惠的开始时间和结束时间</td>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                        <td>优惠的地点：</td>
                                                        <td>
                                                         	<input type="text" class="v" name="where" id="where">
                                                        </td>
                                                        <td>设置优惠店铺的地点</td>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                        <td>优惠规则：</td>
                                                        <td>
                                                        <input type="text" class="v" name="guiz" id="guiz">
                                                        </td>
                                                        <td>设置优惠的规则</td>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                        <td>优惠宣传图片的地址：</td>
                                                        <td><input class="v" style="width:200px;" type="text" name="url" id="url"/></td>
                                                        <td>设置宣传图片的相对位置</td>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                 
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                        <td colspan="3"><input class="btn" type="button" value="提交"  onclick="return showserver()"/></td>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                </table>
                                            </form>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td width="2%">&nbsp;</td>
                        </tr>
                        <!-- 添加栏目结束 -->
                        <tr>
                            <td height="40" colspan="4">
                                <table width="100%" height="1" border="0" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
                                    <tr><td></td></tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td width="2%">&nbsp;</td>
                            <td width="51%" class="left_txt">
                                <img src="Images/email.gif" width="16" height="11"> 客户服务邮箱：1747495714@qq.com<br />
                                <img src="Images/phone.gif" width="17" height="14">客服服务电话：13364068425
                            </td>
                            <td>&nbsp;</td><td>&nbsp;</td>
                        </tr>
                    </table>
                </td>
                <td background="./Images/mail_right_bg.gif">&nbsp;</td>
            </tr>
          
        </table>
    </body>
</html>