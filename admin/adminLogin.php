
  
<?php
// Enabling Database Connection
require("../connect.php");
$USERNAME  = "admin";
$PASSWORD = "admin";
$username = $password = '';
$errors = array('username' => '', 'noData' => '');
// For checking if the essentials provided by a user for login is correct
if (isset($_POST["submit-button"])) {
    $username=  trim($_POST['username']);
    $password = $_POST['password'];
        // Making SQL query to the database
        // $sql = "SELECT password FROM adminPage WHERE name = '" . $username . " '";
        // $res = $db2->query($sql);
        // // Checking if any row exists with given usernameID
        // if ($res->num_rows > 0) {
        //     $row = mysqli_fetch_assoc($res);
        //         // Hashing the password
        //        $password = sha1($_POST["password"]);
        //         // Allowing login and redirecting to main page
        //         if ($row['password'] == $password) {
        //             session_start();
        //             $_SESSION["username"] = $username;
        //             header("Location: ./index.html"); //header needs to be changed
        //         } else {
        //             $errors['noData']="Invalid id/password match";
        //         }
        // } else {
        //     $errors['noData'] = "No record found";
        // }
        if($username  = $USERNAME && $password = $PASSWORD){
            session_start();
                     $_SESSION["username"] = $username;
                   header("Location: ./adminPage.php"); //header needs to be changed
        }
        else{
            $errors['noData']="Invalid id/password match";
        }
    }
?>
<?php require('../templates/header.php');?>
<div class="container shadow p-5 mb-5">
    <form action="" method="POST">
        <div class="form-group">
            <label for="identification">
                Username
            </label>
            <input type="text" class="form-control" name="username" placeholder="Enter username address" value="<?php echo htmlspecialchars($username) ?>" required />
            <div class="text-danger"><?php echo $errors['username']; ?></div>
        </div>
        <div class="form-group">
            <label for="password">
                Password :
            </label>
            <input type="password" class="form-control" name="password" placeholder="Enter Password" required />
        </div>
        <div class="form-group">
            <input type="submit" name="submit-button" class="btn btn-primary" />
            <div class="text-danger"><?php echo $errors['noData']; ?></div>
        </div>

    </form>
    
</div>

<?php
require('../templates/footer.php');?>