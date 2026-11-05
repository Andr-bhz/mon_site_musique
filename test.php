<!-- <?php 
$nom=var_dump($_SESSION[""]);
$email=Filter_var("andre@example.com", FILTER_SANITIZE_EMAIL);

iF($nom == $_POST['nom'] ){
    echo "Nom est correct";
}
else{
    echo "Nom est incorrect";
}

IF
($email == $_POST['email'] ){
    echo "Email est correct";
}
else{
    echo "Email est incorrect";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <Form method="POST" action="">
        <div>
            <label for="nom">Nom:</label>
            <input type="text" name="nom" id="nom" value="">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="">
        </div>
        <button type="submit">Submit</button>
    </Form>
</body>
</html> -->
<?php
$cars = array("Volvo", "BMW", "Toyota"); 

;var_dump($cars);
$vrai = $_POST['chiffre'];
if($vrai <= 50 ){
	echo "le nombre exacte est superieur a la valeur ecrit ";
}
if($vrai >= 55){
	echo "le nombre exacte est inferieur a la valeur ecrit ";
    }
elseif($vrai == 54 ){
	echo "vous avez trouver la vrai valeur";
}
?>

</pre>
<form>
<div>
	<input type="chiffre" id="nombre" name="chiffre" placeholder="Entrer un chifffre entre 0 et 100" >
</div>
<button type="submit">Envoyer</button>
</form>