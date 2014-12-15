<?php
/**
 * @auther Karezi (http://karezi.co.cc)
 * http错误和跳转
 */
function http403() {
	header('HTTP/1.1 403 Forbidden');
	exit();
}
function http302($url) {
	header("Location: " . $url);
	exit();
}
//jump
function jump_with_alert($info, $url) {
?>

<!--insert html-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>跳转中...</title>
</head>

<body>
<center>
<span style="font-family:'Courier New', Courier, monospace">
页面跳转中...（若跳转失败请点击<a href="<?php echo $url ?>">这里</a>）
</span>
</center>
<script type="application/javascript" language="javascript">
alert("<?php echo $info?>");
window.location.href = "<?php echo $url ?>";
</script>
</body>

<?php
	exit();
}
?>