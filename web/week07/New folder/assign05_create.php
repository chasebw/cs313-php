<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="assign05_create.css">
    <title>Document</title>
</head>
<body>
<div class="container">  
  <form id="contact" action="insert_pr.php" method="post">
    <h3>Register for Account</h3>
    <h4>Create an Account</h4>
    <fieldset>
      <input placeholder="Username" type="text" tabindex="3" name="user" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Password" type="text" tabindex="4" name="pass" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Password Verification" type="text" tabindex="5"  autofocus>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
    <p class="copyright">Designed by a Student</p>
    <p class="copyright"><a class="hoverclass" href="assign05_login.php">Login Page</a></p>
  </form>
</div>



</body>
</html>