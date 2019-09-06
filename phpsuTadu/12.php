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
		'kaina' => 10,
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
// foreach ($geles as  $pavadinimas) {
// 	foreach ($pavadinimas as $key => $value) {
// 	 	print $value['pavadinimas'] . '<br>';
// 	 } 
// }

foreach ($geles['skintos'] as $key => $value) {
	print $value['pavadinimas'];
}
?>