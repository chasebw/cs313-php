<?php

try{
//if the username or password is not set from some reason we will go back to creation page
if( (!isset($_POST["user"]) ) || (!isset($_POST["pass"]) ) )
{


    header("Location: assign05_create.php");
	die(); // we always include a die after redirects.




}


//assign values
$user = $_POST["user"];
$pass = $_POST["pass"];

$user = htmlspecialchars($user);

//password now hashed
$pass = password_hash($pass, PASSWORD_DEFAULT);


require "../../db/dbConnect.php";
$db = get_db();

$statement = $db->prepare("INSERT INTO public.user (username,user_pass) VALUES (':username',':password')");


$statement->bindValue(':username', $user);

$statement->bindValue(':password', $pass);


$statement->execute();


//after we have inserted their username and password we will take them to the login.
header("Location: assign05_login.php");
die(); 
}
catch(Exception $ex)
{
    echo "Exception is $ex";
    // die add here.


}















?>