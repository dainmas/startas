<?php

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


$baldai = [
    'sofos' => [
        [
            'name' => 'Neringa',
            'price' => 500,
            'imgPath' => 'https://d37kg2ecsrm74.cloudfront.net/web/ikea4/images/237/0623711_PE691329_S5.jpg',
        ],
        [
            'name' => 'Candy',
            'price' => 400,
            'imgPath' => 'https://g1.acdn.lt/photos/170605/15/55482301-sofa-lova-lote-sofos-7365-1_popup.jpg',

        ],
        [
            'name' => 'Andrea',
            'price' => 470,
            'imgPath' => 'https://www.rivjera.lt/wp-content/uploads/2018/12/50469241_2464482853570345_5871435548802940928_o.jpg',
        ],

    ],
    'virtuvesBaldai' => [
        [
            'name' => 'Adonis',
            'price' => 315,
            'imgPath' => 'https://www.baldaipl.lt/image/cache/catalog/import/virtuve-Bianka-530-komplektas-600x400.jpg',
        ],
        [
            'name' => 'Alba',
            'price' => 300,
            'imgPath' => 'https://www.balticbalducentras.lt/media/k2/items/cache/64f1bd36159ab528d3f0e600c8367f84_XL.jpg',
        ],
        [
            'name' => 'Avis',
            'price' => 210,
            'imgPath' => 'http://sostinesbaldai.lt/site/assets/files/1011/sb_046.1188x660.jpg',

        ],

    ],
    'spintos'  => [
        [
            'name' => 'Sodzius',
            'price' => 250,
            'imgPath' => 'https://www.baldai1.lt/images/detailed/315/spinta-ph126-315720.jpg',
        ],
        [
            'name' => 'Salsa',
            'price' => 125,
            'imgPath' => 'https://www.baldai1.lt/images/detailed/654/spinta-ph35-2C-spalva--balta--2B-baltas-stiklas-654894.jpg',
        ],
        [
            'name' => 'Amelia',
            'price' => 495,
            'imgPath' => 'https://www.baldai1.lt/images/detailed/499/kampine-spinta-s9018-499479.jpg'

        ],
    ],
];

$namesofos = $baldai['sofos'][$_POST['sofos']]['name'];
$pricesofos = $baldai['sofos'][$_POST['sofos']]['price'];
$imgPathsofos = $baldai['sofos'][$_POST['sofos']]['imgPath'];

$namevirtuvesBaldai = $baldai['virtuvesBaldai'][$_POST['virtuvesBaldai']]['name'];
$pricevirtuvesBaldai = $baldai['virtuvesBaldai'][$_POST['virtuvesBaldai']]['price'];
$imgPathvirtuvesBaldai = $baldai['virtuvesBaldai'][$_POST['virtuvesBaldai']]['imgPath'];

$namespintos = $baldai['spintos'][$_POST['spintos']]['name'];
$pricespintos = $baldai['spintos'][$_POST['spintos']]['price'];
$imgPathspintos = $baldai['spintos'][$_POST['spintos']]['imgPath'];


?>

<!-- 1. Sukurti teksto pastraipa ir su atitinkamomis php funkcijomis visas teksto raides pakeisti didziosiomis.
2. Sukurti teksto pastraipa ir su atitinkamomis php funkcijomis panaikinti tarpus tarp zodziu.
3. Sukurti teksto pastraipa be sakinio pabaigos, be tasku bet sakinys prasideda is didziosios raides
ir su atitinkamomis php funkcijomis iterpti taskus.
4. Sukurti teksto pastraipa su lietuviskais keiksmazodziais ir su atitinkamomis php funkcijomis
tuos keiksmazodzius pakeisti *** simboliais -->
<!-- 5.Sukurti baldu salono prekiu masyva ir atvaizduoti narsykleje pazymetus
baldus su aprasymu, kaina ir nuotrauka. -->




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Baldų salonas</title>
    <style>
        section {
            display: inline-block;
        }
        
        clearfix{
        overflow: auto;
        }

        img {
            width: 300px;
            height: 300px;
        }

        input {
            width: 100px;
            height: 50px;
            border: 2px, solid blue;
            background-color: blue;
            align-items: flex-start;
        }
    </style>
</head>

