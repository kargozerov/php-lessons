<?php
require_once "Pass.php";

class DayTimePass extends Pass
{
    public function __construct(ClientData $clientData)
    {
        parent::__construct($clientData);
        $this->endTime = date_create("16:00");
        $this->locations = [
            FitnessConstants::GYM,
            FitnessConstants::GROUP_TRAINING
        ];
    }

}