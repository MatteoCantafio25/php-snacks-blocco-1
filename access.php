<?php

$user_name = $_GET['name'];

$user_email = $_GET['email'];

$user_age = $_GET['age'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Snack 2 -->

    <?php if(mb_strlen(trim($user_name)) > 3 && strpos($user_email, '.') && strpos($user_email, '@') && (is_numeric($user_age))) : ?>
        <h2>Accesso Riuscito</h2>
        <?php else: ?>
            <h2>Accesso Negato</h2>
        <?php endif ?>
</body>
</html>