
<?php


session_start();

$street = $_SESSION["street"];
$zip = $_SESSION["zip"];
$city = $_SESSION["city"];
$state = $_SESSION["state"];

$address = $street . " " . $city ."," . $state . " " . $zip;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Submission</title>
    <meta charset="UTF-8">
    <meta name="description" content="Our Academics excel in many fronts">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="stylesheet.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:500i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <script src="javascript.js"></script>
</head>

<body>

    <header class="w3-container w3-teal">
        <h1>Your has been confirmed and will be sent to the following address below: </h1>
    </header>

    <form id="form" action="assign12_a.php" method="GET">

        <div class="w3-container">
            <table class="w3-table-all">

                <tr class="w3-hover-blue">
                    <td>Address</td>
                    <td><?= $address ?></td>
                </tr>
            </table>



</body>

</html>