<?php
require_once "ClientData.php";
require_once "OneTimePass.php";
require_once "DayTimePass.php";
require_once "ComplexPass.php";
require_once "Fitness.php";

$clientData = new ClientData("Иван", "Гусев",
    date_create('12-9-1990'));

$oneTime = new OneTimePass($clientData);

$fitness = new Fitness();
$fitness->addClient($oneTime, FitnessConstants::GYM);


