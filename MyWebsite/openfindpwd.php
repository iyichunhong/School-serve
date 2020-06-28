<?php
// +----------------------------------------------------------------------
// | 学号：2017051604033
// +----------------------------------------------------------------------
// | 姓名：吴倩倩
// +----------------------------------------------------------------------
// | 本文件实现了前台找回密码界面及功能
// +----------------------------------------------------------------------
?>
<html>
<head>
<title>找回密码</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/font.css">
</head>
<?php
 include("conn/conn.php");
 header ( "Content-type: text/html; charset=utf-8" );
?>
<body topmargin="0" leftmargin="0" bottommargin="0">
<script language="javascript">
   function chkinput(form)
   {
     if(form.s.value=="")
	 {
	  alert('请输入学号!');
	  form.s.select();
	  return(false);
	 }
     if(form.n.value=="")
	 {
	  alert('请输入你的姓名!');
	  form.n.select();
	  return(false);
	 }
	  return(true);
   }
 </script>
 <script>
 function openfindpwd()
	{
		window.open("openshowpwd.php","newframe","left=400,top=200,width=400,height=200,menubar=no,toolbar=no,location=no,scrollbars=no,location=no");
	}
</script>
 <form name="form2" method="post" action="openshowpwd.php" onSubmit="return chkinput(this)">
<table border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
	<td align="right"><img src="images/c.png" width="100" height="100"></td>
	<td align="center"><h1>找回密码</h1></td>
</tr>
<tr>
	<td>请输入你的学号：</td>
	<td>
		<input type="text" name="s" size="30" style="background-color:#e8f4ff" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
	</td>
</tr>
<tr>
	<td>请输入你的姓名：</td>
	<td>
		<input type="text" name="n" size="30" style="background-color:#e8f4ff" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
	</td>
</tr>
<tr>
<td colspan="2" align="right">
	<h3><a href="javascript:openfindpwd()"><input type="submit" name="submit" value="确定"></a></h3>
</td>
</tr>
</table>
</form>