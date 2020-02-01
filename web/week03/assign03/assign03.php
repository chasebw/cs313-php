<?php


class item
{

  public $name;
  public $price;
  public $quant;

  function set_item($name, $price, $quant)
  {
    $this->name = $name;
    $this->price = $price;
    $this->quant = $quant;
  }
}

class cart
{

  public $cart;
}

session_start();



?>

<!DOCTYPE html>
<html>

<head>
  <title>Purchaseable Items</title>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
  <script src="javascriptassign03.js"></script>
  <style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: "Karma", sans-serif
    }

    .w3-bar-block .w3-bar-item {
      padding: 20px
    }
  </style>
</head>

<body>


  <!-- The code for the design of this page was borrowed from a w3schools template -->
  <!-- Top menu -->
  <div class="w3-top">
    <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
      <div class="w3-button w3-padding-16 w3-left">☰</div>
      <div class="w3-right w3-padding-16 w3-button" onclick="submitform()"> <a href="assign03_a.php">View My Cart</a></div>
      <div class="w3-center w3-padding-16">Purchaseable Items</div>
    </div>
  </div>

  <!-- !PAGE CONTENT! -->
  <div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">


    <!-- First Photo Grid-->
    <div class="w3-row-padding w3-padding-16 w3-center" id="items">
      <div class="w3-quarter">
        <img src="ancient-buddha-art piece.jpg" alt="buddha" style="width:100%">
        <h3>$5000 - Ancient Buddha Art Piece</h3>
        <p>This piece is an essential part of japanese history.</p>
        <form action="" id="form1" method="POST">
          <p class="add w3-container w3-teal w3-hover-blue" onclick="checkit('item1')">Add item to Cart</p>
          <input type="checkbox" name="item1" value="buddha" id="item1" onchange="if(ischeck(this)) submitform()">
      </div>
      <div class="w3-quarter">
        <img src="exotic-asian-buffalo.jpg" alt="buffalo" style="width:100%">
        <h3>$1500 - Exotic Asian Buffalo </h3>
        <p>The Exotic Asian buffalo is known for its loyalty to its master.</p>
        <p class="add w3-container w3-teal w3-hover-blue" onclick="checkit('item2')">Add item to Cart</p>
        <input type="checkbox" name="item2" value="buffalo" id="item2" onchange="if(ischeck(this)) submitform()">
      </div>
      <div class="w3-quarter">
        <img src="elegant_tree.jpg" alt="tree" style="width:100%">
        <h3>$200 - A Friendly, Elegant Australian Lone Tree</h3>
        <p>This tree is healthy and has the ability to produce oxygen from carbon dioxide.</p>
        <p class="add w3-container w3-teal w3-hover-blue" onclick="checkit('item3')">Add item to Cart</p>
        <input type="checkbox" name="item3" value="tree" id="item3" onchange="if(ischeck(this)) submitform()">
      </div>
      <div class="w3-quarter">
        <img src="dinner_with_bednar.jpg" alt="bednar_dinner" style="width:100%">
        <h3>$50 - A Nice Dinner with Elder David A Bednar</h3>
        <p>A meal and conversation with a well known church officer.</p>
        <p class="add w3-container w3-teal w3-hover-blue" onclick="checkit('item4')">Add item to Cart</p>
        <input type="checkbox" name="item4" value="dinner" id="item4" onchange="if(ischeck(this)) submitform()">
      </div>
    </div>

    <!-- Second Photo Grid-->
    <div class="w3-row-padding w3-padding-16 w3-center">
      <div class="w3-quarter">
        <img src="pink-tiger-lilies.jpg" alt="Pink_tiger_lillies" style="width:100%">
        <h3>$32 - Fresh Pink Tiger Lillies</h3>
        <p>These lillies are especially known for their smell and beauty they are a good idea as a gift.</p>
        <p class="add w3-container w3-teal w3-hover-blue" onclick="checkit('item5')">Add item to Cart</p>
        <input type="checkbox" name="item5" value="lillies" id="item5" onchange="if(ischeck(this)) submitform()">
      </div>
      <div class="w3-quarter">
        <img src="sleeping_cat.jpg" alt="Sleeping_Cat" style="width:100%">
        <h3>$80 - A Graceful, Lightly Sleeping Cat</h3>
        <p>A Soft warm loving friend that enjoys long naps in the sun and by the fireplace. A joy in anyone's home.</p>
        <p class="add w3-container w3-teal w3-hover-blue" onclick="checkit('item6')">Add item to Cart</p>
        <input type="checkbox" name="item6" value="cat" id="item6" onchange="if(ischeck(this)) submitform()">
      </div>
      <div class="w3-quarter">
        <img src="indonesian_chicken_taming_lessons.png" alt="Indonesian_chicken_taming_lesson" style="width:100%">
        <h3>$40 - Indonesian Chicken Taming Lesson</h3>
        <p>The opportunity and experience to learn from a expert about Indonesian Chicken Taming.</p>
        <p class="add w3-container w3-teal w3-hover-blue" onclick="checkit('item7')">Add item to Cart</p>
        <input type="checkbox" name="item7" value="lesson" id="item7" onchange="if(ischeck(this)) submitform()">
      </div>
      <div class="w3-quarter">
        <img src="golden_gautama_buddha.jpg" alt="Croissant" style="width:100%">
        <h3>$200 - Golden Gautama Buddha Statue</h3>
        <p>A solid gold statue of the famous Siddhartha Gautama, believed to have reached enlightenment.</p>
        <p class="add w3-container w3-teal w3-hover-blue" onclick="checkit('item8')">Add item to Cart</p>
        <input type="checkbox" name="item8" value="buddha1" id="item8" onchange="if(ischeck(this)) submitform()">
        </form>
      </div>
    </div>

    <?php





    if (isset($_POST["item1"])) {
      $_SESSION["item1"] = "buddha";
    }
    if (isset($_POST["item2"])) {
      $_SESSION["item2"] = "buffalo";
    }

    if (isset($_POST["item3"])) {
      $_SESSION["item3"] = "tree";
    }

    if (isset($_POST["item4"])) {
      $_SESSION["item4"] = "dinner";
    }

    if (isset($_POST["item5"])) {
      $_SESSION["item5"] = "lillies";
    }
    if (isset($_POST["item6"])) {
      $_SESSION["item6"] = "cat";
    }
    if (isset($_POST["item7"])) {
      $_SESSION["item7"] = "lesson";
    }
    if (isset($_POST["item8"])) {
      $_SESSION["item8"] = "buddha1";
    }




    function sanitize($input)
    {


      if (isset($_GET[$input])) {
        //store value
        $value = $_GET[$input];
        //remove whitespace
        $value = trim($value);
        //strip slashse
        $value = stripslashes($value);

        $value = htmlspecialchars($value);

        return $value;
      } else {
        return "";
      }
    }


    ?>


</body>

</html>