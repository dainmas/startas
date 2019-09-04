<?php
// $skaicius = rand(1,6);

// print $skaicius;
$kompiuteris = rand(1,6);
$zaidejas = rand(1,6);
if($kompiuteris > $zaidejas){
print 'the winner is compiuter';
}else{
    print 'the winner is player';   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kauliukų žaidimas</title>
</head>
<body>
    
</body>
</html>
<!-- Sukurti kodą, kuris atspindėtų kauliukų žaidimą su kompiuteriu.
1. Kompiuteris meta du kauliukus atsitiktinai parenkamos reikšmės nuo 1 iki 6
2. Žaidėjas meta du kauliukus atsitiktinai parenkamos reikšmės nuo 1 iki 6
3. Aprašyti santykį tarp kompiuterio ir žaidėjo(kas laimi)
 <?php
  /* Performs a pitagoric sum of the elements in $arr
   The pitagoric sum of a set of values is the square root of
   the sum of the sqare power of each value. So, for a, b, c
   it's sqrt(a^2 + b^2 + c^2) */
  /* If any element of $arr is an array itself, the array_sum
   will be used. Alternatively, the values could be used by
   recursion. Returns the integer part (floor) */
//   function array_pitag_sum($arr) {
//     if(is_array($arr) {
//       $ret = 0;
//       foreach($arr as $i) {
//         if(is_array($i)) {
//           $s = array_sum($i);
//           $ret += $s*$s;
//         } else {
//           $ret += $i*$i;
//         }
//       }
//       return floor(sqrt($ret));
//     } else {
//       return $arr;
//     }
//   }
?>