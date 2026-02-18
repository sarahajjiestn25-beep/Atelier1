<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Liste d'Elements</title>
    </head>
    <body> 
       <h1>Ma liste d'Elements</h1>
    <?php
     $Elements = array("Prenom","Banane","Cerise","Date");
     echo "<h1>Bonjour , $nom !</h1>";
     echo "<ul>";
     foreach ($Elements as $Element){
        echo"<li>$element</li>";

     }
     echo"</ul>"
     ?>
     