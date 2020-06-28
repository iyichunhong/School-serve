// +----------------------------------------------------------------------
// | 学号：2017051604014
// +----------------------------------------------------------------------
// | Author: 刘慧敏
// +----------------------------------------------------------------------
<head>
<link href="css/other.css" rel="stylesheet" type="text/css" >
</head>
<body>
	<div class="info">遗失信息表</div>
<?php
header("Content-Type:text/html; charset=utf-8");
include_once 'conn/conn.php';
$sql="select * from swzl";           		
     $result=mysqli_query($conn,$sql);             
     while($rs=mysqli_fetch_array($result))  
    {  
	  $name=$rs['username'];$qq=$rs['qq'];$tel=$rs['tel'];$time=$rs['time'];$info=$rs['info'];
	  if($rs['fabu']=="yishi"){
	  	?>
	  	<ul class="info_show">
      		<li>标题:<font color=00aaaa><?php echo $rs['title']?></font></li>
	  		<li>用户名:<b><font color=#BE77FF><?php echo $rs['username'] ?></font></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  			QQ:<a href='tencent://message/?uin=$qq&Site=www.smwbbs.cn&Menu=yes' target='_blank'><font color=#00aaaa><?php echo $rs['qq']?></font></a>
	  				 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  			联系电话:<font color=00aaaa><?php echo $rs['tel']?></font></li>
	  		<li>内容:<font color=00aaaa><a><?php echo $rs['info']?></a></font></li>
	  		<li>发布时间:<font color=00aaaa><a><?php echo $rs['time']?></a></font><br></li>
	  	</ul>
	   <?php 
	  }
    }
?>
</body>