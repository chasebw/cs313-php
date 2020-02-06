<?php 


require "dbConnect.php";
$db = get_db();


$family_members = $db ->prepare("SELECT * FROM w5_family_members");
$family_members -> execute();


$relationships = $db-> prepare("SELECT w5_relationships.description FROM w5_relationships WHERE id = $relationship_id;");
$relationships->execute();

while ($fRow = $family_members->fetch(PDO::FETCH_ASSOC))
{

    $first_name = $fRow["first_name"];
    $last_name = $fRow["last_name"];
    $relationship_id = $fRow["relationship_id"];

}
echo " <p> $first_name $last_name is my $relationship ($relationship_id) </p>";



?>