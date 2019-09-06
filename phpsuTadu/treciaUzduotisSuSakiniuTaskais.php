<?php 
$text = 'Sveiki, cia yra sakinys Sitas sakinys yra nesamoningas Jame nera jokios prasmes Sveikinu perskaicius';

$newText = preg_replace('/ [A-Z]/', '. $0', $text . '.');

print $text . '<br>' . $newText;

?>