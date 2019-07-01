<?php
require('../connect.php');
ini_set('display_errors',1);
// For Posting Updates
$state['updatePost'] = "";
if (isset($_POST['submitBtn'])) {


    $title = $_POST['title'];
    $desc = $_POST['description'];
    $stmt = $pdo->prepare('INSERT INTO Announcements (`Title`,`Description`) VALUES (?,?);');
    $result =  $stmt->execute([$title, $desc]);

    if ($result) {
        $state['updatePost'] = "Successfully Posted";
    } else {
        $state['updatePost'] = "Not able to post";
    }

}
//For Posting Scores
$state['scorePost'] = "";
if (isset($_POST['submitScore'])) {
    $score = $_POST['score1'] . " - " . $_POST['score2'];
    $winner = $_POST['score1'] > $_POST['score2'] ? $_POST['team1'] : $_POST['score1'] == $_POST['score2'] ? "Draw" : $_POST['team2'];
        $stmt = $pdo->prepare('INSERT INTO Scores (`Game`,`Team_1`,`Team_2`,`Score`,`Winner`) VALUES (?,?,?,?,?);');
      
    $result = $stmt->execute([$_POST['game'],$_POST['team1'],$_POST['team2'],$score,$winner]);
    if($result){
        $state['scorePost'] = "Successfully Posted";  
      }
      else{
          $state['scorePost'] = "Not able to post";
      }

      
}

?>

<body>
    <h1><?php echo $state['updatePost'] ?></h1>
    <h1>Add Updates</h1>
    <form action="adminPage.php" method="POST">
        <label for="title">
            Title
        </label>
        <input required type="text" name="title">
        <br>
        <label for="data">
            Description
        </label>
        <input required type="text" name="description">
        <br>
        <input type="submit" value="submit" name="submitBtn">
    </form>
    <form action="" method="POST">
        <h1><?php echo $state['scorePost'] ?></h1>
        <label for="game">Game</label>
        <br>
        <input required type="text" name="game">
        <br>
        <label for="team_1">Team 1</label>
        <br>
        <input required type="text" name="team1">
        <br>
        <label for="team_2">Team 2</label>
        <br>
        <input required type="text" name="team2">
        <br>
        <label for="score">Score</label>
        <br>
        <input required type="number" name="score1">&dash;<input required type="number" name="score2">
        <br>
        <input type="submit" name="submitScore" value="submit">
    </form>
</body>