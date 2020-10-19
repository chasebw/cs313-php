<?php

session_start();


$price = array("item_1" => "$5000", "buffalo" => "$1500");


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>

    <p>The items you bought were</p>

    <?php

    if (isset($_SESSION['cookie'])) {

        echo "<p> Dude you bought my cookie </p>";
        $cookie = $_SESSION['cookie'];
    } else {

        echo "<p> Dude you didn't buy my cookie go back!</p>";
    }

    ?>


    <?php

    if (isset($cookie)) {

        echo "The price of my cookie is " . $price[$cookie];
    }



    ?>

    <a class="btn btn-primary" href="store_items.php">Go back to previous page</a>

</body>

</html>