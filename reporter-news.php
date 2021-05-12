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
				    <p>新闻管理</p>
				    

				  </div>
				  <div class="panel-footer">
				  	<p class="text-right"><a class="btn btn-info" href="release.php">发布新闻</a></p>
				  	<table class="table table-bordered">
					<thead>
				        <tr>
				          <th>新闻编号</th>
				          <th>新闻标题</th>
				          <th>发布者</th>
				          <th>发布时间</th>
				          <th>标签</th>
				          <th>内容</th>
				          <th>状态</th>
				          <th>审核人</th>
				          <th>配图</th>
				          <th>操作</th>
				        </tr>
				      </thead>
				     <tbody>
				        <tr class="active">
				        	<?php 
				        		include "conn.php";
				        		$sql = "SELECT * FROM t_news ";
								$result = $conn->query($sql);


								if ($result->num_rows > 0) {
								    // 输出数据
								    while($row = $result->fetch_assoc()) {
								    	//查询审核人名字
								    	$sql_editor = "SELECT EDITOR_NAME FROM t_editor where EDITOR_ID=".$row['EDITOR_ID'];
								    	$editor_name = mysqli_fetch_array($conn->query($sql_editor));

								    	$status = $row['STATUS']==0?"审核中":"审核通过";

								        echo "
								          <tr>
								          <th>".$row['NEWS_ID']."</th>
								          <td>".$row['NEWS_TITLE']."</td>
								          <td>".$row['REPORTER_ID']."</td>
								          <td>".$row['RELEASE_TIME']."</td>
								          <td>".$row['TAG']."</td>
								          <td>".$row['NEWS_CONTENT']."</td>
								          <td>".$status."</td>
								          <td>".$editor_name[0]."</td>
								          <td><img src=\"".$row['IMAGE']."\"</td>
								          <td><a class=\"btn btn-warning\" href=\"\">修改</a><a class=\"btn btn-danger\" href=\"delete_news.php?NEWS_ID=".$row['NEWS_ID']."\">删除</a></td>
								          </tr>
								        ";
								    }}
								$conn->close();
				        	 ?>
				          
				        </tr>
				        
				      </tbody>
					</table>
				  </div>
				</div>
    		</div>
    	</div>
	</div>
</body>
</html>