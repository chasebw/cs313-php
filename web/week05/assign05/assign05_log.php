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
  <form method='POST' action=results.php>
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">


    <p><strong> now put 'pushups' or 'pullups' * this will affect database querry</strong></p>
    <label for="workout_type">Workout Type</label>
    <p>Pushups<input type="radio" name="workout_type" value="pushups"  id="workout_type"></p>
    <p>Pullups<input type="radio" name="workout_type" value="pullups"  id="workout_type"></p>

    
   <!-- <input type="text" id="workout" name="workout" placeholder="Workout type"> --->



    <input type="submit" value="Submit">
    <!-- Add link back to stuff here-->
  </form>
</div>

</body>
</html>



