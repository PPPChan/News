<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	
	<link rel="stylesheet" href="css/bootstrap.min.css">  
	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<style type="text/css">
		
		img {max-width:180px;myimg:expression_r(onload=function(){this.style.width=(this.offsetWidth > 180)?"180px":"auto"});}
	</style>
	<title>manage</title>
</head>
<body>
	<div class="container-fluid">
    	<div class="row">
    		<div class="col-lg-2">
    			<?php 

    			session_start();
    			
				if(!isset($_SESSION['REPORTER_ID'])){
				    exit('非法访问!');
				}
				?>
    			<div class="panel panel-info ">
				  <div class="panel-heading">新闻发布管理系统（记者）</div>
				</div>
				<p class="text-center">欢迎你！
				<?php 
				echo $_SESSION['REPORTER_NAME'];
				?>
				记者！</p>
    			<ul class="nav nav-pills  nav-stacked ">
				  <li role="presentation" class="active"><a href="reporter-news">新闻管理</a></li>
				  <li role="presentation"><a href="#">评论管理</a></li>
				  <li role="presentation"><a href="reporter-login.php?action=logout">退出</a></li>

				</ul>
				

    			
    		</div>
    		<div class="col-lg-10">
    			<div class="panel panel-default">
				  <div class="panel-body">
				    <p>发布新闻</p>
				  </div>
				  <div class="panel-footer">
				  	<form method="post" action="releaseAction.php" enctype="multipart/form-data">
					  	<div class="form-group">
						  <label class="control-label" >新闻标题</label>
						  <input type="text" class="form-control" id="title" aria-describedby="helpBlock2" name="title">
						 
						</div>
						<div class="form-group ">
						  <label class="control-label" >标签</label>
						  <input type="text" class="form-control" id="tag" name="tag">
						</div>
						<div class="form-group">
						  <label for="file">配图</label>
						  <input type="file" name="file" id="file">
						</div>
						<div class="form-group ">
						  <label class="control-label" >正文</label>
						  <textarea class="form-control" name="content" rows="10" id="content"></textarea>
						</div>
						<button type="submit" name="submit" class="btn btn-default">发布</button>
					</form>
					

				  </div>


				</div>
    		</div>
    	</div>
	</div>
</body>
</html>