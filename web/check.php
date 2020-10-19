<?php
require "common/dbconnect.php";
$db = get_db();



function validateInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


function searchQuery($name, $db)
{
    // $db=dbConnection();
    $stmt = $db->prepare('SELECT * FROM scout WHERE first_nsme = :name');
    //$name= '$name';
    $stmt->bindValue(':name', $name, PDO::PARAM_STR);
    $stmt->execute();
    $book = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $book;
}
// If the page loads as a POST request, look for this variable, and if it is set



if (isset($_POST['bookToFind'])) {
    // This is just for testing to make sure we have the correct text
    //echo "<h1>" . $_POST['bookToFind'] . "</h1>";
    // Validate & sanitize the input
    $searchText = validateInput($_POST['bookToFind']);
    // Now run the query to find the text in the database, and then save the results as a variable
    $books = searchQuery($searchText, $db);
    // Change the method name
    print_r($books);
}



?>
<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Scout page | James Chell | CSE 341 BYUI</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <header>
        <?php include 'common/header.php'; ?>
    </header>
    <main>
        <fieldset>
            <p>Your results: </p>
            <p>Scout name: <?= $name ?></p>
            <p>E-mail: <?= $email ?></p>
            <p>Cookie: <?= $cookie ?></p>
        </fieldset>
        </div>
    </main>
    <footer>
        <?php include 'common/footer.php'; ?>
    </footer>
</body>

</html>