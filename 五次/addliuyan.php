// +----------------------------------------------------------------------
// | 学号：2017051604014
// +----------------------------------------------------------------------
// | Author: 刘慧敏
// +----------------------------------------------------------------------
<?php
 session_start();
  include_once 'conn/conn.php';
 ?>
<html>
<head>
<title>留言</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<script type="text/javascript">
function check_liuyan(){
	if(window.document.liuyan.Name.value==""){
		alert("请填写您的名字！");
		document.liuyan.Name.focus();
		return false;
	}
	if(window.document.liuyan.message.value==""){
		alert("留言不能为空哦！");
		document.liuyan.message.focus();
		return false;
	}
	return true;
}
function back(){
	history.back();
}
</script>
<body>
 <?php
  	$name=$_GET['replyname'];
  	setcookie("name","小红");
  ?>
	<form name="liuyan" method="post" action="addliuyan_ok.php">
		<input type="hidden" name="username" value="<?php echo $name?>"/>
		<p>给<input type="button" value="<?php echo $name?>" name="username"/>留言</p>
		<p>输入您的名字：<input type="text" name="Name"></p>
		<p>输入您的留言：</p><br><textarea name="message" rows="10" cols="50"></textarea>
		<p>您的留言时间：<input type="text" id="liuyantime" name="liuyantime" size="7" /></p>
		<a href=addliuyan_ok.php><input type="submit" value="提交信息" name="submit" onclick="return check_liuyan()"></a>
			&nbsp;&nbsp;&nbsp;<input type="button" value="返回" onclick="back()"/>	
	</form>
<script>
  //获取input元素
  var _input = document.getElementById('liuyantime');
  var date = new Date();
  var seperator = "/";
  var year = date.getFullYear();
  var month = date.getMonth() + 1;
  var strDate = date.getDate();
  if (month >= 1 && month <= 9) {
    month = "0" + month;
  }
  if (strDate >= 0 && strDate <= 9) {
    strDate = "0" + strDate;
  }
  var currentDate = year + seperator + month + seperator + strDate; //当前日期
  _input.value = currentDate; //赋值给input.value
  _input.setAttribute('disabled', 'disabled'); //不可编辑
 </script>
</body>
</html>