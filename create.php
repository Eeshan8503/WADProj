<?php
$insert = false;    
if (isset($_POST['batsman'])) {
$server = "localhost";
$username = "root";
$password = "";
$con = mysqli_connect($server, $username, $password);
if($con){echo "Success connecting to the db";}
if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());
}
/////////////////////



////////////////////
$batsman=$_POST['batsman'];
$bowler=$_POST['bowler'];
$score=$_POST['score'];
$wicket=$_POST['wicket'];
$Team1=$_POST['Team1'];
$Team2=$_POST['Team2'];
$sql = "INSERT INTO `Cricket`.`Game1` (`Current Batsman`, `Current Bowler`, `Current Score`, `Wickets Down`, `Team1`, `Team2`) VALUES ('$batsman', '$bowler', '$score', '$wicket','$Team1','$Team2');";
// $sql = "INSERT INTO `Cricket`.`Game1` (`Current Batsman`, `Current Bowler`, `Current Score`, `Wickets Down`, `Team1`, `Team2`) VALUES ('batsman', 'bowler', '1', '1','BMS','RVCE');";  
echo "<br>";
echo "$sql";
if($con->query($sql) == true){
    echo "Successfully inserted";
}
// else{}
$con->close();
echo "<script>window.location.href='./updater.php'</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./stylesheets/cre.css">
</head>
<body>
    <div class="container">
        <h4 style="margin:5%">Hello, to get started fill in the form</h4>
        <!-- <br/> -->
        <form action="create.php" method="post">
            Current Batsman: <input  class='inp'  type="text" name="batsman" required/>
            <br>
            <br>
            Current Bowler:  <input  class='inp' type="text" name="bowler" required/>
            <br>
            <br>
            Current Score:   <input  class='inp' type="text" name="score" required/>
            <br>
            <br>
            Wickets down:    <input required class='inp'  type="text" name="wicket"/>
            <br>
            <br>
            Team1:    <input class='inp' required type="text" name="Team1"/>
            <br>
            <br>
            Team2:    <input  class='inp' type="text" name="Team2"/>
            <br/>
            <br/>
            <input  class='btn' type="submit" value="Submit">
            <!-- <button>dsa</button> -->
        </form>
    </div>
    </body>
</html>


