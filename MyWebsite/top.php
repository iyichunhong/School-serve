<?php
// +----------------------------------------------------------------------
// | 学号：2017051604033
// +----------------------------------------------------------------------
// | 姓名：吴倩倩
// +----------------------------------------------------------------------
// | 本文件实现了前台首页顶部及导航栏设计
// +----------------------------------------------------------------------
?>
<!doctype html><html lang="en">
<head>   
<title>重庆师范大学一站式服务平台</title>	

<link href="css/top.css" rel="stylesheet" type="text/css" />
   	 	  </head>
  <body>	
   	 	  <div id="nav" >
   	 	  <table bgcolor="#74adaa" width="100%">
   	 	  	<tr>
   	 	  	
   	 	  		<td>
   	 	  			<img src="images/v.png" width="150px" height="50px">
   	 	  		</td>
   	 	  		<td align="left">
   	 	  		 <div class="b"><h2>重庆师范大学一站式服务平台</h2></div>
   	 	  		</td>
   	 	  		
   	 	  		<td align="left">
   	 	  			<div ><a href="private.php" class="a">个人中心</a></div>
   	 	  		</td>
   	 	  		<td>
   	 	  		<?php 
   	 	  		if (is_file("fangwenliang.txt")){
   	 	  			$a=file_get_contents("fangwenliang.txt");
   	 	  			$a++;
   	 	  			file_put_contents("fangwenliang.txt", $a);
   	 	  		?>
   	 	  		<div style="color:#ffffff;">网站访问量:<?php echo $a;?>
   	 	  		<?php 
   	 	  		}else {
   	 	  			$b=file_put_contents("fangwenliang.txt", 1);
   	 	  			echo "1";
   	 	  		}
   	 	  		?>
   	 	  		</div>
   	 	  		</td>
   	 	  	</tr>
   	 	  
   	 	  </table>	
   	 	  <ul class="nav-menu clearfix unstyled" id="father">	
   	 	  <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>		
   	 	  <li><a href="main.php" class="three-d active">首页<span class="three-d-box"><span class="front">首页</span><span class="back">首页</span></span></a></li>		
   	 	  <li><a href="swzl.php" class="three-d">失物招领<span class="three-d-box"><span class="front">失物招领</span><span class="back">失物招领</span></span></a>						
   	 	  </li>
   	 	  <li><a href="library.php" class="three-d">图书馆<span class="three-d-box"><span class="front">图书馆</span><span class="back">图书馆</span></span></a></li>			
   	 	  <li><a href="teacher.php" class="three-d">老师信息<span class="three-d-box"><span class="front">老师信息</span><span class="back">老师信息</span></span></a></li>			
   	 	  <li><a href="repairs.php" class="three-d">报修<span class="three-d-box"><span class="front">报修</span><span class="back">报修</span></span></a></li>			
   	 	  <li><a href="classroom-reserve.php" class="three-d">教室预定<span class="three-d-box"><span class="front">教室预定</span><span class="back">教室预定</span></span></a></li>			
   	 	  <li><a href="server.php" class="three-d">周边服务<span class="three-d-box"><span class="front">周边服务</span><span class="back">周边服务</span></span></a></li>			
   	 	  <li><a href="jiaofei.php" class="three-d">缴费<span class="three-d-box"><span class="front">缴费</span><span class="back">缴费</span></span></a></li>
   	 	  <li><a href="fromtheregister.php" class="three-d">离校登记<span class="three-d-box"><span class="front">离校登记</span><span class="back">离校登记</span></span></a></li>			
   	 	  
   	 	  </ul>	
   	 	  </div>
   	 	  </body>
   	 	  </html>
   	 
