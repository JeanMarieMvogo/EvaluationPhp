<?php 
        // connexion avec la base de données
    try 
    {
        $bdd = new PDO('mysql:host=localhost:8889;dbname=immobilier;charset=utf8', 'root', 'root');
    } catch (Exception $e) 
        {
            die($e->getMessage());
        }
?>
