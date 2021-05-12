<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<title>注册</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">  
	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<title>修改资料</title>
</head>
<body>
<div class="container">
	<h1>修改资料</h1>
	<form class="form-horizontal">
	  <div class="form-group">
	  	<?php 
	  	session_start();
		$nickname = $_SESSION['nickname'];
		if (!isset($_SESSION['nickname'])) {
    		exit("请先登录系统！");
    	}
		include("conn.php");

		
	  	 ?>
	    <label class="sr-only">昵称</label>
	    <p class="form-control-static col-xs-3">原昵称</p>
	  </div>
	  <div class="form-group">
	    <div class="col-xs-8">
	    	<input type="text" class="form-control" id="inputPassword2" placeholder="请输入新昵称"></div>
	    	<div class="col-xs-4"><button type="submit" class="btn btn-danger">确认修改</button>
	    </div>
	    
	  </div>
	  
	  <div class="form-group">
	    <label class="sr-only">生日</label>
	    <p class="form-control-static col-xs-3">生日</p>
	  </div>
	  <div class="form-group">
	    <div class="col-xs-8"><input type="date" class="form-control" id="inputPassword2"></div>
	    <div class="col-xs-4"><button type="submit" class="btn btn-danger">确认修改</button></div>

	  </div>
	  <div class="form-group">
	    <label class="sr-only">爱好</label>
	    <p class="form-control-static col-xs-3">爱好</p>
	  </div>
	  <div class="form-group">
	    <!-- <label for="inputPassword2" class="sr-only">新爱好</label> -->
	    <div class="col-xs-8"><input type="text" class="form-control" id="inputPassword2"  placeholder="请输入新爱好"></div>
	    <div class="col-xs-4"><button type="submit" class="btn btn-danger">确认修改</button></div>

	  </div>

	  <div class="form-group">
	    <label class="sr-only">手机号码</label>
	    <p class="form-control-static col-xs-3">手机号码</p>
	  </div>
	  <div class="form-group">
	    <div class="col-xs-8"><input type="text" class="form-control" id="inputPassword2"  placeholder="请输入新爱好"></div>
	    <div class="col-xs-4"><button type="submit" class="btn btn-danger">确认修改</button></div>

	  </div>

	  <div class="form-group">
	    <label class="sr-only">密码</label>
	    <p class="form-control-static col-xs-3">密码</p>
	  </div>
	  <div class="form-group">
	    <div class="col-xs-8"><input type="password" class="form-control" id="inputPassword2"  placeholder="请输入当前密码"></div>
	    <div class="col-xs-8"><input type="password" class="form-control" id="inputPassword2"  placeholder="请输入新密码"></div>
	    <div class="col-xs-8"><input type="password" class="form-control" id="inputPassword2"  placeholder="请再次确认密码"></div>
	    <div class="col-xs-4"><button type="submit" class="btn btn-danger">确认修改</button></div>

	  </div>
	</form>
</body>
</html>