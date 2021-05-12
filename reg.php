<?php
    if(!isset($_POST['submit'])){
        exit('非法访问!');
    }
    $nickname = $_POST['nickname'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $birthday = $_POST['birthday'];
    $hobby = $_POST['hobby'];
    //注册信息判断
    // if(!preg_match('/^[\w\x80-\xff]{3,15}$/', $username)){
    //     exit('错误：用户名不符合规定。<a href="javascript:history.back(-1);">返回</a>');
    // }
    // if(strlen($password) < 6){
    //     exit('错误：密码长度不符合规定。<a href="javascript:history.back(-1);">返回</a>');
    // }
    // if(!preg_match('/^w+([-+.]w+)*@w+([-.]w+)*.w+([-.]w+)*$/', $email)){
    //     exit('错误：电子邮箱格式错误。<a href="javascript:history.back(-1);">返回</a>');
    // }

    //包含数据库连接文件
    include("conn.php");
	//检测用户名是否已经存在
	$check_query = mysqli_query($conn,"select USER_ID from T_USER where NICKNAME= '$nickname' limit 1");
	if(mysqli_fetch_array($check_query)){
	    echo '错误：用户名 ',$nickname,' 已存在。<a href="javascript:history.back(-1);">返回</a>';
	    exit;
	}
    // $check_query = mysql_query("select uid from user where username='$username' limit 1");
    // if(mysql_fetch_array($check_query)){
    //     echo '错误：用户名 ',$username,' 已存在。<a href="javascript:history.back(-1);">返回</a>';
    //     exit;
    // }
	//写入数据
	$password = htmlspecialchars($password);
	$regdate = time();
	$sql = "INSERT INTO T_USER(NICKNAME,USER_PASSWORD,BIRTHDAY,HOBBY,PHONE_NUMBER)VALUES('$nickname','$password','$birthday','$hobby','$phonenumber')";
	if(mysqli_query($conn,$sql)){
	    exit('用户注册成功！点击此处 <a href="login.html">登录</a>');
	} else {
	    echo '抱歉！添加数据失败：',mysql_error(),'<br />';
	    echo '点击此处 <a href="javascript:history.back(-1);">返回</a> 重试';
	}


?>