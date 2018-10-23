<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ville</title>
</head>
<body>
    <h2>Voici la liste des nains qui habitent dans la ville de <?php echo $ville->getNom(); ?></h2>
     <ul>
        <?php foreach ($nains as $nain) { ?>
            <li><?php echo $nain->readNainFromVille($_Get['id']); ?></li>
        <?php } ?>
    </ul>
    <a href=".">goto home</a>
</body>
</html>