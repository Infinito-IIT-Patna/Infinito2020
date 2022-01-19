<!-- <!DOCTYPE html> -->
<?php
session_start();
require('./connect.php');

$status['registerParticipant']="";
if(isset($_POST['register'])){
$numberofgames=2;   
for($i =1;$i<$numberofgames+1;$i++){
if(isset($_POST['register'])&& isset($_POST["g$i"])){
    $captainid=$_POST["mem$i".'_1'];
    $members=$_POST["noPlayers$i"];
    $team=array();
    for($j=1;$j<$members+1;$j++){
    array_push($team,$POST["mem$i".''."$j"]);        
    }

    $st1=$pdo->prepare("SELECT MAX(grpno)  FROM teamtable ");
    $st99 =$st1->execute();
    $st100= $st1->fetch();
    // echo $st100["MAX(grpno)"];
    $maxgrpno=$st100["MAX(grpno)"];
    
    $currgrpno=$maxgrpno+1;
    // for($j =1;$j<=$members;$j++){
    $st2= $pdo->prepare("INSERT INTO teamtable (`grpno`,`p1`,`p2`,`p3`,`p4`,`p5`,`game`) VALUES (?,?,?,?,?,?,?)");
    $st3=$st2->execute([$currgrpno,0,0,0,0,0,$i]);
    $j=1;
    foreach($team as $memid){
        // echo $memid ;
        // echo "\n";
        $st4=$pdo->prepare("UPDATE teamtable SET p$j = ? WHERE grpno =?");
        $st4->execute([$memid,$currgrpno]);
        $j++;
    }
    $st5=$pdo->prepare("UPDATE teamtable SET game = $i WHERE grpno = ?");
    $st5->execute([$currgrpno]);
    // }
}
}
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

    <form action="" method="POST" id="form">
        <div class="form-row" style="padding-top:40px">
            <input type="checkbox" id="g1" name="g1" value="1">Game 1
            <input type="checkbox" id="g2" name="g2" value="1">Game 2
            <input type="checkbox" id="g3" name="g3" value="1">Game 3
        </div>
        <!-- <div> -->
        <button type="button" class="btn btn-primary" id="btnshow">Show team reg</button>
        <!-- </div> -->
        <div id="tr1">

        </div>
        <div id="tr2"></div>
        
        <div id="np1"></div>
        <br><br><br><br><br><br><br><br>
        <div id="tr3"></div>
        <div id="tr4"></div>
        <div id="np2"></div>

        <div id="tr5"></div>
        <div id="tr6"></div>
        <div id="np3"></div>
        <div id="finalsubmit"></div>

    </form>


    <script>
        console.log("hey");
        document.getElementById("btnshow").addEventListener("click", showbox, false);
        

        function showbox() {
            let i = 1;
            console.log(document.getElementById("g1").checked);

            if (document.getElementById("g1").checked) {
                document.getElementById("tr1").innerHTML = '<label for ="noPlayers1">No. of players </label><input type="number" name="noPlayers1" class="form-control" placeholder="Number  of Players except Captain" max="20" min="0" id="noPlayers1" required/>';
                document.getElementById("tr2").innerHTML='<button type="button" class="btn btn-primary" id="gaf">sub</button>';
                document.getElementById("tr2").addEventListener("click",g1f,false);
                


            }
            if (document.getElementById("g2").checked) {
                document.getElementById("tr3").innerHTML = '<label for="a"><label for ="noPlayers2">No. of players </label><input type="number" name="noPlayers2" class="form-control" placeholder="Number  of Players except Captain" max="20" min="0" id="noPlayers2" required/></label>';
                document.getElementById("tr4").innerHTML='<button type="button" class="btn btn-primary" id="gaf">sub</button>';
                document.getElementById("tr4").addEventListener("click",g2f,false);
            }

            if (document.getElementById("g3").checked) {
                document.getElementById("tr5").innerHTML = '<label for="a"><label for ="noPlayers3">No. of players </label><input type="number" name="noPlayers3" class="form-control" placeholder="Number  of Players except Captain" max="20" min="0" id="noPlayers3" required/></label>';
                document.getElementById("tr6").innerHTML='<button type="button" class="btn btn-primary" id="gaf">sub</button>';
                document.getElementById("tr6").addEventListener("click",g3f,false);
            }

            
           
        }
        let count=0;
        function g1f(){
            console.log("hey2");
            const g1p=document.getElementById("noPlayers1").value;
            let j=1;
            let string="";
            while(j<=g1p){
                string += '<div class="form-row"><div class="col-md-6 col-sm-12 col-xs-12" ><label for="teamMember">Enter Id of Member ' + j + '</label><input type="text" class="form-control" name="mem1_' + j + '" required></div></div>'
                j++;
            }
           
            document.getElementById("np1").innerHTML=string;
            anygxf();
            
        }

        function g2f(){
            console.log("hey3");
            const g1p=document.getElementById("noPlayers2").value;
            let j=1;
            let string="";
            while(j<=g1p){
                string += '<div class="form-row"><div class="col-md-6 col-sm-12 col-xs-12" ><label for="teamMember">Enter Id of Member ' + j + '</label><input type="text" class="form-control" name="mem2_' + j + '" required></div></div>'
                j++;
            }
            document.getElementById("np2").innerHTML=string;
            anygxf();
        }

        function g3f(){
            console.log("hey4");
            const g1p=document.getElementById("noPlayers3").value;
            let j=1;
            let string="";
            while(j<=g1p){
                string += '<div class="form-row"><div class="col-md-6 col-sm-12 col-xs-12" ><label for="teamMember">Enter Id of Member ' + j + '</label><input type="text" class="form-control" name="mem3_' + j + '" required></div></div>'
                j++;
            }
            document.getElementById("np3").innerHTML=string;
            anygxf();
        }

        function anygxf(){
            if(1){
                const string2 = '<div class="form-row"><div class="col-md-12 col-sm-12 col-xs-12" style="padding-top:20px"><button type="submit" class="btn btn-primary" name="register">Register</button></div></div>';

                document.getElementById("finalsubmit").innerHTML=string2;
            }
        }
    </script>

</body>

</html>