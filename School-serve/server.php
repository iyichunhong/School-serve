// +----------------------------------------------------------------------
// | 学号：2017051604012
// +----------------------------------------------------------------------
// | Author: 缪淑婷
// +----------------------------------------------------------------------
// | content: 周边服务(前台)
// +----------------------------------------------------------------------

<?php
include "top.php";?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>重庆师范大学一站式服务平台</title>
<!-- 周边服务的css -->
<style type="text/css">
/* my_left_category */
.left1
{
	width:150px;
	font-size:12px;
	font-family:arial,sans-serif;
	letter-spacing:2px;
	position:absolute;
	top:180px;
	left:30px;
}
.left3
{
	width:150px;
	font-size:12px;
	font-family:arial,sans-serif;
	letter-spacing:2px;
	position:absolute;
	top:180px;
	left:1120px;
}
.left3 ul
{
	border-radius:2px;
	background-color:#74adaa;
	color:#FFFFFF;
	font-size:15px;
	
}
.left1 h1
{
	border-radius:5px;
	background-color:#74adaa;
	height:30px;
	background-repeat:no-repeat;
	font-size:20px;font-weight:bold;
	padding-left:15px;
	padding-top:8px;
	margin:0px;
	color:#FFFFFF;
}
.left3 h1
{
	border-radius:5px;
	background-color:#74adaa;
	height:30px;
	background-repeat:no-repeat;
	font-size:20px;font-weight:bold;
	padding-left:15px;
	padding-top:8px;
	margin:0px;
	color:#FFFFFF;
}
.left1 .cat 
{
	background-color:#FFFFFF;
	width:148px;
	border-color:#74adaa;
	border-style:solid;
	border-width:0px 1px 1px 1px;
	line-height:13.5pt;
}
.left1 .cat h2
{
	margin:0px;
	padding:3px 5px 0px 9px;
}
.left1 .cat h2 a
{
	color:#74adaa;
	font-weight:bold;
	font-size:24px;
	line-height:22px;
}
.left .cat h2 a:hover
{
	color:#CCFF77;
	font-weight:bold;
	font-size:20px;
	line-height:22px;
}
.left1 .h2_cat
{
	width:148px;
	height:26px; 
	background-repeat:no-repeat;
	line-height:26px;
	font-weight:normal;
	color:#74adaa;
	position:relative;
}
.left1 .h2_cat_1
{
	width:148px;
	height:26px; 
	background-repeat:no-repeat; 
	line-height:26px;
	font-weight:normal;
	color:#74adaa;
	position:relative;
}
.left1 a
{
	font:12px;
	text-decoration:none;
	color:#74adaa;
}
.left1 a:hover
{
	text-decoration:underline;
	color:#CCFF77;
}
.left1 h3
{
	margin:0px;
	padding:0px;
	height:26px;
	font-size:20px;
	font-weight:normal;
	display:block;
	padding-left:8px;
}
.left1 h3 span
{
	color:#74adaa;
	width:145px;
	float:right;
}
.left1 h3 a
{
	line-height:26px;
}
.left1 .h3_cat
{
	display:none;
	width:204px;
	position:absolute; 
	left:123px; 
	margin-top:-26px; 
	cursor:auto;
}
.left1 .shadow
{
	position:inherit;
	width:204px;
}
.left1 .shadow_border
{
	position:inherit;
	width:200px;
	border:1px solid #74adaa;
	margin-top:1px;
	border-left-width:0px;
	background-color:#ffffff;
	margin-bottom:3px;
}
.left1 .shadow_border ul
{
	margin:0;
	padding:0;
	margin-left:15px
}
.left1 .shadow_border ul li
{
	list-style:none;
	padding-left:10px;
	background-repeat:no-repeat;
	background-position:0px 8px;
	font-size:15px;
	float:left;
	width:75px;
	height:26px;
	overflow:hidden;
	letter-spacing:0px;
}
.left1 .active_cat
{
	z-index:99;
	background-position:0 -25px;
	cursor:pointer;
}
.left1 .active_cat h3
{
	font-weight:bold
}
.left1 .active_cat h3 span
{
	display:none;
}
.left1 .active_cat div
{
	display:block;
}

