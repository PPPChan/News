			  	<!DOCTYPE html>
			  	<html>
			  	<head>
			  		<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/moment-with-locales.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="css/bootstrap.min.css">  
			  		<title></title>
			  	</head>
			  	<body>
			  	
			  	<div class="panel panel-default">
			  		<div class="panel-heading">
			  			<button type="submit" class="btn btn-default" aria-label="Left Align" onclick="javascript:history.back(-1)">
  							<span class="glyphicon glyphicon-arrow-left" aria-hidden="true">&nbsp返回</span>
						</button>
					</div>
					<div class="panel-body">
						<?php 
						//查询新闻列表
						include "conn.php";
						session_start();
						if ($_GET['NEWS_ID']) {
							# code...
							// echo "111";
							$_SESSION['NEWS_ID'] = $_GET['NEWS_ID'];
							// echo $_SESSION['NEWS_ID'];
						}

						// $NEWS_ID = $_GET['NEWS_ID'];
						// $_SESSION['NEWS_ID'] = $NEWS_ID;
						$sql = "SELECT * FROM T_NEWS WHERE NEWS_ID = ".$_SESSION['NEWS_ID'];
						$row = mysqli_fetch_array($conn->query($sql));
						//查询记者名
						$sql_reporter = "SELECT REPORTER_NAME FROM T_REPORTER WHERE REPORTER_ID = ".$row['REPORTER_ID']."";
						$reportername = mysqli_fetch_array($conn->query($sql_reporter));
						echo "
						<h3 class=\"text-center\">".$row['NEWS_TITLE']."</h3>
						<p class=\"text-center\"><small>".$row['RELEASE_TIME']."&nbsp&nbsp&nbsp".$reportername[0]."</small></p>
						<img src=\"".$row['IMAGE']."\" alt=\"...\" class=\"img-thumbnail\">
						<h3><br></h3>
						<p class=\"text-left\">".$row['NEWS_CONTENT']."</p>
					</div>
				</div>";
						 ?>
				<div class="page-header">
				  <h3>留言板</h3>
				</div>
				<div class="panel panel-default">
				  <div class="panel-heading">
				    	<form class="form-inline" method="get" action="remark.php">
				    		<div class="input-group">
						      <span class="input-group-addon" id="basic-addon1">
						      <?php
						      session_start();
						      echo $_SESSION['nickname'];
						       ?>
						      </span>
						      <input id="comment" name="comment" type="text" class="form-control" placeholder="我有话要说...">
						      <span class="input-group-btn">
						        <button name="submit" class="btn btn-danger" type="submit">发布</button>
						      </span>
						    </div>
						</form>
				    </div>
				    <!-- 评论区 -->

				    <div class="panel-body">
				    	<?php 

				    	$sql_comment = "SELECT * FROM T_COMMENT WHERE NEWS_ID = ".$_SESSION['NEWS_ID'];   
						$comment_result = $conn->query($sql_comment);
						
						if ($comment_result->num_rows > 0) {
							

						    // 输出数据
						    while($comment_row = $comment_result->fetch_assoc()) {
						    	//查询用户名字
						        $sql_user = "SELECT NICKNAME FROM T_USER WHERE USER_ID = ".$comment_row['USER_ID'];
						        
						        $username = mysqli_fetch_array($conn->query($sql_user));
						    	echo "
						    	<div class=\"panel panel-default\">
				    			<div class=\"panel-heading\">
				    				<span class=\"label label-danger\">".$username[0]."
				    				</span>
				    				<small>".$comment_row['RELEASE_DATE']."</small>
				    			</div>
				    			<div class=\"panel-body\">
				    				".$comment_row['COMMENT_CONTENT']."
				    			</div>
				    		</div>
				    		


						    	";}}else {
						    		echo "<p class=\"lead text-center\">该新闻暂时还没有人评论哦，快来抢占沙发吧！</p>";
						    	}

				    	 ?>
				    		<!-- <div class="panel panel-default">
				    			<div class="panel-heading">
				    				<span class="label label-danger">小小怕梦
				    				</span>
				    				<small>123121</small>
				    			</div>
				    			<div class="panel-body">
				    				我是评论我是评论我是评论我是评论我是评论我是评论我是评论
				    			</div>
				    		</div> -->	
				    </div>
				    
				</div>

				</div>
			  	</body>
			  	</html>