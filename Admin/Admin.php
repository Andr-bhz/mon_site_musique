
<?php 
$nom = $_POST['name'];
$email =$_POST['email'];
echo "$nom <br>";
echo "$email <br>";

?>
<link rel="stylesheet" href="Admin.css">
<Form action="./conFig/under.php"  method="POST"<?php htmlspecialchars($_POST['name'] && $_POST['email']); ?>>
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
<script> 

alert('bienvenue')</script>