// +----------------------------------------------------------------------
// | 学号：2017051604059
// +----------------------------------------------------------------------
// | Author: 易春红
// +----------------------------------------------------------------------
<?php
include "top.php";
?>
<html>
<head>
<style type="text/css">
.u
{
position:absolute;
top:160px;
left:150px;
background-color:#74adaa;
align:left;
}

</style>
</head>
<body>
<script>
  function chk(form)
  {
    if(form.name.value=="")
	{
	 alert("姓名不能为空!");
	 form.name.select();
	 return(false);
	}
    if(form.studetID.value=="")
	{
	 alert("请输入学号!");
	 form.studentID.select();
	 return(false);
	 } 
	if(from.sex.value=="")
	{
	 alert("请选择性别!");
	 form.sex.select();
	 return(false);
	}
	  if(form.co.value=="")
		{
		 alert("请选择学院!");
		 form.co.select();
		 return(false);
		 } 
    if(form.college.value=="")
	{
	 alert("请选择寝室苑!");
	 form.college.select();
	 return(false);
	 }
   if(form.nu.value=="")
	{
	 alert("请输入你的寝室号ַ!");
	 from.nu.select();
	 return(false);
	 }
	    if(form.time.value=="")
	{
	 alert("请输入离校时间!");
	 form.time.select();
	 return(false);
	 }
  if(form.backtime.value=="")
	{
	 alert("请输入返校时间!");
	 form.backtime.select();
	 return(false);
	 }
  if(form.where.value=="")
	{
	 alert("请输入假期去向!");
	 form.where.select();
	 return(false);
	 }
  if(form.tel.value=="")
	{
	 alert("请输入联系电话!");
	 form.tel.select();
	 return(false);
	 }
  if(form.jianhuren.value=="")
	{
	 alert("请输入监护人姓名!");
	 form.jianhuren.select();
	 return(false);
	 } 
  if(form.tele.value=="")
	{
	 alert("请输入监护人电话!");
	 form.tele.select();
	 return(false);
	 }
  if(form.why.value=="")
	{
	 alert("请输入事由!");
	 form.why.select();
	 return(false);
	 }
  }
</script>
<form action="fromtheregister2.php" method="post"  onSubmit="return chk(this)">
<table  class="u" height="400px" >
	<tr>
		<td width="1000px" colspan="3" height="30px" bgcolor="#74adaa" ></td>
	</tr>
	<tr>
		<td width="100px" bgcolor="#74adaa"></td>
		<td width="600px" bgcolor="#FFFFFF" style="border-radius:10px;">
			<table>
				<tr>
					<td >
						<h3><img src="images/15.png" width="35px" height="35px">&nbsp;&nbsp;本人信息：</h3>
					</td>
				</tr>
				<tr>
					<td >姓名：&nbsp;&nbsp;&nbsp;<input type="text" name="name">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;学号：<input type="text" name="studentID"></td>
					
					<td >&nbsp;&nbsp;性别：&nbsp;&nbsp;&nbsp;<input type="radio" name="sex" value="女" checked>女<input type="radio" name="sex" value="男">男</td>
				</tr>
				<tr>
					<td colspan="2" >学院：&nbsp;&nbsp;<select name="co" id="co">
														<option value="计算机与信息科学学院" selected>计算机与信息科学学院</option>
														<option value="初等教育学院">初等教育学院</option>
														<option value="传媒学院">传媒学院</option>
														<option value="地理与旅游学院">地理与旅游学院</option>
														<option value="化学学院">化学学院</option>
														<option value="教育科学学院">教育科学学院</option>
														<option value="经济与管理学院">经济与管理学院</option>
														<option value="历史与社会学院">历史与社会学院</option>
														<option value="美术学院">美术学院</option>
														<option value="生命与科学学院">生命与科学学院</option>
														<option value="外国语学院">外国语学院</option>
														<option value="文学院">文学院</option>
														<option value="物理与电子工程学院">物理与电子工程学院</option>
														<option value="音乐学院">音乐学院</option>
														<option value="数学科学学院">数学科学学院</option>
					                                  </select>
					&nbsp;&nbsp;寝室信息：&nbsp;&nbsp;&nbsp;寝室苑：<select name="college" id="college">
																<option value="惠风苑A栋" selected>惠风苑A栋</option>
																<option value="清风苑B栋" >清风苑B栋</option>
																<option value="惠风苑C栋" >惠风苑C栋</option>
																<option value="嘉风苑A栋" >嘉风苑 A栋</option>
																<option value="畅风苑" >畅风苑</option>
																<option value="雅风苑B栋" >雅风苑B栋</option>
																<option value="和风苑E栋" >和风苑E栋</option>
																<option value="惠风苑C栋" >惠风苑C栋</option>
																<option value="硕博楼">硕博楼</option>
																<option value="培训楼" >培训楼</option>
																<option value="和风苑B栋" >和风苑B栋</option>
																<option value="和风苑C栋">和风苑C栋</option>
																<option value="和风苑D栋" >和风苑D栋</option>
																<option value="清风苑A栋" >清风苑A栋</option>
																<option value="清风苑C栋">清风苑C栋</option>
																<option value="惠风苑B栋" >惠风苑B栋</option>
																<option value="雅风苑A栋" >雅风苑A栋</option>
																<option value="雅风苑C栋" >雅风苑C栋</option>
																<option value="嘉风苑B栋" >嘉风苑B栋</option>
															</select>&nbsp;&nbsp;&nbsp;
													寝室号：&nbsp;&nbsp;&nbsp;<input type="text" name="nu">
				</tr>
			</table>
		</td>
		<td width=100px" bgcolor="#74adaa" ></td>
	</tr>
	<tr>
		<td colspan="3" height="30px" bgcolor="#74adaa"></td>
	</tr>
	<tr>
		<td bgcolor="#74adaa"></td>
		<td bgcolor="#FFFFFF" style="border-radius:10px;">
			<table>
				<tr>
					<td colspan="2" >
						<h3><img src="images/14.png" width="35px" height="35px">&nbsp;&nbsp;离校信息：</h3>
					</td>
				</tr>
				<tr>
					<td >离校时间：<input type="text" name="time"></td>
					<td>&nbsp;&nbsp;&nbsp;返校时间：<input type="text" name="backtime"></td>
				</tr>
				<tr>
					<td>假期去向：<input type="text" name="where"></td>
					<td >&nbsp;&nbsp;&nbsp;联系电话：<input type="text" name="tel"></td>
				</tr>
				<tr>
					<td>监护人姓名：<input type="text" name="jianhuren"></td>
					<td >&nbsp;&nbsp;&nbsp;监护人电话：<input type="text" name="tele"></td>
				</tr>
				<tr>
					<td colspan="2" >事由：<input type="text" name="why"></td>
				</tr>
				<tr>
					<td colspan="2">备注：<input type="text" name="beizu"></td>
				</tr>
			
			
			</table>
		</td>
		<td bgcolor="#74adaa"></td>
	</tr>
	<tr>
	       <td></td>
		<td height="30px" bgcolor="#74adaa" align="right"><input type="submit" value="提交"></td>
		<td></td>
	</tr>

</table>
</form>
</body></html>

<?php 
include "bottom.php";?>