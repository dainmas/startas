<?php
$pc1 = rand(1, 6);
$pc2 = rand(1, 6);
$sumaco = $pc1 + $pc2;
$user1 = rand(1, 6);
$user2 = rand(1, 6);
$sumapl = $user1 + $user2;
$dices = [

    '1' => 'https://c8.alamy.com/comp/RR81CX/one-point-dice-icon-cartoon-style-RR81CX.jpg',


    '2' => 'https://image.shutterstock.com/z/stock-vector-two-point-dice-icon-cartoon-of-two-point-dice-vector-icon-for-web-design-isolated-on-white-1322092775.jpg',


    '3' => 'https://st4.depositphotos.com/1432405/24717/v/1600/depositphotos_247172846-stock-illustration-three-point-dice-icon-cartoon.jpg',


    '4' => 'https://cdn3.vectorstock.com/i/1000x1000/37/32/four-point-dice-icon-cartoon-style-vector-23993732.jpg',


    '5' => 'https://cdn2.vectorstock.com/i/1000x1000/37/36/five-point-dice-icon-cartoon-style-vector-23993736.jpg',


    '6' => 'https://sulimanalomran.com/images/6-dice-number-clipart-20.jpg'

];

// foreach ($phones as $brand) {
//     foreach ($brand as $phone) {
//         print $phone['name'];
//         print $phone['price'] . ' Eur';
//     }
// }
// if ($sumaco > $sumapl) {
//     print 'the winner is computer';
// } elseif ($sumaco == $sumapl) {
//     print 'equal';
// } else {
//     print 'the winner is player';
// }

//kaire virsus
if ($pc1 == 1) {
    $jpg1 = $dices['1'];
 } elseif ($pc1 == 2) {
    $jpg1 = $dices['2'];
 } elseif ($pc1 == 3) {
    $jpg1 = $dices['3'];
 } elseif ($pc1 == 4) {
    $jpg1 = $dices['4'];
 } elseif ($pc1 == 5) {
    $jpg1 = $dices['5'];
 } else {
    $jpg1 = $dices['6'];
 }
 //kaire apacia
 if ($pc2 == 1) {
    $jpg2 = $dices['1'];
 } elseif ($pc2 == 2) {
    $jpg2 = $dices['2'];
 } elseif ($pc2 == 3) {
    $jpg2 = $dices['3'];
 } elseif ($pc2 == 4) {
    $jpg2 = $dices['4'];
 } elseif ($pc2 == 5) {
    $jpg2 = $dices['5'];
 } else {
    $jpg2 = $dices['6'];
 }
 //desine virsus
 if ($user1 == 1) {
    $jpg3 = $dices['1'];
 } elseif ($user1 == 2) {
    $jpg3 = $dices['2'];
 } elseif ($user1 == 3) {
    $jpg3 = $dices['3'];
 } elseif ($user1 == 4) {
    $jpg3 = $dices['4'];
 } elseif ($user1 == 5) {
    $jpg3 = $dices['5'];
 } else {
    $jpg3 = $dices['6'];
 }
 //desine apacia
 if ($user2 == 1) {
    $jpg4 = $dices['1'];
 } elseif ($user2 == 2) {
    $jpg4 = $dices['2'];
 } elseif ($user2 == 3) {
    $jpg4 = $dices['3'];
 } elseif ($user2 == 4) {
    $jpg4 = $dices['4'];
 } elseif ($user2 == 5) {
    $jpg4 = $dices['5'];
 } else {
    $jpg4 = $dices['6'];
 }
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Img-kauliukai</title>
    <style>
        #main {
            width: 100%;
            display: flex;
            justify-content: center;
        }


        .player {
            background-color: yellow;
            flex-wrap: wrap;

        }

        .computer {
            background-color: green;
            flex-wrap: wrap;

        }

        img {
            width: 200px;
            height: 200px;

        }
        input{
            width: 100px;
            height: 50px;
            background-color: blue;
            align-items: flex-start;
          
            
        }
    </style>
</head>

<body>
    <div id="main">
        <div class="computer">
            <img src="<?php print $jpg1; ?>" alt='dice1'>
            <img src="<?php print $jpg2; ?>" alt='dice2'>
            
            <h2>Computer</h2>
            <h2><?php print $sumaco; ?></h2>
            <?php if ($sumaco > $sumapl) : ?>
            <h1>Laimėjote</h1>
            <?php endif; ?>
        </div>
        <div class="player">
            <img src="<?php print $jpg3; ?>" alt='dice1'>
            <img src="<?php print $jpg4; ?>" alt='dice2'>
            <h2>Player</h2>
            <h2><?php print $sumapl; ?></h2>
            <?php if ($sumaco < $sumapl) : ?>
            <h1>Laimėjote</h1>;
            <?php endif; ?>
        </div>
        <div>
        <input type="submit" value="Žaisti">
        </div>
    </div>
    
</body>

</html>
