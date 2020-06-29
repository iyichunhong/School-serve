<?php
// +----------------------------------------------------------------------
// | 学号：2017051604033
// +----------------------------------------------------------------------
// | 姓名：吴倩倩
// +----------------------------------------------------------------------
// | 本文件实现了后台首页顶部设计
// +----------------------------------------------------------------------
?>
<html >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<style type="text/css">
	.a
	{
	color:#FFFFFF;
	text-decoration:none;
	font-size:20px;
	}
	.b
	{
	background-color:#74adaa;
	}
	</style>
    <script type="text/javascript">
        function logout() {
            if(window.confirm('您确定要退出吗？')) {
                top.location = 'login.html';
            }
        }       
    </script>
</head>
    <body>
        <table cellpadding="0" width="100%" height="64" class="b" >
        
            <tr valign="top">
                <td width="50%" class="a" valign="middle">重庆师范大学一站式服务平台后台管理中心</td>
                <td width="30%" style="padding-top:13px;font:15px Arial,SimSun,sans-serif;color:#FFF" valign="middle">管理员： 您好，感谢登录使用！</td>
                <td style="padding-top:10px;" align="center"><a href="javascript:void(0)"><img style="border:none" src="Images/index.gif" /></a></td>
                <td style="padding-top:10px;" align="center"><a href="javascript:void(0)"><img style="border:none" src="Images/out.gif" onclick="logout();" /></a></td>
            </tr>
            <tr><td colspan="4" height=5px bgcolor="#E1E5EE"></td></tr>
        </table>
    </body>
</html>