<?php

$nome = 'Xand';

function teste() {
    global $nome;
    echo $nome;
}

function teste2() {

    $nome = 'Alê';
    echo $nome.'agora no teste2';
}

teste();
teste2();