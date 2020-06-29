// +----------------------------------------------------------------------
// | 学号：2017051604059
// +----------------------------------------------------------------------
// | Author: 易春红
// +----------------------------------------------------------------------
<?php 
 header ( "Content-type: text/html; charset=utf-8" );?>
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
<script>
 function openfindpwd()
	{
		window.open("refill2power.php","newframe","left=400,top=200,width=400,height=200,menubar=no,toolbar=no,location=no,scrollbars=no,location=no");
	}
</script>
</head>
<body>
<table class="k" cellpadding="5px" align="center" >
	<tr>
		<td><h1>本站提示:</h1>
	</tr>
	<tr>
		<td>本站暂时只支持一卡通扣费充值!</td>
	</tr>
	<tr>
		<td align="right"><a href="javascript:openfindpwd()"><input type="submit" name="submit" value="确定"></a></td>
	</tr>
</table>
</body>
</html>