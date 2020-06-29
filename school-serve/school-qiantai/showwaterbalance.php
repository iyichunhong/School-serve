// +----------------------------------------------------------------------
// | 学号：2017051604055
// +----------------------------------------------------------------------
// | Author: 陈明欣
// +----------------------------------------------------------------------
<?php
   include "class.php"; 
   $yuan = $_POST["yuan"];
   $numb = $_POST["numb"];
?>
<html>
<head>
<style type="text/css">
.k{
color:#FFFFFF;
}

</style>
<script type="text/javascript">
function openfindpwd()
{
	window.open("refill.php","newframe","left=400,top=200,width=400,height=200,menubar=no,toolbar=no,location=no,scrollbars=no,location=no");
}

</script>
</head>
<body>
<table class="k" cellpadding="5px" align="center">
	<tr>
		<td><h1>你的寝室信息如下：</h1></td>
	</tr>
	<tr>
		<td>你的寝室苑：&nbsp;&nbsp;&nbsp;<?php echo $yuan;?></td>
	</tr>
	<tr>
		<td>你的寝室号：&nbsp;&nbsp;&nbsp;<?php echo $numb;?></td>
	</tr>
	<tr>
		<td>余&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;额：&nbsp;&nbsp;&nbsp;<?php 
					$a=new UseModel();
		$sql="select * from tb_water where college='".$yuan."'and number='".$numb."'";
		$b=$a->select($sql,$conn);
		$row=mysqli_fetch_array($b);
		 if($row==true)
		 {
		 	echo $row['balance'];
		 }
		 else 
		 {
		 	echo "<script>alert('暂无此寝室信息')</script>";
		 	exit;
		 }
			
		    ?>
		</td>
	</tr>
	<tr>
		<td>线下充值点：&nbsp;&nbsp;&nbsp;
		<?php 
					$a=new UseModel();
		$sql="select offline from tb_water where college='".$yuan."'and number='".$numb."'";
		$b=$a->select($sql,$conn);
		$row=mysqli_fetch_array($b);
		 if($row==true)
		 {
		 	echo $row['offline'];
		 }
		 else 
		 {
		 	echo "<script>alert('暂无此线下充值点')</script>";
		 	exit;
		 }
			
		    ?>
	</tr>
	<tr>
		<td align="right"><a href="javascript:openfindpwd()"><input type="button" value="充值"></a></td>
	</tr>
</table>
</body>
</html>
