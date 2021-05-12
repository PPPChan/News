<?php 


session_start();
//注销登录
if($_GET['action'] == "logout"){
    unset($_SESSION['nickname']);
    echo '注销登录成功！点击此处 <a href="login.html">登录</a>';
    exit;
}
//登录
if(!isset($_POST['submit'])){
    exit('非法访问!');
}
$nickname = htmlspecialchars($_POST['nickname']);
$password = htmlspecialchars($_POST['password']);
//包含数据库连接文件
include('conn.php');
//检测用户名及密码是否正确
$check_query = $conn->query("SELECT * from T_USER where nickname='$nickname' AND USER_PASSWORD ='$password' limit 1");

if($result = mysqli_fetch_array($check_query)){
    //登录成功
    $_SESSION['nickname'] = $result['NICKNAME'];
    $_SESSION['user_id'] = $result['USER_ID'];
    echo $nickname,' 欢迎你！进入 <a href="index.php">用户中心</a><br />';
    echo '点击此处 <a href="login.php?action=logout">注销</a> 登录！<br />';
    exit;
} else {
    exit('登录失败！点击此处 <a href="javascript:history.back(-1);">返回</a> 重试');
}

?>
