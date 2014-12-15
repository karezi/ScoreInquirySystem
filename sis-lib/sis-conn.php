<?php
/**
 * @auther Karezi (http://karezi.co.cc)
 * 连接数据库和查询方法定义
 */
require_once('sis-http.php');

if (!defined('IN_CONF')) {
	http403();
}

//fail to connect2db
function conn_mysql_failed($state){
?>
<!--insert html-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999.xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>

<body>
<h1>数据库<?php echo $state ?>失败</h1>
</body>
</html>

<?php
		exit();
}

//@:Prevent errors' overflowing
$conn = @mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or conn_mysql_failed("连接");
mysql_select_db(DB_NAME) or conn_mysql_failed("连接");

//SQL
function mysql_q($query_str){
	$result = mysql_query($query_str);
	if(defined('DEBUG') && (!$result))
		echo (mysql_error());
	return $result;	
}
?>

