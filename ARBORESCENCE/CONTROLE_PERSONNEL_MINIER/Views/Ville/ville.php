<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ville</title>
</head>
<body>
    <h2>Bienvenu dans la ville de <?php echo $ville->getNom(); ?></h2>
    <p>Superficie : <?php echo $ville->getSuperficie() ?> Km²</p>
    <a href=".?c=<?php echo $ville->getNom(); ?>&a=fiche&id=<?php echo $ville->getId(); ?>">Liste nains originaire de cette ville</a>
    <a href=".">goto home</a>
</body>
</html>