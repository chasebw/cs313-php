<?php
require "common/dbconnect.php";
$db = get_db();
?>
<?php
session_start();
// if (!isset($_SESSION['loggedin'])|| $_SESSION['loggedin'] == false) {
//     header ("Location: scout.php");
// }
?>
<?php
// function validateInput($data) {
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
// }

$add_first_name = $_POST['add_first_name'];
$add_last_name = $_POST['add_last_name'];
$add_date_of_birth = $_POST['add_date_of_birth'];
$add_phone = $_POST['add_phone'];
$add_email = $_POST['add_email'];
$add_user_name = $_POST['add_user_name'];
$add_password = $_POST['add_password'];
$db = get_db();
try {
    $query = "INSERT INTO scout(first_name, last_name, date_of_birth, phone, email, user_name, password)
VALUES(:first_name, :last_name, :date_of_birth, :phone, :email, :user_name, :password)";
    $statement = $db->prepare($query);
    // Now we bind the values to the placeholders. This does some nice things
    // including sanitizing the input with regard to sql commands.
    $statement->bindValue(':first_name', $add_first_name, PDO::PARAM_STR);
    $statement->bindValue(':last_name', $add_last_name, PDO::PARAM_STR);
    $statement->bindValue(':date_of_birth', $add_date_of_birth, PDO::PARAM_STR);
    $statement->bindValue(':phone', $add_phone, PDO::PARAM_INT);
    $statement->bindValue(':email', $add_email, PDO::PARAM_STR);
    $statement->bindValue(':user_name', $add_user_name, PDO::PARAM_STR);
    $statement->bindValue(':password', $add_password, PDO::PARAM_STR);
    $statement->execute();
    // get the new id
    $scout_id = $db->lastInsertId("scout_id_seq");
} catch (Exception $ex) {
    echo "Error with DB. Details: $ex";
    die();
}
// finally, redirect them to a new page to actually show the topics
header("Location: show-topics.php");
die(); // we always include a die after redirects. In this case, there would be no
// harm if the user got the rest of the page, because there is nothing else
// but in general, there could be things after here that we don't want them
// to see.
?>
<!DOCTYPE HTML>
<html lang="en-us">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cookie page | James Chell | CSE 341 BYUI</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <header>
        <?php include 'common/header.php'; ?>
    </header>
    <section id="gallery">
        <form method="post" action="">
            <fieldset>
                <legend><span>Add New Scout</span></legend>
                <!-- <div><h2>Hello <?php echo $_SESSION['username']; ?></h2></div> -->
                <div class="row">
                    <div class="column">
                        <label><span>First Name: </span><br>
                            <input name="add_first_name" type="text" value="" id="add_first_name" placeholder="First Name">
                        </label><br><br>
                        <label><span>Last Name: </span><br>
                            <input name="add_last_name" type="text" value="" id="add_last_name" placeholder="Last Name">
                        </label><br><br>
                        <label><span>Date of Birth: </span><br>
                            <input name="add_date_of_birth" type="text" value="" id="add_date_of_birth" placeholder="YYYY-MM-DD">
                        </label><br><br>
                        <label><span>Phone Number: </span><br>
                            <input name="add_phone" type="text" value="" id="add_phone" placeholder="">
                        </label><br><br>
                        <div><a href="logout.php" id="logoutBtn">Logout</a></div><br>
                    </div>
                    <div>
                        <label><span>Email: </span><br>
                            <input name="add_email" type="text" value="" id="add_email" placeholder="">
                        </label><br><br>
                        <label><span>User Name: </span><br>
                            <input name="add_user_name" type="text" value="" id="add_user_name" placeholder="">
                        </label><br><br>
                        <label><span>Password: </span><br>
                            <input name="add_password" type="text" value="" id="add_password" placeholder="">
                        </label><br><br>
                    </div>
                    <input type="submit" value="Add Scout" class="getBtn">
                    <input type="hidden" name="action" value="register"><br>
            </fieldset>
        </form>
    </section>
    <footer>
        <?php include 'common/footer.php'; ?>
    </footer>
</body>

</html>