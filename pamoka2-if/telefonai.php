<?php
$phones = [
    'iphone' => [
        [
            'name' => 'iPhone SE',
            'price' => 600,
            'img' => 'https://images-na.ssl-images-amazon.com/images/I/71eqnpqyD4L._SY550_.jpg',
        ],

        [
            'name' => 'iPhone SE',
            'price' => 600,
            'img' => 'https://images.kainos24.lt/43/82/apple-iphone-xr-64gb-4.jpg',
        ],
        [
            'name' => 'iPhone SE',
            'price' => 600,
            'img' => 'https://www.91-img.com/pictures/97744-v1-apple-iphone-7-mobile-phone-large-1.jpg',
        ],

    ],

    'Samsung' => [
        [
            'name' => 'Samsung Galaxy',
            'price' => 750,
            'img' => 'https://image-us.samsung.com/SamsungUS/mobile/phones/06102019-new/First_S10_Lockup1_Blue_gallery.jpg?$product-details-jpg$',
        ],
        [
            'name' => 'Samsung Galaxy',
            'price' => 750,
            'img' => 'https://www.att.com/shopcms/media/att/2019/Shop/360s/9450269/6867B-1.jpg',
        ],
        [
            'name' => 'Samsung Galaxy',
            'price' => 750,
            'img' => 'https://i.gadgets360cdn.com/products/large/1551094347_635_samsung_galaxy_a_50.jpg',
        ]
    ],
];

// foreach ($phones as $brand) {
//     foreach ($brand as $phone) {
//         print $phone['name'];
//         print $phone['price'] . ' Eur';
//     }
// }



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            /* height: 90vh; */
            width: 100vw;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #gallery {

            width: 90vw;
            margin: 0 auto;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }

        .card {
            width: 25vw;
            background-color: green;
            border-radius: 35px;
            padding: 10px;
            margin: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        img {
            max-width: 40%;
            max-height: 100px;
            ;
            border-radius: 35%;
        }
    </style>

    
</head>

<body>
    <section id="galery">
    <?php foreach ($phones as $brand) : ?>
    <?php foreach ($brand as $phone) : ?>
       

        <div class="card">
            <img src="<?php print $phone['img']; ?>">
            <h4><?php print $phone['name']; ?></h4>
            <h3><?php print $phone['price'] . ' Eur'; ?></h3>
        </div>
<?php endforeach; ?>
<?php endforeach; ?>

        
    </section>
</body>

</html>

<!-- PHP - Sukurti masyvą, kuriame bus telefonų firmos, o jose aprašyta: Pavadinimas telefono, kaina,
nuotrauka. (bent 6vnt telefonų).
HTML/CSS - sukurti centre 3x2 telefono korteles ir atvaizduoti informaciją foreach’o
pagalba -->