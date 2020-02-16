
<?php 
    require "../../db/dbConnect.php";
    $db = get_db();

    //We are going to want to sanitize this... ew
    $record_name = $_POST['record_name'];
    $record_amount = $_POST['record_amount'];

    echo "record name is $record_name";
    echo "record amount is $record_amount";



    $date = date('Y-m-d');
    $date = strval($date);
    echo "date is $date";

    //put date in for this statement....
    // will need to store the username and password for this stuff in a session I think eventually

    try{
    $insertEntry = $db->prepare("INSERT INTO public.personal_record 
    (user_id,contact_id,record_name,record_amount,record_date)
    VALUES 
    ((SELECT user_id FROM public.user WHERE username ='username47'),
    (SELECT contact_id FROM public.contact WHERE user_id= (SELECT user_id FROM public.user WHERE username = 'username47')),
    '$record_name',
     '$record_amount', 
     '$date')");

    //$insertEntry->bindValue(':rec_name', "$record_name");
    //$insertEntry->bindValue(':rec_amount', $record_amount);

    $insertEntry->execute();

    }
     catch (Exception $ex) {
        echo "ERROR: $ex";
        die();
    }

    //redirect to a new page
    header("location: pr_results.php");
    die();

    ?>



