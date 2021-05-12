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
	<style type="text/css">
		.lead{
			text-overflow: ellipsis;
		    overflow: hidden;
		    
		    display:-webkit-box;
			-webkit-line-clamp: 5;
			-webkit-box-orient:vertical;

		}
	</style>
			  		<title></title>
			  	</head>
			  	<body>
			  	
			  	<div class="panel panel-default">
			  		<div class="panel-heading">
			  			<ul class="nav nav-tabs">
						  <li role="presentation" class="active"><a href="#">推荐</a></li>
						  <li role="presentation"><a href="#">全部新闻</a></li>
						  <li role="presentation"><a href="#">热榜</a></li>
						  	<li class="dropdown">
					          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">按发布时间排序<span class="caret"></span></a>
					          <ul class="dropdown-menu">
					            <li><a href="#">按评论数排序</a></li>
					          </ul>
					        </li>
						  
							
						</ul>
					</div>
					<div class="panel-body">
						<?php
						include "conn.php";
						$sql = "SELECT * FROM T_NEWS WHERE STATUS = 1";
						$result = $conn->query($sql);

						//创建计数器
						$count = 1;
						if ($result->num_rows > 0) {
						    // 输出数据
						    while($row = $result->fetch_assoc()) {
						        //查询记者名字
						        $sql_reporter = "SELECT REPORTER_NAME FROM T_REPORTER WHERE REPORTER_ID = ".$row['REPORTER_ID']."";
						        
						        $reportername = mysqli_fetch_array($conn->query($sql_reporter));
						        //查询评论条数
						        $sql_comment = "SELECT COUNT(*) FROM T_COMMENT WHERE NEWS_ID = ".$row['NEWS_ID']."";
						        $commentnum = mysqli_fetch_array($conn->query($sql_comment)); 
						        echo "
						        <div class=\"panel panel-info\">
							<div class=\"panel-heading\"><a href=\"#\"><strong>".$row['NEWS_TITLE']."</strong></a></div>
							<div class=\"panel-body\">
								<div class=\"row\">
						    		<div class=\"col-md-4 col-sm-4 col-xs-4\">
						    			<a href=\"#\" class=\"thumbnail col-md-4\"><img src=\"".$row['IMAGE']."\"></a>
						    		</div>
						    		<div class=\"col-md-8 col-sm-8 col-xs-8\">
						    			<a href=\"detail.php?NEWS_ID=".$row['NEWS_ID']."\"><p class=\"lead\">".$row['NEWS_CONTENT']."</p></a>
										
											<span class=\"label label-danger col-xs-3\">".$commentnum[0]."条评论</span>
							    			<span class=\"label label-info col-xs-6 col-xs-offset-3\">".$row['RELEASE_TIME']."&nbsp".$reportername[0]."</span>
							    			
										
						    		</div>
						    	</div>
					    	  	

							</div>
						</div>";
					}}
					$conn->close();
						?>
						
						<!-- <div class="panel panel-info">
							<div class="panel-heading"><a href="#"><strong>title</strong></a></div>
							<div class="panel-body">
								<div class="row">
						    		<div class="col-md-4 col-sm-4 col-xs-4">
						    			<a href="#" class="thumbnail col-md-4"><img src="IMG\92da-kcpxnwv5012457.png"></a>
						    		</div>
						    		<div class="col-md-8 col-sm-8 col-xs-8">
						    			<a href="#"><p class="lead">Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.

Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla.

Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget metus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p></a>
						    		</div>
						    	</div>
							</div>
						</div>
						<div class="panel panel-info">
							<div class="panel-heading"><a href="#"><strong>title</strong></a></div>
							<div class="panel-body">
								<div class="row">
						    		<div class="col-md-4 col-sm-4 col-xs-4">
						    			<a href="#" class="thumbnail col-md-4"><img src="IMG\92da-kcpxnwv5012457.png"></a>
						    		</div>
						    		<div class="col-md-8 col-sm-8 col-xs-8">
						    			<a href="#"><p class="lead">Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.

Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla.

Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget metus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p></a>
						    		</div>
						    	</div>
							</div>
						</div> -->
				    	
					</div>
				</div>

			  	</body>
</html>