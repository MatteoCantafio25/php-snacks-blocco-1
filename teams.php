<?php
$matches = [
    [
    'Home_Team' => 'Olimpia Milano',
    'Guest_Team' => 'Brindisi',
    'Home_Points' => rand(1,100),
    'Guests_Points' => rand(1,100),
    ],
    [
    'Home_Team' => 'Virtus Bologna',
    'Guest_Team' => 'Scafati',
    'Home_Points' => rand(1,100),
    'Guests_Points' => rand(1,100),
    ],
    [
    'Home_Team' => 'Cremona',
    'Guest_Team' => 'Napoli',
    'Home_Points' => rand(1,100),
    'Guests_Points' => rand(1,100),
    ],
    [
    'Home_Team' => 'Trento',
    'Guest_Team' => 'Uniiverso Treviso',
    'Home_Points' => rand(1,100),
    'Guests_Points' => rand(1,100),
    ],
];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Snack 1 -->
    <h1>Partite LBA</h1>

    <?php foreach($matches as $match) : ?>
            <p><?= $match['Home_Team']?> - <?= $match['Guest_Team']?> | <?= $match['Home_Points']?>-<?= $match['Guests_Points']?></p>
        <?php endforeach; ?>
    
</body> 
</html>

