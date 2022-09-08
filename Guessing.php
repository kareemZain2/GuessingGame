<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Geussing Game For Kareem Zein faa09505</title>
</head>
<body>
    <h1>
        Welcome To My Guessing Game
    </h1>
    <?php
    if(!isset($_GET['Guess'])){
        echo "Missing guess parameter";
    }else if($_GET['Guess'] == null){
        echo "Your guess is too short";
    }else if(!is_numeric($_GET['Guess'])){
        echo "Your guess is not a number";
    }else if($_GET['Guess']<56){
        echo "Your guess is too low";
    }else if($_GET['Guess']>56){
        echo "Your guess is too high";
    }else{
        echo "Congratulations - You are right";
    }
    ?>
</body>
</html>