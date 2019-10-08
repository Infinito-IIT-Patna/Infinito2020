<?php
require('../connect.php');
ini_set('display_errors',1);
// For Posting Updates
$state['updatePost'] = "";
$state['athleticsPost'] = "";
session_start();
if(isset($_POST['logout'])){
    session_unset();
    session_destroy();
    session_abort();
    header("Location: ./adminLogin.php");
}
if (isset($_POST['submitBtn'])) {

    $title = $_POST['title'];
    $desc = $_POST['description'];
    $stmt = $pdo->prepare('INSERT INTO announcements (`Title`,`Description`) VALUES (?,?);');
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
$status['athleticsPost'] = "";
if(isset($_POST['submitAthleticsPos'])) {
    $stmt = $pdo->prepare('INSERT INTO Athletics (`RaceName`,`Winner`,`FirstRunnerUp`,`SecondRunnerUp`) VALUES (?,?,?,?);');
    $result2 = $stmt->execute([$_POST['race'],$_POST['first'],$_POST['second'],$_POST['third']]);
    if($result2){
        $state['athleticsPost'] = "Successfully Posted";
    }
    else {
        $state['athleticsPost'] = "Not able to post";
    }
} 
?>
<?php
if(isset($_SESSION['isVerified'])){?>
<body>
    <h1><?php $state['updatePost'] ?></h1>
    <h1>Update Post</h1>
    <form action="" method="POST">
        <label for="Title">Title</label>
        <br>
        <input required type="text" name="title">
        <br>
        <label for="Description">Description</label>
        <br>
        <input required type="text" name="description">
        <br>
        <input required type="submit" name="submitBtn">  
    </form>

    <h1><?php $state['scorePost'] ?></h1>
    <h1>Update Score</h1>
    <form action="" method="POST">
        <label for="Game"> Game</label>
        <br>
        <input required type="text" name="game"> 
        <br>
        <label for="Team1">Team1</label>
        <br>
        <input required type="text" name="team1">
        <br>
        <label for="Team2">Team2</label>
        <br>
        <input required type="text" name="team2">
        <br>
        <label for="Score1">Score1</label>
        <br>
        <input required type="number" name="score1">
        <br>
        <label for="Score2">Score2</label>
        <br>
        <input required type="number" name="score2">
        <br>
        <input required type="submit" name="submitScore">  
    </form>
    <h1><?php $status['athleticsPost']?></h1>
    <h1>Athletics</h1>
    <form action="" method="POST">
        <label for="Game">Game</label>
        <br>
        <input required type="text" name="game">
        <br>
        <label for="winner">Winner</label>
        <br>
        <input required type="text" name="winner">
        <br>
        <label for="First Runner Up">First Runner Up</label>
        <br>
        <input required type="text" name="second">
        <br>
        <label for="Second Runner Up">Second Runner Up</label>
        <br>
        <input required type="text" name="third">
        <br>
        <input required type="submit" name="submitAthleticsPos">  
    </form>
    <form action="" method="POST">
        <input type="submit" name="logout" value="Logout">
    </form>

</body>
<?php 
session_abort();
session_unset();
}
else{
    
    echo "Login first";
}
