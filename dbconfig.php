<?php
session_start();
$dbhost = 'localhost';
$dbuser   = 'root';
$dbpassword = '';
$database = 'test';
//$rootPath="/temp/xampp/htdocs/test/tileImages/";
$db = mysql_connect('localhost', $dbuser, $dbpassword)
or die("Connection Error: " . mysql_error());
mysql_query("SET NAMES utf8");
date_default_timezone_set('Asia/Taipei');
// select the database
mysql_select_db($database) or die("Error conecting to db.");

//-------------------
function readPOST($n) {
	$ret= null;
	if (isset($_POST[$n])) {
		$ret=$_POST[$n];
	} elseif (isset($_GET[$n])) {
		$ret=$_GET[$n];
	} 
	return mysql_real_escape_string(trim($ret));
}

?>