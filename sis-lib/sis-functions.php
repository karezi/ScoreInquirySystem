<?php
/**
 * @auther Karezi (http://karezi.co.cc)
 * 自定义主要功能
 */
include_once('sis-config.php');

if(!defined('IN_CONF')){
	header('HTTP/1.1 403 Forbidden');
	exit;	
}
//connect to db
include_once('sis-conn.php');


//check form
function check_form($id, $name, $psw){
	$okay1 = 0;
	$okay2 = 0;
	$mysql_str = "SELECT `学号` FROM `scores` WHERE `学号` = '".mysql_real_escape_string($id)."' AND `姓名`='". mysql_real_escape_string($name)."' limit 1";
	$result = mysql_q($mysql_str);
	while ($data = mysql_fetch_assoc($result)){
		if($data == true){
			$okay1 = 1;
		}
	}
	$mysql_str = "SELECT `学号` FROM `slist` WHERE `生日` = '".mysql_real_escape_string($psw)."' AND `学号`='". mysql_real_escape_string($id)."' limit 1";
	$result = mysql_q($mysql_str);
	while ($data = mysql_fetch_assoc($result)){
		if($data == true){
			$okay2 = 1;
		}
	}
	if($okay1 == 1 && $okay2 == 1)
		return 1;
	else
		return 0;
}

//close connection
function mysql_c($con){
	$closeresult = mysql_close($con);
	if(!$closeresult)
		conn_mysql_failed("关闭");
}

//取成绩
function mysql_s($id){
		$mysql_str = "SELECT * FROM `scores` WHERE `学号` = ".mysql_real_escape_string($id)." limit 1";
		$result = mysql_q($mysql_str);
		$arr = mysql_fetch_row($result);
		return $arr;
}
?>