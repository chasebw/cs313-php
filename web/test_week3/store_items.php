<?php

session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <style>


    </style>

    <script>
        function ajax_FormSubmitter(form) {

            console.log('Running Ajax');
            //store form in form variable
            var $that = $(form);
            var that = $that;
            url = that.attr('action'),
                type = that.attr('method'),
                data = {};
            id = that.attr('id');

            //find anything with attribute name
            that.find('[name]').each(function(index, value) {

                var that = $(this),
                    name = that.attr('name'),
                    value = that.val();
                data[name] = value;
            });

            $.ajax({
                url: url,
                type: type,
                data: data,
                success: function(response) {
                    console.log("I Ran AJAX!");
                    console.log("The ID is");
                    console.log(id);

                    <?php
                    if (isset($_POST["cookie"])) {
                        $_SESSION["cookie"] = $_POST["cookie"];
                    }
                    ?>


                    <?php
                    if (isset($_POST["destroy"])) {
                        $_SESSION["destroy"] = $_POST["destroy"];

                        session_unset();
                        session_destroy();
                    }
                    ?>

                }
            });
            // this causes the form not to submit 
            return false;
        }
    </script>
    <style>
        #cookie1 {
            max-width: 200px;
            height: auto;
        }
    </style>
</head>
<body>
    <p id="output">
    </p>
    <div class="flex-container">
        <div>
            <img src="cookie.jpg" alt="cookie" id="cookie1">
            <br>
            <br>
            <form method="POST" action="" id="item_1">
                <button class="btn btn-success" name="cookie" value="item_1" onclick="ajax_FormSubmitter(this)">Buy This cookie</button>
            </form>
        </div>
        <?php

    if (isset($_SESSION["cookie"])) {
        echo "<p id='1'>My cookie is bought</p>";

        echo "<p id='2'>This cookie is item known as in inventory as:</p>";
        echo $_SESSION['cookie'];
    }
    ?>

    <?php
    if (!isset($_SESSION["cookie"])) {


        echo "<p>cookie is not set</p>";
    }
    ?>

    <div>
        <form method='POST' action="" id="destroy">
            <button class="btn btn-danger" name="destroy" value="true" onclick="ajax_FormSubmitter(this)">Destroy session</button>
        </form>
    </div>
    </div>

 <br>
 <br>
    <a class="btn btn-primary" href="checkout.php">I wanna checkout</a>

</body>

</html>