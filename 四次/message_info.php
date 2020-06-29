// +----------------------------------------------------------------------
// | 学号：2017051604014
// +----------------------------------------------------------------------
// | Author: 刘慧敏
// +----------------------------------------------------------------------
<head>
<link href="css/other.css" rel="stylesheet" type="text/css" >
</head>
<a href="left.php"><input type="button" value="返回大厅"/></a>
<?php
header("Content-Type:text/html; charset=utf-8");
include_once 'conn/conn.php';
$sql="select * from swzl";           		
     $result=mysqli_query($conn,$sql);              
     while($rs=mysqli_fetch_array($result))  
    {  
      ?>
    	<ul>
      <?php 	
	  if($rs['fabu']=="yishi"){
	  ?>
	  		<li><b><font size=5>类别：<font color=red>遗失</font></font></b></li>
	<?php   }else {?>
	  		<li><b><font size=5>类别：<font color=blue>招领</font></font></b></li>
	 <?php  }
	  $name=$rs['username'];$qq=$rs['qq'];$tel=$rs['tel'];$time=$rs['time'];$info=$rs['info'];
	  ?>	
      		<li><font size=4><b>标题：</b><a><?php echo $rs['title']?></a></font></li>
      		<li><font size=4><b>用户名：</b>
      			<input type='button' class="info_name" name="username" value="<?php echo $rs['username']?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  			<b>联系QQ：</b><a href='tencent://message/?uin=$qq&Site=www.smwbbs.cn&Menu=yes' target='_blank'><?php echo $rs['qq']?></a>
	  			<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;联系电话：</b><a><?php echo $rs['tel']?></a></font></li>
	  		<li><font size=4><b>内容：</b><a><?php echo $rs['info']?></a></font></li>
	 		<li><font size=4><b>发布时间：</b><a><?php echo $rs['time']?></a></font></li>
			<li style="list-style-type:none;"><a href=addliuyan.php?replyname=<?php echo $rs['username']?> >
				<input class="info_reply" type="submit" value="回复" name="reply"></a>
			
      				<a href=deletemessage.php?id=<?php echo $rs['studentID']?>><input class="info_reply" type="submit" value="删除" name="delete"></a></li>							
	  	</ul>
	 <?php 
    }
?>