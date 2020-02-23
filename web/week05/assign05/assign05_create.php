<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="assign05_create.css">
    <script type="text/javascript" src="assign05_create.js"></script>
    <title>Document</title>
    <style>
      .error{
        display: none;
        color: red;
      }


      input#pass1, input#pass2 {
    width: 100%;
    border: 1px solid #ccc;
    background: #FFF;
    margin: 0 0 5px;
    padding: 10px;
}

button#sub_button:hover, .login:hover{
  background: #43A047;
  -webkit-transition: background 0.3s ease-in-out;
  -moz-transition: background 0.3s ease-in-out;
  transition: background-color 0.3s ease-in-out;


}


a {
    color: white;
}

button#sub_button, .login{

  cursor: pointer;
  width: 100%;
  border: none;
  background: #4CAF50;
  color: #FFF;
  margin: 0 0 5px;
  padding: 10px;
  font-size: 15px;

}



    </style>
</head>
<body>
<div class="container">  
  <form id="contact" action="create_account.php" method="post">
    <h3>Register for Account</h3>
    <h4>Create an Account</h4>
    <fieldset>
      <p class="error" id="errorfname">This field is required</p>
      <input placeholder="Your First Name" id="fname" name="first" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
    <p class="error" id="error;name">This field is required</p>
      <input placeholder="Your Last Name" id="lname" name="last" type="text" tabindex="2" required autofocus>
    </fieldset>
    <fieldset>
    <p class="error" id="errorusername">This field is required</p>
      <input placeholder="Username" type="text" name="user" id="user" tabindex="3" required autofocus>
    </fieldset>
    <fieldset>
      <p class="error" id="error1"> Your passwords do not match</p>
      <input type="password" placeholder="Password" type="text" id="pass1" tabindex="4" required autofocus>
      <p class="error" type="password" id="error2"> Your passwords do not match</p>
    </fieldset>
    <fieldset>
      <input type="password" placeholder="Password Verification" id="pass2" name="pass" type="text" tabindex="5" required autofocus>
    </fieldset>
    <fieldset>
      <button type="button" name="submit_button" class="submit1" id="sub_button" value="submitform" onclick="check()">Submit</button>
    </fieldset>
    <fieldset>
    <button class="login"><a style="text-decoration: none" style="color: white" href="assign05_login.php">Login Page</a></button>
    </fieldset>
</form>
    
</div>



</body>
</html>