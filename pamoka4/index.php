<?php
$baldai = [
    'sofos' => [
        [
            'name' => 'Neringa',
            'price' => 500,
        ],
        [
            'name' => 'Candy',
            'price' => 400,
        ],
        [
            'name' => 'Andrea',
            'price' => 470,
        ],

    ],
    'virtuvesBaldai' => [
        [
            'name' =>'Adonis',
            'price' => 315,
        ],
        [
            'name' =>'Alba',
            'price' => 300,
        ],
        [
            'name' =>'Avis',
            'price' => 210,
        ],
        
    ],
    'spintos'  => [
        [
            'name' =>'Sodzius',
            'price' => 250,
        ],
        [
            'name' =>'Salsa',
            'price' => 125,
        ],
        [
            'name' =>'Amelia',
            'price' => 495,
        ],
    ],
]

$output = strtoupper('labutis, kaip gyveni?') . '<br> ';
print $output;
$text = 'Labas rytas, tu zuikeli nematytas            ' . '<br>';
$trimed = trim($text);
print $trimed;
$stripped = str_replace(' ', '', $text);
print $stripped;
$text1 = 'lia lia lia lia lia, o va ir pabaiga Sveiki ';

$text1 = ucfirst($text1);

if (SUBSTR($text1, -1) != '.') {
    $text1 .= '.';
}

print  $text1  . '<br>';

$text2 = 'Labai daug eglučių, gėlyčių.';
$output1 =  str_replace("eglučių", "***", $text2);
print  $output1;




?>

<!-- 1. Sukurti teksto pastraipa ir su atitinkamomis php funkcijomis visas teksto raides pakeisti didziosiomis.
2. Sukurti teksto pastraipa ir su atitinkamomis php funkcijomis panaikinti tarpus tarp zodziu.
3. Sukurti teksto pastraipa be sakinio pabaigos, be tasku bet sakinys prasideda is didziosios raides
ir su atitinkamomis php funkcijomis iterpti taskus.
4. Sukurti teksto pastraipa su lietuviskais keiksmazodziais ir su atitinkamomis php funkcijomis
tuos keiksmazodzius pakeisti *** simboliais -->

5.Sukurti baldu salono prekiu masyva ir atvaizduoti narsykleje pazymetus
baldus su aprasymu, kaina ir nuotrauka.
<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Baldų salonas</title>
</head>

<body>
    <h1>Baldų salonas</h1>
    <form action=""></form>
    <div>
        <label>Sofos</label><br>
        <label for="sofu-pasirinkimas">Pasirink sofą:</label>
        <select class="sofu-pasirinkimas">
            <option value="">Prašau pasirinkti sofą</option>
            <option value="neringa">Neringa</option>
            <option value="candy">Candy</option>
            <option value="andrea">Andrea</option>

        </select>
    </div>
    <div>
        <label>Virtuvės baldai</label><br>
        <label for="virtuvės-baldu-pasirinkimas">Pasirink virtuvės baldus:</label>
        <select class="virtuves-baldu-pasirinkimas">
            <option value="">Prašau pasirinkti virtuves baldus</option>
            <option value="adonis">Adonis</option>
            <option value="alba">Alba</option>
            <option value="avis">Avis</option>

        </select>
    </div>
    <div>
        <label>Spintos</label><br>
        <label for="spintu-pasirinkimas">Pasirink spintą:</label>

        <select class="spintu-pasirinkimas">
            <option value="">Prašau pasirinkti spintą</option>
            <option value="sodzius">Sodžius</option>
            <option value="salsa">Salsa</option>
            <option value="amelia">Amelia</option>
        </select>
    </div>
    <input type="submit" value="Rinktis">
</body>

</html>