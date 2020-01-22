<?php


// Creare una funzione che restituisce un array con 15 numeri casuali, tenendo
// conto che l’array non dovrà contenere lo stesso numero più di una volta
$array = [];
// finchè la lunghezza dell'array è minore di 15
while (count($array) < 15) {
    // genera un random da 1 a 100
    $random_number = rand(1, 100);
    // e se non è già dentro l'array
    if (!in_array($random_number, $array)) {
        // pushalo
        $array[] = $random_number;
    }
};

echo '<pre>';
var_dump($array);
echo '</pre>';

?>
