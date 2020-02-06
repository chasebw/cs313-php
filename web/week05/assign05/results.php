<?php
/**********************************************************
* File: results.php
* Author: Chase Wilcox
* 
* Description: This file shows an example of how to query a
*   PostgreSQL database from PHP.
***********************************************************/

require "C:\Users\chase\cs313-php\web\db\dbConnect.php";
$db = get_db();

?>



<?php

/*
Later going to have to join table and depending on the username of the user we can 
get the data for that user instead of contact = 1 here or some otehr method

*/
$statement = $db ->prepare("SELECT first_name, last_name FROM contact WHERE contact_id = 1");
$statement->execute();

$row = $statement -> fetch(PDO::FETCH_ASSOC);
$first_name = $row['first_name'];
$last_name = $row['last_name'];





$statement = $db->prepare("SELECT excercise_name,excercise_explain,record_date FROM excercise_log");
$statement->execute();

// Go through each result
while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
	// The variable "row" now holds the complete record for that
	// row, and we can access the different values based on their
	// name
	$excercise_name[] = $row['excercise_name'];
	$excercise_explain[] = $row['excercise_explain'];
	$record_date[] = $row['record_date'];
	//echo "<p><strong>$book $chapter:$verse</strong> - \"$content\"<p>";
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
                    <td>Your selected items are:</td>
                    <td>
                        <ol>

                        <li>Hi</li>
                        <li>dude</li>
                            <?php  $i=0;     ?>
                            <?php foreach ($excercise_name as $name) {
                                echo "<li>" . $name . " || Explain: " . $excercise_explain[$i] . "|| Record Date:". $record_date[$i] . "</li>";
                                $i++;
                            }
                            ?>
                        </ol>
                    </td>
                </tr>
                <tr class="w3-hover-green">
                    <td>Total Cost:</td>
                    <td> <?= "$" . number_format($total, 2) ?> </td>
                </tr>

            </table>


            <p class="w3-container w3-teal confirming">All done</p>
            <form action="assign03_d.php" method="post">
            <button><a href="assign05_log.php">Return to Logging</a></button>
    </div>

</body>
</html>