<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<link rel="stylesheet" href="css/bootstrap.min.css">  
	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/moment-with-locales.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<title>首页</title>
	<style>
		
		a:hover{
		text-decoration:none;
		}
	</style>
</head>
<body>
	<!-- 导航条 -->
	<nav class="navbar navbar-default" style="margin-bottom: 10px;">
	</nav>
	<nav class="navbar navbar-default navbar-fixed-top" style="margin-bottom: 10px;">
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
	        <li class="active"><a href="index.php">首页 <span class="sr-only">(current)</span></a></li>
	        <li><a href="#">热门榜</a></li>
	      </ul>
	      <form class="navbar-form navbar-left">
	        <div class="form-group">
	          <input type="text" class="form-control" placeholder="Search">
	        </div>
	        <button type="submit" class="btn btn-default">搜索</button>
	      </form>
	      <ul class="nav navbar-nav navbar-right">
	      	<?php
	      		session_start();
				$nickname = $_SESSION['nickname'];
				if(isset($_SESSION['nickname'])) {
					echo "
					<li><a href=\"homepage.php\">个人主页</a></li>
	        <li><a href=\"login.php?action=logout\">注销</a></li>";
				}else{
					echo "
					<li class=\"active\"><a href=\"login.html\">登录</a></li>
	        <li><a href=\"reg.html\">注册</a></li>";
				}
	      	?>
	      	
	        
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	<div class="container" >
		<div class="row">
			<div class="col-md-8 col-xs-12 col-sm-12">
				<!-- 16:9 aspect ratio -->
				 <iframe id ="iFrame1"  name ="iFrame1" width ="100%"  onload ="this.height=iFrame1.document.body.scrollHeight"  frameborder ="0"  src ="recommend.php"></iframe>
			</div>
			<div class="col-md-4 col-xs-12 col-sm-12 fixed">
				<div class="panel panel-default">
			  		<div class="panel-heading">
			  			热门榜
					</div>
					<div class="panel-body">
				    	<p><strong><a href="#"><span class="label label-danger">1</span>我是热门我是热门我是热门</a></strong>	</p>
					</div>
				</div>
			</div>	
		</div>
		
	</div>
</body>
<script>

</script>
</html>