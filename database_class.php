<?php
class Cdatabase {

	var $link;
	var $db;
	var $host, $user, $pass;


	function Cdatabase($db, $host="localhost", $user="", $pass="") {
		$this->db = $db; $this->host = $host; $this->user = $user; $this->pass = $pass;
		if($this->link = mysql_connect($host,$user,$pass))
			return mysql_select_db($db, $this->link);
			else return 0;
	}

	function query($sql) {
		if(!$this->link) return 0;
		return mysql_query($sql, $this->link);
	}

	function num_rows($q) {
		return mysql_num_rows($q);
	}

	function fetch_row($q) {
		return mysql_fetch_row($q);
	}


	function fetch_array($q) {
		return mysql_fetch_array($q);
	}

	function fetch_object($q) {
		return mysql_fetch_object($q);
	}

	function data_seek($q, $n) {
		return mysql_data_seek($q, $n);
	}

	function free_result($q) {
		return mysql_free_result($q);
	}

	function top_id($n,$t) {
	$result=$this->query('select top 1 '.$n. ' from '.$t.' order by '.$n.' desc');
	$row=$this->fetch_array($result);
	return $row[0];
	}

};
?>
