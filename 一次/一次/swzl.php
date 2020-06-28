// +----------------------------------------------------------------------
// | 学号：2017051604014
// +----------------------------------------------------------------------
// | Author: 刘慧敏
// +----------------------------------------------------------------------
<?php
include 'top.php';
echo "<script>location:reload();</script>";
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="search.js"></script>
<link rel=stylesheet type=text/css href=css/main.css>
</head>
<body>
		<ul class="p">
				<li><h3><a href="fabu.php" target="displayframe" style="text-decoration: none;">发布信息</a></h3><br></li>
				<li><h3><a href="info.php" target="displayframe" style="text-decoration: none;">信息记录</a></h3></li>
				<li><h4><a href="zhaoling.php" target="displayframe" style="{text-decoration:none;}">&nbsp;&nbsp;&nbsp;&nbsp;招领信息</a></h4></li>
				<li><h4><a href="yishi.php" target="displayframe" style="{text-decoration:none;"}>&nbsp;&nbsp;&nbsp;&nbsp;遗失信息</a></h4></li>
				<li><h4><a href="showmessage.php" target="displayframe" style="{text-decoration:none;}">&nbsp;&nbsp;&nbsp;&nbsp;留言记录</a></h4><br></li>			
				<li><h3><a href="beiwanglu.php" target="displayframe" style="text-decoration: none;">备忘录</a></h3><br></li>
		</ul>
	<div id="search">
    	<div class="search bar7">
        <form class="searchform" action="search.php">
            <input type="text" placeholder="请输入" name="name">      
            <button type="submit" value="查询" onclick="return showsimple()"></button>
        </form></div>
    </div>
	<iframe class="display" id="displayframe" name="displayframe" frameborder="1" src="info.php"></iframe>
</body>
<?php include "bottom.php"?>