.l
{
position:absolute;
top:180px;
left:230px;
}

</style>
</head>
<body>
<!-- 主体内容 -->
<div class="left1">

	<h1>优惠导航</h1>
	<div class="cat">
		<br>
		<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
			<h3><img src="images/9.png" width="35px" height="35px">&nbsp;&nbsp;<a href="#">美食</a></h3>
			<div class="h3_cat">
				<div class="shadow">
					<div class="shadow_border">
						<ul>
							<li><a href="a.php" target="frame">蛋糕</a></li>
							<li><a href="c.php" target="frame">奶茶</a></li>
							<li><a href="#">小吃</a></li>
							<li><a href="#">快餐</a></li>
							<li><a href="#">火锅</a></li>
							<li><a href="#">自助餐</a></li>
						</ul>
					</div>
				</div>
			</div>  
		</div> 
		<br><br>
		<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
			<h3><img src="images/10.png" width="35px" height="35px">&nbsp;&nbsp;<a href="#">休闲娱乐</a></h3>
			<div class="h3_cat">
				<div class="shadow">
					<div class="shadow_border">
						<ul>
							<li><a href="#">按摩</a></li>
							<li><a href="#">足疗</a></li>
							<li><a href="#">KTV</a></li>
							<li><a href="#">酒吧</a></li>
							<li><a href="#">密室</a></li>
							<li><a href="#">健身</a></li>
							<li><a href="#">DIY</a></li>
							<li><a href="#">轰趴馆</a></li>
							<li><a href="#">游泳</a></li>
							<li><a href="#">VR</a></li>
							<li><a href="#">桌面游戏</a></li>
							<li><a href="#">电玩游戏厅</a></li>
						</ul>
					</div>
				</div> 
			</div>  
		</div> 
		<br><br>
		<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
			<h3><img src="images/11.png" width="35px" height="35px">&nbsp;&nbsp;<a href="#">外卖</a></h3>
			<div class="h3_cat">
				<div class="shadow">
					<div class="shadow_border">
						<ul>
							<li><a href="#">甜点</a></li>
							<li><a href="#">饮品</a></li>
							<li><a href="#">超市</a></li>
							<li><a href="#">蔬菜水果</a></li>
							<li><a href="#">校内食堂</a></li>
							<li><a href="#">面包蛋糕</a></li>
							<li><a href="#">快食简餐</a></li>
						</ul>
					</div>
				</div> 
			</div>  
		</div> 
		<br><br>
	    <div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
			<h3><img src="images/12.png" width="35px" height="35px">&nbsp;&nbsp;<a href="#">酒店住宿</a></h3>
			<div class="h3_cat">
				<div class="shadow">
					<div class="shadow_border">
						<ul>
							<li><a href="#">民宿</a></li>
							<li><a href="#">公寓</a></li>
							<li><a href="#">钟点房</a></li>
						</ul>
					</div>
				</div>
			</div>  
		</div> 
		<br><br>
		<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
			<h3><img src="images/13.png" width="35px" height="35px">&nbsp;&nbsp;<a href="#">学习培训</a></h3>
			<div class="h3_cat">
				<div class="shadow">
					<div class="shadow_border">
						<ul>
							<li><a href="#">西洋乐器</a></li>
							<li><a href="#">声乐乐理</a></li>
							<li><a href="#">英语</a></li>
							<li><a href="#">驾校</a></li>
							<li><a href="#">美妆从业</a></li>
							<li><a href="#">书法</a></li>
							<li><a href="#">名族乐器</a></li>
							<li><a href="#">球类培训</a></li>
							<li><a href="#">在线教育</a></li>
							
						</ul>
					</div>
				</div> 
			</div>  
		</div> <br>
</div>
</div>
<iframe name="frame" width="850px" height="370px" class="l" style="border:1px solid #74adaa" src="a.php">
</iframe>
<div class="left3" >

	<h1>优惠分享</h1>
	<ul >
		<li>有任何优惠活动请联系我们</li>
		<li>qq：1747495714</li>
		<li>email: 1747495714 qq.com</li>
		<li>电话：133640684 25</li>
	</ul>
</div>
</html>
<?php include "bottom.php";?>