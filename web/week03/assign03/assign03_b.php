<?php

session_start();

?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit], .button1{
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: center;
  width: 100%
}

input[type=submit]:hover, .button1:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<h2>Checkout Page</h2>
<form method="POST" action="assign03_c.php">
<div class="container">
    <div class="row">
      <div class="col-25">
        <label for="fname">Street Address</label>
      </div>
      <div class="col-75">
        <input type="text" id="street" name="street" placeholder="292323 Wallaby Way" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Zip Code</label>
      </div>
      <div class="col-75">
        <input type="text" id="zip" name="zip" placeholder="83440" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">City</label>
      </div>
      <div class="col-75">
      <input type="text" id="city" name="city" placeholder="Salt Lake City" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">State</label>
      </div>
      <div class="col-75">
      <input type="text" id="state" name="state" placeholder="Utah" required>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
      <br>
      <br>
      <button class="button1 w3-hover-blue"> <a href="assign03_a.php">Return to Cart</a></button>
    </div>
  </form>
</div>

</body>
</html>