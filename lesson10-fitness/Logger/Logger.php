<?php
class Logger
{
    const FILE = 'fitness-log.txt';
//    private const FILE = 'log.txt'; для php > 7.1

    public static function logInfo(ClientData $clientData, string $zoneType){
        // формируем строку для записи по данным клиента
        $info = $clientData->getName() . " " . $clientData->getSurname() . ': ' . $zoneType  . ': ' . date_create()->format('Y-m-d H:i') . "\n";
        // записываем в файл
        file_put_contents(self::FILE, $info, FILE_APPEND | LOCK_EX);
    }
}