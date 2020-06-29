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
		return $re;
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
?>