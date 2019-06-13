<?php

class FitnessConstants
{
    // константы публичные, но
    // начиная с версии php 7.1 константам можно
    // задавать модификатор доступа.
    // В интерфейсах константы могут быть только публичными
    const GYM = 'Gym';
    const SWIMMING_POOL = 'SwimmingPool';
    const GROUP_TRAINING = 'GroupTraining';

    const MAX = 20;

    const LOCATION_ERROR = 'Выбранная зона не доступна по Вашему абонементу';
    const EXPIRED_ERROR = 'Срок действия абонемента закончился';
    const TIME_ERROR = 'Данное время не доступно по Вашему абонементу';
    const CLIENT_COUNT_ERROR = 'Мест в выбранной зоне нет, ждите';
    const DOUBLE_PASS_ERROR = 'Ваш абонемент уже зарегистрирован';

    const WELCOME = 'Добро пожаловать';
}