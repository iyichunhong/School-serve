// +----------------------------------------------------------------------
// | 学号：2017051604014
// +----------------------------------------------------------------------
// | Author: 刘慧敏
// +----------------------------------------------------------------------
<?php
header("Content-Type:text/html; charset=utf-8");
include_once 'top.php';
echo "<script>location:reload();</script>";
?>
<link rel=stylesheet type=text/css href=css/main.css>
<?php 
include_once 'conn/conn.php';
$name=$_GET['name'];		//获取Ajax传递的查询关键字
if(!empty($_GET['name'])){	//判断关键字不为空
	$sql="select * from swzl Where username like '%".$name."%'";
	$result=mysqli_query($conn,$sql);		//执行模糊查询
	if(mysqli_num_rows($result)>0){			//获取查询结果
		?>
		<table class='searchtable' border='0'>
		<tr><td class='searchtitle' colspan=7><h1>信息查询表</h1></td></tr>
		<tr><td height='44' align='center' bgcolor='#FFFFFF'>ID</td>
				<td align='center' bgcolor='#FFFFFF'>用户名</td>
				<td align='center' bgcolor='#FFFFFF'>QQ</td>
				<td align='center' bgcolor='#FFFFFF'>电话号码</td>
				<td align='center' bgcolor='#FFFFFF'>标题</td>
				<td align='center' bgcolor='#FFFFFF'>信息</td>
				<td align='center' bgcolor='#FFFFFF'>时间</td>
				<td align='center' bgcolor='#FFFFFF'>类型</td></tr>
		<?php 
		while ($myrow=mysqli_fetch_array($result)){
		?>
			<tr><td height='30' bgcolor='#FFFFFF'><?php echo $myrow['studentID']?></td>
			<td bgcolor='#FFFFFF'><?php echo $myrow['username']?></td>
			<td bgcolor='#FFFFFF'><?php echo $myrow['qq']?></td>
			<td bgcolor='#FFFFFF'><?php echo $myrow['tel']?></td>
			<td bgcolor='#FFFFFF'><?php echo $myrow['title']?></td>
			<td bgcolor='#FFFFFF'><?php echo $myrow['info']?></td>
			<td bgcolor='#FFFFFF'><?php echo $myrow['time']?></td>
			<td bgcolor='#FFFFFF'><?php echo $myrow['fabu']?></td>
			</tr>
		<?php }?>
		</table>
		<input class='searchbutton' type='button' value='返回' onclick='location.href="swzl.php"'></input>
		<?php 
	}else {
		echo "<script>alert('没有符合条件的数据');history.back();</script>";
	}
}
include_once 'bottom.php';
?>