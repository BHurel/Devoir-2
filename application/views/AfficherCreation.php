<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Création d'une formation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src='JQuery/jquery-3.1.1.js'></script>
    <script src='JS/mesFonctions.js'></script>

</head>
<body>
    <input type='text' value="Numéro de la conférence">
    <input type='text' value='<?php echo $idConference->numero ; ?>
    <input type='text' value="Titre de la conférence" disabled="disabled">
    <input type='text' value="">
    <br>
    <br>
    <input type='text' value="Contenu de la conférence" disabled="disabled">
    <input type='text' value=''>
    <input type='text' value="Choix du niveau" disabled="disabled">
    <select id="lstNiveau" onchange="AfficherNiveau()"<br></select>
    <br>
    <br>
    <input type='text' value="Titre de la conférence" disabled="disabled">
    <select id="lstTheme" onchange="AfficherTheme()"<br></select>
    <br>
    <br>
    <br>
    <input type='text' value="Choix des technologies" disabled="disabled">
</body>
</html>