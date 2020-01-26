<?php

session_start();



if(isset($_POST['item1']))
{
    unset($_SESSION["item1"]);
}
if(isset($_POST['buffalo']))
{
    unset($_SESSION["item2"]);
}
if(isset($_POST['tree']))
{
    unset($_SESSION["item3"]);
}
if(isset($_POST['dinner']))
{
    unset($_SESSION["item4"]);
}
if(isset($_POST['lillies']))
{
    unset($_SESSION["item5"]);
}
if(isset($_POST['cat']))
{
    unset($_SESSION["item6"]);
}
if(isset($_POST['lesson']))
{
    unset($_SESSION["item7"]);
}
if(isset($_POST['buddha1']))
{
    unset($_SESSION["item8"]);
}




    $price = array("buddha"=>"$5000","buffalo"=>"$1500","tree"=>"$200",
    "dinner"=>"$50","lillies"=>"$32","cat"=>"$80","lesson"=>"$40","buddha1"=>"200$");

    $name = array("buddha"=>"Ancient Buddha","buffalo"=>"Exotic Buffalo","tree"=>"Lone Tree",
    "dinner"=>"Dinner w/ Bednar","lillies"=>"Tiger Lilies","cat"=>"Sleeping Cat","lesson"=>"Chicken Taming Lesson","buddha1"=>"Golden Buddha");

    $total = 0;

    if(isset($_SESSION["item1"]))
    {

        $total += 5000;

    }

    if(isset($_SESSION["item2"]))
    {

        $total += 1500;

    }
    if(isset($_SESSION["item3"]))
    {

        $total += 200;

    }
    if(isset($_SESSION["item4"]))
    {

        $total += 50;

    }
    if(isset($_SESSION["item5"]))
    {

        $total += 32;

    }
    if(isset($_SESSION["item6"]))
    {

        $total += 80;

    }
    if(isset($_SESSION["item7"]))
    {

        $total += 40;

    }
    if(isset($_SESSION["item8"]))
    {

        $total += 200;

    }

  
   
   

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Confirmation Page</title>
    <meta charset="UTF-8">
    <meta name="description" content="Our Academics excel in many fronts">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styleassign03.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:500i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="js_assign03_a.js"></script>
</head>

<body>

    <header class="w3-container w3-teal">
        <h1>My Cart</h1>
    </header>
    <form>

        <div class="w3-container">
            <table class="w3-table-all">
                <tr class="w3-hover-green">
                    <td>Your selected items are:</td>
                    <td>
                        <ol> 
                            <form action="" method="POST"></form>
                            <?php foreach ($_SESSION as $key=>$value) {
                                if(isset($name[$value]) && isset($price[$value])){
                                echo "<li>" . "$name[$value]" . " || Price: " . "$price[$value]" . "</li>"; 
                                echo "<form action='' method='POST'>" . "<button type='submit' name='$value'" ."value='$key'>Remove Item</button></form>";
                                }
                            }
                            ?>
                            </form>
                        </ol>
                    </td>
                </tr>

                <form action="" method="POST"></form>

                <tr class="w3-hover-green">
                    <td>Total Cost:</td>
                    <td> <?= "$" . number_format($total,2);?> </td>
                </tr>

            </table>
            <p class="w3-container w3-teal confirming">Would you like to checkout?</p>
            <button type="button"class="w3-hover-green"><a href="assign03_b.php">CHECKOUT</a></button>
            <button type="button"class="w3-hover-blue"><a href="assign03.php">SHOP MORE</a></button>

    
    </div>

</body>

<?php



?>


</html>