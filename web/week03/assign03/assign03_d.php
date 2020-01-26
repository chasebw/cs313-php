
<?php


session_start();

$street = $_SESSION["street"];
$zip = $_SESSION["zip"];
$city = $_SESSION["city"];
$state = $_SESSION["state"];

$address = $street . " " . $city ."," . $state . " " . $zip;

$num = 1;

$price = array("buddha"=>"$5000","buffalo"=>"$1500","tree"=>"$200",
"dinner"=>"$50","lillies"=>"$32","cat"=>"$80","lesson"=>"$40","buddha1"=>"200$");

$name = array("buddha"=>"Ancient Buddha","buffalo"=>"Exotic Buffalo","tree"=>"Lone Tree",
"dinner"=>"Dinner w/ Bednar","lillies"=>"Tiger Lilies","cat"=>"Sleeping Cat","lesson"=>"Chicken Taming Lesson","buddha1"=>"Golden Buddha");

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
    <header class="w3-container w3-teal">
        <h1>Your Purchased items are listed below:</h1>
    </header>

    <form id="form" action="assign12_a.php" method="GET">

        <div class="w3-container">
            <table class="w3-table-all">

                <tr class="w3-hover-blue">
                    <td>Address</td>
                    <td><?= $address ?></td>
                </tr>
                <tr>


                

                <?php

                
                if(isset($_SESSION["item1"]))
                {

                    $item1 = $_SESSION["item1"];
                    $item1 =  $name[$item1];
                    echo "<tr class='w3-hover-blue'><td> Item $num:</td><td>$item1</td></tr>";

                    $num +=1;

                
                }


                if(isset($_SESSION["item2"]))
                {

                    $item2 = $_SESSION["item2"];
                    $item2 =  $name[$item2];
                    echo "<tr class='w3-hover-blue'><td> Item $num:</td><td>$item2</td></tr>";

                    $num +=1;

                
                }

                if(isset($_SESSION["item3"]))
                {

                    $item3 = $_SESSION["item3"];
                    $item3 =  $name[$item3];
                    echo "<tr class='w3-hover-blue'><td> Item $num:</td><td>$item3</td></tr>";

                    $num +=1;

                
                }

                if(isset($_SESSION["item4"]))
                {

                    $item4 = $_SESSION["item4"];
                    $item4 =  $name[$item4];
                    echo "<tr class='w3-hover-blue'><td> Item $num:</td><td>$item4</td></tr>";

                    $num +=1;

                
                }

                if(isset($_SESSION["item5"]))
                {

                    $item5 = $_SESSION["item5"];
                    $item5 =  $name[$item5];
                    echo "<tr class='w3-hover-blue'><td> Item $num:</td><td>$item5</td></tr>";

                    $num +=1;

                
                }

                if(isset($_SESSION["item6"]))
                {

                    $item6 = $_SESSION["item6"];
                    $item6 =  $name[$item6];
                    echo "<tr class='w3-hover-blue'><td> Item $num:</td><td>$item6</td></tr>";

                    $num +=1;

                
                }

                if(isset($_SESSION["item7"]))
                {

                    $item7 = $_SESSION["item7"];
                    $item7 =  $name[$item7];
                    echo "<tr class='w3-hover-blue'><td> Item $num:</td><td>$item7</td></tr>";

                    $num +=1;

                
                }

                if(isset($_SESSION["item8"]))
                {

                    $item8 = $_SESSION["item8"];
                    $item8 =  $name[$item8];
                    echo "<tr class='w3-hover-blue'><td> Item $num:</td><td>$item8</td></tr>";

                    $num +=1;

                
                }

               

                ?>
                
                </tr>
            </table>

            



</body>

</html>