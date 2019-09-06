<?php 
$geles = [
	'skintos' => 
	[
		[
		'kaina' => 10,
		'pavadinimas' => 'pirma',
		'klase' => 1,
		],
		[
		'kaina' => 10,
		'pavadinimas' => 'antra',
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

print $geles['skintos'][1]['pavadinimas'] . '<br>';
print $geles['puokstes'][0]['klase'];



 ?>