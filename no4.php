<?php

function drome($string){
    if (strrev($string)==$string){
        return 1;

    } else {
        return 0;
    }
}
$a ="arthur";
if (drome($a)){
    echo "kata palingdrome";

} else {
    echo "bukan kata palingdrome";
}