<?php
session_start();
$title = "";

?>
<h1><?php echo 'BIENVENUE'; ?></h1>
<span class="hero"><p>merci pour votre coniance nous vous presentons nos produits suivants <br>
<ol>
    <ul>
        livre
    </ul>
    <ul>
        roman
    </ul>

</ol>
</p>
</span>
<div>
    <input type="text" name="valider" id="valider" placeholder="Entrer votre nom">
</div>
<div>
    <input type="number" name="nombre" id="nombre" placeholder="Entrer le nombre">
</div>
<button type="submit">Valider</button>