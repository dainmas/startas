<?php
$gerimai = [

    'alus' => [
        [
            'name' => 'kalnapilis',
            'price' => 4,
        ],
        [
            'name' => 'utenos',
            'price' => 3,
        ],
        [
            'name' => 'ungurio',
            'price' => 2,
        ],

    ],
    'sampanas' => [
        [
            'name' => 'sampane',
            'price' => 4,
        ],
        [
            'name' => 'samp',
            'price' => 3,
        ],
        [
            'name' => 'sampa',
            'price' => 2,
        ],

    ],
    'vynas' => [
        [
            'name' => 'vynas',
            'price' => 4,
        ],
        [
            'name' => 'vyn',
            'price' => 3,
        ],
        [
            'name' => 'vy',
            'price' => 2,
        ],
    ],
];

$people = [
    [
        'name' => 'Audrius',
        'amzius' => 18,
        'pinigai' => 5
    ],
    [
        'name' => 'Petras',
        'amzius' => 21,
        'pinigai' => 7
    ],
    [
        'name' => 'Aistė',
        'amzius' => 24,
        'pinigai' => 8
    ]
];
// foreach ($people as $key => $value) {

//             print $gerimai['name'];
//             print $gerimai['price'] . ' Eur';
//             print $sum;
//         }
//     };


$vardas = 'Tomas';
$amzius = 22;
$pinigai = 4;
$prekė = 'sampane';
$suma = 0;


foreach ($people as $zmogus) {
    if ($zmogus['amzius'] <= 21) {
        print $zmogus['name'] . ', Jūs esate nepilnametis, todėl negalime Jums parduoti alkoholio';
    } elseif ($zmogus['amzius'] > 21) {

        foreach ($gerimai as $rusis) {
            foreach ($rusis as $preke) {
                print $preke['name'] . ' ';
                print $preke['price'];

                if ($pinigai >= $preke['price']) {
                    $graza = $pinigai - $preke['price'];
                    print $graza;
                    print 'Sveikinu, įsigijote, tik prieš tai parodykite, prašau, savo asmens dokumentą,' . $preke['price'] . ' Eur'.'<br>';
                } else {
                    print 'Jums nepakanka pinigų, Jus turite tik ' . $pinigai;
                }
            }
        }
    }
};
//Tado pvz.
// $date = date('Y-m-d');
// $datePlusFourMonths = date('Y-m-d', strtotime('+4 month'));
// $array = [
//     'alus' => [
//         [
//             'name' => 'svyturio extra',
//             'price' => 3,
//         ],
//         [
//             'name' => 'utenos',
//             'price' => 2.3,
//         ],
//         [
//             'name' => 'Kalnapilio',
//             'price' => 3.2,
//         ],
//     ],
//     'sampanas' => [
//         [
//             'name' => 'bosca',
//             'price' => 5,
//         ],
//         [
//             'name' => 'verdi',
//             'price' => 5.5,
//         ],
//         [
//             'name' => 'riesling',
//             'price' => 8,
//         ],
//     ],
//     'vynas' => [
//         [
//             'name' => 'Monikutes naktys',
//             'price' => 2,
//         ],
//         [
//             'name' => 'Bosco delmerlo',
//             'price' => 18,
//         ],
//         [
//             'name' => 'Vinetu',
//             'price' => 12.5,
//         ],
//     ],
// ];
// print $date . ' => ' . $datePlusFourMonths . '<br><br>'; 
// $vardas = 'Jonas';
// $amzius = 2;
// $pinigai = 14;
// $norimaPirktiPreke = 'Vinetu';
// if ($amzius >= 21) {
//     foreach ($array as $gerimoMasyvas) {
//         foreach ($gerimoMasyvas as $gerimas) {
//             if ($norimaPirktiPreke == $gerimas['name'] && $pinigai >= $gerimas['price']) {
//                 print 'Jus nusipirkote ' . $gerimas['name'] . ' kuris kainavo ' . $gerimas['price'] . ' Eur.';
//             }
//             if ($norimaPirktiPreke == $gerimas['name'] && $pinigai < $gerimas['price']) {
//                 print 'Nepakanka jums pinigu isigyti sia preke';
//             }
//         }
//     }
// } else {
//     print $vardas . ' sugrizk, kai paaugsi, .';
// } 