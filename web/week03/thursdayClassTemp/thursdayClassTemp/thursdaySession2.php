<?php 
   // start session
   session_start();
   // save session variables into local variables
   $c = $_SESSION['favcolor'];
   $a = $_SESSION['favanimal'];
   $g = $_SESSION['favgame'];


?>
<h1><?php echo "Your favorite color is $c";
echo "Your favorite animal is $a";

?></h1>

<p><?= "Your favorite game is $g"?></p>

<?php 

if(isset($_POST['picture']))
{?>
   <h3> Again, from a form</h3>
   <img src="<?=$_SESSiON['pictureURL']?>" alt="cookie">



<?php 
}

?>