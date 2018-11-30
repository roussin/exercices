<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taverne</title>
</head>
<body>
    <h1>Liste de toutes les tavernes du pays des nains</h1>
    <table>
        <thead>
        <tr>
            <th>Nom</th>
            <th>Ville</th>
            <th>Possède de la bière</th>
            <th>Nombres de chambres</th>
            <th>Chambres libres</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach($tavernes as $taverne) { ?>
            <tr>
                <td><?php echo $taverne['taverne']->getNom(); ?></td>
                <td><a href=""><?php echo $taverne['ville']->getNom(); ?></a></td>
                <td><?php 
                    if ($taverne['taverne']->getBlonde() == true) {echo "blonde ";}
                    if ($taverne['taverne']->getBrune() == true) {echo "brune ";}
                    if ($taverne['taverne']->getRousse() == true) {echo "rousse";}
                    ?>
                </td>
                <td><?php echo $taverne['taverne']->getChambres(); ?></td>
                <td><?php echo $taverne['taverne']->getChambresLibres(); ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <a href=".">goto home</a>
</body>
</html>