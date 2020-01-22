<?php

// Creare un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il
// paragrafo e suddividerlo in tanti paragrafi: ogni volta che si incontra un punto,
// bisogna creare un nuovo paragrafo.

$paragraph = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quidem. Ea consequuntur sequi, tempore, repellat voluptatem quam laboriosam quia quae odit, exercitationem suscipit pariatur incidunt fuga optio ullam harum. Eligendi nemo aut blanditiis deleniti necessitatibus? Tempora nesciunt a hic provident error, ea expedita assumenda? Animi, atque. Quod aut placeat aperiam neque eos quas, harum. Dicta magni, voluptas itaque amet nesciunt voluptatibus consectetur officiis ipsam eum sapiente consequatur modi excepturi voluptates, recusandae adipisci, ratione eius cum. Qui animi, suscipit aliquam nostrum laboriosam ut, inventore! Voluptas, ratione, impedit. Quod, assumenda eum, ut fugiat explicabo possimus quis natus accusamus. Ut odit fugiat, voluptates!";

// inizialmento volevo splittare il testo, usare un array, un ciclo for, magari un if, e rematchare il tutto
// poi il lato oscuro della forza ha avuto la meglio, str_replace staticissimo e passa
// la paura.
$paragraph_new = "<p>" . str_replace('. ', '.</p><p>', $paragraph);

echo "<pre>";
var_dump($paragraph_new);
echo "</pre>";

?>
