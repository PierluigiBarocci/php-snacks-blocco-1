<?php

// Creare un array di array: ogni array figlio avrà come chiave una data in questo
// formato: DD-MM-YYYY (es 01-01-2007) e come valore un array di post
// associati a quella data.
// Stampare ogni data con i relativi post.
// Qui l’array di esempio:
// https://www.codepile.net/pile/R2K5d68z


$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

// si tratta di un foreach dentro un foreach
// ad ogni iterazione, il ciclo superiore si porta dietro una data (che è la key superiore)
// mentre quello annidato scorre le array interne, e con la 
// square brackets notation, si porta dietro titolo autore e testo
foreach ($posts as $date => $more_posts) {?>
    <h2> <?php echo $date ?></h2>
<?php
    foreach ($more_posts as $value) { ?>
        <h4><?php echo $value['title']; ?></h4>
        <h6><?php echo $value['author']; ?></h6>
        <p><?php echo $value['text'] ?></p>
    <?php
    };
};
?>
