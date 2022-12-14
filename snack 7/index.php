<!-- Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i
 suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php

$classe = [

    [
        'name' => 'Michele',
        'lastname' => 'Papagni',
        'voti' => ['8', '7', '4', '6', '8', '9', '7', '8', '6']
    ],


    [
        'name' => 'Roberto',
        'lastname' => 'Marazzini',
        'voti' => ['4', '3', '4', '7', '6', '7', '6', '5', '6']
    ],
    [
        'name' => 'Federico',
        'lastname' => 'Pellegrini',
        'voti' => ['4', '3', '5', '6', '5', '6', '7', '6', '10']
    ],
];

$mediaVoti = 0;



for ($i = 0; $i < count($classe); $i++) {
    $totVoti = $classe[$i]['voti'];

    for ($k = 0; $k < count($totVoti); $k++) {

        $mediaVoti += $totVoti[$k] / count($totVoti);
    }
     $ok =
    $mediaArrotondata = ceil($mediaVoti);
echo $classe[$i]['name'] . '<br/>' . $classe[$i]['lastname'] . '<br/>' . 'Media Voti:' . $mediaArrotondata . '<br/>';
   
}


?>


