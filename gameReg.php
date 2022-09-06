<!-- <!DOCTYPE html> -->
<?php
session_start();
require('./connect1.php');
$redirect=1;
$status['registerParticipant'] = "";
if (isset($_POST['register'])) {
    $numberOfTotalMembers = 0;
    $numberofgames = 6;
    for ($i = 1; $i < $numberofgames + 1; $i++) {
        if (isset($_POST['register']) && isset($_POST["g$i"])) {
            $captainid = $_POST["mem$i" . '_1'];
            if($i==1){
                $members = 1;
            }
            else{
                $members = $_POST["noPlayers$i"];
            }
            $numberOfTotalMembers += $members;
            $team = array();
            for ($j = 1; $j < $members+1 ; $j++) {
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
            if ($multiplecopy == ($members)) {
                // No duplicate member id
                $captain = 1;
                foreach ($team as $memid3) {
                    $st6 = $pdo->prepare("SELECT * FROM infinito2021php WHERE Infid=?");
                    $st6->execute([$memid3]);

                    if ($st6->rowCount() == 1) {
                        // ID exists
                        $st8 = $pdo->prepare("SELECT * FROM gametable WHERE id=?");
                        $st8->execute([$memid3]);


                        $row = $st8->fetch();
                        if($st8->rowCount()==0){
                            echo("<script>console.log('$i , $memid3 ');</script>");
                            $stins = $pdo->prepare("INSERT INTO gametable (`id`,`g1`,`g2`,`g3`,`g4`,`g5`,`g6`) VALUES (?,?,?,?,?,?,?)");
                            $stins2 = $stins->execute([$memid3,0,0,0,0,0,0]);
                        }
                        // check if registered in that game already
                        // if($row){
                        if ($row["g$i"] == 0) {
                            // not registered already.
                            echo("<script>console.log('$i , $memid3 ');</script>");
                            $st7 = $pdo->prepare("UPDATE gametable SET g$i=? WHERE id =?");
                            if ($captain == 1) $st7->execute([2, $memid3]);
                            if ($captain == 0) $st7->execute([1, $memid3]);
                            $captain = 0;
                        } else {
                            // already registered.
                            $flag = 0;
                            $paymentValid = 0;
                            echo '<script>alert("Team member already registered for game.") </script>';
                        }
                    } else {
                        // ID doesn't exist
                        $flag = 0;
                        $paymentValid = 0;
                        echo '<script>alert("Infinito ID does not exist for a Team member") </script>';
                    }
                }
            } else {
                $flag = 0;
                $paymentValid = 0;
                echo '<script>alert("Duplicate Infinito ID found for Team member`s infinito ID") </script>';
            }


            if($flag==0){$redirect=0;}

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
            }
        }

    }

    if($redirect==1){
        //header('location:index.php');
        echo '<div class="alert alert-success alert-dismissible show" role="alert" style="position:absolute; top:75px; width:100%; color:green; background: #00800029;" >
        <strong>Cheers! Registration is confirmed. To stay updated and for any queries regarding this event you may join our <a href="https://discord.gg/TrHygunc">Official Discord Server </a>.   </strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">x</span>
        </button>
        </div>';
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
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
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
                            <div><input type="checkbox" id="g1" name="g1" value="1">Chess</div>
                            <div><input type="checkbox" id="g2" name="g2" value="1">BGMI</div>
                            <div><input type="checkbox" id="g3" name="g3" value="1">COD</div>
                        </div>
                        <div class="form-row">
                            <div><input type="checkbox" id="g4" name="g4" value="1">Valorant</div>
                            <!-- <div><input type="checkbox" id="g5" name="g5" value="1">IPL Auction</div> -->
                            <div><input type="checkbox" id="g6" name="g6" value="1">Sports Quiz</div>
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

                        <div id="tr7"></div>
                        <div id="tr8"></div>
                        <div id="np4"></div>

                        <!-- <div id="tr9"></div>
                        <div id="tr10"></div>
                        <div id="np5"></div> -->

                        <div id="tr11"></div>
                        <div id="tr12"></div>
                        <div id="np6"></div>

                        <div id="finalsubmit"></div>

                    </form>
                </div>
            </div>
        </div>
        <div style="width:100%;display:flex;align-items:center;flex-direction:column;font-size:1.5rem;color:#172134;">
            <p>Don't have an Infinito ID !!</p>
            <p><a href="./registerPlayer.php">Click here</a> to generate one.</p>
            <!-- <div class="col-lg-3 col-md-6 col-sm-10 col-xs-10" style="width:200px;">
                <a class="tp-caption">
                    <a href="./registerPlayer.php" class="score-btn project-button hvr-bounce-to-right" style="padding:10px 15px;font-size:16px;border: #d8545d 2px solid;width:100%; text-align:center;">Register Now !</a>
                </a>
            </div> -->
        </div>
        <div class="confButton" style="display:flex; justify-content:center;">
            <div class="col-lg-3 col-md-6 col-sm-10 col-xs-10" style="width:200px;">
            <a class="tp-caption">
                <a href="https://drive.google.com/drive/folders/1UJ9f7RacLlwjvhuMe8B4uCGe6Z4L4IYx?usp=sharing" class="score-btn project-button hvr-bounce-to-right" style="padding:10px 15px;font-size:16px;border: #d8545d 2px solid;width:100%; text-align:center;" target="_blank">Rulebook</a>
            </a>
            </div>
        </div>
        <div style="width:100%;display:flex;align-items:center;flex-direction:column; font-size:1.4rem; margin-top:20px;">
            <p>For any queries contact us at <a href="mailto:iitpsports@gmail.com" target="_blank">iitpsports@gmail.com</a>
        </div>

        <?php
        require('./templates/footer.php');
        ?>

        <script>
            document.getElementById("btnshow").addEventListener("click", showbox, false);


            function showbox() {
                let i = 1;
                console.log(document.getElementById("g1").checked);

                //Chess
                if (document.getElementById("g1").checked) {
                    /*document.getElementById("tr1").innerHTML = '<label for ="noPlayers1" style="margin-top:10px;">No. of players for Chess</label><input type="number" name="noPlayers1" class="form-control" placeholder="Number  of Players (*max. 5)" max="5" min="0" id="noPlayers1" style="width:260px;" required/><div id="g1er"></div>';
                    document.getElementById("tr2").innerHTML = '<button type="button" class="btn btn-primary btn-game" id="gaf">Next</button>';
                    document.getElementById("tr2").addEventListener("click", g1f, false);*/
                    document.getElementById("tr1").innerHTML = '<strong><p style="margin-top:10px;">Single player for Chess.</p></strong>'
                
                    const g1p = 1;
                    let j=1;
                    let string = '<div class="form-row"><div class="col-md-6 col-sm-12 col-xs-12" ><input type="text" class="form-control" name="mem1_' + j + '" placeholder="Enter Player'+"'"+'s Infinito ID" required></div></div>';
                    j++;
                    while (j <= g1p) {
                        string += '<div class="form-row"><div class="col-md-6 col-sm-12 col-xs-12" ><input type="text" class="form-control" name="mem1_' + j + '" placeholder="Infinito ID of Member ' + j +'" required></div></div>'
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

                        ht = Math.ceil(g1p / 2.0) * 50;

                    }
                    document.getElementById("np1").style.height = ht + 'px';
                    console.log(ht);
                    anygxf();

                }
                else{
                    document.getElementById("tr1").innerHTML = '';
                    document.getElementById("tr2").innerHTML = '';
                    document.getElementById("np1").innerHTML = '';
                    document.getElementById("np1").style.height = 0+'px';
                }

                //BGMI
                if (document.getElementById("g2").checked) {
                    document.getElementById("tr3").innerHTML = '<label for="a"><label for ="noPlayers2" style="margin-top:10px;">No. of players for BGMI</label>'+
                    '<div class="radGame"><div><input type="radio" name="noPlayers2" id="noPlayers2" style="width:10px;" value="3" onClick="g2f3()" required/><label for="noPlayers2">3</label></div>'+
                    '<div><input type="radio" name="noPlayers2" id="noPlayers2" style="width:10px;" value="4" onClick="g2f4()" required/><label for="noPlayers2">4</label></div></div></label>';
                    //document.getElementById("tr4").innerHTML = '<button type="button" class="btn btn-primary btn-game" id="gaf">Next</button>';
                   // document.getElementById("tr4").addEventListener("click", g2f, false);
                }
                else{
                    document.getElementById("tr3").innerHTML = '';
                    document.getElementById("tr4").innerHTML = '';
                    document.getElementById("np2").innerHTML = '';
                    document.getElementById("np2").style.height = 0+'px';
                }

                //COD
                if (document.getElementById("g3").checked) {
                    console.log("cod press");
                    document.getElementById("tr5").innerHTML = '<label for ="noPlayers3" style="margin-top:10px;">No. of players for COD</label><input type="number" name="noPlayers3" class="form-control" placeholder="Number  of Players (*max. 5)" max="5" min="0" id="noPlayers3" style="width:260px;" required/><div id="g3er"></div>';
                    document.getElementById("tr6").innerHTML = '<button type="button" class="btn btn-primary btn-game" id="gaf">Next</button>';
                    document.getElementById("tr6").addEventListener("click", g3f, false);
                }
                else{
                    document.getElementById("tr5").innerHTML = '';
                    document.getElementById("tr6").innerHTML = '';
                    document.getElementById("np3").innerHTML = '';
                    document.getElementById("np3").style.height = 0+'px';
                }

                //Valorant
                if (document.getElementById("g4").checked) {
                    document.getElementById("tr7").innerHTML = '<label for="a"><label for ="noPlayers4" style="margin-top:10px;">No. of players for Valorant</label>'+
                    '<div class="radGame"><div><input type="radio" name="noPlayers4" id="noPlayers4" style="width:10px;" value="4" onClick="g4f4()" required/><label for="noPlayers4">4</label></div>'+
                    '<div><input type="radio" name="noPlayers4" id="noPlayers4" style="width:10px;" value="5" onClick="g4f5()" required/><label for="noPlayers4">5</label></div></div></label>';
                   
                    /*document.getElementById("tr7").innerHTML = '<label for="a"><label for ="noPlayers4" style="margin-top:10px;">No. of players for Valorant</label><input type="number" name="noPlayers4" class="form-control" placeholder="Number  of Players (min. 4 & max. 5)" max="5" min="4" id="noPlayers4" style="width:260px;" required/></label><div id="g4er"></div>';
                    document.getElementById("tr8").innerHTML = '<button type="button" class="btn btn-primary" id="gaf">Next</button>';
                    document.getElementById("tr8").addEventListener("click", g4f, false);*/

                }
                else{
                    document.getElementById("tr7").innerHTML = '';
                    document.getElementById("tr8").innerHTML = '';
                    document.getElementById("np4").innerHTML = '';
                    document.getElementById("np4").style.height = 0+'px';
                }

                /*if (document.getElementById("g5").checked) {
                    document.getElementById("tr9").innerHTML = '<label for="a"><label for ="noPlayers5">No. of players for IPL Auction</label><input type="number" name="noPlayers5" class="form-control" placeholder="Number  of Players (*max. 5)" max="5" min="0" id="noPlayers5" style="width:260px;" required/></label>';
                    document.getElementById("tr10").innerHTML = '<button type="button" class="btn btn-primary" id="gaf">Next</button>';
                    document.getElementById("tr10").addEventListener("click", g5f, false);
                }*/

                //Sports Quiz
                if (document.getElementById("g6").checked) {
                    document.getElementById("tr11").innerHTML = '<label for="a"><label for ="noPlayers6" style="margin-top:10px;">No. of players for Sports Quiz</label>'+
                    '<div class="radGame"><div><input type="radio" name="noPlayers6" id="noPlayers6" style="width:10px;" value="1" onClick="g6f1()" required/><label for="noPlayers6">1</label></div>'+
                    '<div><input type="radio" name="noPlayers6" id="noPlayers6" style="width:10px;" value="2" onClick="g6f2()" required/><label for="noPlayers6">2</label></div></div></label>';
                   
                    /*document.getElementById("tr11").innerHTML = '<label for="a"><label for ="noPlayers6">No. of players for Sports Quiz</label><input type="number" name="noPlayers6" class="form-control" placeholder="Number  of Players (team of 2)" max="2" min="2" id="noPlayers6" style="width:260px;" value="2" required/></label><div id="g6er"></div>';
                    document.getElementById("tr12").innerHTML = '<button type="button" class="btn btn-primary" id="gaf">Next</button>';
                    document.getElementById("tr12").addEventListener("click", g6f, false);*/
                    //document.getElementById("tr11").innerHTML = '<strong><p style="margin-top:10px;">Team of only 2 players for Sports Quiz.</p></strong>'
                }
                else{
                    document.getElementById("tr11").innerHTML = '';
                    document.getElementById("tr12").innerHTML = '';
                    document.getElementById("np6").innerHTML = '';
                    document.getElementById("np6").style.height = 0+'px';
                }
            }
            let count = 0;

            //Chess
            function g1f() {
                console.log("hey2");
                const g1p = document.getElementById("noPlayers1").value;
                if(g1p>5){
                    document.getElementById("g1er").innerHTML = '<p style="color:red;">Maximum players can be 5.</p>';
                    end();
                }
                else{
                    if(document.getElementById("g1er").innerHTML != null){
                        document.getElementById("g1er").innerHTML = "";
                    }
                }
                let j=1;
                let string = '<div class="form-row"><div class="col-md-6 col-sm-12 col-xs-12" ><input type="text" class="form-control" name="mem1_' + j + '" placeholder="Enter Captain'+"'"+'s Infinito ID" required></div></div>';
                j++;
                while (j <= g1p) {
                    string += '<div class="form-row"><div class="col-md-6 col-sm-12 col-xs-12" ><input type="text" class="form-control" name="mem1_' + j + '" placeholder="Infinito ID of Member ' + j +'" required></div></div>'
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

            //COD
            function g3f() {
             
                const g1p = document.getElementById("noPlayers3").value;
                if(g1p>5){
                    document.getElementById("g3er").innerHTML = '<p style="color:red;">Maximum players can be 5.</p>';
                    end();
                }
                else{
                    if(document.getElementById("g3er").innerHTML != null){
                        document.getElementById("g3er").innerHTML = "";
                    }
                }
                //If no value entered
                if(g1p==0){
                    document.getElementById("g3er").innerHTML = '<p style="color:red;">Enter a value!</p>';
                    end();
                }
                else{
                    document.getElementById("g3er").innerHTML = '';

                }
                let j=1;
                let string = '';
                while (j <= g1p) {
                    if(j==1){
                        string += '<div class="form-row"><div class="col-md-6 col-sm-12 col-xs-12" ><input type="text" class="form-control" name="mem3_' + j + '" placeholder="Enter Captain'+"'"+'s Infinito ID" required></div></div>';
                    }
                    else{
                        string += '<div class="form-row"><div class="col-md-6 col-sm-12 col-xs-12" ><input type="text" class="form-control" name="mem3_' + j + '" placeholder="Infinito ID of Member ' + j +'" required></div></div>'
                    }
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

            //BGMI with 3 members
            function g2f3() {
                console.log("hey4");
                const g1p = 3;
                
                let j=1;
                let string = '<div class="form-row"><div class="col-md-6 col-sm-12 col-xs-12" ><input type="text" class="form-control" name="mem2_' + j + '" placeholder="Enter Captain'+"'"+'s Infinito ID" required></div></div>';
                j++;
                while (j <= g1p) {
                    string += '<div class="form-row"><div class="col-md-6 col-sm-12 col-xs-12" ><input type="text" class="form-control" name="mem2_' + j + '" placeholder="Infinito ID of Member ' + j +'" required></div></div>'
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

            //BGMI with 4 members
            function g2f4() {
                console.log("hey4");
                const g1p = 4;
                
                let j=1;
                let string = '<div class="form-row"><div class="col-md-6 col-sm-12 col-xs-12" ><input type="text" class="form-control" name="mem2_' + j + '" placeholder="Enter Captain'+"'"+'s Infinito ID" required></div></div>';
                j++;
                while (j <= g1p) {
                    string += '<div class="form-row"><div class="col-md-6 col-sm-12 col-xs-12" ><input type="text" class="form-control" name="mem2_' + j + '" placeholder="Infinito ID of Member ' + j +'" required></div></div>'
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

            //Valorant with 4 members
            function g4f4() {
                console.log("hey4");
                const g1p = 4;
                
                let j=1;
                let string = '<div class="form-row"><div class="col-md-6 col-sm-12 col-xs-12" ><input type="text" class="form-control" name="mem4_' + j + '" placeholder="Enter Captain'+"'"+'s Infinito ID" required></div></div>';
                j++;
                while (j <= g1p) {
                    string += '<div class="form-row"><div class="col-md-6 col-sm-12 col-xs-12" ><input type="text" class="form-control" name="mem4_' + j + '" placeholder="Infinito ID of Member ' + j +'" required></div></div>'
                    j++;
                }
                document.getElementById("np4").innerHTML = string;
                let ht;
                let mq = window.matchMedia('(max-width: 900px)');

                if (mq.matches) {
                    // window width is at less than 570px
                    ht = g1p * 60;
                } else {
                    // window width is greater than 570px

                    ht = Math.ceil(g1p / 2.0) * 60;

                }
                document.getElementById("np4").style.height = ht + 'px';
                console.log(ht);
                anygxf();
            }

            //Valorant with 5 members
            function g4f5() {
                console.log("hey4");
                const g1p = 5;
                
                let j=1;
                let string = '<div class="form-row"><div class="col-md-6 col-sm-12 col-xs-12" ><input type="text" class="form-control" name="mem4_' + j + '" placeholder="Enter Captain'+"'"+'s Infinito ID" required></div></div>';
                j++;
                while (j <= g1p) {
                    string += '<div class="form-row"><div class="col-md-6 col-sm-12 col-xs-12" ><input type="text" class="form-control" name="mem4_' + j + '" placeholder="Infinito ID of Member ' + j +'" required></div></div>'
                    j++;
                }
                document.getElementById("np4").innerHTML = string;
                let ht;
                let mq = window.matchMedia('(max-width: 900px)');

                if (mq.matches) {
                    // window width is at less than 570px
                    ht = g1p * 60;
                } else {
                    // window width is greater than 570px

                    ht = Math.ceil(g1p / 2.0) * 60;

                }
                document.getElementById("np4").style.height = ht + 'px';
                console.log(ht);
                anygxf();
            }

            function g5f() {
                console.log("hey4");
                const g1p = document.getElementById("noPlayers5").value;
                if(g1p>5){
                    document.getElementById("g1er").innerHTML = '<p style="color:red;">Maximum players can be 5.</p>';
                    end();
                }
                else{
                    if(document.getElementById("g5er").innerHTML != null){
                        document.getElementById("g5er").innerHTML = "";
                    }
                }
                let j=1;
                let string = '<div class="form-row"><div class="col-md-6 col-sm-12 col-xs-12" ><input type="text" class="form-control" name="mem5_' + j + '" placeholder="Enter Captain'+"'"+'s Infinito ID" required></div></div>';
                j++;
                while (j <= g1p) {
                    string += '<div class="form-row"><div class="col-md-6 col-sm-12 col-xs-12" ><input type="text" class="form-control" name="mem5_' + j + '" placeholder="Infinito ID of Member ' + j +'" required></div></div>'
                    j++;
                }
                document.getElementById("np5").innerHTML = string;
                let ht;
                let mq = window.matchMedia('(max-width: 900px)');

                if (mq.matches) {
                    // window width is at less than 570px
                    ht = g1p * 60;
                } else {
                    // window width is greater than 570px

                    ht = Math.ceil(g1p / 2.0) * 60;

                }
                document.getElementById("np5").style.height = ht + 'px';
                console.log(ht);
                anygxf();
            }

            //Sports Quiz
            //Sports Quiz with 1 members
            function g6f1() {
                console.log("hey4");
                const g1p =1;
                
                let j=1;
                let string = '<div class="form-row"><div class="col-md-6 col-sm-12 col-xs-12" ><input type="text" class="form-control" name="mem6_' + j + '" placeholder="Enter Captain'+"'"+'s Infinito ID" required></div></div>';
                j++;
                while (j <= g1p) {
                    string += '<div class="form-row"><div class="col-md-6 col-sm-12 col-xs-12" ><input type="text" class="form-control" name="mem6_' + j + '" placeholder="Infinito ID of Member ' + j +'" required></div></div>'
                    j++;
                }
                document.getElementById("np6").innerHTML = string;
                let ht;
                let mq = window.matchMedia('(max-width: 900px)');

                if (mq.matches) {
                    // window width is at less than 570px
                    ht = g1p * 60;
                } else {
                    // window width is greater than 570px

                    ht = Math.ceil(g1p / 2.0) * 60;

                }
                document.getElementById("np6").style.height = ht + 'px';
                console.log(ht);
                anygxf();
            }

            //Sports Quiz with 2 members
            function g6f2() {
                console.log("hey4");
                const g1p = 2;
                
                let j=1;
                let string = '<div class="form-row"><div class="col-md-6 col-sm-12 col-xs-12" ><input type="text" class="form-control" name="mem6_' + j + '" placeholder="Enter Captain'+"'"+'s Infinito ID" required></div></div>';
                j++;
                while (j <= g1p) {
                    string += '<div class="form-row"><div class="col-md-6 col-sm-12 col-xs-12" ><input type="text" class="form-control" name="mem6_' + j + '" placeholder="Infinito ID of Member ' + j +'" required></div></div>'
                    j++;
                }
                document.getElementById("np6").innerHTML = string;
                let ht;
                let mq = window.matchMedia('(max-width: 900px)');

                if (mq.matches) {
                    // window width is at less than 570px
                    ht = g1p * 60;
                } else {
                    // window width is greater than 570px

                    ht = Math.ceil(g1p / 2.0) * 60;

                }
                document.getElementById("np6").style.height = ht + 'px';
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
        <script>
            $(document).ready(function(){
            $('.toast').toast('show');
            });
        </script>

</body>

</html>