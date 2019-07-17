<?php 
require('./connect.php');
ini_set('display_errors',1);
$stmt = $pdo->query("SELECT * FROM Scores ORDER BY Time DESC");
$const = 0;
while($data = $stmt->fetch()){
    ?>
    <div class="single-score">
    <h4><?php echo  $data['Game'] ?></h4>
    <div>
    <span><?php echo   $data['Team_1']?> &dash;  <?php echo   $data['Team_2']?></span>
    </div>
    <div>
        <span><?php echo   $data['Score']?></span>
    </div>
    </div>
<?php
$const++;
if($const>=6)
break;
}
