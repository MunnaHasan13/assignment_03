
<?php

$text = "The quick brown fox jumps over the lazy dog.";

function modifiedText($text) {

    $lcText = strtolower($text);

    $replacedString = str_replace('brown','red',$lcText);

    echo $replacedString;
}

modifiedText($text);