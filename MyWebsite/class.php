<?php
// +----------------------------------------------------------------------
// | 学号：2017051604033
// +----------------------------------------------------------------------
// | 姓名：吴倩倩
// +----------------------------------------------------------------------
// | 本文件封装了数据库操作函数
// +----------------------------------------------------------------------
?>
<?php 
include "conn/conn.php";
class UseModel
{
   public function add($sql,$conn){
		$rs=mysqli_query($conn,$sql);
		return $rs;
	}
	
	public function delete($sql,$conn)
	{
		$re=mysqli_query($conn,$sql);
		return $rs;
	}
	
	public function select($sql,$conn)
	{
        $rs=mysqli_query($conn,$sql);
        return $rs;
	}
	
	public function change($sql,$conn){
		$rs=mysqli_query($conn,$sql);
		return $rs;
	}
}