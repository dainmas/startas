
<?php

$number = rand(0, 15);
$text = '';
if ($number % 2 == 0 && $number !== 0){
    $text = 'skaičius dalinasi iš dviejų be liekanos';
    $numb = 1;
}
if ($number % 5 == 0 && $number !== 0){
    $text = 'skaičius dalinasi iš penkių be liekanos';
    $numb = 2;
}
if ($number % 3 == 0 && $number !== 0){
    $text = 'skaičius dalinasi iš trijų be liekanos';
    $numb = 3;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>skaiciai</title>
    <link rel="stylesheet" href="skaiciai.css">
    
</head>
<body>

    <h1 class="color-<?php print $numb; ?>"><?php print $number . $text; ?> </h1>
</body>
</html>