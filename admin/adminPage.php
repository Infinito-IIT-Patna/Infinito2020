<?php
require('../connect.php');
if(isset($_POST['submitBtn']))
{
    $title = $_POST['title'];
    $desc = $_POST['description'];
        echo($title);
        echo($desc);
    $sql = "INSERT INTO Announcements (`Title`,`Description`) 
            VALUES ('$title','$desc');";
    $result  = $mysqli->query($sql);
    $state['updatePost'] = "";
    if($result){
      $state['updatePost'] = "Successfully Posted";  
    }
    else{
        $state['updatePost'] = "Not able to post";
    }
}
?>

<?php
require('../templates/header.php');
?>
<body>
    <h1><?php echo $state['updatePost'] ?></h1>
    <h1>Add Updates</h1>
    <form action="adminPage.php" method="POST">
        <label for="title">
            Title
        </label>
        <input type="text" name="title">
        <br>
        <label for="data">
            Description
        </label>
        <input type="text" name="description">
        <br>
        <input type="submit" value="submit" name="submitBtn">
    </form>
</body>
<?php require('../templates/footer.php');
?>