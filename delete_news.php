<?php 
	session_start();
	if(!isset($_GET['NEWS_ID'])){
        exit('非法访问!');
    }
    include("conn.php");
 
    $sql_deletenews = "DELETE FROM t_news WHERE NEWS_ID=".$_GET['NEWS_ID'];
    if (mysqli_query($conn,$sql_deletenews)) {
    	# code...
       
        echo "<script> alert('删除成功！'); </script>";
        echo "<meta http-equiv='Refresh' content='0;URL=reporter.php'>";
        exit;
    	
    }else{
    	echo "<script> alert('删除失败！'); </script>";
        echo "<meta http-equiv='Refresh' content='0;URL=reporter.php'>";
        exit;
    }
    // mysqli_query($conn,$sql);
 ?>