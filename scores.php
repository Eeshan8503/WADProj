

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./stylesheets/sco.css">
    <title>Document</title>
    <script>
        function reloader(){
            window.location.reload();
        }
    </script>
</head>
<body>
    <div class="container">

        <?php
        
        $sno=$_GET['sno'];
        require 'DBconnect.php';
        // echo $sno;
        $sql='SELECT * FROM Game1 WHERE Sno='.$_GET['sno'];
        $result=$con->query($sql);
        if($result->num_rows >0){
            // echo "Successfully inserted";
            while($row=$result->fetch_assoc()){
                echo '<h1>'.$row["Team1"].' VS ' .$row["Team2"]. '</h1>';
                echo '<h2>'.$row["Current Score"].'/' .$row["Wickets Down"]. '</h2>';
                echo '<div class="player">';
                echo '<h3> Batsman : '.$row["Current Batsman"]. '</h2>';
                echo '<h3> Bowler :  '.$row["Current Bowler"]. '</h2>';
                echo '</div>';

            }
        }
        $con->close();        
        ?>
        
        

        <button class='btn' onclick="reloader()">Reload</button>
    </div>
</body>
</html>