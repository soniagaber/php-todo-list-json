<?php
$lista= ['alzarsi',
'fare colazione',
'fare la doccia',
'lavorare',
'pranzare'];

header('Content-type: application/json');

echo json_encode($lista);
?>