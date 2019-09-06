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
          >Posted by <span class="p-color">admin </span><?php echo $row['Date'] ?></a
        >
        <p>
         <?php echo $row['Description'];?>
        </p>
        <div>
          <a href="https://www.facebook.com/InfinitoIITPatna/" class="tran3s fa fa-fw fa-facebook"></a>&nbsp;
          <a href="https://www.instagram.com/infinito_iitp/" class="tran3s"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        </div>
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
