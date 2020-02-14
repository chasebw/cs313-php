

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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="assign05_log.css">
    <title>Excercise Log</title>
</head>
<body>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<body>

<h3>Excercise Log</h3>

<div class="container">
  <form method='POST' action = insert.php>
    
    <label for="workout_type">Workout Type</label>
    <select name="name" id="workout_type">
      <?php
      
      try{
        $statement = $db -> prepare('Select DISTINCT excercise_name from excercise_log ORDER BY excercise_name');
        $statement -> execute();
        
        while($row = $statement->fetch(PDO::FETCH_ASSOC))
        {

          $excercise_name = $row['excercise_name'];
          echo "<option value=$excercise_name>$excercise_name</option>";

        }
      }
      catch(Exception $ex){

        echo "$ex";
      }

      ?>
      
    </select>

    <label for="description">Description</label> <p>4 sets of 15 repetitions...</p>
    <textarea name="description" id="" cols="30" rows="10" required placeholder="3 sets of 15...."></textarea>

    
   <!-- <input type="text" id="workout" name="workout" placeholder="Workout type"> --->


    <button class="mys"><a style= 'color: white' style="text-decoration: none" href="assign05_login.php">Back to Login</a></button>
    <input type="submit" value="Submit">
    <!-- Add link back to stuff here-->
  </form>
</div>

</body>
</html>



