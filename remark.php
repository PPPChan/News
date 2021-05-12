<?php 
	session_start();
	if(!isset($_GET['submit'])){
        exit('非法访问!');
    }
    $comment = $_GET['comment'];
    $userid = $_SESSION['user_id'];
    $newsid = $_SESSION['NEWS_ID'];
    include("conn.php");
    $release_date = date('Y-m-d h:i:s', time()); // 2018-10-3 15:57:05


    

    // echo $userid;

    // echo $newsid;
    // echo $comment;
    // echo $release_date;
    $sql = "INSERT INTO T_COMMENT(NEWS_ID,USER_ID,COMMENT_CONTENT,RELEASE_DATE) VALUES('$newsid','$userid','$comment','$release_date')";
    if (mysqli_query($conn,$sql)) {
    	# code...
       
        echo "<script> alert('评论成功！'); </script>";
        echo "<meta http-equiv='Refresh' content='0;URL=detail.php'>";
        exit;
    	
    }else{
    	echo "<script> alert('评论失败！'); </script>";
        echo "<meta http-equiv='Refresh' content='0;URL=detail.php'>";
        exit;
    }
    // mysqli_query($conn,$sql);
 ?>