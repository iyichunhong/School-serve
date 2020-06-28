<!DOCTYPE html>
<html>
// +----------------------------------------------------------------------
// | 学号：2017051604014
// +----------------------------------------------------------------------
// | Author: 刘慧敏
// +----------------------------------------------------------------------
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Document</title>
    <style>
        *{margin: 0;padding: 0;}
        .div{width: 800px; min-height: 370px; border: 1px solid #74adaa; margin: auto}
        .div .bwl{width: 90%;font-family:"楷体"; text-align:center; margin: auto; display: #74adaa;  padding: 5px 0px;}
        .div .div1{width: 90%; font-style:italic; border: 1px solid #74adaa; margin: 5px auto;}
        .div .div1 p{width: 100%; padding: 5px 0px; height: 30px;  }
        .div .div1 ul{width: 100%;}
        .div .div1 ul li{width: 100%; height: 30px; padding: 5px 0px; line-height: 30px; list-style: none;margin-bottom: 10px; background: #e8f4ff;}
        #write{resize: none; width: 90%;margin: auto; height: 210px; display: block;}
        #jilu{width: 90%; height: 40px; margin: auto; display: block; margin-top: 5px;}
        a{float: right}
        span{float: right;}
    </style>
</head>
<body>
    <div class="div">
        <p class="bwl"><font size=6 color=#74adaa>备忘录</font></p>
        <div class="div1">
            <p class="p"><font size=5 color=#74ADAA>What do want remenber</font></p><ul></ul>
        </div>
        <textarea id="write"></textarea>
        <input id="jilu" type="button" value="记录"  />
    </div>
    <script>
        var p = document.getElementsByClassName("p")[0];
        var ul = document.getElementsByTagName("ul")[0];
        var wbk = document.getElementById("write");
        var btn = document.getElementById("jilu");
        var num = 0;
        btn.onclick = function(){
            if(wbk.value.length != 0){
                p.style.display = "none";
                var li = document.createElement("li");
                var em = document.createElement('em');
                var a = document.createElement("a");
                var span = document.createElement("span");
                
                li.innerHTML = wbk.value;
                li.insertBefore(em,li.firstChild);
                
                
                a.innerHTML = "点击删除";
                a.setAttribute("href","javascript:void(0)");
                li.appendChild(a);
                
                span.innerHTML = "第" + num + "个";
                li.appendChild(span);
                
                
                wbk.value = "";
                ul.appendChild(li);
                
                fn1();
                fn2();
            }else{
                alert("请输入内容")
            }
        }
        
        function fn1(){
            var ali = document.getElementsByTagName('li');
            var ee = document.getElementsByTagName('em');
            for(var i=0;i<ali.length;i++){
                ee[i].innerHTML = i + 1 + ".";
            }
            
            var ss = document.getElementsByTagName('span');
            for(var i=0;i<ali.length;i++){
                ss[i].innerHTML = "第" + (i + 1) + "个";
            }
            if(ali.length == 0){
                p.style.display = "block";
            }
            
        }
        function fn2(){
            var aa = document.getElementsByTagName("a");
            for(var i=0;i<aa.length;i++){
                aa[i].onclick = function(){
                    this.parentNode.parentNode.removeChild(this.parentNode);
                    fn1();
                }
                
            }
        }        
    </script>
</body>
</html>