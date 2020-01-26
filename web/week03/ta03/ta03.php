<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<h3>Contact Form</h3>

<div class="container">
  <form action="ta03POST.php" method="POST">
    <label for="fname">First Name</label>
    <input type="text" id="name" name="name" placeholder="Your name..">

    <label for="Email">Email</label>
    <input type="text" id="email" name="email" placeholder="Your last name..">


    <label for="Major">Major: </label>
    <?php 

    $majors = array("Computer Science","Web Design and Development", "Computer Information Technology", "Computer Engineering");


    foreach($majors as $major){

      echo "<p><input type='radio' name='major' value='$major'>$major</p>";
    }


    ?>



    <label for="subject">Comments</label>
    <textarea id="subject" name="comments" placeholder="Write something.." style="height:200px"></textarea>

    <label for="continents">continents Visisted</label>
    <p><input type="checkbox" name="country[]" value="North_America">North America</p>
    <p><input type="checkbox" name="country[]" value="South_America">South America</p>
    <p><input type="checkbox" name="country[]" value="Europe">Europe</p>
    <p><input type="checkbox" name="country[]" value="Asia">Asia</p>
    <p><input type="checkbox" name="country[]" value="Australia">Australia</p>
    <p><input type="checkbox" name="country[]" value="Africa">Africa</p>
    <p><input type="checkbox" name="country[]" value="Antartica">Antartica</p>



    <input type="submit" value="Submit">
  </form>
</div>
</body>

</html>


    
</body>
</html>