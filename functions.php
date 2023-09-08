<?php

$passwordLunghezza = isset($_GET['generaPassword']) ? $_GET['generaPassword'] : '';

function generaPassword($passwordLunghezza)
{
    $caratteri = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!?~@#-_+<>[]{}';
    $password = array();
    $caratteriLunghezza = strlen($caratteri) - 1;
    for ($i = 0; $i < $passwordLunghezza; $i++) {
        $numeriRandom = rand(0, $caratteriLunghezza);
        $password[] = $caratteri[$numeriRandom];
    };
    return implode($password);
};

?>