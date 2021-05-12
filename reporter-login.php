<?php 


session_start();
//注销登录
if($_GET['action'] == "logout"){
    unset($_SESSION['REPORTER_NAME']);
    unset($_SESSION['REPORTER_ID']);
    echo '注销登录成功！点击此处 <a href="reporter-login.html">登录</a>';
    exit;
}
//登录
if(!isset($_POST['submit'])){
    exit('非法访问!');
}
$reporter_id = htmlspecialchars($_POST['reporter_id']);
$password = htmlspecialchars($_POST['password']);


//包含数据库连接文件
include('conn.php');
//检测用户名及密码是否正确
$check_query = $conn->query("SELECT * from T_REPORTER where REPORTER_ID='$reporter_id' AND REPORTER_PASSWORD ='$password' limit 1");

if($result = mysqli_fetch_array($check_query)){
    
    //登录成功
    
    $_SESSION['REPORTER_NAME'] = $result['REPORTER_NAME'];
    $_SESSION['REPORTER_ID'] = $result['REPORTER_ID'];
    echo " 欢迎你！".$_SESSION['reporter_name']."进入 <a href=\"reporter-news.php\">新闻发布管理系统(记者)</a><br/>";
    echo '点击此处 <a href="reporter-login.php?action=logout">注销</a> 登录！<br />';
    exit;
} else {
    exit('登录失败！点击此处 <a href="javascript:history.back(-1);">返回</a> 重试');
}

?>
