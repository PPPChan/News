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
    				<a type="button" class="btn btn-active">用户管理</a>
    				<a href="reporter-manage.php" type="button" class="btn btn-default">记者管理</a>
    				<a type="button" class="btn btn-default">新闻管理</a>
    				<a type="button" class="btn btn-default">评论管理</a>
    			</div>
    			
    		</div>
    		<div class="col-lg-10">
    			<div class="panel panel-default">
				  <div class="panel-body">
				    用户管理
				  </div>
				  <div class="panel-footer">
				  	<table class="table table-bordered">
					<thead>
				        <tr>
				          <th>用户号</th>
				          <th>昵称</th>
				          <th>生日</th>
				          <th>爱好</th>
				          <th>手机号码</th>
				          <th>操作</th>
				        </tr>
				      </thead>
				     <tbody>
				        <tr class="active">
				        	<?php 
				        		include "conn.php";
				        		$sql = "SELECT * FROM t_user ";
								$result = $conn->query($sql);
								if ($result->num_rows > 0) {
								    // 输出数据
								    while($row = $result->fetch_assoc()) {
								        echo "
								          <tr>
								          <th>".$row['USER_ID']."</th>
								          <td>".$row['NICKNAME']."</td>
								          <td>".$row['BIRTHDAY']."</td>
								          <td>".$row['HOBBY']."</td>
								          <td>".$row['PHONE_NUMBER']."</td>
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