<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/style.css">
    <title>message</title>
</head>
<body>
    <h2 class="center">Détails de la conversation</h2>
    <a href="index.php"><< Revenir</a><br><br>
    <table id="forum">
        <tr>
            <th>/</th>
            <th>Date de la conversation</th>
            <th>Heure de la conversation</th>
            <th>Nom Prénom</th>
            <th>messages</th>
        </tr> 
        <?php
        if (count($message) > 0) {
            foreach ($message as $value) {
                echo '<tr>';
                echo '<td>' . $value->get_id() . '</td>';
                echo '<td>' . $value->get_date() . '</td>';
                echo '<td>' . $value->get_heure() . '</td>';
                echo '<td>' . $value->get_nom() . ' ' . $value->get_prenom() . '</td>';
                echo '<td>' . $value->get_contenu() . '</td>';
                echo '</tr>';
            }
        } else {
            echo '<tr>';
            echo '<td colspan="4" style="text-align:center">Cette conversation est vide pour le moment.</td>';
            echo '</tr>';
        }
        ?>

    </table>
    <br>
    <a href="page_2.php?page='<?php $messModel->forwardTwenty(); ?>' "><< Page précédente</a>
    <a href="page_2.php?page='<?php $messModel->rewindTwenty(); ?>' ">Page suivante >></a>
   
</body>
</html> 