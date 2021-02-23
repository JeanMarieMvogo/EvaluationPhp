<!DOCTYPE html>

<html lang="fr">

<?php include "head.php" ?>

<body class="fond">

    <!-- en tête -->
    <nav class="navbar navbar-dark bg-dark ">
        <div class="container-fluid d-flex justify-content-center">
            <span class="navbar-brand mb-0 h1">LOGEMENT</span>
        </div>
    </nav>

    <div class="container w-50 mx-auto bg-light rounded ">

    <?php
        if(isset($_GET['erreur'])) 
        {
            $erreur = $_GET['erreur']; 
    ?>
        <div class="alert alert-danger"><?= $erreur == 2 ? "incorrect" : "Paramètres incorrects"?>"</div>
    <?php
    }
    ?>

        <!-- formulaire -->
        <form action="sauvegarde.php" method="post" class="w-75 mx-auto pt-3 mt-3" enctype="multipart/form-data">

            <div class="mb-3">
                <label for="titre" class="form-label">Titre</label>
                <input type="text" class="form-control" id="titre" name="titre">
            </div>
            <div class="mb-3">
                <label for="adresse" class="form-label">Adresse</label>
                <input type="text" class="form-control" id="adresse" name="adresse">
            </div>

            <div class="mb-3">
                <label for="cp" class="form-label">Code postal</label>
                <input type="number" class="form-control" id="cp" name="cp">
            </div>
            <div class="mb-3">
                <label for="ville" class="form-label">Ville</label>
                <input type="text" class="form-control" id="ville" name="ville">
            </div>
            
            <div class="mb-3 w-25">
                <label for="surface" class="form-label">Surface </label>
                <input type="number" class="form-control" id="surface" name="surface">
            </div>
            <div class="mb-3 w-25">
                <label for="prix" class="form-label">Prix</label>
                <input type="number" class="form-control" id="prix" name="prix">
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Photo</label>
                <input id ="image" type="file" class="form-control" name="image">
            </div>

            <div class="d-flex flex-column pe-4">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="type" id="location" checked value="Location">
                    <label class="form-check-label" for="location">
                    Location
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="type" id="vente" value="Vente">
                    <label class="form-check-label" for="vente">
                        Vente
                    </label>
                </div>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="5"></textarea>
            </div>

            <div class="mb-3 p-2">
                <button type="submit" class="btn btn-primary d-grid gap-2 col-6 mx-auto">envoyer</button>
            </div>
        </form>
    </div>

    <div class="mb-3 p-2"></div>

<!-- script bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<!-- script js -->
<script src="./js/app.js"></script>

</body>

</html>