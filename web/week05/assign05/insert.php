
<?php 
    require "../../db/dbConnect.php";
    $db = get_db();

    //We are going to want to sanitize this... ew
    $name = $_POST['name'];
    $description = $_POST['description'];
    $date = date('Y-m-d');
    $date = strval($date);
    echo "date is $date";


    try{

    $insertEntry = $db->prepare("INSERT INTO excercise_log (user_id, excercise_name, excercise_explain, record_date) VALUES (1, :name, :description, $date)");

    $insertEntry->bindValue(':name', $name);
    $insertEntry->bindValue(':description', $description);

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



