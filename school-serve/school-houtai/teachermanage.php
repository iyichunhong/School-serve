// +----------------------------------------------------------------------
// | 学号：2017051604059
// +----------------------------------------------------------------------
// | Author: 易春红
// +----------------------------------------------------------------------
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style type="text/css">
    .w
    {
    color:#FFFFFF;
    }
    .w:hover
    {
    color:orange;
    }
    
    </style>
</head>
   <body>
    <script>
     function openfindpwd()
	{
		window.open("xiugai.php","newframe","left=400,top=200,width=400,height=200,menubar=no,toolbar=no,location=no,scrollbars=no,location=no");
	}
 	</script>
    <form method="get">
                                <table height="90%">
                                    <tr>
                                        <td width="100" align="center" colspan="2"><img src="Images/3.png" /></td>
                                        <td valign="bottom" colspan="7" bgcolor="#F7F8F9"><h3 style="letter-spacing:1px;">在这里，您可以根据您的需求，修改网站参数！</h3></td>
                                    </tr>
    
                        <!-- 添加栏目开始 -->
                        <tr bgcolor="#74adaa" >
                                                        <th class="w">老师姓名</th>
                                                        <th width="70px" class="w">老师所属学院</th>
                                                        <th width="80px" class="w">老师性别</th>
                                                        <th width="50px" class="w">学历</th>
                                                        <th width="50px" class="w">学位</th>
                                                        <th class="w">电话</th>
                                                        <th class="w">qq</th>
                                                        <th class="w">经历</th>
                                                         <th class="w" width="80px">操作</th>
                                                        
                                                    </tr>
                                                    
                                                    <?php 
													$link=mysqli_connect('localhost','root','root'); 
													mysqli_select_db($link,'shixun'); 
													mysqli_query($link,'set names utf8'); 

													$Page_size=3; 
													$result=mysqli_query($link,"select * from tb_teacher"); 
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
													$sql="select * from tb_teacher limit $offset,$Page_size";
													$result=mysqli_query($link,$sql); 
													while ($row=mysqli_fetch_array($result)) { 
?> 
<tr> 
<td bgcolor="#E0EEE0" ><div align="center"> 
<?php echo $row['name']?> 
</div></td> 
<td bgcolor="#E0EEE" ><div align="center"> 
<?php echo $row['college']?> 
</div></td> 
<td bgcolor="#E0EEE"><div align="center"> 
<?php echo $row['sex']?> 
</div></td> 
<td bgcolor="#E0EEE"><div align="center"> 
<?php echo $row['xueli']?> 
</div></td> 
<td bgcolor="#E0EEE"><div align="center"> 
<?php echo $row['xuewei']?> 
</div></td> 
<td bgcolor="#E0EEE"><div align="center"> 
<?php echo $row['tel']?> 
</div></td>
<td bgcolor="#E0EEE"><div align="center"> 
<?php echo $row['qq']?> 
</div></td>  
<td bgcolor="#E0EEE"><div align="center"> 
<?php echo $row['expeirnce']?> 
</div></td> 
<td bgcolor="#E0EEE"><a href="shanchu.php?name=<?php echo $row['name'];?> & college=<?php echo $row['college'];?>">删除</a> &nbsp;&nbsp;
</tr> 
<?php 
} 
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
<td colspan="9" bgcolor="#E0EEE0"><div align="center"><?php echo $key?></div></td> 
</tr> 

                        <tr>
                            <td width="2%">&nbsp;</td>
                            <td colspan="5">
                                <img src="Images/email.gif" width="16" height="11"> 客户服务邮箱：1747495714@qq.com<br />
                                <img src="Images/phone.gif" width="17" height="14">客户服务电话：13364068425
                            </td>
                            <td>&nbsp;</td><td>&nbsp;</td>
                        </tr>
                    
        </table>
        </form>
    </body>
</html>