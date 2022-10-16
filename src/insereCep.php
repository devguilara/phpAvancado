<?php 

require_once "../vendor/autoload.php";

use \Guilaradev\PhpAvancado\buscaCep;

$busca = new buscaCep;

$result = $busca->getAdressFromZippCode('17017490');

print_r($result);