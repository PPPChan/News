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
		

	</style>
	<title>manage</title>
</head>
<body>
	<div class="container-fluid">
    	<div class="row">
    		<div class="col-lg-2">
    			<div class="panel panel-default">
				  <div class="panel-heading">新闻发布管理系统（主编）</div>
				</div>
    			<div class="btn-group-vertical" role="group" aria-label="..." style="width: 100%;">
    				<a href="editor-manage.php" type="button" class="btn btn-default">用户管理</a>
    				<a type="button" class="btn btn-active">记者管理</a>
    				<a type="button" class="btn btn-default">新闻管理</a>
    				<a type="button" class="btn btn-default">评论管理</a>
    			</div>
    			
    		</div>
    		<div class="col-lg-10">
    			<div class="panel panel-default">
				  <div class="panel-body">
				    记者管理
				  </div>
				  <div class="panel-footer">
				  	<table class="table table-bordered">
					<thead>
				        <tr>
				          <th>记者号</th>
				          <th>名字</th>
				          <th>密码</th>
				          <th>生日</th>
				          <th>性别</th>
				          <th>证件号</th>
				          <th>地址</th>
				          <th>手机号</th>
				          <th>邮箱</th>
				          <th>介绍</th>
				          <th>操作</th>
				        </tr>
				      </thead>
				     <tbody>
				        <tr class="active">
				        	<?php 
				        		include "conn.php";
				        		$sql = "SELECT * FROM t_reporter ";
								$result = $conn->query($sql);
								if ($result->num_rows > 0) {
								    // 输出数据
								    while($row = $result->fetch_assoc()) {
								        echo "
								          <tr>
								          <th>".$row['REPORTER_ID']."</th>
								          <td>".$row['REPORTER_NAME']."</td>
								          <td>".$row['REPORTER_PASSWORD']."</td>
								          <td>".$row['GENDER']."</td>
								          <td>".$row['ID_NUMBER']."</td>
								          <td>".$row['ADDRESS']."</td>
								          <td>".$row['PHONE_NUMBER']."</td>
								          <td>".$row['ID_NUMBER']."</td>
								          <td>".$row['EMAIL']."</td>
								          <td>".$row['INTRODUCE']."</td>
								          
								          <td><a href=\"\">删除</a></td>
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