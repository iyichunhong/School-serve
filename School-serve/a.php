// +----------------------------------------------------------------------
// | 学号：2017051604012
// +----------------------------------------------------------------------
// | Author: 缪淑婷
// +----------------------------------------------------------------------
// | content: 周边服务(前台):页码
// +----------------------------------------------------------------------
 <html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>php make page list</title> 
<style type="text/CSS"> 
<!-- 
body
{
background-color:#74adaa;
}
.page a:link { 
color: #FFFFFF; 
text-decoration: none; 
} 
.page a:visited { 
text-decoration: none; 
color: #FFFFFF; 
} 
.page a:hover { 
text-decoration: none; 
color: #FFFFFF; 
} 
.page a:active { 
text-decoration: none; 
color: #FFFFFF; 
} 
.page{color:#74adaa;} 
.table
{
position:absolute;
top:0px;
left:30px;
}
td
{
color:#FFFFFF;
}
--> 
</style> 
</head> 
<body> 
<table  border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#74adaa" class="table" cellpadding=5px>
<tr> 
<?php 
$link=mysqli_connect('localhost','root','root'); 
mysqli_select_db($link,'shixun'); 
mysqli_query($link,'set names utf8'); 

$Page_size=3; 
$result=mysqli_query($link,"select * from tb_youhui where main='美食' and little='蛋糕'"); 
$count = mysqli_num_rows($result); 
$page_count = ceil($count/$Page_size); 

$init=1; 
$page_len=7; 
$max_p=$page_count; 
$pages=$page_count; 

//判断当前页码 
if(empty($_GET['page'])||$_GET['page']<0){ 
$page=1; 
}else { 
$page=$_GET['page']; 
} 

$offset=$Page_size*($page-1); 
$sql="select * from tb_youhui Where main='美食' and little='蛋糕' limit $offset,$Page_size"; 
$result=mysqli_query($link,$sql); 
while ($row=mysqli_fetch_array($result)) { 
?>  
<td bgcolor="#74adaa" height="345px" align="left" width="300px">
		<img src='<?php echo $row['lujin'];?>' width="200px" height="200px"></img><br/>
		时间：<?php echo $row['time']?><br/>
		地点：<?php echo $row['where']?><br/> 
		优惠：<?php echo $row['youhui']?> 
</td>  
<?php 
} 
?></tr>
<?php 
$page_len = ($page_len%2)?$page_len:$pagelen+1;//页码个数 
$pageoffset = ($page_len-1)/2;//页码个数左右偏移量 

$key='<div class="page">'; 
$key.="<span>$page/$pages</span> "; //第几页,共几页 
if($page!=1){ 
$key.="<a href='?page=1'>第一页</a> "; //第一页 
$key.="<a href='?page=".($page-1)."'>上一页</a>"; //上一页 
}else { 
$key.="第一页 ";//第一页 
$key.="上一页"; //上一页 
} 
if($pages>$page_len){ 
//如果当前页小于等于左偏移 
if($page<=$pageoffset){ 
$init=1; 
$max_p = $page_len; 
}else{//如果当前页大于左偏移 
//如果当前页码右偏移超出最大分页数 
if($page+$pageoffset>=$pages+1){ 
$init = $pages-$page_len+1; 
}else{ 
//左右偏移都存在时的计算 
$init = $page-$pageoffset; 
$max_p = $page+$pageoffset; 
} 
} 
} 
for($i=$init;$i<=$max_p;$i++){ 
if($i==$page){ 
$key.=' <span>'.$i.'</span>'; 
} else { 
$key.=" <a href='?page=".$i."'>".$i."</a>"; 
} 
} 
if($page!=$pages){ 
$key.=" <a href='?page=".($page+1)."'>下一页</a> ";//下一页 
$key.="<a href='?page=".$pages."'>最后一页</a>"; //最后一页 
}else { 
$key.="下一页 ";//下一页 
$key.="最后一页"; //最后一页 
} 
$key.='</div>'; 
?> 
<tr> 
<td colspan="8" bgcolor="#E0EEE0"><div align="center"><?php echo $key?></div></td> 
</tr> 
</table> 
</body> 
</html> 