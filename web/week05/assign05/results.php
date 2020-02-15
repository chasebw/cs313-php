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

    $workout = $_POST["workout_type"];
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



#Note this statement didn't work with only a single string being input but yo uhave to put the string in quotes

$statement = $db->prepare("SELECT excercise_name,excercise_explain,record_date FROM excercise_log WHERE user_id = 1 AND excercise_explain IS NOT NULL");
$statement->execute();



// Go through each result
// while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
//     // The variable "row" now holds the complete record for that
//     // row, and we can access the different values based on their
//     // name
//     $excercise_name = $row['excercise_name'];
//     $excercise_explain = $row['excercise_explain'];
//     $record_date = $row['record_date'];
// }

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto:500i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/d608f5aa42.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <style>
        .navbar {

            margin-bottom: 0;
        }
        
        footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    </style>
    <title>Excercise Journal</title>
</head>

<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="assign05_options.php">Home</a></li>
                    <li class="active"><a href="results.php">View Workouts</a></li>
                    <li><a href="assign05_log.php">Log Workouts</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="assign05_login.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="w3-container w3-teal mar">
        <h1>Excercise Journal</h1>
    </header>


    <div class="container">
        <h2>Your Workouts</h2>
        <p>This table displays your workouts:</p>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Excercise Name:</th>
                    <th>Excercise Description:</th>
                    <th>Recorded Date:</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                    // The variable "row" now holds the complete record for that
                    // row, and we can access the different values based on their
                    // name
                    $excercise_name = $row['excercise_name'];
                    $excercise_explain = $row['excercise_explain'];
                    $record_date = $row['record_date'];
                    echo "<tr>" . "<td>" . $excercise_name    . "</td>" .
                        "<td>" . $excercise_explain . "</td>" .
                        "<td>" . $record_date       . "</td>" .  "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>


    <p class="w3-container w3-teal confirming">All done</p>
    <form action="assign03_d.php" method="post">
        <button type="button" class="btn btn-primary"><a href="assign05_log.php">Return to Logging</a></button>
        <button type="button" class="btn btn-primary"><a href="assign05_options.php">Back to Menu</a></button>
        </div>


        </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Information</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Find Friends</a>
          </li>
          <li>
            <a href="#!">Motivation</a>
          </li>
          <li>
            <a href="#!">Contact</a>
          </li>
          <li>
            <a href="#!">Get Hired</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Helpful Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Follow Us</a>
          </li>
          <li>
            <a href="#!">Information</a>
          </li>
          <li>
            <a href="#!">Schedule</a>
          </li>
          <li>
            <a href="#!">Compete</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href=""> My Workout</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->



</body>

</html>