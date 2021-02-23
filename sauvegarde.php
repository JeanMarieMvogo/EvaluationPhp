<?php

if(isset($_POST['titre']) and isset($_POST['adresse']) and isset($_POST['cp']) and isset($_POST['ville']) and isset($_POST['surface']) and isset($_POST['type']) and isset($_POST['prix'])  and $_POST['titre'] != "" and $_POST['adresse'] != "" and $_POST['cp'] != "" and $_POST['type'] != "" and $_POST['ville'] != "" and $_POST['surface'] != "" and $_POST['prix'] != "" )

{

   $titre = htmlspecialchars($_POST['titre']);
   $adresse = htmlspecialchars($_POST['adresse']);
   $cp = htmlspecialchars($_POST['cp']);

   
   if (!preg_match('#^((0[1-9])|([1-8][0-9])|(9[0-8])|(2A)|(2B))[0-9]{3}$#', $cp)) 
   {
       header('Location: logement.php?erreur=2');
   }

   $ville = htmlspecialchars($_POST['ville']);
   $surface = (int) htmlspecialchars($_POST['surface']);
   $prix = (int) htmlspecialchars($_POST['prix']);
   $type = htmlspecialchars($_POST['type']);
   $description = htmlspecialchars($_POST['description']) ?? "";

   if (isset($_FILES['image']) and $_FILES['image']['error'] == 0) 
   {
        if ($_FILES['image']['size'] <= 1000000) 
        {

            $infosfichier = pathinfo($_FILES['image']['name']);
            $extension_upload = $infosfichier['extension'];
            $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png', 'jfif');

            if (in_array($extension_upload, $extensions_autorisees)) {

                if (!is_dir('uploads')) {
                    mkdir('uploads', 0755, true);
                }
                $image = './uploads/logement_' . time() . '.' . $extension_upload ?? "";

                move_uploaded_file($_FILES['image']['tmp_name'], $image);
            }
        }
    }

    //connexion avec la base
    include "bdd.php";

    $sauveg = $bdd->prepare('INSERT INTO logement(titre, adresse, ville, cp, surface, prix, photo, `type`, `description`) VALUES (?,?,?,?,?,?,?,?,?)');
    $sauveg->execute(array($titre,$adresse,$ville,$cp,$surface,$prix,$image,$type,$description));
    header('Location: final.php');

} else
{
    header('Location: logement.php?erreur=1');
}
