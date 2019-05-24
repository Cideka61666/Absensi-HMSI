<?php 

class database{

	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "tubes_alpro3";

	function __construct(){
		mysql_connect($this->host, $this->nama, $this->jabatan);
		mysql_select_db($this->db);
	}

	function kehadiran(){
		$data = mysql_query("select * from user");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

	function hapus($id){
		mysql_query("delete from user where id='$id'");
	}
} 

?>