<?php
$color1 = rand(0, 255) . ', ' . rand(0, 255) . ', ' . rand(0, 255);
$color2 = rand(0, 255) . ', ' . rand(0, 255) . ', ' . rand(0, 255);
$color3 = rand(0, 255) . ', ' . rand(0, 255) . ', ' . rand(0, 255);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Veliava</title>
    <link rel="stylesheet" href="veliava.css">

</head>

<body>
    <div class="container">
        <div class="flag-container">
            <div class="flag-color" style="background-color:rgb(<?php print $color1; ?>)"></div>
            <div class="flag-color" style="background-color:rgb(<?php print $color2; ?>)"></div>
            <div class="flag-color" style="background-color:rgb(<?php print $color3; ?>)"></div>
        </div>
    </div>
</body>

</html>