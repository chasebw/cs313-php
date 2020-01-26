<?php
   // Start the session

   session_start();

   

?>
<!DOCTYPE html>
<html>
   <body>
      <?php

         // remove previous session variable
         unset($_SESSION['pictureURL']);
         // Set session variables
         $_SESSION["favcolor"] = "green";
         $_SESSION["favanimal"] = "elephant";
         $_SESSION["favgame"] = "Spore";




         // echo that variables have been set

         echo "Session variables have been set.";
?>
      <a href="thursdaySession2.php">Check the variables on another page</a>

      <h3>Let's make this with a form.</h3>

      <form action="" method="POST">
      <p>Name: <input type="text" name="picture"></p>
      <p><input type="submit" name="submit" value="submiteddatboy"></p>
      </form>
      <?php 
      // set session variables using a form

      if(isset($_POST['submit']))
      {
         $_SESSION['pictureURL'] = $_POST['picture'];

      }

      

      

      ?>
   </body>
</html>