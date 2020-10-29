<?php
    
    function Fetchlinks(){
    
        $nomserveur = "localhost";
        $userBD = "id15187806_damien";
        $MDP = "mot_de_passe";
        $BaseDonnee = "id15187806_biblio";
        
        try {
            $pdo = new PDO ("mysql:host=$nomserveur;dbname=$BaseDonnee", $userBD, $MDP);   //On instancie PDO
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Gestion des erreurs par exception
            echo "Connexion réussie";
        }
        catch(PDOExeption $e){
            echo "Connexion échouée";
            return;
        }
        
        $utils = $pdo->query('SELECT * FROM `Biblio` ORDER BY `id`'); //On sélectione tous les utilisateurs de notre table
        $mesResultat = array();
        $res = $utils->fetch();
        while($res != NULL){
            $id = $res['id'];
            $mesResultat[$id] = $res;
            $res = $utils->fetch();
        }
        return $mesResultat;
    }
?>