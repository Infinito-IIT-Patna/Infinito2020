<?php
ini_set('display_errors',1);
    $status['registerParticipant'] = "";
if(isset($_POST['subData'])){
    require('./connect.php');
    $stmt = $pdo->prepare('INSERT INTO Participants (`Name`,`Email`,`College`,`Sports`) VALUES (?,?,?,?)');
    $res = $stmt->execute([$name,$email,$college,$sports]);
    if($res){
        $status['registerParticipant'] = "Registration Done successfully";
    }
    else {
        $status['registerParticipant'] = 'Registration failed';
    }
    echo $name;
    echo $college;
    echo $sports;
}
?>
<h1><?php echo $status['registerParticipant'] ?></h1>
<form action="" method="post">
<label for="name">Name</label>
<input type="text" name="Name">
<label for="email">Email</label>
<input type="email" name="Email">
<label for="college">College</label>
<input type="text" name="College">
<label for="Sports">Sports</label>
<input type="text" name="Sports">
<input type="submit" name="subData" value="submit">
</form>