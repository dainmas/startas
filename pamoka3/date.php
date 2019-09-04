<?php
print date('l d-m-y'). '<br> ';
print 'after 4 months wil be: ';
$timestamp=strtotime('+4 Months');
print date('l d-m-y', $timestamp);

?>
