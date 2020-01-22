<?php

// Passare come parametri GET “name”, “mail” e “age” e verificare (cercando i
// metodi che non conosciamo nella documentazione) che:
// ● “name” sia più lungo di 3 caratteri;
// ● “mail” contenga un punto e una chiocciola;
// ● “age” sia un numero.
// Se tutto è ok, stampare “Accesso riuscito”, altrimenti “Accesso negato”

$name = $_GET['name'];
$mail = $_GET['email'];
$age = $_GET['age'];
// calcola lunghezza str e restituisce un intero
$len_name = strlen($name);
// cerca punto e chicciola all'interno della stringa
$dot_mail = strpos($mail, '.');
$at_mail = strpos($mail, '@');
// si accerta che sia un numero
$isAn = is_numeric($age);

// se vanno tutte quante contemporaneamente (&&)
if ($len_name > 3 && $dot_mail && $at_mail && $isAn) {
    echo "Accesso Riuscito";
} else {
    // altrimenti accesso negato
    echo "Accesso Negato";
};

 ?>
