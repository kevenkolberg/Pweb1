<?php

$esporte = null;

if(isset($_POST['ckesporte']))
    $esporte = $_POST['ckesporte'];

if ($esporte !== null){
    for($i = 0; $i < count($esporte); $i++){
        echo "<p>{$esporte[$i]}</p>";
    }
}


function dd($param){

    echo '<pre>';
    print_r($param);
    echo '</pre>';
    die();
}