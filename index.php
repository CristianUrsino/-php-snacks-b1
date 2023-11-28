<?php
$partite = [
    [
        'squadraCasa' => 'inter',
        'squadraOspite' => 'jv',
        'puntiCasa'=> 3,
        'puntiOspite'=> 2,
    ],
    [
        'squadraCasa' => 'Napoli',
        'squadraOspite' => 'Milan',
        'puntiCasa'=> 0,
        'puntiOspite'=> 4,
    ],
    [
        'squadraCasa' => 'Pippo',
        'squadraOspite' => 'Pluto',
        'puntiCasa'=> 2,
        'puntiOspite'=> 2,
    ]
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snacks</title>
</head>
<body>
    <main>
        <section>
            <h1>SNACK 1</h1>
            <h3>CALENDARIO: </h3>
            <?php foreach($partite as $partita){
                echo $partita['squadraCasa'] . ' - ' . $partita['squadraOspite'] . ' | ' . $partita['puntiCasa'] . ' - ' . $partita['puntiOspite'] . '<br>';
            } ?>
        </section>
        <section>
        </section>
    </main>
</body>
</html>