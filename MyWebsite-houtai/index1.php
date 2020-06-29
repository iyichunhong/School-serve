<?php
// +----------------------------------------------------------------------
// | 学号：2017051604033
// +----------------------------------------------------------------------
// | 姓名：吴倩倩
// +----------------------------------------------------------------------
// | 本文件实现了管理员登录功能
// +----------------------------------------------------------------------
?>
<html>
<head>
<meta>
<?php header ( "Content-type: text/html; charset=utf-8" );
include "class.php";?>
<title>重庆师范大学一站式服务平台</title>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<meta name="keywords" content="大学生一站式服务平台" />
<meta name="description" content="一站式服务平台" />
<style type="text/css">
body{
background-image:url(images/loginin.jpg);
background-size:100% 100%;
backgroung-repeat:no-repeat;
}
</style>
<script language="javascript">
function chkuserinput(form){
	if(trim(form.username.value)==null || trim(form.username.value)==""){
        alert("请输入用户名！");
        username.focus();
        return false;
      }	
	if(trim(form.id.value)==null || trim(form.id.value)==""){
        alert("请输入工号！");
        id.focus();
        return false;
      }	
      if(trim(form.userpwd.value)==null || trim(form.userpwd.value)==""){
        alert("请输入密码！");
        userpwd.focus();
        return false;
      }	
  return(true);				 
}
function trim(str){ //删除左右两端的空格
    return str.replace(/(^\s*)|(\s*$)/g, "");
  }

</script>
</head>
<body>            
<br><br><br><br><br>              
<form name="form" method="post" action="index2.php" onSubmit="return chkuserinput(this)" >
	<table  align="center"  cellspacing="30" bgcolor="white">
		<tr>
			<td></td>
			<td valign="middle"><h1>欢迎登录！</h1></td>
		</tr>
		<tr>
			<td ><div align="right"><h1>姓名：</h1></div></td>
			<td  colspan="2">
				<div align="left">
					<input type="text" name="username" size="39" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
				</div>
			</td>
		</tr>
				<tr>
			<td ><div align="right"><h1>工号：</h1></div></td>
			<td  colspan="2">
				<div align="left">
					<input type="text" name="id" size="39" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
				</div>
			</td>
		</tr>
 		<tr>
			<td ><div align="right"><h1>密码：</h1></div></td>
 			<td colspan="2">
 				<div align="left">
 					<input type="password" name="userpwd" size="39" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
				</div>
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<div align="right">
					<h2><input name="jizhu" type="checkbox" class="buttoncss" value="on">记住密码&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="submit" type="submit" class="buttoncss" value="提交">
				</div>
			</td>
		</tr>
		</table>
</form>
</body>
</html>