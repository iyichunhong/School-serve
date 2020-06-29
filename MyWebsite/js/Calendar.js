//日历js 
window.onload = function(){
       //为日历写入月份头部
     function Calendar(){
          var weeks = ['日', '一', '二', '三', '四', '五', '六'];
           for(i = 0; i < weeks.length; i++){
               var div = document.createElement('div');
             div.id = 'week_' + i;
              div.innerHTML = weeks[i];
             div.style.width = '14%';
              div.style.height = '20px';
              div.style.backgroundcolor='#74adaa';
              div.style.color='#FFFFFF';
              div.style.lineHeight = div.style.height;
              div.style.backgroundColor = '#ccc';
              div.style.float = 'left';
              div.style.textAlign = 'center';
             document.getElementById('calendar_weektitle').appendChild(div);
          }
      }
  
      //构造原型对象
      Calendar.prototype = {
          //取闰年函数
          isLeap : function(year){
              return (year % 100 !== 0 && year % 4 == 0) || (year % 400 == 0);
          },
          //返回本年本月的天数
          getDaysNum : function(year, month) {
              var num = 31;           //大月
              switch (month) {
                  case '2':
                      num = this.isLeap(year) ? 29 : 28;
                      break;         //小月
                  case 4:
                  case 6:
                  case 9:
                  case 11:
                      num = 30;
                      break;
              }
              return num;
          },
          //返回本月的第一天是周几
          getWeek : function(year, month){
              var d = new Date();
              // var m=d.getMonth()+1;
              // var y=d.getYear();
  
              d.setYear(year);
              d.setMonth(month-1);
              d.setDate(1);
              var weeks = ['7', '1', '2', '3', '4', '5', '6'];
              return weeks[d.getDay()];
  
          },
          //核心函数，写入日历
          show : function(year, month){
              var weekFirstDay = this.getWeek(year, month);
              var dayCount = this.getDaysNum(year, month);
              console.log(weekFirstDay);
              //得到本月头是周几，并在前面插入空天数
              if(weekFirstDay != '7'){
                  for(var i = 0; i < weekFirstDay; i++){
                      var div_1 = document.createElement('div');
                      div_1.style.cursor = 'pointer';
                      div_1.innerHTML = '';
                      div_1.style.width = '14%';
                     div_1.style.height = '28px';
  //                    div_1.style.lineHeight = div_1.style.height / 2;
                      div_1.style.float = 'left';
                      div_1.style.textAlign = 'center';
                      document.getElementById('calendar_weekday').appendChild(div_1);
                  }
             }
              //得到本月的天数，按规则格式注入天数
              for(i = 0; i < dayCount; i++){
                  var div_2 = document.createElement('div');
                  div_2.style.cursor = 'pointer';
                  div_2.id = 'day_' + year + '_' + month + '_' + (i + 1);
                  console.log(div_2.id);
                  div_2.innerHTML = i + 1 + '<br />';
                  div_2.style.width = '14%';
                  div_2.style.height = '28px';
  //                div_2.style.lineHeight = div_2.style.height / 2;
                  div_2.style.float = 'left';
                  div_2.style.textAlign = 'center';
                  document.getElementById('calendar_weekday').appendChild(div_2);
              }
  
         },
          //跳转上个月，月份减一
          PreMonth: function() {
              this.PreDraw(new Date(this.Year, this.Month - 2, 1));
          },
         //跳转下个月，月份加一
         NextMonth: function() {
              this.PreDraw(new Date(this.Year, this.Month, 1));
         },
         //重绘
         PreDraw: function(date) {
             this.Year = date.getFullYear();
             this.Month = date.getMonth() + 1;
             this.Draw();
         }
     };
     //对象实例化
     Calen = new Calendar();
     //获取本地时间
     var  data= new Date();
     m = data.getMonth()+1;
     y =data.getFullYear();
     d = data.getDate();
     //写入本月天数
     Calen.show(y,m);
     var today = document.getElementById('day_'+ y + '_'+ m + '_' + d);
     today.style.backgroundColor = '#ffcd3c';
 
     document.getElementById("year").innerHTML = y;
     document.getElementById("month").innerHTML = m;
     //跳转到下个月
     document.getElementById("next_M").onclick = function(){
         var  div=document.getElementById("calendar_weekday");
         div.innerHTML = "";
         if(m > 0&&m < 12){
             m += 1;
         }else if(m > 1){
             m = 1;
             y += 1;
         }else if(m == 12){
             m = 1;
             y += 1;
         }
         Calen.show(y, m);
         document.getElementById("year").innerHTML = y;
         document.getElementById("month").innerHTML = m;
     };
 
     //跳转到上一月
     document.getElementById("prev_M").onclick = function(){
        var div = document.getElementById("calendar_weekday");
        div.innerHTML="";
         if(m > 1 && m < 12){
             m -= 1;
        }else if(m <= 1){
            m = 12;
            y-=1;
         }else if(m == 12){
             m -= 1;
         }
         Calen.show(y, m);
         document.getElementById("year").innerHTML = y;
         document.getElementById("month").innerHTML = m;
     };
 };