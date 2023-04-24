<?php
$lista= [
    'alzarsi',
'fare colazione',
'fare la doccia',
'lavorare',
'pranzare'
];

if(isset($_POST['newTodo'])){
    $lista[] = $_POST['newTodo'];
    echo json_encode($lista);
} else{
    header('Content-type: application/json');

    echo json_encode($lista);
}
?>