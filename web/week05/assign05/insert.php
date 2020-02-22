
<?php 

session_start();

$user_id = $_SESSION["user_id"];
$username = $_SESSION["username"];


    require "../../db/dbConnect.php";
    $db = get_db();

    //We are going to want to sanitize this... ew
    $excer_name = $_POST['name'];
    $excer_description = $_POST['description'];
    $date = date('Y-m-d');
    $date = strval($date);
    echo "date is $date";


    try{
    $insertEntry = $db->prepare("INSERT INTO public.excercise_log (excercise_name,excercise_explain,record_date,user_id)
    VALUES(:excer_name,:excer_description,'$date', (SELECT user_id FROM public.user WHERE username = :username))");

    $insertEntry->bindValue(':excer_name', "$excer_name");
    $insertEntry->bindValue(':excer_description', "$excer_description");
    $insertEntry->bindValue(':username', $username);

    $insertEntry->execute();

    }
     catch (Exception $ex) {
        echo "ERROR: $ex";
        die();
    }

    //redirect to a new page
    header("location: results.php");
    die();

    ?>



