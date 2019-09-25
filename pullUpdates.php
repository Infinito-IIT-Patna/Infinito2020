<?php

require('./connect.php');

$stmt = $pdo->query("SELECT * FROM Announcements ORDER BY Date DESC");
$updates = array();
$const = 0;
 while($row = $stmt->fetch()){?>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
    <div class="single-news-item">
      <div class="img">
        <img src="<?php echo $row['ImgAddress']?>" alt="Image" />
        <!-- <div class="opacity tran4s"></div> -->
      </div>
      <!-- /.img -->

      <div class="post">
        <h6>
          <a
            ><?php echo $row['Title'] ?></a
          >
        </h6>
        <a 
          >Posted<span class="p-color"> by admin </span><?php echo $row['Date'] ?></a
        >
        <p>
         <?php echo $row['Description'];?>
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
