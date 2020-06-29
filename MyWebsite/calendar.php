<?php
// +----------------------------------------------------------------------
// | 学号：2017051604033
// +----------------------------------------------------------------------
// | 姓名：吴倩倩
// +----------------------------------------------------------------------
// | 本文件实现了日历显示界面
// +----------------------------------------------------------------------
?>
<!DOCTYPE html>
 <html>
 <head lang="en">
  <meta charset="UTF-8">
  <title>日历</title>
<link rel="stylesheet" type="text/css" href="css/Calendar.css">
 <script type="text/javascript" src="js/Calendar.js"></script>

 </head>
 <body>
<div id="calendar" class="calendar" >
   <div class="prev">
      <button id="prev_M">上个月</button>
   </div>
     <span id="month"></span>月<span id="year"></span>年

      <div class="next">
          <button id="next_M">下个月</button>        </div>

     <div style="clear:both"></div>
   <!--日历主体-->
   <div id="calendar_weektitle"></div>
    <div id="calendar_weekday"></div>
    <div style="clear:both;"></div>
    </div>
 </body>
 </html>