<body>
    <h1>Baldų salonas</h1>
    <form action="" method="post"></form>
    <div>
        <label>
            <h2>Sofos</h2>
        </label><br>
        <label for="sofu-pasirinkimas">Pasirink sofą:</label>
        <select name="sofos">
            <option value="">Prašau pasirinkti sofą</option>
            <option value="0">Neringa</option>
            <option value="1">Candy</option>
            <option value="2">Andrea</option>
        </select>

    </div>
    <div>
        <label>
            <h2>Virtuvės baldai</h2>
        </label><br>
        <label for="virtuvės-baldu-pasirinkimas">Pasirink virtuvės baldus:</label>
        <select name="virtuvesBaldai">
            <option value="">Prašau pasirinkti virtuves baldus</option>
            <option value="0">Adonis</option>
            <option value="1">Alba</option>
            <option value="2">Avis</option>
        </select>

    </div>
    <div>
        <label>
            <h2>Spintos</h2>
        </label><br>
        <label for="spintu-pasirinkimas">Pasirink spintą:</label>
        <select name="spintos">
            <option value="">Prašau pasirinkti spintą</option>
            <option value="0">Sodžius</option>
            <option value="1">Salsa</option>
            <option value="2">Amelia</option>
        </select>

    </div>
    <input type="submit" value="Rinktis">
    </form>
    <div class="clearfix"></div>
    <section>
        <div class="name">
            <?php print  $namesofos; ?>
        </div>
        <div class="price">
            <?php print $pricesofos; ?>
        </div>
        <img src="<?php print $imgPathsofos; ?>">
    </section>
    <section>
        <div class="name">
            <?php print  $namevirtuvesBaldai; ?>
        </div>
        <div class="price">
            <?php print $pricevirtuvesBaldai; ?>
        </div>
        <img src="<?php print $imgPathvirtuvesBaldai; ?>">
    </section>
    <section>
        <div class="name">
            <?php print  $namespintos; ?>
        </div>
        <div class="price">
            <?php print $pricespintos; ?>
        </div>
        <img src="<?php print $imgPathspintos; ?>">
        
    </section>
</body>

</html>

<!-- Tado pvz.
php
$array = [
   ‘tables’ => [
       [
           ‘name’ => ‘Fancy Table’,
           ‘info’ => ‘this is a table.’,
           ‘price’ => 1500,
           ‘img’ => ’https://www.ikea.com/us/en/images/products/ekedalen-extendable-table-brown__0736963_PE740827_S4.JPG'
       ],
       [
           ‘name’ => ‘Fancy Table 2’, -->
<!-- ‘info’ => ‘this is a table 2.’,
           ‘price’ => 1300,
           ‘img’ => ‘https://www.ikea.com/PIAimages/0555040_PE660091_S5.JPG’
       ],
   ],
   ‘sofas’ => [
       [
           ‘name’ => ‘Fancy Sofa’,
           ‘info’ => ‘this is a sofa.’,
           ‘price’ => 1500,
           ‘img’ => ‘https://www.ikea.com/us/en/images/products/stockholm-sofa-blue__0447583_PE597395_S5.JPG’
       ],
       [
           ‘name’ => ‘Fancy Sofa 2’,
           ‘info’ => ‘this is a sofa 2.’,
           ‘price’ => 1100,
           ‘img’ => ‘http://www.costco.co.uk/medias/sys_master/images/h55/h59/11541921890334.jpg’
       ],
   ],
   ‘beds’ => [
       [
           ‘name’ => ‘Fancy bed’,
           ‘info’ => ‘this is a bed.’,
           ‘price’ => 2500,
           ‘img’ => ‘https://cdn.shopify.com/s/files/1/2660/5202/products/zkfd0a3bsj7hrfqllsyk_1400x.jpg?v=1537237010’
       ],
       [
           ‘name’ => ‘Fancy bed 2’,
           ‘info’ => ‘this is a bed 2.’,
           ‘price’ => 1800,
           ‘img’ => ‘https://secure.img1-fg.wfcdn.com/im/02376610/resize-h800-w800%5Ecompr-r85/7817/78172826/Mendez+Cowell+Upholstered+Standard+Bed.jpg’
       ],
   ],
];
$nameTable = $array[‘tables’][$_POST[‘tables’]][‘name’];
$infoTable = $array[‘tables’][$_POST[‘tables’]][‘info’];
$priceTable = $array[‘tables’][$_POST[‘tables’]][‘price’];
$imgTable = $array[‘tables’][$_POST[‘tables’]][‘img’];
?> -->
<!-- <!DOCTYPE html>
<html>
<head>
   <title></title>
</head>
<body>
<form method=“post”>
   <label for=“tables”>Lovos</label>
   <select name=“tables” id=“”>
       <option value=“0”>Fancy Table</option>
       <option value=“1">Fancy Table 2</option>
   </select>
   <label for=“sofas”>Sofos</label>
   <select name=“sofas” id=“”>
       <option value=“0">Fancy Sofa</option>
       <option value=“1”>Fancy Sofa 2</option>
   </select>
   <label for=“bads”>Lovos</label>
   <select name=“bads” id=“”>
       <option value=“0”>Fancy bad</option>
       <option value=“1">Fancy bad 2</option>
   </select>
   <input type=“submit”>
</form>
<section>
   <div class=“name”>
       <php print $nameTable; ?>
   </div>
   <div class=“info”>
       <php print $infoTable; ?>
   </div>
   <div class=“price”>
       <php print $priceTable; ?>
   </div>
   <img src=“<php print $imgTable; ?>“>
</section>
</body>
</html>
 --> -->