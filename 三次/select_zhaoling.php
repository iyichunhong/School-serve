// +----------------------------------------------------------------------
// | 学号：2017051604014
// +----------------------------------------------------------------------
// | Author: 刘慧敏
// +----------------------------------------------------------------------
<head>
<link href="css/other.css" rel="stylesheet" type="text/css" >
</head>
<body>
	<div class="info">招领信息表</div>
<?php
header("Content-Type:text/html; charset=utf-8");
include_once 'conn/conn.php';
$sql="select * from swzl";           		
     $result=mysqli_query($conn,$sql);              
     while($rs=mysqli_fetch_array($result))  
    {  
	  $name=$rs['username'];$qq=$rs['qq'];$tel=$rs['tel'];$time=$rs['time'];$info=$rs['info'];
	  if($rs['fabu']=="zhaoling"){
	  	?>
	  	<ul class="info_show">
      		<li><font color=#a42d00>标题:</font><font color=00aaaa><?php echo $rs['title']?></font></li>
	  		<li><font color=#a42d00>用户名:</font><font color=#FF3333><b><?php echo $rs['username'] ?></b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  			<font color=#a42d00>QQ:</font><a href='tencent://message/?uin=$qq&Site=www.smwbbs.cn&Menu=yes' target='_blank'><?php echo $rs['qq']?></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  			<font color=#a42d00>联系电话:</font><font color=00aaaa><?php echo $rs['tel']?></font></li>
	  		<li><font color=#a42d00>内容:</font><a><?php echo $rs['info']?></a></li>
	  		<li><font color=#a42d00>发布时间:</font><a><?php echo $rs['time']?></a><br></li>
	  	</ul>
	  	<a href=addliuyan.php?replyname=<?php echo $rs['username']?> ><input class="info_reply" type="submit" value="回复" name="reply"></a>
		<a href=updatemessage.php?id=<?php echo $rs['studentID']?> ><input class="info_reply" type="submit" value="修改" name="modify"></a>      
      	
	  
	   <?php 
	  }
    }
?>
</body>
