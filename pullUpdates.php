<?php

require('./connect.php');

$stmt = $pdo->query("SELECT * FROM Announcements ORDER BY Date DESC");
$updates = array();
$const = 0;
 while($row = $stmt->fetch()){?>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
    <div class="single-news-item">
      <div class="img">
        <img src="images/blog/1.jpg" alt="Image" />
        <a href="blog-details.html" class="opacity tran4s"
          ><i class="fa fa-link" aria-hidden="true"></i
        ></a>
      </div>
      <!-- /.img -->

      <div class="post">
        <h6>
          <a href="blog-details.html" class="tran3s"
            ><?php echo $row['Title'] ?></a
          >
        </h6>
        <a href="blog-details.html"
          >Posted by <span class="p-color">admin </span><?php echo $row['Date'] ?></a
        >
        <p>
         <?php echo $row['Description'];?>
          <a href="blog-details.html" class="tran3s">Read More</a>
        </p>
      </div>
      <!-- /.post -->
    </div>
    <!-- /.single-news-item -->
  </div>
    <?php
    $const++;
    if($const>=3)
    break;

}?>
