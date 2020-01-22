<?php
// Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno
// avrà Nome, Cognome e un array contenente i suoi voti scolastici.
// Stampare Nome, Cognome e la media dei voti di ogni alunno.

$classe = [
    [
        'nome' => 'Alberto',
        'cognome' => 'Bianchi',
        'voti' => [
            4, 7, 6, 6
        ]
    ],
    [
        'nome' => 'Bianca',
        'cognome' => 'Rossi',
        'voti' => [
            8, 9, 7, 7
        ]
    ],
    [
        'nome' => 'Carlo',
        'cognome' => 'Neri',
        'voti' => [
            4, 5, 6, 5
        ]
    ],
];

foreach ($classe as $alunno) {
    echo $alunno['nome'] . " ";
    echo $alunno['cognome'] . "<br>";
    $somma_voti = 0;
    foreach ($alunno['voti'] as $voto) {
        $somma_voti = $somma_voti + $voto;
    };
    $media_voto = ($somma_voti / count($alunno['voti']));
    echo 'La media voto di ' . $alunno['nome'] . ' ' . $alunno['cognome'] . " è $media_voto" . "<br>";
}
?>
