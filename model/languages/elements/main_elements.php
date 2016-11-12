<?php

$counter = 0;

$elements[$counter][0] = 'main_site_button';
$elements[$counter][1] = 'html';

$counter++;

$elements[$counter][0] = 'main_site_a';
$elements[$counter][1] = 'href';


echo json_encode($elements);

?>
