<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IF</title>
</head>
<body>
<?php
$vardas = 'Jonas';
$amzius = 23;
$statusas = 'studentas';
if ($amzius > 0 && $amzius < 18 ){

print 'Yra nepilnametis';
}elseif($amzius >= 18 && $amzius >= 27 && $statusas !== 'studentas'){
print 'Tu kvieciamas į kariuomenę';
}elseif($amzius >= 18 &&  $statusas == 'studentas'){
print 'Gerai mokinkis';
}elseif($amzius > 27 && $amzius < 65){
    print 'esi nešaukiamas į kariuomenę';
}else{
    print 'esi pensininkas';
}
?>
</body>
</html>

