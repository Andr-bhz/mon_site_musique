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


<?php 
session_start();
$util = '';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MON_SITE_MUSIQUE</title>
    <link rel="stylesheet" href="dessein.css">
</head>
<button id="pn">changer de mode</button>
<body>   
  
    <div>
        <img src="Admin_audio.jpg" alt="Fond-ecran">
        <Form action="under.php"  method="POST">>
            <div>
                <label for="nom ">NOM:</label>
                <input type="text" name="name" id="name" placeholder="Entrer votre nom" require>
             </div>
            <div>
                <label for="email">EMAIL:</label>
                <input type="text" name="email" id="email" placeholder="Entrer votre email" require>
            </div>
    
            <div>
                <label for="">male</label>
                <input type="radio" name="male" id="male" value="male"   <?php echo $homme = "homme" ? 'checked' : ''; ?>>
                <label for="">Femme</label>
                <input type="radio" name="Femme" id="Femme" value="Femme" <?php echo $Femme = "Femme" ? 'checked' : ''; ?>>
                <!-- <?php Function choice($male,$Femme){
                    if ($_POST['male']) {
                        echo "bienvenue monsieur";
                    }
                    elseif($_POST['Femme']){
                        echo "bienvenue Madamoiselle";
                    }
                }
              choice();
              echo choice();
            ?>
            <?php


              ?> -->
                
            </div>
                <button type="submit">Envoyer</button>
</div>
</Form>

<script>
    const pn = document.getElementById('pn')
    pn.addEventListener('click' , ()  => {
        document.body.classList.toggle('dark-mode')
    })
const click = document.getElementById('click');

</script>
</body>
</html>