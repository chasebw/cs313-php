
<?php 

session_start();


$user_id = $_SESSION["user_id"];

$username = $_SESSION["username"];





    require "../../db/dbConnect.php";
    $db = get_db();

    //We are going to want to sanitize this... ew
    $record_name = $_POST['record_name'];
    $record_amount = $_POST['record_amount'];

    //echo "record name is $record_name";
    //echo "record amount is $record_amount";



    $date = date('Y-m-d');
    $date = strval($date);
    echo "date is $date";

    //put date in for this statement....
    // will need to store the username and password for this stuff in a session I think eventually

    try{
    $insert = $db->prepare("INSERT INTO public.personal_record 
    (record_name,record_amount,user_id,contact_id,record_date)
    VALUES 
    (:rec_name, :rec_amount,(SELECT user_id FROM public.user WHERE username = :username),
    (SELECT contact_id FROM public.contact WHERE user_id= (SELECT user_id FROM public.user WHERE username = :username)), '$date')");

    

    $insert->bindValue(':rec_name', "$record_name");
    $insert->bindValue(':rec_amount', "$record_amount");
    $insert->bindValue(':username',$username);

    $insert->execute();

    }
     catch (Exception $ex) {
        echo "ERROR: $ex";
        die();
    }

    //redirect to a new page
    header("location: pr_results.php");
    die();

    ?>



