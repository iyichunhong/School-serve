// +----------------------------------------------------------------------
// | 学号：2017051604059
// +----------------------------------------------------------------------
// | Author: 易春红
// +----------------------------------------------------------------------
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
    <body>
    <script>
    function showteacher()
    {
    	var a=document.getElementById('name').value;
    	if(a=="")
    	{
    		alert('请输入老师的名字!');
    		return false;
    	}
    	var b=document.getElementById('teachercollege').value;
    	if(b=="")
    	{
    		alert('请选择老师的学院!');
    		return false;
    	}
    	var c=document.getElementById('s').value;
    	if(c=="")
    	{
    		alert('请选择老师的性别!');
    		return false;
    	}
    	var e=document.getElementById('x').value;
    	if(e=="")
    	{
    		alert('请选择老师的学位!');
    		return false;
    	}
    	var f=document.getElementById('l').value;
    	if(f=="")
    	{
    		alert('请选择老师的学历!');
    		return false;
    	}
    	var g=document.getElementById('tel').value;
    	if(g=="")
    	{
    		alert('请输入老师的电话!');
    		return false;
    	}
    	var h=document.getElementById('qq').value;
    	if(h=="")
    	{
    		alert('请输入老师的qq!');
    		return false;
    	}
    	var i=document.getElementById('j').value;
    	if(i=="")
    	{
    		alert('请输入老师的经历!');
    		return false;
    	}
        var elements = document.getElementsByClassName("r");

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
            xmlHttp.open("post", "saveteacher.php"); 
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
                                        <td valign="bottom"><h3 style="letter-spacing:1px;">请填写要添加老师的详细信息</h3></td>
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
                                                        <td>老师名字：</td>
                                                        <td width="20%"><input class="r" type="text" name="name" id="name"></td>
                                                        <td>设置老师名字</td>
                                                        <td width="2%">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                        <td>老师学院：</td>
                                                        <td>
                                                            <select name="teachercollege" class="r" id="teachercollege">
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
                                                        <td>设置老师所属学院</td>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                        <td>老师性别：</td>
                                                        <td>
                                                            <select name="s" class="r" id="s">
                                                                <option  value="女">女</option>
                                                                <option value="男">男</option>
                                                    
                                                            </select>
                                                        </td>
                                                        <td>设置老师的性别</td>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                        <td>老师的学位：</td>
                                                        <td>
                                                         	<select name="x" class="r" id="x">
                                                         		<option value="副学士">副学士</option>
                                                         		<option value="学士">学士</option>
                                                         		<option value="硕士">硕士</option>
                                                         		<option value="博士">博士</option>
                                                         	</select>
                                                        </td>
                                                        <td>设置老师的学位</td>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                        <td>老师的学历：</td>
                                                        <td>
                                                            <select name="l" class="r" id="l">
                                                            	<option value="本科">本科</option>
                                                            	<option value="硕士研究生">硕士研究生</option>
                                                            	<option value="博士研究生">博士研究生</option>
                                                            </select>
                                                        </td>
                                                        <td>设置老师的学历</td>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                        <td>电话：</td>
                                                        <td><input class="r" style="width:200px;" type="text" name="tel" id="tel"/></td>
                                                        <td>设置老师的电话</td>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                        <td>qq:</td>
                                                        <td><input class="r" style="width:200px;" type="text" name="qq" id="qq"/></td>
                                                        <td>设置老师的qq</td>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                        <td>经历：</td>
                                                        <td><textarea class="r" name="j" id="j"></textarea></td>
                                                        <td>设置老师的从经历</td>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                        <td colspan="3"><input class="btn" type="button" value="提交"  onclick="return showteacher()"/></td>
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