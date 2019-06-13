<?php
require_once "FitnessConstants.php";
require_once "Logger/Logger.php";
class Fitness
{
    // тренажерный зал + бассейн + групповые занятия
    private $zones = [];

    public function __construct()
    {
        $this->clearZones();
    }

    public function closeFitness(){
        $this->clearZones();
    }

    private function clearZones(){
        $this->zones[FitnessConstants::GYM] = [];
        $this->zones[FitnessConstants::SWIMMING_POOL] = [];
        $this->zones[FitnessConstants::GROUP_TRAINING] = [];
    }

    public function addClient(Pass $pass, string $zoneType){
        // in_array - проверка находженя элемента в массиве
        // проверяем, можно ли по абонементу $pass пройти в желаемую зону $zoneType
        if (!in_array($zoneType, $pass->getLocations())){
            echo $this->getMessage($pass->getClientData(), FitnessConstants::LOCATION_ERROR);
            return;
        }

        // проверяем, не просрочен ли абонемент
        $dateEnd = $pass->getDateRegEnd()->format('Y-m-d');
        $currentDate = date_create()->format('Y-m-d');
        var_dump($dateEnd, $currentDate);

        if ($currentDate > $dateEnd) {
            echo $this->getMessage($pass->getClientData(), FitnessConstants::EXPIRED_ERROR);
            return;
        }

        // объекты DateTime можно сравнивать > < == != , либо методом diff()
        // TODO: проверить, можно ли по абонементу $pass пройти в фитнес клуб в данный момент времени

        // проверяем, если места в выбранной зоне
        if (count($this->zones[$zoneType]) == FitnessConstants::MAX){
            echo $this->getMessage($pass->getClientData(), FitnessConstants::CLIENT_COUNT_ERROR);
            return;
        }

        // проверяем не зарегистрирован ли данный абонемент в одной из зон на текущий момент
        foreach ($this->zones as $zone){
            if (in_array($pass, $zone, true)) {
                echo $this->getMessage($pass->getClientData(), FitnessConstants::DOUBLE_PASS_ERROR);
                return;
            }
        }


        // регистируем абонемент в выбранной зоне
        $this->zones[$zoneType][] = $pass; // аналогично array_push()
        // вызов логгера, запись информации в файл
        Logger::logInfo($pass->getClientData(), $zoneType);
        echo $this->getMessage($pass->getClientData(), FitnessConstants::WELCOME);

    }

    private function getMessage(ClientData $clientData, string $message){
        return $clientData->getName() . ', ' . $message . "<br>";

    }

    // выводим всех, кто есть в фитнес клубе
    public function showClients(){
        foreach ($this->zones as $zoneName => $passes){
            if (!$passes) continue;
            echo "В зоне <b>$zoneName</b> сейчас находятся: <br>";
            foreach ($passes as $passNum => $pass) {
                echo $passNum + 1 . '. ' . $pass->getClientData()->getName() . ' ' . $pass->getClientData()->getSurname() . "<br>";
            }
        }
    }

}