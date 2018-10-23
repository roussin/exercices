<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/style.css">
    <title>conversation</title>
</head>
<body>
    <h2 class="center">EXERCICE FORUM</h2>
    <table id="forum">
        <tr>
            <th>ID de la conversation</th>
            <th>Date de la conversation</th>
            <th>Heure de la conversation</th>
            <th>Nombre de messages</th>
            <th>Liens</th>
        </tr> 
        <?php
        foreach ($conversation as $value) {
            if (($value->get_termine()) == 0) {
                echo '<tr class="opened">';
            } else {
                echo '<tr class="closed">';
            }
            echo '<td>' . $value->get_id() . '</td>';
            echo '<td>' . $value->get_date() . '</td>';
            echo '<td>' . $value->get_heure() . '</td>';
            echo '<td>' . $value->get_nbMessages() . '</td>';
            echo '<td><a href="page_2.php?id=' . $value->get_id() . '">détail</a></td>';
            echo '</tr>';
        }
        ?>
    </table>
</body>
</html>