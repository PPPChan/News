<?php
// $conn = @mysqli_connect("localhost","root","123456");
// if (!$conn){
//     die("连接数据库失败：" . mysqli_error());
// }
// mysqli_select_db("newsdb", $conn);
// //字符转换，读库
// mysql_query("set character set 'gbk'");
// //写库
// mysql_query("set names 'gbk'");


$host="localhost";
$db_user="root"; //数据库用户
$db_pass="123456"; //数据库密码
$db_name="newsDB"; //数据库
// $timezone = "Asia/Shanghai";

$conn=mysqli_connect($host,$db_user,$db_pass,$db_name);//连接
mysqli_query($conn,"SET names UTF8");//执行

header("Content-Type: text/html; charset=utf-8");
// date_default_timezone_set($timezone); //北京时间



?>
