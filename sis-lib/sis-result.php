<?php
/**
 * @auther Karezi (http://karezi.co.cc)
 * 显示结果
 */
require_once('sis-config.php');
include("sis-functions.php");
$sid = $_POST['sid'];
$sname = trim($_POST['sname']);
$spsw = $_POST['spsw'];
if(!empty($sid) && !empty($sname) && !empty($spsw))
	if(!preg_match("/^[\x{4e00}-\x{9fa5}]+$/u",$sname))
		jump_with_alert('未填写正确的姓名，请重新输入！', 'index.php');
	elseif(!preg_match("/^[0-9]{8}$/", $sid))
		jump_with_alert('未填写正确的学号，请重新输入！', 'index.php');
	elseif(!preg_match("/^[0-9]{6}$/", $spsw))
		jump_with_alert('未填写正确的密码，请重新输入！', 'index.php');
	else
		$permit = check_form($sid, $sname, $spsw);
else
	jump_with_alert('输入不能为空，请重新输入！', 'index.php');
if($permit){
	$arr = mysql_s($sid);
}
else{
	jump_with_alert('输入有误，请重新输入！', 'index.php');
}
?>
<!--insert html-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>学生成绩查询系统</title>
<link href="../sis-includes/sis-css/result.css" rel="stylesheet" type="text/css" />
<link href="../sis-includes/sis-css/jquery-ui-1.8.18.custom.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div align="center">
        <h1><?php echo $arr[2]; ?>成绩详表</h1>
    </div>
    <div align="center">
    	<table width="80%" border="1">
  <caption id="table-title">
    概况
  </caption>
  <tr>
    <td width="25%" class="key">姓名</td>
    <td width="25%"><?php echo $arr[2]; ?></td>
    <td width="25%" class="key">学号</td>
    <td width="25%"><?php echo $arr[1]; ?></td>
  </tr>
  <tr>
    <td class="key">总分</td>
    <td><?php $i = 3; echo $arr[$i++]; ?></td>
    <td class="key">门数</td>
    <td><?php echo $arr[$i++]; ?></td>
  </tr>
  <tr>
    <td class="key">总学分</td>
    <td><?php echo $arr[$i++]; ?></td>
    <td class="key">获得学分</td>
    <td><?php echo $arr[$i++]; ?></td>
  </tr>
  <tr>
    <td class="key">不及格学分</td>
    <td><?php echo $arr[$i++]; ?></td>
    <td class="key">通过率</td>
    <td><?php echo $arr[$i++]; ?></td>
  </tr>
  <tr>
    <td class="key">不及格门数</td>
    <td><?php $i = 17; echo $arr[$i++]; ?></td>
    <td class="key">平均分</td>
    <td><?php echo $arr[$i++]; ?></td>
  </tr>
</table>

    </div>
    <br />
    <div align="center">
        <table width="80%" border="1">
  <caption id="table-title">
    排名详情
  </caption>
  <tr>
    <th width="35%" scope="col">项目</th>
    <th width="33%" scope="col">成绩</th>
    <th width="32%" scope="col">排名</th>
  </tr>
  <tr>
    <td>综合</td>
    <td>无</td>
    <td><?php echo $arr[0]; ?></td>
  </tr>
  <tr>
    <td>算术平均分</td>
    <td><?php $i = 9; echo $arr[$i++]; ?></td>
    <td><?php echo $arr[$i++]; ?></td>
  </tr>
  <tr>
    <td>学分加权平均分</td>
    <td><?php echo $arr[$i++]; ?></td>
    <td><?php echo $arr[$i++]; ?></td>
  </tr>
  <tr>
    <td>平均学分绩点</td>
    <td><?php echo $arr[$i++]; ?></td>
    <td><?php echo $arr[$i++]; ?></td>
  </tr>
  <tr>
    <td>学分绩点和</td>
    <td><?php echo $arr[$i++]; ?></td>
    <td><?php echo $arr[$i++]; ?></td>
  </tr>
</table>

    </div>
    <br />
