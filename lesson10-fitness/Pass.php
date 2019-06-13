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

    /**
     * @return DateTime|false
     */
    public function getDateRegStart()
    {
        return $this->dateRegStart;
    }

    /**
     * @param DateTime|false $dateRegStart
     */
    public function setDateRegStart($dateRegStart)
    {
        $this->dateRegStart = $dateRegStart;
    }

    /**
     * @return mixed
     */
    public function getDateRegEnd()
    {
        return $this->dateRegEnd;
    }

    /**
     * @param mixed $dateRegEnd
     */
    public function setDateRegEnd($dateRegEnd)
    {
        $this->dateRegEnd = $dateRegEnd;
    }

    /**
     * @return array
     */
    public function getLocations(): array
    {
        return $this->locations;
    }

    /**
     * @param array $locations
     */
    public function setLocations(array $locations)
    {
        $this->locations = $locations;
    }

    /**
     * @return DateTime|false
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param DateTime|false $startTime
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
    }

    /**
     * @return mixed
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param mixed $endTime
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
    }

    /**
     * @return ClientData
     */
    public function getClientData(): ClientData
    {
        return $this->clientData;
    }

    /**
     * @param ClientData $clientData
     */
    public function setClientData(ClientData $clientData)
    {
        $this->clientData = $clientData;
    }



}