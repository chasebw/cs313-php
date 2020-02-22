

<?php

try{
session_start();




$badlogin = false;


echo "before if";
if(isset($_POST["user"]) && isset($_POST["pass"]) )
{

    echo "aftr if";

    $user = $_POST["user"];
    $pass = $_POST["pass"];


    echo "username = $user";
    echo "password = $pass";



    require "../../db/dbConnect.php";
    $db = get_db();
    


    $statement = $db->prepare("SELECT user_pass,user_id FROM public.user WHERE username = :username");
    $statement->bindValue(':username', $user);

    //statement execute returns true if works
    //or returns false if fails
    $result = $statement->execute();


    //if we got something back then we do this stuff...
    if($result)
    {
        echo "entered result loop";
        //this returns a row as an (array/object)
        $row = $statement->fetch();

        //we can use the column name as a key to grab the item in that column
        $dbpass = $row["user_pass"];
        $user_id = $row["user_id"];


        //password_verify returns true if password is a match for hashed password in db
        if(password_verify($pass, $dbpass))
        {
            echo "password verified";

            //we will store this in the session so we know who is logged in
            $_SESSION["username"] = $user;
            $_SESSION["user_id"] = $user_id;

            //redirect to homepage of website
            header("Location: assign05_options.php");

        }
        else
        {
            echo "password bad1";
            $badlogin = true;
        }
    }

    else
    {
        echo "password bad2";
        $badlogin = true;
    }



}
}
catch(Exception $ex)
{


    echo "Error: $ex";
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
    <script type="text/javascript" src="assign05_login.js"></script>
    <title>Login Page</title>
</head>

<body>
    <!-- Inspired  video from 'Amazing Transparent Login...' video on youtube-->
    <div class="login_box">
        <h1>Login</h1>
        <form action="" method="POST" id="myform">
        <div class="textbox">
        <?php
            
            if ($badlogin == true)
            {

                echo "<p class ='invalid'> Invalid username or password </p>";

            }


?>
    
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" name="user" required>
        </div>
        <div class="textbox">
                  <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="pass" required>
        </div>
        </form>
       <!-- <input class="btn" type="button" name="" value="Sign In"> -->
        <button class="btn" onclick="submitForm()">Sign in</button>
        <button class="btn" type="button" name="" href='assign05_create.php' value="Create an Account">
            <a class="" style= 'color: aliceblue' style="text-decoration: none" href="assign05_create.php">Create An Account</a></button>

    </div>

</body>

</html>