

<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Logement</title>

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- style -->
    <link rel="stylesheet" href="./style.css">


</head>

<body>

    <nav class="navbar navbar-dark bg-dark ">
        <div class="container-fluid d-flex justify-content-center">
            <span class="navbar-brand mb-0 h1">Liste</span>
        </div>
    </nav>

    <div class="container">
    <table class="table mt-5">
            <thead>
                <tr> 
                    <th scope="col">Titre</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">Ville</th>
                    <th scope="col">Cp</th> 
                    <th scope="col">Surface</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Type</th>
                    <th scope="col">Description</th>
                </tr>
            </thead>
            <tbody>
                <?php

                //ouverture de la base
                include "bdd.php";

                $affiche = $bdd->query('SELECT * FROM logement');
                while ($row = $affiche->fetch()) {
                ?>
                    <tr>
                        <td><a href="card.php?affiche=<?= $row['id_logement'] ?>"><?= $row['titre'] ?></a></td>
                        <td><?= $row['adresse'] ?></td>
                        <td><?= $row['ville'] ?></td>
                        <td><?= $row['cp'] ?></td>
                        <td><?= $row['surface'] ?></td>
                        <td><?= $row['prix'] ?></td>
                        <td><img src="<?= $row['photo'] ?? './uploads/default.jpg' ?> " alt="" class="image"></td>
                        <td><?= $row['type'] ?></td>
                        <td><?= strlen($row['description']) >= 50 ? substr($row['description'], 0, 40) . "..." : $row['description'] ?></td>

                    </tr>


                <?php
                }
                ?>
                
            </tbody>
        </table>

    </div>

</body>
</html>