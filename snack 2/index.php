<!-- Snack 2
Passare come parametri GET name, mail e age e verificare 
(cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri,
 che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, 
 altrimenti “Accesso negato” -->


<?php

$nome = $_GET['nome'];
$email = $_GET['email'];
$eta = $_GET['eta'];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name='nome'>
        <input type="text" name='email'>
        <input type="text" name='eta'>
        <button type="submit">attiva</button>
    </form>

    <?php
    if(strlen($nome) > 3 && strpos($email,'.') != false && strpos($email,'@') != false && is_numeric($eta)) {

        echo ('accesso riuscito');
      } else {
          echo ('accesso non riuscito');
    }
    ?>

</body>
</html>