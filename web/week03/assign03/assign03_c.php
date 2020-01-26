<?php

session_start();




$street = sanitize("street");
$_SESSION["street"] = $street;

$zip = sanitize("zip");
$_SESSION["zip"] = $zip;


$city = sanitize("city");
$_SESSION["city"] = $city;


$state = sanitize("state");
$_SESSION["state"] = $state;

$address = $street . " " . $city . "," . $state . " " . $zip;

$_SESSION["address"] = $address;


function sanitize($input)
{


    if (isset($_POST[$input])) {
        //store value
        $value = $_POST[$input];
        //remove whitespace
        $value = trim($value);
        //strip slashse
        $value = stripslashes($value);

        $value = htmlspecialchars($value);

        return $value;
    } else {
        return "";
    }
}

$total = 0;

if (isset($_SESSION["item1"])) {

    $total += 5000;
}

if (isset($_SESSION["item2"])) {

    $total += 1500;
}
if (isset($_SESSION["item3"])) {

    $total += 200;
}
if (isset($_SESSION["item4"])) {

    $total += 50;
}
if (isset($_SESSION["item5"])) {

    $total += 32;
}
if (isset($_SESSION["item6"])) {

    $total += 80;
}
if (isset($_SESSION["item7"])) {

    $total += 40;
}
if (isset($_SESSION["item8"])) {

    $total += 200;
}


$price = array("buddha"=>"$5000","buffalo"=>"$1500","tree"=>"$200",
    "dinner"=>"$50","lillies"=>"$32","cat"=>"$80","lesson"=>"$40","buddha1"=>"200$");

    $name = array("buddha"=>"Ancient Buddha","buffalo"=>"Exotic Buffalo","tree"=>"Lone Tree",
    "dinner"=>"Dinner w/ Bednar","lillies"=>"Tiger Lilies","cat"=>"Sleeping Cat","lesson"=>"Chicken Taming Lesson","buddha1"=>"Golden Buddha");



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>My Cart</title>
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
        <h1>Confirmation Form</h1>
    </header>

    <form id="form" action="assign03_d.php" method="POST">

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
                            <?php foreach ($_SESSION as $key => $value) {
                                if(isset($name[$value]) && isset($price[$value])){
                                echo "<li>" . $name[$value] . " || Price: " . $price[$value] . "</li>";
                                }
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


            <p class="w3-container w3-teal confirming">Would you like to confirm your order?</p>
            <form action="assign03_d.php" method="post">
            <input type="Submit" name="confirmation" value="Confirm">
            <button><a href="assign03_a.php">Return to Cart</a></button>
            </form>
    </div>

</body>

</html>