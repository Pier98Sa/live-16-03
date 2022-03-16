<?php

require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/Employee.php';

$utente = new User ('Pippo','pippo@email.it');
$utente->setAge(70);
$utente->setDiscount();
$utente->setEmail('ciaociao@email.it');

$impiegato = new Employee('Paperino','paperino@email.it',3);

$impiegato->setAge(70);
$impiegato->setDiscount();
$impiegato-> getImpiegatoEmail();
echo $impiegato->getDiscount();

var_dump($utente);
var_dump($impiegato);