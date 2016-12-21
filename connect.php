<?php 
error_reporting(0);
$user='root';
$pass='';
require_once "database_class.php";
$cdb=new CdataBase("marriage", "localhost", "$user", "$pass");
$query=$cdb->query("set character_set_client='cp1251'");
$query=$cdb->query("set character_set_results='cp1251'");
$query=$cdb->query("set collation_connection='cp1251_general_ci'");
?>