<div align="center">
    	<table width="80%" border="1">    

  <caption id="table-title">
    各门成绩汇总
  </caption>
  <tr>
    <th width="52%" scope="col">课程名称</th>
    <th width="22%" scope="col">学分</th>
    <th width="26%" scope="col">分数</th>
  </tr>
  <tr>
    <td> 工科数学分析(1) </td>
    <td>7</td>
    <td><?php $i = 19; echo $arr[$i++]; ?></td>
  </tr>
  <tr>
    <td> 工科数学分析(2) </td>
    <td>7</td>
    <td><?php echo $arr[$i++]; ?></td>
  </tr>
  <tr>
    <td> 工科高等代数 </td>
    <td>6</td>
    <td><?php echo $arr[$i++]; ?></td>
  </tr>
  <tr>
    <td> 高等代数(1) </td>
    <td>4.5</td>
    <td><?php echo $arr[$i++]; ?></td>
  </tr>
  <tr>
    <td> 基础物理学(1) </td>
    <td>5.5</td>
    <td><?php echo $arr[$i++]; ?></td>
  </tr>
  <tr>
    <td> 高等代数(2) </td>
    <td>5</td>
    <td><?php echo $arr[$i++]; ?></td>
  </tr>
  <tr>
    <td> 数学分析(2) </td>
    <td>5</td>
    <td><?php echo $arr[$i++]; ?></td>
  </tr>
  <tr>
    <td> 大学语文 </td>
    <td>2</td>
    <td><?php echo $arr[$i++]; ?></td>
  </tr>
  <tr>
    <td> 大学英语(1) </td>
    <td>3.5</td>
    <td><?php echo $arr[$i++]; ?></td>
  </tr>
  <tr>
    <td> 大学英语(2) </td>
    <td>3.5</td>
    <td><?php echo $arr[$i++]; ?></td>
  </tr>
  <tr>
    <td> 大学英语(口语) </td>
    <td>1</td>
    <td><?php echo $arr[$i++]; ?></td>
  </tr>
  <tr>
    <td> 思想政治理论课－－基础 </td>
    <td>2</td>
    <td><?php echo $arr[$i++]; ?></td>
  </tr>
  <tr>
    <td> 思想政治理论课－－纲要 </td>
    <td>2</td>
    <td><?php echo $arr[$i++]; ?></td>
  </tr>
  <tr>
    <td> 体育(1) </td>
    <td>0.5</td>
    <td><?php echo $arr[$i++]; ?></td>
  </tr>
  <tr>
    <td> 体育(2) </td>
    <td>0.5</td>
    <td><?php echo $arr[$i++]; ?></td>
  </tr>
  <tr>
    <td> 形势与政策(1) </td>
    <td>0.2</td>
    <td><?php echo $arr[$i++]; ?></td>
  </tr>
  <tr>
    <td> 形势与政策(2) </td>
    <td>0.3</td>
    <td><?php echo $arr[$i++]; ?></td>
  </tr>
  <tr>
    <td> 军事理论 </td>
    <td>2</td>
    <td><?php echo $arr[$i++]; ?></td>
  </tr>
  <tr>
    <td> 航空航天概论A </td>
    <td>2</td>
    <td><?php echo $arr[$i++]; ?></td>
  </tr>
  <tr>
    <td> 工程认识 </td>
    <td>1</td>
    <td><?php echo $arr[$i++]; ?></td>
  </tr>
  <tr>
    <td> 计算机导论与计算机伦理学 </td>
    <td>1</td>
    <td><?php echo $arr[$i++]; ?></td>
  </tr>
  <tr>
    <td> 高级语言程序设计(1) </td>
    <td>2</td>
    <td><?php echo $arr[$i++]; ?></td>
  </tr>
  <tr>
    <td> 离散数学(1) </td>
    <td>3</td>
    <td><?php echo $arr[$i++]; ?></td>
  </tr>
  <tr>
    <td> 离散数学(2) </td>
    <td>3.5</td>
    <td><?php echo $arr[$i++]; ?></td>
  </tr>
  <tr>
    <td> 走进计算机科学系列讲座 </td>
    <td>1</td>
    <td><?php echo $arr[$i++]; ?></td>
  </tr>
  <tr>
    <td> 面向对象建模方法 </td>
    <td>2</td>
    <td><?php echo $arr[$i++]; ?></td>
  </tr>
  <tr>
    <td> 计算机基础操作 </td>
    <td>1</td>
    <td><?php echo $arr[$i++]; ?></td>
  </tr>
  <tr>
    <td> 机械工程技术训练B </td>
    <td>2</td>
    <td><?php echo $arr[$i++]; ?></td>
  </tr>
  <tr>
    <td> 军训 </td>
    <td>2</td>
    <td><?php echo $arr[$i++]; ?></td>
  </tr>
  <tr>
    <td> 人体工程（1） </td>
    <td>0.5</td>
    <td><?php echo $arr[$i++]; ?></td>
  </tr>
</table>


    </div>
<div id="author">
	<dd>
		  <p>
          <span class="author" >Powered by Karezi
           </span>
          </p>
	</dd>
    <p>
    	<span class="web">
    	<a href="http://ftp.karezi.co.cc/file" >ftp.karezi.co.cc</a>
  		</span>
  </p>
</div>
</body>
</html>
<?php
mysql_c($conn);
?>