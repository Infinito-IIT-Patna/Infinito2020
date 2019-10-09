<?php

require('./connect.php');

$stmt = $pdo->query("SELECT * FROM announcements ORDER BY Date DESC");
$updates = array();
$const = 0;
 while($row = $stmt->fetch()){?>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
    <div class="single-news-item">
      <div class="img" style="width:100%; height:250px;">
        <img src="<?php echo $row['ImgAddress']?>" alt="Image" style=" width: 100%; height: 100%; " />
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
        <?php if($row['FacebookUrl']) { ?>
         <a href="<?php echo $row['FacebookUrl'];?>" target="_blank"><button class="btn btn-primary">Facebook</button></a>
        <?php }; ?>
        <?php if($row['InstaUrl']) { ?>
         <a href="<?php echo $row['InstaUrl'];?>" target="_blank"><button class="btn btn-primary">Instagram</button></a>
        <?php }; ?>
        </p>
        <p> <?php echo $row['Description']; ?> </p>
      </div>
      <!-- /.post -->
    </div>
    <!-- /.single-news-item -->
  </div>
    <?php
    $const++;
    if($const>=3)
    break;

}
?>

<?php   if($const==0){ ?>
    <div class="theme-title">
    <p>
    <h3>Coming Soon</h3>
    </p>
    </div>
<?php }; ?>
