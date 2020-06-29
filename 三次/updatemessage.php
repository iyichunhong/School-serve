// +----------------------------------------------------------------------
// | 学号：2017051604014
// +----------------------------------------------------------------------
// | Author: 刘慧敏
// +----------------------------------------------------------------------
<?php
 session_start();
 ?>
<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<title>信息修改</title> 
<link href="css/main.css" rel="stylesheet" type="text/css" />
</head> 
<body>
<div>
<div>信息修改</div> 
 <?php
  include_once 'conn/conn.php';
  $exec="select * from swzl where studentID=".$_GET['id'];  
  $result=mysqli_query($conn,$exec);
  $rs=mysqli_fetch_array($result);
  $name=$rs['username'];
  $qq=$rs['qq'];
  $tel=$rs['tel'];
  $ip=$rs['ip'];
  $title=$rs['title'];
  $info=$rs['info'];
  $id=$rs['studentID'];
 ?>
	<form action="updatemessage_ok.php" method="post" name="name1" id="name1">
    <div>
    <ul>
	  <li><b>标  题：</b><input name="title" value="<?=$title?>"></li>
	  <li><b>ID:</b><input name="id" value="<?=$id?>"> </li>   
	  <li><b>用户名：</b><input name="name" value="<?=$name?>"></li>
	  <li><b>IP</b>：<input name="ip" value="<?=$ip?>"></li>
	  <li><b>联系QQ：</b><a href='tencent://message/?uin=<?=$qq?>&Site=www.smwbbs.cn&Menu=yes' target='_blank'><input name="qq" value="<?=$qq?>"></a></li>
	  <li><b>联系电话：</b><a href='tencent://message/?uin=<?=$tel?>&Site=www.smwbbs.cn&Menu=yes' target='_blank'><input name="tel" value="<?=$tel?>"></a></li>
	  <li><b>内容：</b><a href='tencent://message/?uin=<?=$info?>&Site=www.smwbbs.cn&Menu=yes' target='_blank'>
	  		<textarea name="info" cols="60" rows="10"><?=$info?></textarea></a></li>
	  <li><input name="submit" type="submit" value="修改"/></li>
	  <li><input name="B2" type="reset" value="重置" /></li>
	</ul>
	</div>
	</form>
	<a href=delete.php?id=<?=$id?>>删除信息</a>

</div>
</body>
</html>