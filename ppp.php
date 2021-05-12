<?php
    // 上传图片功能
// 				$title = $_POST['title'];
//                 $tag = $_POST['tag'];
//                 $content = $_POST['content'];
//                 $image = $_POST['image'];
               
//     $date =  date('Y-m-d h:i:s', time());
             
// $t1 = "1";
// $t2 = (int)2;
//                 include("conn.php");

//     $sql = "INSERT INTO T_NEWS(NEWS_TITLE,REPORTER_ID,RELEASE_TIME,TAG,NEWS_CONTENT,IMAGE)VALUES('$title','$t2','$date','$tag','$content','$tag')";
//                 if(mysqli_query($conn,$sql)){
//                     // echo "<script> alert('发布成功！请等待审核通过！'); </script>";
//                     // echo "<meta http-equiv='Refresh' content='0;URL=reporter-news.php'>";
//                 } else {
//                     // echo "<script> alert('发布失败！'); </script>";
//                     // echo "<meta http-equiv='Refresh' content='0;URL=release.php'>";
//                     echo mysqli_error($conn);
//                 }
                $date =  date('Y-m-d h:i:s', time());
                echo $date;

?>