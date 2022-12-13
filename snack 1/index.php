
 <!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, 
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php 

$partite = [
    [
        'squadraCasa' => 'milano',
        'squadraOspite' => 'roma',
        'puntiSquadraCasa' => '28',
        'puntiSquadraOspite' => '50',
    ],
    [
        'squadraCasa' => 'torino',
        'squadraOspite' => 'bologna',
        'puntiSquadraCasa' => '77',
        'puntiSquadraOspite' => '99',
    ],
    [
        'squadraCasa' => 'palermo',
        'squadraOspite' => 'catania',
        'puntiSquadraCasa' => '100',
        'puntiSquadraOspite' => '87',
    ],
];

for ($i=0; $i < count($partite); $i++) {
    echo $partite[$i]['squadraCasa'] . '-' . $partite[$i]['squadraOspite'] .' '. '|' .' '. $partite[$i]['puntiSquadraCasa'] . '-' . $partite[$i]['puntiSquadraOspite'];
    echo '<br/>';
};
?>

