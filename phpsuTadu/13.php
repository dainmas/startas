<?php

$geles = [
	'skintos' => 
	[
		[
		'kaina' => 10,
		'pavadinimas' => '123',
		'klase' => 1,
		],
		[
		'kaina' => 11,
		'pavadinimas' => 'qwe',
		'klase' => 1,
		],		
	],
	'puokstes' => [
		[
		'kaina' => 10,
		'pavadinimas' => 'pirma',
		'klase' => 45,
		],
		[
		'kaina' => 11,
		'pavadinimas' => 'antra',
		'klase' => 13,
		],	
	],
];

unset($geles['skintos'][1]);

// dabar jau tokia pozicija nebeegzistuoja
print $geles['skintos'][1]['kaina'];