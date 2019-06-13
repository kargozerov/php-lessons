<?php
require_once "Pass.php";

class ComplexPass extends Pass
{
    public function __construct(ClientData $clientData)
    {
        parent::__construct($clientData);
        $this->endTime = date_create("22:00");
        $this->locations = [
            FitnessConstants::GYM,
            FitnessConstants::GROUP_TRAINING,
            FitnessConstants::SWIMMING_POOL
        ];
    }

}