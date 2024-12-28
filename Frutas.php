<?php 
$lista = array("pera", "manzana", "frutilla","banana", "naranja", "tomate");
?>
<ul style="list-style-type: square;">
    <?php foreach ($lista as $fruta): ?>
        <li><?= $fruta ?></li>
    <?php endforeach; ?>
</ul>