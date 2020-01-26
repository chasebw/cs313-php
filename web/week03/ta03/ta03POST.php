

<?php 

$name = htmlspecialchars($_POST['name']);

$email = htmlspecialchars($_POST['email']);

$major = htmlspecialchars($_POST['major']);

$comments = htmlspecialchars($_POST['comments']);

$countries = $_POST['country'];

echo "<br>";


echo "Your name is: $name";

echo "<br>";


echo "Your email is: $email";

echo "<br>";

echo "Your major is: $major";

echo "<br>";

echo "Your comments are: $comments";

echo "<br>";

echo "The countries you have vistied are: ";

echo "<br>";

$country_change = array("North_America"=>"NA", "South_America"=>"SA", "Europe"=>"EU", "Asia"=>"Asia IS BOSS", "Australia"=> "AS", "Africa"=> "AF","Antartica"=> "AN");


foreach($countries as $country){

     


    if(isset($country_change[$country]))
    {
        echo $country_change[$country]; echo " ";

    }
}


?>