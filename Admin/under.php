<?php
session_start();
$title = "";

?>
<?php 
$nom =$_POST['valider'];
$number=$_POST['number'];
$note = mt_rand(50,100);

echo $nom;
if ($number < $note ) :
    echo "vous n'avez pas valider aux examens";

elseif($number >= $note && $number < 100) :
else:
    echo "vous n'avez pas valider aux examens";
   

?>

<?php endif?>
<h1><?php echo 'BIENVENUE'; ?></h1>
<span class="hero"><p>merci pour votre coniance nous vous presentons nos produits suivants <br>
<ul>
    <ul>livre</ul>
    <ol>roman</ol>
    <ol>bande dessine</ol>
</ul>
</p>
</span>
<?php  echo "vous avez valider aux examens"; ?>
 
<?php echo "votre note est : <br>" .$note; ?>
<Form></Form>
<div>
    <input type="text" name="valider" id="valider" placeholder="Entrer votre nom">
</div>
<div>
    <input type="number" name="nombre" id="nombre" placeholder="Entrer le nombre">
</div>
<button type="submit">Valider</button>
