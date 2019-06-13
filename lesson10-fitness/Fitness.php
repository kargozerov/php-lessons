<?php
require_once "FitnessConstants.php";
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
        if (!in_array($zoneType, $pass->getLocations())){
            echo $this->getMessage($pass->getClientData(),
                FitnessConstants::LOCATION_ERROR);
            return;
        }

        $dateEnd = $pass->getDateRegEnd()->format('Y-m-d');
        $currentDate = date_create()->format('Y-m-d');
        var_dump($dateEnd, $currentDate);
        // 19-7-3      19-6-13
        if ($currentDate > $dateEnd) {
            echo $this->getMessage($pass->getClientData(),
                FitnessConstants::EXPIRED_ERROR);
            return;
        }

        if (count($this->zones[$zoneType]) == FitnessConstants::MAX){
            echo $this->getMessage($pass->getClientData(),
                FitnessConstants::CLIENT_COUNT_ERROR);
            return;
        }

        $this->zones[$zoneType][] = $pass; // аналогично array_push()
        // TODO: вызов логгера, запись информации в файл
        echo $this->getMessage($pass->getClientData(),
            FitnessConstants::WELCOME);

    }

    private function getMessage(ClientData $clientData, string $message){
        return $clientData->getName() . ', ' . $message . "<br>";

    }




}