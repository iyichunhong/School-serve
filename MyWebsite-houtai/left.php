<?php
// +----------------------------------------------------------------------
// | 学号：2017051604033
// +----------------------------------------------------------------------
// | 姓名：吴倩倩
// +----------------------------------------------------------------------
// | 本文件实现了后台首页左部导航设计
// +----------------------------------------------------------------------
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="text/javascript">
        window.onload = function () {
            var contents = document.getElementsByClassName('content');
            var toggles = document.getElementsByClassName('type');

            var myAccordion = new fx.Accordion(
            toggles, contents, {opacity: true, duration: 400}
            );
            myAccordion.showThisHideOpen(contents[0]);
            for(var i=0; i<document .getElementsByTagName("a").length; i++){
                var dl_a = document.getElementsByTagName("a")[i];
                    dl_a.onfocus=function(){
                        this.blur();
                    }
            }
        }
    </script>
    <style type="text/css">
    .type
    {
    border-redius:5px;
    background-color:#74adaa;
    color:"#FFFFFF";
    }
    a
    {
    text-decoration:none;
    color:#74adaa;

    }

li
{
color:#74adaa;
}
    </style>
</head>

<body>
    <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#EEF2FB">
        <tr>
            <td height="90" valign="top">
             
                     <h4 class="type"><a href="javascript:void(0)"><font color="#FFFFFF">老师信息管理</font></a></h4>
                    <div class="content">
                      
                        <ul >
                            <li><a href="addteacher.php" target="main">添加老师信息</a></li>
                            <li><a href="teachermanage.php" target="main">老师信息管理</a></li>
                        </ul>
                    </div>
            </td>
            <td  height="90"  valign="top">
                    <h4 class="type"><a href="javascript:void(0)"><font color="#FFFFFF">周边服务管理</font></a></h4>
                    <div class="content">
                      
                        <ul >
                            <li><a href="addserver.php" target="main">添加周边服务信息</a></li>
                            <li><a href="servemanage.php" target="main">周边服务信息管理</a></li>
                        </ul>
                    </div>
              </td>
              </tr>
              <tr>
              <td height="90" >
                    <h4 class="type"><a href="javascript:void(0)"><font color="#FFFFFF">缴费管理</font></a></h4>
                    <div class="content">
                      
                        <ul >
                            <li><a href="shuifei.php" target="main">水费信息管理</a></li>
                            <li><a href="dianfei.php" target="main">电费信息管理</a></li>
                            <li><a href="card.php" target="main">一卡通信息管理</a></li>
                            <li><a href="bus.php" target="main">校园公交车信息管理</a></li>
                            <li><a href="tuition.php"target="main">学费信息管理</a></li>
                        </ul>
                    </div>
                    </td>
                    <td height="90" >
                    <h4 class="type"><a href="javascript:void(0)"><font color="#FFFFFF">离校登记管理</font></a></h4>
                    <div>
                      
                        <ul class="RM">
                            <li><a href="lixiao.php" target="main">离校登记信息管理</a></li>
                        </ul>
                    </div>
                    </td>
                 </tr>
                 <tr>
                 	<td height="90" >
                     <h4 class="type"><a href="javascript:void(0)"><font color="#FFFFFF">图书信息管理</font></a></h4>
                    <div class="content">
                      
                        <ul >
                            <li><a href="addlibrary.php" target="main">添加图书信息</a></li>
                            <li><a href="deletelibrary.php" target="main">删除图书信息</a></li>
                             <li><a href="selectlibrary.php" target="main">查找图书信息</a></li>
                        </ul>
                    </div>
                   </td>
                   <td height="90" >
                    <h4 class="type"><a href="javascript:void(0)"><font color="#FFFFFF">报修信息管理</font></a></h4>
                  
                      
                        <ul >
                            <li><a href="deleterepairs.php" target="main">删除报修信息</a></li>
                            <li><a href="selectrepairs.php" target="main">查找报修信息</a></li>
                        </ul>
                    </div>
                    </td>
                    </tr>
                    <tr>
                    <td height="90" >
                   <h4 class="type"><a href="javascript:void(0)"><font color="#FFFFFF">教室申请管理</font></a></h4>
                   
                        
                        <ul>
                            <li><a href="deleteclassroom-apply.php" target="main">删除教室申请</a></li>
                            <li><a href="selectclassroom-apply.php" target="main">查找教室申请</a></li>
                        </ul>
                 
                    </td>
                    <td height="90" >
                       <h4 class="type"><a href="javascript:void(0)"><font color="#FFFFFF">教室信息管理</font></a></h4>
                    <div class="content">
                      
                        <ul >
                            <li><a href="addclassroom.php" target="main">增加教室信息</a></li>
                            <li><a href="deleteclassroom.php" target="main">删除教室信息</a></li>
                            <li><a href="javascript:void(0)" target="main">修改教室信息</a></li>
                            <li><a href="selectclassroom.php" target="main">查找教室信息</a></li>
                        </ul>
                    </div>
                    </td></tr>
                    <tr><td height="90" >
                    <h4 class="type"><a href="javascript:void(0)"><font color="#FFFFFF">失物招领管理</font></a></h4>
                    <div class="content">
                      
                        <ul >
                            <li><a href="addmessage.php" target="main">发布信息管理</a></li>
                            <li><a href="message_info.php" target="main">信息记录管理</a></li>
                            <li><a href="select_yishi.php" target="main">遗失信息管理</a></li>
                            <li><a href="select_zhaoling.php" target="main">招领信息管理</a></li>
                            <li><a href="liuyan_info.php" target="main">留言信息管理</a></li>
                          
                        </ul>
                    </div>
               
            </td>
            <td height="90" >
                    <h4 class="type"><a href="javascript:void(0)"><font color="#FFFFFF">学生信息管理</font></a></h4>
                    <div class="content">
                      
                        <ul >
                            <li><a href="addstudent.php" target="main">添加学生信息管理</a></li>
                            <li><a href="deletestudent.php" target="main">删除学生信息管理</a></li>
                            <li><a href="selectstudent.php" target="main">查找学生信息管理</a></li>
                         
                          
                        </ul>
                    </div>
               
            </td>
        </tr>
    </table>
</body>
</html>