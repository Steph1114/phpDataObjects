<?php
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$oneDragon = $c_dragon->getDragonById($id);
?>

<section>
    <article class="col-6 offset-3 d-flex justify-content-center">
        <div class="card col-6">
            <img class="card-img-top" src="../assets/image/dragon.jpg" alt="Card image cap">
            <div class="card-body">
                <h3 class="card-title">Nom : <?= $oneDragon->getDragon() ?></h3>
                <h3 class="card-title">Sexe : <?= $oneDragon->getSexe() ?></h3>
                <h3 class="card-title">Longueur : <?= $oneDragon->getLongueur() ?></h3>
                <h3 class="card-title">Nombre d'ecailles : <?= $oneDragon->getNombre_ecailles() ?></h3>
                <h3 class="card-title">Crache du feu : <?= $oneDragon->getCrache_feu() ?></h3>
                <h3 class="card-title">Comportement amoureux : <?= $oneDragon->getComportement_amoureux() ?></h3>
                <a href="?loc=home" class="btn btn-primary">Accueil</a>
            </div>
        </div>
    </article>
</section>