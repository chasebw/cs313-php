
<?php 
    require "../../db/dbConnect.php";
    $db = get_db();

    //We are going to want to sanitize this... ew
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $pass = password_hash($pass, PASSWORD_DEFAULT);
    
    

    //echo "record name is $record_name";
    //echo "record amount is $record_amount";



    
    echo "date is $user and $pass";

    //put date in for this statement....
    // will need to store the username and password for this stuff in a session I think eventually

    try{
        
        
    $insert = $db->prepare("INSERT INTO ta_user (username,user_pass) VALUES (:user,:pass)");


    $insert->bindValue(':user', $user);
    $insert->bindValue(':pass', $pass);


    $insert->execute();




    }
     catch (Exception $ex) {
        echo "ERROR: $ex";
        die();
    }

    //redirect to a new page
    header("location: assign05_login.php");
    die();

    ?>



