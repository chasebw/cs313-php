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
  <link href="https://fonts.googleapis.com/css?family=Roboto:500i&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/d608f5aa42.js" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" type="text/css" href="assign05_log.css">

  <style>




    .navbar {

      margin-bottom: 0;
    }

    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }

    .mar {

      margin-bottom: 5px;
    }
    
  body{

    background: url('back.jpg') no-repeat;
    background-size: cover;

  }

  .container {
    background-color: none;

  }


  .label{

    color: aliceblue;
    font-weight: 500;
    font-size: calc(12px + 1vw);

  }

  .con{

    padding: 0.01em 16px;

  }
  

   
  </style>

  <title>Excercise Log</title>
</head>
  <!DOCTYPE html>
  <html>

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
            <li><a href="results.php">View Workouts</a></li>
            <li class="active"><a href="assign05_log.php">Log Workouts</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="assign05_login.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>




    <div class="container">
    <header class="label con mar">
      <h1>Excercise Log</h1>
    </header>
      <form method='POST' action=insert.php>

        <label class="label" for="workout_type">Workout Type</label>
        <select name="name" id="workout_type">
          <?php

          try {
            $statement = $db->prepare('Select DISTINCT excercise_name from excercise_log ORDER BY excercise_name');
            $statement->execute();

            while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {

              $excercise_name = $row['excercise_name'];
              echo "<option value=$excercise_name>$excercise_name</option>";
            }
          } catch (Exception $ex) {

            echo "$ex";
          }

          ?>

        </select>

        <label  class="label" for="description">Description</label>
        <textarea name="description" id="" cols="30" rows="10" required placeholder="3 sets of 15...."></textarea>


        <!-- <input type="text" id="workout" name="workout" placeholder="Workout type"> --->
        <button class="mys"><a style='color: white' style="text-decoration: none" href="assign05_options.php">Back to Menu</a></button>
        <button class="mys"><a style='color: white' style="text-decoration: none" href="assign05_login.php">Back to Login</a></button>

        <input type="submit" value="Submit">
        <!-- Add link back to stuff here-->
      </form>
    </div>




  </body>

  </html>