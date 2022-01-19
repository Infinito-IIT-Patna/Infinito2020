<?php
session_start();
include "connect.php";
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $infid = $_SESSION['infid'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Infinito 2k21</title>
    <?php
    require('./templates/header.php');
    ?>
</head>

<body>
    <div class="main-page-wrapper">
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
                        <li><a href="./index.php">Home</a></li>
                        <li class="active"><a href="./events.php">Events</a></li>
                        <li><a href="./team.php">Team</a></li>
                        <li><a href="./gallery.php">Gallery</a></li>
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
        
        

        <!--
		=====================================================
			events Section
		=====================================================
		-->
        <div id="events-section" style="background:rgb(243, 243, 243)">
            <div class="container">
                <div class="theme-title">
                    <h2>EVENTS</h2>
                    
                </div>
                <!-- /.theme-title -->

                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-events-content">
                            <div class="icon-heading tran3s event-heading">
                                <div class="icon tran3s">
                                    <i class="fas fa-chess-knight" aria-hidden="true"></i>
                                </div>
                                <h6><a href="#" class="tran3s">Chess Tournament</a></h6>
                            </div>
                            <p>
                                “Play the opening like a book, the middlegame like a magician, and the endgame like a machine.” <br>– Rudolph Spielmann


                            </p>
                            <p>&nbsp;</p>
                            <div class="tp-caption">
                                <a id="modal-btn--1" class="project-button hvr-bounce-to-right">Register</a>
                                <a id="modal-btn--1" href="https://drive.google.com/file/d/1iWYbBkCWc-DQyNbE9atzdbtsI_mgQ9Hj/view?usp=drivesdk" class="project-button hvr-bounce-to-right" target="blank">Payment</a>
                            </div>
                            <div id="my-modal--1" class="modal">
                                <div class="modal-content" id="im--1">
                                    <div class="col-lg-6 col-md-6 modal-header">
                                        <span class="close-btn" id="close-btn--1">&times;</span>
                                        <h2>Chess Tournament Registration</h2>

                                        <div class="btn-container">
                                            <a href="https://forms.gle/TudK8KqmX7bheb9q7" target="blank">IITP</a>
                                            <a href="https://forms.gle/k6QL8A6Xh1Cz4r1W8" target="blank">Non-IITP</a>
                                            <a href="./admin/Chess__Rulebook__Infinito.pdf" target="blank">Rulebook</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 modal-body">

                                        <span class="events-quote">
                                            “Play the opening like a book, the middlegame like a magician, and the endgame like a machine.” – Rudolph Spielmann
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.single-events-content -->
                    </div>
                    <!-- /.col-lg -->

                    <div class="col-lg-4">
                        <div class="single-events-content">
                            <div class="icon-heading tran3s">
                                <div class="icon tran3s">
                                    <i class="fas fa-gamepad" aria-hidden="true"></i>
                                </div>
                                <h6><a href="#" class="tran3s">CS GO Tournament</a></h6>
                            </div>
                            <p>
                                "Watch out. These boys have got a bit of an arsenal and they don't mind using it!"
                            </p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <div class="tp-caption">
                                <a id="modal-btn--2" class="project-button hvr-bounce-to-right">Register</a>
                                <a id="modal-btn--1" href="https://drive.google.com/file/d/1iWYbBkCWc-DQyNbE9atzdbtsI_mgQ9Hj/view?usp=drivesdk" target="blank" class="project-button hvr-bounce-to-right">Payment</a>
                            </div>

                            <div id="my-modal--2" class="modal">
                                <div class="modal-content" id="im--2">
                                    <div class="col-lg-6 col-md-6 modal-header">
                                        <span class="close-btn" id="close-btn--2">&times;</span>

                                        <h2>CS GO Tournament Registrartion</h2>

                                        <div class="btn-container">
                                            <a href="https://forms.gle/hRMqCo2uaYw4Nj3a7" target="blank">IITP students</a>
                                            <a href="https://forms.gle/oywV296uf8LBwk9U7" target="blank">Non-IITP students</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 modal-body">
                                        <span class="events-quote">
                                            "Watch out. These boys have got a bit of an arsenal and they don't mind using it!"
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.single-events-content -->
                    </div>
                    <!-- /.col-lg -->

                    <div class="col-lg-4">
                        <div class="single-events-content">
                            <div class="icon-heading tran3s">
                                <div class="icon tran3s">
                                    <i class="fas fa-gamepad" aria-hidden="true"></i>
                                </div>
                                <h6><a href="#" class="tran3s">COD MOBILE TOURNAMENT</a></h6>
                            </div>
                            <p>
                                "We must be prepared to make heroic sacrifices for the cause of peace that we make ungrudgingly for the cause of war. There is no task that is more important or closer to my heart."
                                — Albert Einstein
                            </p>
                            <div class="tp-caption">
                                <a id="modal-btn--3" class="modal-btn project-button hvr-bounce-to-right button">Register</a>
                                <a id="modal-btn--1" href="https://drive.google.com/file/d/1iWYbBkCWc-DQyNbE9atzdbtsI_mgQ9Hj/view?usp=drivesdk" class="project-button hvr-bounce-to-right" target="blank">Payment</a>
                            </div>


                            <div id="my-modal--3" class="modal">
                                <div class="modal-content" id="im--3">
                                    <div class="col-lg-6 col-md-6 modal-header">
                                        <span class="close-btn" id="close-btn--3">&times;</span>

                                        <h2>Registration</h2>

                                        <div class="btn-container">
                                            <a href="https://forms.gle/azGwFjYtNCWFfVM87" target="blank">IITP(SOLO)</a>
                                            <a href="https://forms.gle/4NjdTjLLrHuTp4VF6" target="blank">IITP(SQUAD)</a>
                                            <a href="https://forms.gle/fAyFiCGBvxi9s4Rp7" target="blank">NonIITP(SOLO)</a>
                                            <a href="https://forms.gle/gnUGTZGeYJygyTyi7" target="blank">NonIITP(SQUAD)</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 modal-body">
                                        <span class="events-quote">
                                            "We must be prepared to make heroic sacrifices for the cause of peace that we make ungrudgingly for the cause of war. There is no task that is more important or closer to my heart."
                                            — Albert Einstein
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.single-events-content -->
                    </div>
                    <!-- /.col-lg -->
                    <div class="col-lg-4">
                        <div class="single-events-content">
                            <div class="icon-heading tran3s">
                                <div class="icon tran3s">
                                    <i class="fas fa-gamepad" aria-hidden="true"></i>
                                </div>
                                <h6><a href="#" class="tran3s">Free Fire</a></h6>
                            </div>
                            <p>"Keep Calm And Have A #_Booyah."</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <div class="tp-caption">
                                <a id="modal-btn--4" class="project-button hvr-bounce-to-right">Register</a>
                                <a id="modal-btn--1" href="https://drive.google.com/file/d/1iWYbBkCWc-DQyNbE9atzdbtsI_mgQ9Hj/view?usp=drivesdk" target="blank" class="project-button hvr-bounce-to-right">Payment</a>
                            </div>
                            <div id="my-modal--4" class="modal">
                                <div class="modal-content" id="im--4">
                                    <div class="col-lg-6 col-md-6 modal-header">
                                        <span class="close-btn" id="close-btn--4">&times;</span>

                                        <h2>Registration</h2>

                                        <div class="btn-container">
                                            <a href="https://docs.google.com/forms/d/e/1FAIpQLScEYbiokyBdkVadkWVzUmFeLlJKZkhQnnvRWunemVnScd2lXA/viewform?usp=sf_link" target="blank">IITP(SOLO)</a>
                                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSfvhXxUEZNInXg8LD_YgZeKPwIAmh6TofN6kPgGLdPDjkIBfQ/viewform?usp=sf_link" target="blank">IITP(SQUAD)</a>
                                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSc4DJuD_Kv3tVA3CXF-jf0r88knY8Vq9O76orb1pNguvZT4NQ/viewform?usp=sf_link" target="blank">NonIITP(SOLO)</a>
                                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSfqHCyOe5IIhr3ql6NYJcVh-XS2HY75ky6IMr7uP4A13UDlFQ/viewform?usp=sf_link" target="blank">NonIITP(SQUAD)</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 modal-body">
                                        <span class="events-quote">
                                            "Keep Calm And Have A #_Booyah."
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.single-events-content -->
                    </div>
                    <!-- /.col-lg -->

                    <div class="col-lg-4">
                        <div class="single-events-content">
                            <div class="icon-heading tran3s">
                                <div class="icon tran3s">
                                    <i class="fas fa-volleyball-ball" aria-hidden="true"></i>
                                </div>
                                <h6><a href="#" class="tran3s">Clash Of Clans</a></h6>
                            </div>
                            <p>"Eat,Sleep,Clash,Repeat"</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <div class="tp-caption">
                                <a id="modal-btn--5" class="project-button hvr-bounce-to-right">Register</a>
                                <a id="modal-btn--1" href="https://drive.google.com/file/d/1iWYbBkCWc-DQyNbE9atzdbtsI_mgQ9Hj/view?usp=drivesdk" target="blank" class="project-button hvr-bounce-to-right">Payment</a>

                            </div>
                            <div id="my-modal--5" class="modal">
                                <div class="modal-content" id="im--5">
                                    <div class="col-lg-6 col-md-6 modal-header">
                                        <span class="close-btn" id="close-btn--5">&times;</span>

                                        <h2>Clash Of Clans Registrartion</h2>

                                        <div class="btn-container">
                                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSdunv1gmZUCaj4ewbkB0VSYQFF35BhE0mTRkPsyWzftM431nw/viewform?usp=sf_link" target="blank">IITP Students</a>
                                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSeXhF63T5cYrlF1WB_2UyO42aqlgK04MEoBgsBx1Sh1_M_irQ/viewform?usp=sf_link" target="blank">Non-IITP Students</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 modal-body">
                                        <span class="events-quote">
                                            "Eat,Sleep,Clash,Repeat"
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.single-events-content -->
                    </div>
                    <!-- /.col-lg -->

                    <div class="col-lg-4">
                        <div class="single-events-content">
                            <div class="icon-heading tran3s">
                                <div class="icon tran3s">
                                    <i class="fas fa-running" aria-hidden="true"></i>
                                </div>
                                <h6><a href="#" class="tran3s">Infinito Fitness challenge</a></h6>
                            </div>
                            <p>Progress takes place outside comfort zone</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <div class="tp-caption">
                                <a id="modal-btn--6" class="project-button hvr-bounce-to-right">Register</a>
                                <a id="modal-btn--1" href="https://drive.google.com/file/d/1iWYbBkCWc-DQyNbE9atzdbtsI_mgQ9Hj/view?usp=drivesdk" target="blank" class="project-button hvr-bounce-to-right">Payment</a>

                            </div>
                            <div id="my-modal--6" class="modal">
                                <div class="modal-content" id="im--6">
                                    <div class="col-lg-6 col-md-6 modal-header">
                                        <span class="close-btn" id="close-btn--6">&times;</span>

                                        <h2>Infinito fitness challenge</h2>

                                        <div class="btn-container">
                                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSeCv9Nej3LC58MWb5Ty1DWjAtOyjSsxFu3fWFMlaFrskQUUhA/viewform?usp=sf_link" target="blank">Register</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 modal-body">
                                        <span class="events-quote">
                                            ‘All progress takes place outside the comfort zone.’— Michael John Bobak
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-lg -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
                          
        </div>
        <!-- /#events-section -->

        
        <!--
	=====================================================
		Footer
	=====================================================
                    -->
    <footer id="footer" class="footer" style="margin-top:0">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4 col-first">
                    <a href="index.php" class="logo"><img src="images/logo/logo.png" alt="Logo" class="footer-logo"/></a>
                    <div class="footer-about">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                    </div>
                    <div class="section-heading">
                        <h3>Follow us</h3>
                    </div>
    
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/InfinitoIITPatna/" target="_blank">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/infinito_iitp" target="_blank">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/company/infinito-iit-patna" target="_blank">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/infinito_iitp/" target="_blank">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-12 col-lg-4 col-second">
                    <div class="contact-us">
                        <div class="contact-icon">
                            <i class="fa fa-map-o" aria-hidden="true"></i>
                        </div>
                        <div class="contact-info">
                            <h3>Bihta, Patna, Bihar</h3>
                            <p>IIT Patna</p>
                        </div>
                    </div>
                    <div class="contact-us">
                        <div class="contact-icon">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <div class="contact-info">
                            <h3>+91 98018 84535</h3>
                            <p>Give us a call</p>
                        </div>
                    </div>
                    <div class="contact-us">
                        <div class="contact-icon">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <div class="contact-info">
                            <h3>iitpsports@gmail.com</h3>
                            <p>Mail us here</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 col-last">
                
                    <div class="section-heading">
                        <h3>Useful Links</h3>
                    </div>
                    <ul>
                        <li>
                            <a href="https://drive.google.com/file/d/1zdITppHLQSYVx3iajgwRWzsbWUxUIKQ9/view?usp=sharing" target = "_blank">About us</a>
                        </li>
                        <li>
                            <a href="event.php">Events</a>
                        </li>
                        <li>
                            <a href="gallery.php">Gallery</a>
                        </li>
                        <li>
                            <a href="team.php">Our Team</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>Copyright &copy; 2021 Infinito</p>
        </div>
    </footer>

    <!--
    =============================================
		Loading Transition
    ==============================================
    -->
        <div id="loader-wrapper">
            <div id="preloader_1">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <!-- Scroll Top Button -->
        <button class="scroll-top tran3s p-color-bg">
            <i class="fas fa-long-arrow-alt-up" aria-hidden="true"></i>
        </button>

        <?php
        require('./templates/footer.php');
        ?>


        <script>
            var slideIndex = 0;
            showSlides();



            function showSlides() {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length) {
                    slideIndex = 1
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
                setTimeout(showSlides, 2000); // Change image every 2 seconds
            }
        </script>



</body>

</html>