<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	// +----------------------------------------------------------------------
// | 学号：2017051604014
// +----------------------------------------------------------------------
// | Author: 刘慧敏
// +----------------------------------------------------------------------
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>信息发布-失物招领系统</title>
<link href="css/other.css" rel="stylesheet" type="text/css" />
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
</head>
<body>
	<font size=5 color=#74adaa class="fabutitle">招领、遗失信息发布</font>
	<form action="fabu_check.php" method="post" name="fabu">
	<div  class="fabutable">
  		<table width="800px">
  		<tr><td><b>分类：</b></td>
  			<td><input class="fabu_fenlei" name="post_fabu" type="radio" id="yishi" value="yishi" checked="checked" /><font size=5>遗失</font>
    		<input type="radio" name="post_fabu" value="zhaoling" id="zhaoling" /><font size=5>招领</font></td>
    	</tr>
	  	<tr><td><b>用 户 名：</b></td><td colspan="3"><input name="user_name" type="text" maxlength="20" /></td></tr>
	  	<tr><td><b>ID:</b></td><td><input name="user_id" type="text" maxlength="20"/></td></tr>
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
