<?php

session_start();
$nam = array("Sam Espino", "Shae Smith", "Third Lee");
$ema = array("sam@gmail.com", "shae@gmail.com", "third@gmail.com");
$pas = array("secret1", "secret2", "secret3");
$found = false;
$ctr = 3;

if (isset($_POST['name'])) {
    $email = $_POST['name'];
    $password = $_POST['password'];
    if($email != $found && $password != $found){
        if($email == $ema['0'] && $password == $pas['0']){
            $_SESSION["name"]=$nam[0];
            header('Location: profile.php?'.$nam['0']);
        }else if($email == $ema['1'] && $password == $pas['1']){
            $_SESSION["name"]=$nam[1];
            header('Location: profile.php?'.$nam['1']);
        }else if($email == $ema['2'] && $password == $pas['2']){
            $_SESSION["name"]=$nam[2];
            header('Location: profile.php?'.$nam['2']);
        }else{
            header('Location: register.html');
        }
        
    }
}


?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>


    </style>
</head>
<body>

    <div class="boxdesign">
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">

            <div class="imgcontainer">
                <img src="robot.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label for="name"><b></b></label>
                <input type="text" placeholder="Enter Email" name="name" required>

                <label for="password"><b></b></label>
                <input type="password" placeholder="Enter Password" name="password" required>

                <button name="submit" class="action_btn submit" type="submit" >Sign In</button>
                <button name="reset" class="action_btn cancel" type="reset">Clear</button>
                
            </div>
    </div>
    </form>
</body>

</html>
