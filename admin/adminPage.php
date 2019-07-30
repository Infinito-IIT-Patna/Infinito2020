<?php
require('../connect.php');
ini_set('display_errors',1);
// For Posting Updates
$state['updatePost'] = "";
$state['athleticsPost'] = "";
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
      
    $result1 = $stmt->execute([$_POST['game'],$_POST['team1'],$_POST['team2'],$score,$winner]);
    if($result1){
        $state['scorePost'] = "Successfully Posted";  
      }
      else{
          $state['scorePost'] = "Not able to post";
      }

      
}
if(isset($_POST['submitAthleticsPos'])) {
    $stmt = $pdo->prepare('INSERT INTO Athletics (`race`,`first`,`second`,`third`) VALUES (?,?,?,?);');
    $result2 = $stmt->execute([$_POST['race'],$_POST['first'],$_POST['second'],$_POST['third']]);
    if($result2){
        $state['athleticsPost'] = "Successfully Posted";
    }
    else {
        $state['athleticsPost'] = "Not able to post";
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
    <form action="adminPage.php" method="POST">
        <h1><?php echo $state['athleticsPost']?></h1>
        <label for="race">Enter Race name</label>
        <br>
        <input type="text" required name="race">
        <br>
        <label for="first">Enter the winner</label>
        <br> 
        <input type="text" required name="first">
        <br>
        <label for="second">Enter  Runner First Runner up</label>
        <br>
        <input type="text" required name="second">
        <br>
        <label for="third">Enter Second Runner up</label>
        <br>
        <input type="text" name="third" required>
        <br>
        <input type="submit" name="submitAthleticsPos" value="submit">

    </form>
</body>