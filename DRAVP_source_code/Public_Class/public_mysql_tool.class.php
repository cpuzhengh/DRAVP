<?php
	class public_mysql_tool {
		private $conn;
		private $host="localhost";
		private $user="dravp";
		private $password="zhengh123";
		private $db="dravp";
		
		function public_mysql_tool(){
				
			$this->conn=mysql_connect($this->host,$this->user,$this->password);
			if(!$this->conn){
				die("sorry".mysql_error());
			}
			mysql_select_db($this->db,$this->conn);
			mysql_query("set names utf8");
		}
		
		//insert the data
		public function execute_submit($sql){
			$res = mysql_query($sql,$this->conn) or die(mysql_error());
			return $res;
		}	


		// go to select
		public function execute_dql($sql){
			$res=mysql_query($sql,$this->conn) or  die(mysql_error());
			if (mysql_num_rows($res)<1) {
				return 0;
			}else{
				while ($row=mysql_fetch_assoc($res)){
					$this->result[]=$row;
				}
				return $this->result;
			}
		}
		
		public function execute_dql_gold($sql){
			$my_res=mysql_query($sql,$this->conn) or  die(mysql_error());
			
			if (mysql_num_rows($my_res)<1) {
				return 0;
			}else{
				while ($row=mysql_fetch_row($my_res)){
					foreach ($row as $key=>$val){
						$this->result[]=$val;
					}
				}
				return $this->result;
			}
		}
		
		
		public function exectue_dql_fenye($sql1,$sql2,$FenyePage){
			$res=mysql_query($sql1,$this->conn) or  die(mysql_error());
			
			$arr=array();
			
			while ($row=mysql_fetch_assoc($res)) {
				$arr[]=$row;
			}
			mysql_free_result($res);
			$res2 = mysql_query($sql2,$this->conn) or  die(mysql_error());
			if ($row=mysql_fetch_row($res2)) {
				$FenyePage->pageCount=ceil($row[0]/$FenyePage->pageSize);
				$FenyePage->rowCount=$row[0];
				//print $FenyePage->pageCount;
			}
			mysql_free_result($res2);
			$FenyePage->res_array=$arr;
			
		}
		
		//update,delete,insert
		public function execute_dml($sql){
			$b=mysql_query($sql,$this->conn) or  die(mysql_error());
			if (!$b){
				
				return 0;//false
			}else{
				if (mysql_affected_rows($this->conn)>0){
					return 1;//success
				}else{
					return 2;//nothing
				}
			}
		
		}
	
}

?>
