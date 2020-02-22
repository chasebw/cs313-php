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

button#sub_button:hover{
  background: #43A047;
  -webkit-transition: background 0.3s ease-in-out;
  -moz-transition: background 0.3s ease-in-out;
  transition: background-color 0.3s ease-in-out;

  


}


button#sub_button{

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
      <input placeholder="Your First Name" name="first" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Last Name" name="last" type="text" tabindex="2" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Username" type="text" name="user" tabindex="3" required autofocus>
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
    </form>
    <p class="button1">Designed by a Student</p>
    <p class="button1"><a class="hoverclass" href="assign05_login.php">Login Page</a></p>
  </form>
</div>



</body>
</html>