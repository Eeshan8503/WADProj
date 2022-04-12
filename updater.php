<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./stylesheets/update.css">
</head>
<body>
    <?php
    require "DBconnect.php";
    $sno;
    $sql="SELECT Sno from Game1;";
    $result=$con->query($sql);
    if($result->num_rows >0){
        // echo "Successfully inserted";
        while($row=$result->fetch_assoc()){
            $sno= $row["Sno"];
        }
    }
    // echo $sno;

    if (isset($_POST['score'])) {
    $batsman=$_POST['batsman'];
    $bowler=$_POST['bowler'];
    $score=$_POST['score'];
    $wicket=$_POST['wicket'];

    

    $sqll="UPDATE Game1 Set `Current Score` = '$score', `Current Batsman`='$batsman', `Current Bowler`='$bowler', `Wickets Down`='$wicket' WHERE Sno='$sno';";

    if ($con->query($sqll) == true) {
        // echo "Record updated successfully";
      } else {
        echo "Error updating record: " . $con->error;
      }
}
?>
    <div class="container">
        <?php
            require 'DBconnect.php';
            $sql="SELECT Team1, Team2, `Current Score`, `Wickets Down` FROM `Game1` WHERE Sno='$sno';";
            $result=$con->query($sql);
            if($result->num_rows >0){
                // echo "Successfully inserted";
                while($row=$result->fetch_assoc()){
                    echo "<h2>".$row["Team1"]. " vs ".$row["Team2"]."</h2>";
                    echo "<h3>".$row["Current Score"]. " / ".$row["Wickets Down"]."</h3>";   
                }
            }
            $con->close();
        ?>
        
        <form action="updater.php" method="post">
            Current Batsman: <input class='inp' type="text" name="batsman"/>
            <br>
            <br>
            Current Bowler:  <input class='inp' type="text" name="bowler"/>
            <br>
            <br>
            Current Score:   <input class='inp' type="text" name="score"/>
            <br>
            <br>
            Wickets down:    <input  class='inp'type="text" name="wicket"/>
            <br>
            <br>
            <input class="btn" type="submit" value="Submit">
            
        </div>
        </body>
        </html>