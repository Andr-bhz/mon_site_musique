<?php 
$cookie_name = 'username';
$cookie_value = 'john Doe';
setcookie($cookie_name,$cookie_value,time() + (86400 * 2) , '/')

// if (isset($_COOKIE[$cookie_name])) {
//     echo "cookie '" .  $cookie_name  .  "' is set!<br>";
//     echo "Value is: " . $_COOKIE[$cookie_name];
// }
?>
<?php
if(empty($_POST['name'])) {
    echo "veuiller remplir le nom";
}
else{
    echo "bienvenue";
}
?>
?>

<?php
// $email = $_POST['email'];
// echo json_encode($email);

// var_dump($_COOKIE);
$nom = null;
if(!empty($_COOKIE['utilisateur'])){
    $nom = $_COOKIE['utiloisateur'];
}
if(!empty($_POST['name'])){
    setcookie('utilisateur',$_POST['name']);
}
?>
<?php 
if($nom): ?>
    <h1>Bonjour <?php echo $nom ?></h1>
<?php else: ?>
<?php endif ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MON_SITE_MUSIQUE</title>
    <link rel="stylesheet" href="./Admin.css">
</head>
<body>    
<Form action="./conFig/under.php"  method="POST">>
    <div>
        <label for="nom ">NOM:</label>
        <input type="text" name="name" id="name" placeholder="Entrer votre nom">
    </div>
    <div>
        <label for="email">EMAIL:</label>
        <input type="text" name="email" id="email" placeholoder="Entrer votre email">
    </div>

    <div>
        <label for="">male</label>
        <input type="radio" name="male" id="male" value="male">
        <label for="">Femme</label>
        <input type="radio" name="Femme" id="Femme" value="Femme">
    </div>
        <button type="submit">Envoyer</button>

</Form>
<button id="pn">changer de mode</button>
<script>
    const pn = document.getElementById('pn')
    pn.addEventListener('click ' , ()  => {
        document.body.classList.toggle('dark-mode')
    })
const click = document.getElementById('click');

</script>
</body>
</html>