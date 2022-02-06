<?php

$allDragon = $c_dragon->getAllDragon();
?>
<ul class="list-group col-6 offset-3 mt-3">
    <?php foreach ($allDragon as $key => $value) : ?>
        <a href="?loc=detail&id=<?= $value->getId_dragon() ?>">
            <li class="list-group-item"><?= $value->getDragon() ?></li>
        </a>
    <?php endforeach ?>
</ul>