<?php

/**********************************************************
 * File: results.php
 * Author: Chase Wilcox
 * 
 * Description: This file shows an example of how to query a
 *   PostgreSQL database from PHP.
 ***********************************************************/

require "../../db/dbConnect.php";

$db = get_db();

?>

<?php

$workout = "pullups";

if (isset($_POST["workout_type"])) {
    if ($_POST["workout_type"] == 'pushups' || $_POST["workout_type"] == 'pullups') {
        $workout = $_POST["workout_type"];

    }
}


?>




<?php

/*
Later going to have to join table and depending on the username of the user we can 
get the data for that user instead of contact = 1 here or some otehr method

*/
$statement1 = $db->prepare("SELECT first_name, last_name FROM contact WHERE contact_id = 1");
$statement1->execute();

$row1 = $statement1->fetch(PDO::FETCH_ASSOC);
$first_name = $row1['first_name'];
$last_name = $row1['last_name'];





$statement = $db->prepare("SELECT excercise_name,excercise_explain,record_date FROM excercise_log WHERE user_id = 1 AND UPPER(excercise_name) LIKE UPPER($workout)");
$statement->execute();



// Go through each result
while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    // The variable "row" now holds the complete record for that
    // row, and we can access the different values based on their
    // name
    $excercise_name = $row['excercise_name'];
    $excercise_explain = $row['excercise_explain'];
    $record_date = $row['record_date'];
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto:500i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Excercise Journal</title>
</head>

<body>

    <header class="w3-container w3-teal">
        <h1>Excercise Journal</h1>
    </header>


    <div class="w3-container">
        <table class="w3-table-all">

            <tr class="w3-hover-blue">
                <td>Address</td>
                <td><?= $address ?></td>
            </tr>
            <tr class="w3-hover-green">
                <td>Your Journal Items are:</td>
                <td>
                    <ol>

                        <?php $i = 0;     ?>
                        <?php while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                            // The variable "row" now holds the complete record for that
                            // row, and we can access the different values based on their
                            // name
                            $excercise_name = $row['excercise_name'];
                            $excercise_explain = $row['excercise_explain'];
                            $record_date = $row['record_date'];
                            echo "<li>" . "Name: " . $first_name . $last_name  . "|| Excercise Name: " . $excercise_name .
                                " || Excercise-Content: " . $excercise_explain .  "|| Record Date:" . $record_date . "</li>";
                        }


                        ?>
                    </ol>
                </td>
            </tr>
            <tr class="w3-hover-green">
                <td>Total something...:</td>
                <td> hi </td>
            </tr>

        </table>


        <p class="w3-container w3-teal confirming">All done</p>
        <form action="assign03_d.php" method="post">
            <button><a href="assign05_log.php">Return to Logging</a></button>
    </div>

</body>

</html>