<?php
require_once "Pass.php";

// разовый абонемент расширяет класс Pass
class OneTimePass extends Pass
{
    public function __construct(ClientData $clientData)
    {
        // обращение к мотоду родительского класса
        parent::__construct($clientData);
        $this->dateRegEnd = date_create();
        $this->endTime = date_create("22:00");
        $this->locations = [
            FitnessConstants::GYM,
            FitnessConstants::SWIMMING_POOL
        ]; // тренажерный зал + бассейн
    }
}
