<?php
session_start();
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gallery</title>
    <?php
    require('./templates/header.php');
    ?>
    <link rel="stylesheet" href="css/gallery.css">
</head>



<body style="background:rgb(243 243 243);">
    <!--
	=============================================
		Theme Header
	==============================================
    -->
    <div class="bac" style="background: #172134; position:fixed; width:100%; top:0px; z-index:100; margin-bottom:100px;">
        <div class="container" style="padding:10px 0">
            <a href="index.php" class="logo float-left tran4s"><img src="images/logo/logo.png" alt="Logo" style="border-radius:100%; height:56px; width:56px;" /></a>

            <!-- ========================= Theme Feature Page Menu ======================= -->
            <nav class="navbar float-right theme-main-menu one-page-menu">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false" >
                        <span class="sr-only">Toggle navigation</span>
                        Menu
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-collapse-1" style="margin-top:8px;">
                    <ul class="nav navbar-nav">
                        <li ><a href="./index.php">Home</a></li>
                        <li><a href="./events.php">Events</a></li>
                        <li><a href="./team.php">Team</a></li>
                        <li class="active"><a href="./gallery.php">Gallery</a></li>
                        <li><a href="./registration.php">Register</a></li>
                        <?php
                                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                                    echo '<li><a href="./profile.php">Profile</a></li>
                                          <li><a href="./logout.php">Logout</a></li>';
                                }
                                else{
                                    echo '
                                    <li><a href="./signIn.php">Sign In</a></li>';
                                }
                        ?>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
            <!-- /.theme-feature-menu -->
        </div>
    </div>

    <!-- /.theme-main-header -->
    <div class="theme-title">
        <h2>Gallery</h2>
    </div>
    <div class="container">
        <script>
            lightbox.option({
                resizeDuration: 400,
                fadeDuration: 100,
                imageFadeDuration: 400,
            })

            //all this ensures that the page becomes unscrollable when the modal is open
            //and becomes scrollable when it is closed
            function lock_body() {
                $('body').css('overflow', 'hidden')
            };

            function unlock_body() {
                $('body').css('overflow', 'auto')
            };

            $('body').ready(() => $('.lightbox, .lightboxOverlay').click(() => unlock_body())) //this can be improved
        </script>
        <div class="gallery">
            <?php
            $directory = "./images/gallery";
            $images = glob($directory . "/*.jpeg");

            foreach ($images as $image) {
                $tall = substr($image, 2, 4) === "tall";
            ?>
                <div class="image <?php if ($tall) {
                                        echo "tall";
                                    } else {
                                        echo "wide";
                                    } ?>" onclick="lock_body()">
                    <a href="<?php echo $image ?>" data-lightbox="some image">
                        <img src="<?php echo $image ?>" alt="">
                    </a>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
   
    <?php
    require('./templates/footer.php')
    ?>

</body>

</html>