<?php

// Utilizzare questo array: https://pastebin.com/CkX3680A.
// Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i
// PM in un rettangolo verde.
$db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
// un ciclo foreach per ciclare l'array, e una if interna per gestire i due div di colore diverso
// all'interno un altro for each per prendere nomi e cognomi di Teachers e Pm
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <title>Esercizio6</title>
    </head>
    <body>
        <div class="container">
            <?php foreach ($db as $roles => $people) {
                if ($roles == 'teachers') {
                    ?>
                    <div class="section grey">
                        <h1><?php echo $roles; ?>: </h1>
                        <?php foreach ($people as $key => $value) {?>
                            <h3><?php echo $value['name'];?> <?php echo $value['lastname'];?></h3>
                        <?php } ?>
                    </div>
            <?php } else { ?>
                <div class="section green">
                    <h1><?php echo $roles; ?>: </h1>
                    <?php foreach ($people as $key => $value) {?>
                        <h3><?php echo $value['name'];?> <?php echo $value['lastname'];?></h3>
                    <?php } ?>
                </div>
            <?php }
            }; ?>
        </div>
    </body>
</html>
