<?php
require_once "ClientData.php";
require_once "OneTimePass.php";
require_once "DayTimePass.php";
require_once "ComplexPass.php";
require_once "Fitness.php";

// создаем объект, который хранит информацию о владельце абонемента
$clientData = new ClientData("Иван", "Гусев", date_create('12-9-1990'));
// создаем разовый абонемент
$oneTime = new OneTimePass($clientData);

$fitness = new Fitness();
// регистрируем абонемент
$fitness->addClient($oneTime, FitnessConstants::GYM);

// создаем объект, который хранит информацию о владельце абонемента
$clientData2 = new ClientData("Евгения", "Ситько", date_create('23-3-1981'));
// создаем разовый абонемент
$dayTime = new DayTimePass($clientData2);
// регистрируем абонемент
$dayTime->setDateRegEnd(date_create('10-9-2019'));

$fitness->addClient($dayTime, FitnessConstants::SWIMMING_POOL); // не должен пройти (абонемент не позволяет посещать бассейн)
$fitness->addClient($dayTime, FitnessConstants::GROUP_TRAINING);
$fitness->addClient($dayTime, FitnessConstants::GYM); // не должен пройти, повторное использование абонемента

$fitness->showClients();