<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PREMIERS PAS AVEC BRACKETS</title>
        <meta name="description" content="An interactive getting started guide for Brackets.">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
  <table>
   <tr class="criteres">
       <td>id</td>
       <td>Nom du lien</td>
       <td>Date d'ajout</td>
       <td>Description</td>
       <td>Lien</td>
       <td>Hashtag</td>
   </tr>
   
   <?php
        foreach ($Utilisateur as $id => $ligne){
            $id = $ligne["id"];
            $nom_lien = $ligne["nom"];
            $date_ajout = $ligne["date_ajout"];
            $description = $ligne["commentaire"];
            $lien = $ligne["lien"];
            $hashtag = $ligne["hashtag"];
   
        echo "<tr>";
           echo "<td>$id</td>";
           echo "<td>$nom_lien</td>";
           echo "<td>$date_ajout</td>";
           echo "<td>$description</td>";
           echo "<td>$lien</td>";
           echo "<td>$hashtag</td>";
       echo "</tr>";
        }
   ?>
   
   
</table>
    </body>
</html>