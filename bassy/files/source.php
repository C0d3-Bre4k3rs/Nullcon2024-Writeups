<?php
ini_set("error_reporting", 1);

include "flag.php";
include "./base85.class.php"; // https://github.com/scottchiefbaker/php-base85

if(isset($_GET['source'])) {
    highlight_file(__FILE__);
}

if(isset($_GET['password'])) {
    $pw = base85::encode($_GET['password']);

    if($pw == base85::decode($ADMIN_PW)) {
        echo $FLAG;
    } 
}

?>