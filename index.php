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
];

if(isset($_GET['email']) && isset($_GET['name']) && isset($_GET['age']) && isset($_GET['check'])){
    $email = $_GET['email'];
    $name = $_GET['name'];
    $age = $_GET['age'];
    $check = $_GET['check'];
    $flagInputControl = false;
    if(strlen($name) > 3 && str_contains($email,'.') && str_contains($email, '@') && is_numeric($age) && $check=='on'){
        $flagInputControl = true;
    }
}
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
            <h1>SNACK 2</h1>
            <?php if(isset($_GET['email']) && isset($_GET['name']) && isset($_GET['age']) && isset($_GET['check'])){
                if($flagInputControl){
                    echo "<div>Accesso riuscito</div>";
                }else{
                    echo "<div class='red'>Accesso NON riuscito</div>";
                }
            }else{ ?>
            <form action="index.php" method="GET">
                <div>
                    <label for="email">email</label>
                    <input type="text" name="email">
                </div>
                <div>
                    <label for="name">name</label>
                    <input type="text" name="name">
                </div>
                <div>
                    <label for="age">age</label>
                    <input type="number" name="age">
                </div>
                <div>
                    <input type="checkbox" name="check">
                    <label name="check">
                        Default checkbox
                    </label>
                </div>
                <div>
                    <input type="submit">
                </div>
            </form>
            <?php } ?>
        </section>
    </main>
</body>
</html>