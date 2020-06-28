// +----------------------------------------------------------------------
// | 学号：2017051604014
// +----------------------------------------------------------------------
// | Author: 刘慧敏
// +----------------------------------------------------------------------
<head>
<link href="css/other.css" rel="stylesheet" type="text/css" >
</head>
<body  >
<?php
header("Content-Type:text/html; charset=utf-8");
include_once 'conn/conn.php';
	?><div class="liuyantable">留言信息表</div><br>
	<?php 
	$sql="select * from swzl";           		
    $result=mysqli_query($conn,$sql);   
    while ($rs=mysqli_fetch_array($result)){ 
    	?>
    	<table class="liuyan_info" align="center"> 	
    	<?php 
    	if(!$rs['reply_name'])
    			echo "<tr><td align=center><font color=#6a6aff size=4>".$rs['username']."</font>暂时没有留言！</td><br></tr>";
    	else{
    	?>		
  			<tr><td><font color=#46a3ff size=4><?php echo $rs['reply_name']?></font>给<font color=#6a6aff size=4><?php echo $rs['username']?></font>留言:</td></tr>
    		<tr><td height="50px"><?php echo $rs['reply_message']?></td></tr>
    		<tr><td><?php echo $rs['reply_time']?></td></tr>
		</table><br>
    	<?php 
    	}
    }
?>
</body>