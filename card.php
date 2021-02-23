<?php include "head.php" ?>

<body>

    <div class="container">
        <?php
        if (isset($_GET['affiche'])) {
            $id = htmlspecialchars($_GET['affiche']);
           
            include "bdd.php";
            
            $count = $bdd->prepare('SELECT COUNT(*) FROM logement WHERE id_logement = ?');
            $count->execute(array($id));
            $compteur = $count->fetch();

            if ($compteur[0] > 0) {
                $plus = $bdd->prepare('SELECT * FROM logement WHERE id_logement = ?');
                $plus->execute(array($id));
                $row = $plus->fetch();

        ?>

            <div class="card" style="width: 40rem;">
                <div class="text-end p-2">
                        <a class="btn btn-danger" href="final.php">Fermer</a>
                 </div>
                <img src="./<?= $row['photo'] ?>" class="card-img-top" alt="">
                    <div class="card-body">
                    <h4><?= $row['titre']?></h4>
                    <h4><?= $row['adresse']?></h4>
                    <h4><?= $row['cp'] . ' ' . $row['ville']?></h4>
                    <h4><?= $row['surface']?></h4>
                    <h4><?= $row['prix']?></h4>
                    <h4><?= $row['type']?></h4>
                    <h4><?= $row['description']?></h4>
                    </div>
            </div>


        <?php
            } else header('Location: logement.php');
        } else header('Location: logement.php');

        ?>

    </div>
 
</body>

</html>