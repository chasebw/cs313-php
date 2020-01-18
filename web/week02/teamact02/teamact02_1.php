<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="stylesheet.css">


</head>
<body>

<?php 


echo "<h1>PHP Team Activity <h1>";

for ($x = 1; $x < 11; $x++) { 

    if($x % 2 == 0)
    {
    echo "<div style='color:red'> This is div#$x</div>";
    }
    else
    {
    echo "<div style='color:black'> This is div#$x</div>";
    }

}



?>




    
</body>
</html>