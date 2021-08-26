<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h5>snack-1</h5>

    <?php 
    // snack-1
    // Creiamo una struttura dati che rappresenta le partite di basket
    // di un’ipotetica tappa del calendario.
    // Ogni array interno conterrà le seguenti informazioni:
    // una squadra di casa
    // una squadra ospite
    // punti fatti dalla squadra di casa
    // punti fatti dalla squadra ospite
    // Stampiamo a schermo tutte le partite con questo schema:
    // Olimpia Milano - Cantù | 55-60

    $partite = [
        [
            "casa" => "olimpia",
            "ospite" => "milano",
            "casaPunti" => 55,
            "ospitePunti" => 60
        ],
        [
            "casa" => "baskettoni",
            "ospite" => "cestistiforti",
            "casaPunti" => 5,
            "ospitePunti" => 120
        ],
        [
            "casa" => "calciatori",
            "ospite" => "cacciatori",
            "casaPunti" => 0,
            "ospitePunti" => 100
        ]
        ];

    for ($i=0; $i < count($partite); $i++) { 
        echo "{$partite[$i]["casa"]} - {$partite[$i]["ospite"]} | {$partite[$i]["casaPunti"]} - {$partite[$i]["ospitePunti"]}";
    }
    
    ?>

    <hr>

    <h5>snack-2</h5>

    <?php
    // snack-2
    // Passare come parametri GET name, mail e age e verificare 
    // (cercando i metodi che non conosciamo nella documentazione) 
    // che name sia più lungo di 3 caratteri, 
    // che mail contenga un punto e una chiocciola e che age sia un numero.
    // Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];

    if (strlen($name) > 3 && strpos($mail, ".") !== false && strpos($mail, "@") !== false && is_numeric($age)) {
        echo "Accesso riuscito";
    } else {
        echo "Accesso negato";
    };

    ?>

    <hr>

    <h5>snack-3</h5>

    <?php
    // snack-3
    // Creare un array di array.
    // Ogni array figlio avrà come chiave una data in questo formato:
    // DD/MM/YYYY (ad es 31/01/2007) e come valore un array di post associati
    // a quella data.
    // Stampare ogni data con i relativi post.

    $dates = [
        "31/01/2007" =>[
            [
                "title" => "dieta pronta",
                "author" => "Ajeje"
            ]
        ],
        "17/04/2007" =>[
            [
                "title" => "come va",
                "author" => "Ajeje"
            ]
        ],
        "15/01/2008" =>[
            [
                "title" => "ciao",
                "author" => "Ajeje"
            ]
        ]
    ];

    /*
    $dates[$keys[i]]
    [
        [
            "title" => "ciao",
            "author" => "sembra ok"
        ]
    ]

    $dates[$keys[$i]][$x]["title"]
    [
        "title" => "ciao",
        "author" => "sembra ok"
    ]
    */

    $keys = array_keys($dates);
    for ($i = 0; $i < count($dates); $i++) {
        echo "<p><b>post $i</b></p>";
        echo "<ul>";
        for ($x = 0; $x < count($dates[$keys[$i]]); $x++) {
            echo "<li>" .$dates[$keys[$i]][$x]["title"]. $dates[$keys[$i]][$x]["author"]."</li>";
        }
        echo "</ul>";
    }
    ?>
 <hr>

<h5>snack-4</h5>

<?php
// snack-4
// Creare un array contenente qualche alunno di un’ipotetica classe.
// Ogni alunno avrà i seguenti dati:
// nome
// cognome
// un array contenente i suoi voti scolastici
// Stampare nome, cognome e la media dei voti di ogni alunno.

$students = [
    "studentUno" =>[
        [
            "name" => "Pasquale",
            "surname" => "Grande",
            "votes" => [2,5,3]
        ]
    ],
    "studentDue" =>[
        [
            "name" => "Genoveffa",
            "surname" => "Locullo",
            "votes" => [7,1,10]
        ]
    ],
    "studentTre" =>[
        [
            "name" => "Ajeje",
            "surname" => "Brazorf",
            "votes" => [7,7,7]
        ]
    ]
];
$keysDue = array_keys($students);
    for ($i = 0; $i < count($students); $i++) {
        echo "<p><b>studente $i</b></p>";
        echo "<ul>";
        for ($x = 0; $x < count($students[$keysDue[$i]]); $x++) {
            for ($y=0; $y <count($students[$keysDue[$x]]); $y++) { 
                echo "<li>".$students[$keysDue[$i]][$x]["name"]. $students[$keysDue[$i]][$x]["surname"]. $students[$keysDue[$x]][$y]["votes"]."</li>";
            }
        }
        echo "</ul>";
    }
?>
</body>
</html>