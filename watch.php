<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./stylesheets/wat.css">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
   
</head>
<body style="background-color:#332FD0;">
<h1 style="margin:3%; font-size:3.1em">All Games</h1>
<div class="lot1">
<iframe src="https://embed.lottiefiles.com/animation/101020"></iframe>
</div>
<div class ="lot2">
<iframe src="https://embed.lottiefiles.com/animation/13493"></iframe>
</div>
<?php
    require 'DBconnect.php';
    $sql="SELECT Sno, Team1, Team2 FROM `Game1`;";
    $result=$con->query($sql);
    if($result->num_rows >0){
        // echo "Successfully inserted";
        while($row=$result->fetch_assoc()){
            echo "<div class='game-card'".'id="'.$row['Sno'].'"  >';
            echo "<h3> Sport: cricket</h3> <br/>";
            echo "<h2>".$row["Team1"]. " vs ".$row["Team2"]."</h2>";
            echo "</div>";
        }
    }
    $con->close();
    ?>
        
        <script>
          var cards=document.getElementsByClassName("game-card");
          for(i=0;i<cards.length;i++){
              cards[i].addEventListener("click", function(){
                window.location.href="scores.php?sno="+this.id;
          });
          }
    </script>
        <script>
        // card("cricket","BMSCE","RVCE");
    </script>

</body>
</html>