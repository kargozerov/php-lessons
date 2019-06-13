<?php

class Pass
{
    // дата регистрации абонемента
    protected $dateRegStart;
    // дата окончания действия абонемента
    protected $dateRegEnd;
    // доступные зоны в фитнес клубе
    protected $locations = [];
    // вход
    protected $startTime;
    // выход
    protected $endTime;
    // информация о владельце
    protected $clientData;

    public function __construct(ClientData $clientData)
    {
        $this->clientData = $clientData;
        // date_create() без аргументов вернет объект DateTime,
        // текущую дату
        $this->dateRegStart = date_create();
        $this->startTime = date_create("8:00");
    }

    public function getDateRegStart()
    {
        return $this->dateRegStart;
    }

    public function setDateRegStart($dateRegStart)
    {
        $this->dateRegStart = $dateRegStart;
    }

    public function getDateRegEnd()
    {
        return $this->dateRegEnd;
    }

    public function setDateRegEnd($dateRegEnd)
    {
        $this->dateRegEnd = $dateRegEnd;
    }


    public function getLocations(): array
    {
        return $this->locations;
    }

    public function setLocations(array $locations)
    {
        $this->locations = $locations;
    }


    public function getStartTime()
    {
        return $this->startTime;
    }


    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
    }


    public function getEndTime()
    {
        return $this->endTime;
    }


    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
    }


    public function getClientData(): ClientData
    {
        return $this->clientData;
    }

    public function setClientData(ClientData $clientData)
    {
        $this->clientData = $clientData;
    }



}