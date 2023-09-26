<?php

$length = 12;

function generatePassword($length) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%^&*()_+' ;
    $randomString = '';

    for($i = 0; $i <= $length; $i++ ) {

        $index = rand(0,strlen($characters) -1);
        $randomString .= $characters[$index];
    }

    return $randomString; 
}

echo "New password: ". generatePassword($length);