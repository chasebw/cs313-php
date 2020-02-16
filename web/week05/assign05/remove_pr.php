<?php 

    require "../../db/dbConnect.php";

    //All the code will only run if remove is set...
    if(isset($_POST['remove'])){

        $remove = $_POST['remove'];
        //this might cause an error
        //casting this to an int just in case...
        $remove = (int)$remove;




    $db = get_db();

    


    try{
    $insertEntry = $db->prepare("DELETE FROM personal_record WHERE personal_record_id = :remove");

    $insertEntry->bindValue(':remove', $remove);
    $insertEntry->execute();

    }
     catch (Exception $ex) {
        echo "ERROR: $ex";
        die();
    }

}

    //redirect to a new page
    header("location: pr_results.php");
    die();



    ?>