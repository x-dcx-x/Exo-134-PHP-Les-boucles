<?php

// Premiere ligne

$i = 1;
do {

    echo $i . "<br>";
    $i++;
} while ($i < 6);

//Deuxieme ligne

echo "<br><br>";

$i = 1;

while ($i < 6) {
    echo $i;
    $i++;
}

echo "<br><br>";

//Troisieme ligne
$i = 0;

for ($i = 0; $i < 9;) {
    $i++;
    $x = $i . ' ' . 'eme passage dans la boucle' . "<br>";
    echo $x;
}

echo "<br><br>";

//Quatrieme ligne

$colors = array("red", "green", "blue", "yellow");

 foreach ($colors as $x) {
    echo "Dans ce tableau il y a les couleurs $x. <br>";
}


