<?php
$gerimai=[
    
    'alus' => [
        [
            'name'=> 'kalnapilis',
            'price'=> 4,
         ],
        [
            'name'=> 'utenos',
            'price'=> 3,
        ],
        [
            'name'=> 'ungurio',
            'price'=> 2,
        ],
    
        ],
    'sampanas' => [
        [
            'name'=> 'sampane',
            'price'=> 4,  
        ],
        [
            'name'=> 'samp',
            'price'=> 3,  
        ],
        [
            'name'=> 'sampa',
            'price'=> 2,  
        ],
        
        ],
    'vynas' => [
        [
            'name'=> 'vynas',
            'price'=> 4,   
        ],
        [
            'name'=> 'vyn',
            'price'=> 3,   
        ],
        [
            'name'=> 'vy',
            'price'=> 2,   
        ],
    ],
];

$people=[
    [
    'name' => 'Audrius',
    'age' => 18,
    'pinigai' => 5
    ],
    [
    'name' => 'Petras',
    'age' => 21,
    'pinigai' => 7
    ],
    [
    'name' => 'Aistė',
    'age' => 24,
    'pinigai' => 8
    ]
];
// foreach ($people as $key => $value) {
       
//             print $gerimai['name'];
//             print $gerimai['price'] . ' Eur';
//             print $sum;
//         }
//     };
    

$vardas ='Tomas';
$amzius = 22;
$pinigai = 4;
$prekė = 'sampane';
$suma = 0;



if($amzius <= 21){
    print $vardas . ', Jūs esate nepilnametis, todėl negalime Jums parduoti alkoholio';
}elseif($amzius > 21){
   
    foreach($gerimai as $rusis){
        foreach($rusis as $preke){
            print $preke['name'] . '<br>';
            print $preke['price']; 

            if ($pinigai >= $preke['price']) {
                $graza = $pinigai - $preke['price'];
                print $graza;
                print 'Sveikinu, įsigijote, tik prieš tai parodykite, prašau, savo asmens dokumentą,' . $preke['name'] . ' ' . $preke['price'] . ' Eur';
            } else{
                print 'Jums nepakanka pinigų, Jus turite tik '. $pinigai; 
            } 




        }                 
    }
}
?>