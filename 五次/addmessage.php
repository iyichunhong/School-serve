// +----------------------------------------------------------------------
// | 学号：2017051604014
// +----------------------------------------------------------------------
// | Author: 刘慧敏
// +----------------------------------------------------------------------
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/other.css" rel="stylesheet" type="text/css" />
</head>
<body>
<script type="text/javascript">
function check_message(){
	if(window.document.fabu.user_name.value==""){
		alert("请填写用户名");
		document.fabu.user_name.focus();
		return false;
	}
	if(window.document.fabu.user_id.value==""){
		alert("请填写ID");
		document.leavemsg.user_id.focus();
		return false;
	}
	if(window.document.fabu.user_qq.value==""&&window.document.fabu.user_tel.value==""){
		alert("请留下你的联系方式");
		document.fabu.user_qq.focus();
		document.fabu.user_tel.focus();
		return false;
	}
	if(document.fabu.post_title.value==""){
		alert("请填写标题.");
		document.fabu.post_title.focus();
		return false;
	}
	if(document.fabu.post_info.value==""){
		alert("请填写内容.");
		document.fabu.post_info.focus();
		return false;
	} 
	return true;
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
                        </table>
                        </td>
                        </tr>
                        </table>
                		<!-- 添加栏目开始 -->
	<font size=5 color=#74adaa class="fabutitle">招领、遗失信息发布</font>
	<form action="addmessage_ok.php" method="post" name="fabu">
	<div  class="fabutable">
  		<table width="800px">
  		<tr><td><b>分类：</b></td>
  			<td><input class="fabu_fenlei" name="post_fabu" type="radio" id="yishi" value="yishi" checked="checked" /><font size=5>遗失</font>
    		<input type="radio" name="post_fabu" value="zhaoling" id="zhaoling" /><font size=5>招领</font></td>
    	</tr>
	  	<tr><td><b>用 户 名：</b></td><td colspan="3"><input name="user_name" type="text" maxlength="20" /></td></tr>
	  	<tr><td><b>ID:</b></td><td><input name="user_id" type="text" maxlength="8"/></td></tr>
	  	<tr><td><b>联 系 QQ：</b></td><td><input name="user_qq" type="text" maxlength="11" /></td></tr>
	  	<tr><td><b>联系电话：</b></td><td><input name="user_tel" type="text" maxlength="11" /></td></tr>
	  	<tr><td><b>标题：</b></td><td><input name="post_title" type="text" size="50" maxlength="50" /></td></tr>
		<tr><td><b>内容：</b></td><td><textarea name="post_info" cols="60" rows="8"></textarea></td></tr>
		</table>
		<div class="fabuinput">
			<input name="submit" type="submit" value="提交" onclick="return check_message()"/>&nbsp;&nbsp;&nbsp;&nbsp;
			<input name="B2" type="reset" value="重置" />
		</div>
	</div>
  	</form>
  	
</body>
</html>
