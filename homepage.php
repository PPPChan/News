<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<link rel="stylesheet" href="css/bootstrap.min.css">  
	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<title>个人主页</title>
	<style>
		.img-thumbnail{
			height: 50%;
			width: 50%;
		}
	</style>
</head>
<body>
	<!-- 导航条 -->
	<nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">Brand</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li><a href="index.php">首页 <span class="sr-only">(current)</span></a></li>
	        <li><a href="#">排行榜</a></li>
	        
	      </ul>
	      <form class="navbar-form navbar-left">
	        <div class="form-group">
	          <input type="text" class="form-control" placeholder="Search">
	        </div>
	        <button type="submit" class="btn btn-default">搜索</button>
	      </form>
	      <ul class="nav navbar-nav navbar-right">
	      	<li class="active"><a href="#">个人主页</a></li>
	        <li><a href="login.php?action=logout">注销</a></li>
	        
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	<?
		session_start();
		$nickname = $_SESSION['nickname'];
		if (!isset($_SESSION['nickname'])) {
    		exit("请先登录系统！");
    	}
		include("conn.php");

		$sql = "SELECT * FROM T_USER WHERE NICKNAME = '$nickname'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		
	echo "
	<div class=\"container\">
		<div class=\"jumbotron\">
		  <h1>".$row['NICKNAME']."</h1>
		</div>
		<div class=\"panel panel-danger\">
	      <div class=\"panel-heading\">
	        <h3 class=\"panel-title row\">

	        	<strong class=\"col-xs-10\">个人资料</strong>
	        	<small class=\"text-right col-xs-2\"><a href=\"alteruser.html\" class=\"btn btn-warning\" role=\"button\">修改资料</a></small>
	        </h3>

	      </div>
	      <div class=\"panel-body\">
	      	<strong>用户ID：</strong>
	      	".$row['USER_ID']."
	      </div>
	      <div class=\"panel-body\">
	      	<strong>生日：</strong>
	      	".$row['BIRTHDAY']."
	      </div>
	      <div class=\"panel-body\">
	      	<strong>手机号码：</strong>
	      	".$row['PHONE_NUMBER']."
	      </div>
		</div>
		<div class=\"panel panel-default\">
	      <div class=\"panel-heading\">
	        <h3 class=\"panel-title\"><strong>评论过的新闻</strong></h3>
	      </div>
	      <div class=\"panel-body\">
	      	<div class=\"row\">
			  <div class=\"col-sm-6 col-md-4\">
			    <div class=\"thumbnail\">
			      <img src=\"IMG\92da-kcpxnwv5012457.png\" alt=\"...\">
			      <div class=\"caption\">
			        <h3>Thumbnail label</h3>
			        <p>...</p>
			        <p><a href=\"#\" class=\"btn btn-primary\" role=\"button\">Button</a> <a href=\"#\" class=\"btn btn-default\" role=\"button\">Button</a></p>
			      </div>
			    </div>
			  </div>
			  <div class=\"col-sm-6 col-md-4\">
			    <div class=\"thumbnail\">
			      <img src=\"IMG\92da-kcpxnwv5012457.png\" alt=\"...\">
			      <div class=\"caption\">
			        <h3>Thumbnail label</h3>
			        <p>...</p>
			        <p><a href=\"#\" class=\"btn btn-primary\" role=\"button\">Button</a> <a href=\"#\" class=\"btn btn-default\" role=\"button\">Button</a></p>
			      </div>
			    </div>
			  </div>
			  <div class=\"col-sm-6 col-md-4\">
			    <div class=\"thumbnail\">
			      <img src=\"IMG\92da-kcpxnwv5012457.png\" alt=\"...\">
			      <div class=\"caption\">
			        <h3>Thumbnail label</h3>
			        <p>...</p>
			        <p><a href=\"#\" class=\"btn btn-primary\" role=\"button\">Button</a> <a href=\"#\" class=\"btn btn-default\" role=\"button\">Button</a></p>
			      </div>
			    </div>
			  </div>

	";	
	?>
	</body>
</html>