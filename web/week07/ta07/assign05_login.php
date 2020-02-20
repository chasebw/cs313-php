<?php


session_start();

require "../../db/dbConnect.php";
$db = get_db();

$incorrect_login = false;

try{
if (isset($_POST["submit"]))
{
    $user = $_POST["user"];
    $pass = $_POST["pass"];

    //for pass

    $query = ("SELECT user_pass FROM ta_user WHERE ta_user.username = $user");
    $statement= $db->prepare($query);

    $statement->execute();

    $hashpass = $statement->fetchColumn();


    //for user id

   


    if(password_verify($pass,$hashpass))
    {

        $query = ("SELECT user_id FROM ta_user WHERE ta_user.username = $user");
        $statement= $db->prepare($query);
    
        $statement->execute();
    
        $user_id = $statement->fetchColumn();

        $_SESSION['user_id'] = $user_id;



        header("location: assign05_options.php");
        die();


    }
    else
    {
        $incorrect_login = true;


    }
}
}

catch (Exception $ex) {
    echo "ERROR: $ex";
}





?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="assign05_login_style.css">
    <script src="https://kit.fontawesome.com/d608f5aa42.js" crossorigin="anonymous"></script>
    <link type="script" href="assign05_login_style.css">
    <title>Login Page</title>
</head>

<body>
    <!-- Inspired  video from 'Amazing Transparent Login...' video on youtube-->
    <div class="login_box">
        <h1>Login</h1>
        <div class="textbox">
        <form action="" method="POST">
            <?php

            // if($incorrect_login == true)
            // {

            //     echo "<p>Incorrect username or password</p>";


            // }



?>


            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" name="user" >
        </div>
        <div class="textbox">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="pass">
        </div>
       <!-- <input class="btn" type="button" name="" value="Sign In"> -->
        <input class="btn" type="submit" name="submit" value="login"><a style="color: white" style="text-decoration: none"  href="assign05_options.php">Sign in</a></input>
        </form>
        <button class="btn" type="button" name="" href='assign05_create.php' value="Create an Account">
            <a class="" style= 'color: aliceblue' style="text-decoration: none" href="assign05_create.php">Create An Account</a></button>

    </div>

</body>

</html>