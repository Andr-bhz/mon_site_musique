<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img src="musique.jpg" alt="musique" class="image">
    <audio src="Gold.mp3" controls>Gold</audio>
    <button id ="btn">changer de mode</button>
    <script src="./script.js"></script>
    <div>
        <input type="radio" id="dark-theme" name="theme" value="dark">
        <label for="dark-theme">Dark Theme</label>
    </div>
    <input type="submit" value="Submit">
</body>
</html>