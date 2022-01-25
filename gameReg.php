<!-- <!DOCTYPE html> -->
<?php
session_start();
require('./connect.php');

$status['registerParticipant'] = "";
if (isset($_POST['register'])) {
    $numberofgames = 3;
    for ($i = 1; $i < $numberofgames + 1; $i++) {
        if (isset($_POST['register']) && isset($_POST["g$i"])) {
            $captainid = $_POST["mem$i" . '_1'];
            $members = $_POST["noPlayers$i"];
            $team = array();
            for ($j = 1; $j < $members + 1; $j++) {
                array_push($team, $_POST["mem$i" . '_' . "$j"]);
            }

            $st1 = $pdo->prepare("SELECT MAX(grpno) FROM teamtable ");
            $st199 = $st1->execute();
            $st100 = $st1->fetch();
            $maxgrpno = $st100["MAX(grpno)"];
            // Checks-> 
            $multiplecopy = 0;
            foreach ($team as $memid1) {
                foreach ($team as $memid2) {
                    if ($memid1 == $memid2) {
                        $multiplecopy = $multiplecopy + 1;
                    }
                }
            }
            $flag = 1;
            // Indicate that captain should register team for game.
            if ($multiplecopy = ($members + 1)) {
                // No duplicate member id
                $captain = 1;
                foreach ($team as $memid3) {
                    // TODO: Make / check if participant table is made and insert corresponding id as soon as profile is made
                    $st6 = $pdo->prepare("SELECT * FROM participant WHERE infid=?");
                    $st6->execute([$memid3]);

                    if ($st6->rowCount() == 1) {
                        // ID exists
                        $st8 = $pdo->prepare("SELECT * FROM gametable WHERE id=?");
                        $st8->execute([$memid3]);


                        $row = $st8->fetch();
                        // check if registered in that game already
                        // if($row){
                        if ($row["g$i"] == 0) {
                            // not registered already.
                            $st7 = $pdo->prepare("UPDATE gametable SET g$i=? WHERE id =?");
                            if ($captain == 1) $st7->execute([2, $memid3]);
                            if ($captain == 0) $st7->execute([1, $memid3]);
                            $captain = 0;
                        } else {
                            // already registered.
                            $flag = 0;
                            echo '<script>alert("Team member already registered for game.") </script>';
                        }
                    } else {
                        // ID doesn't exist
                        $flag = 0;
                        echo '<script>alert("Infinito ID does not exist for a Team member") </script>';
                    }
                }
            } else {
                $flag = 0;
                echo '<script>alert("Duplicate Infinito ID found for Team member`s infinito ID") </script>';
            }




            // Checks<-
            if ($flag) {
                $currgrpno = $maxgrpno + 1;

                $st2 = $pdo->prepare("INSERT INTO teamtable (`grpno`,`p1`,`p2`,`p3`,`p4`,`p5`,`game`) VALUES (?,?,?,?,?,?,?)");
                $st3 = $st2->execute([$currgrpno, 0, 0, 0, 0, 0, $i]);
                $j = 1;
                foreach ($team as $memid) {
                    // echo $memid ;
                    // echo "\n";
                    $st4 = $pdo->prepare("UPDATE teamtable SET p$j = ? WHERE grpno =?");
                    $st4->execute([$memid, $currgrpno]);
                    $j++;
                }
                $st5 = $pdo->prepare("UPDATE teamtable SET game = $i WHERE grpno = ?");
                $st5->execute([$currgrpno]);
                header('location:payment.php');
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Game Registration</title>
    <?php
    require('./templates/header.php');
    ?>
    <link rel="stylesheet" href="css/gameReg.css">
    <link rel="stylesheet" href="css/registerPlayer.css">
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
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            Menu
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-collapse-1" style="margin-top:8px;">
                        <ul class="nav navbar-nav">
                            <li><a href="./index.php">Home</a></li>
                            <li><a href="./events.php">Events</a></li>
                            <li><a href="./team.php">Team</a></li>
                            <li><a href="./gallery.php">Gallery</a></li>
                            <li><a href="./registration.php">Register</a></li>
                            <?php
                            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                                echo '<li><a href="./profile.php">Profile</a></li>
                                          <li><a href="./logout.php">Logout</a></li>';
                            } else {
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

        <div class="container">

            <div id="register" style="padding:5%;padding-top:75px;">
                <div class="theme-title" style="margin-bottom:40px;margin-top:80px;">
                    <h2 style="margin-top:0px;">Game Registration</h2>
                </div>
                <div class="signInForm reg_PlayerForm">
                    <form action="" method="POST" id="form">
                        <div class="form-row">
                            <input type="checkbox" id="g1" name="g1" value="1">Game 1
                            <input type="checkbox" id="g2" name="g2" value="1">Game 2
                            <input type="checkbox" id="g3" name="g3" value="1">Game 3
                        </div>
                        <!-- <div> -->
                        <button type="button" class="btn btn-primary" id="btnshow">Next</button>
                        <button type="button" class="btn btn-primary" id="btnshow" onclick="location.reload();">Reset</button>
                        <!-- </div> -->
                        <div id="tr1"></div>
                        <div id="tr2"></div>
                        <div id="np1"></div>

                        <!-- <br><br><br><br><br><br><br><br> -->
                        <div id="tr3"></div>
                        <div id="tr4"></div>
                        <div id="np2"></div>

                        <div id="tr5"></div>
                        <div id="tr6"></div>
                        <div id="np3"></div>
                        <div id="finalsubmit"></div>

                    </form>
                </div>
            </div>
        </div>
        <!--
	=====================================================
		Footer
	=====================================================
    -->
        <footer id="footer" class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-4 col-first">
                        <a href="index.php" class="logo"><img src="images/logo/logo.png" alt="Logo" class="footer-logo" /></a>
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
                                <a href="https://drive.google.com/file/d/1zdITppHLQSYVx3iajgwRWzsbWUxUIKQ9/view?usp=sharing" target="_blank">About us</a>
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

        <?php
        require('./templates/footer.php');
        ?>

        <script>
            console.log("hey");
            document.getElementById("btnshow").addEventListener("click", showbox, false);


            function showbox() {
                let i = 1;
                console.log(document.getElementById("g1").checked);

                if (document.getElementById("g1").checked) {
                    document.getElementById("tr1").innerHTML = '<label for ="noPlayers1">No. of players for Game-1 </label><input type="number" name="noPlayers1" class="form-control" placeholder="Number  of Players except Captain" max="20" min="0" id="noPlayers1" style="width:260px;" required/>';
                    document.getElementById("tr2").innerHTML = '<button type="button" class="btn btn-primary" id="gaf">Next</button>';
                    document.getElementById("tr2").addEventListener("click", g1f, false);
                }
                if (document.getElementById("g2").checked) {
                    document.getElementById("tr3").innerHTML = '<label for="a"><label for ="noPlayers2">No. of players for Game-2</label><input type="number" name="noPlayers2" class="form-control" placeholder="Number  of Players except Captain" max="20" min="0" id="noPlayers2" style="width:260px;" required/></label>';
                    document.getElementById("tr4").innerHTML = '<button type="button" class="btn btn-primary" id="gaf">Next</button>';
                    document.getElementById("tr4").addEventListener("click", g2f, false);
                }

                if (document.getElementById("g3").checked) {
                    document.getElementById("tr5").innerHTML = '<label for="a"><label for ="noPlayers3">No. of players for Game-3 </label><input type="number" name="noPlayers3" class="form-control" placeholder="Number  of Players except Captain" max="20" min="0" id="noPlayers3" style="width:260px;" required/></label>';
                    document.getElementById("tr6").innerHTML = '<button type="button" class="btn btn-primary" id="gaf">Next</button>';
                    document.getElementById("tr6").addEventListener("click", g3f, false);
                }



            }
            let count = 0;

            function g1f() {
                console.log("hey2");
                const g1p = document.getElementById("noPlayers1").value;
                let j = 1;
                let string = "";
                while (j <= g1p) {
                    string += '<div class="form-row"><div class="col-md-6 col-sm-12 col-xs-12" ><label for="teamMember">Enter Id of Member ' + j + '</label><input type="text" class="form-control" name="mem1_' + j + '" required></div></div>'
                    j++;
                }

                document.getElementById("np1").innerHTML = string;
                let ht;
                let mq = window.matchMedia('(max-width: 900px)');

                if (mq.matches) {
                    // window width is at less than 570px            
                    ht = g1p * 60;
                } else {
                    // window width is greater than 570px 
                    ht = Math.ceil(g1p / 2.0) * 60;

                }
                document.getElementById("np1").style.height = ht + 'px';
                console.log(ht);
                anygxf();

            }

            function g2f() {
                console.log("hey3");
                const g1p = document.getElementById("noPlayers2").value;
                let j = 1;
                let string = "";
                while (j <= g1p) {
                    string += '<div class="form-row"><div class="col-md-6 col-sm-12 col-xs-12" ><label for="teamMember">Enter Id of Member ' + j + '</label><input type="text" class="form-control" name="mem2_' + j + '" required></div></div>'
                    j++;
                }
                document.getElementById("np2").innerHTML = string;
                let ht;
                let mq = window.matchMedia('(max-width: 900px)');

                if (mq.matches) {
                    // window width is at less than 570px            
                    ht = g1p * 60;
                } else {
                    // window width is greater than 570px

                    ht = Math.ceil(g1p / 2.0) * 60;

                }
                document.getElementById("np2").style.height = ht + 'px';
                console.log(ht);
                anygxf();
            }

            function g3f() {
                console.log("hey4");
                const g1p = document.getElementById("noPlayers3").value;
                let j = 1;
                let string = "";
                while (j <= g1p) {
                    string += '<div class="form-row"><div class="col-md-6 col-sm-12 col-xs-12" ><label for="teamMember">Enter Id of Member ' + j + '</label><input type="text" class="form-control" name="mem3_' + j + '" required></div></div>'
                    j++;
                }
                document.getElementById("np3").innerHTML = string;
                let ht;
                let mq = window.matchMedia('(max-width: 900px)');

                if (mq.matches) {
                    // window width is at less than 570px            
                    ht = g1p * 60;
                } else {
                    // window width is greater than 570px

                    ht = Math.ceil(g1p / 2.0) * 60;

                }
                document.getElementById("np3").style.height = ht + 'px';
                console.log(ht);
                anygxf();
            }

            function anygxf() {
                if (1) {
                    const string2 = '<div class="form-row"><div class="col-md-12 col-sm-12 col-xs-12" style="padding-top:20px"><button type="submit" class="btn btn-primary" name="register">Register</button></div></div>';

                    document.getElementById("finalsubmit").innerHTML = string2;
                }
            }
        </script>

</body>

</html>