<?php
function getAllTasks(){
    $task1 = [
       'title'=>'Задача 1',
       'date' => date_create('yesterday')
    ];

    $task2 = [
        'title'=>'Задача 2',
        'date' => date_create('tomorrow')
    ];

    $task3 = [
        'title'=>'Задача 3',
        'date' => date_create()
    ];

    $task4 = [
        'title'=>'Задача 4',
        'date' => date_create('yesterday')
    ];

    return [$task1, $task2, $task3, $task4];
}

var_dump(getAllTasks());

$new = function ($tasks){
    return $tasks['date'] > date_create();
};

$by_title = function ($task, $title){
    return $task['title'] == $title;
};

function get_task_by_param($func, $param=null)
{
    $result_tasks = [];
    $tasks = getAllTasks();
    foreach ($tasks as $value) {
        if ($func($value, $param)) {
            array_push($result_tasks, $value);
        }
    }
    return $result_tasks;
}
var_dump(get_task_by_param($new));
var_dump(get_task_by_param($by_title, 'Задача 1'));

//сгенерировать 5 массивов из случайных чисел.
// Вывести массивы и сумму их элементов на экран.
//Найти массив с максимальной суммой элементов.
//Вывести его на экран еще раз

//Генерация массива и подсчет суммы - разные функции

$create_arr = function (){
    $num = rand(5, 15);
    $arr = range($num, 345, $num);
    return $arr;
};
function get_sum($arr){
    return array_sum($arr);
}

function max_arr($arr){
    $arrays = [];
    for ($i = 0; $i<= 5; $i++){
        array_push($arrays, $arr());
    }
    return $arrays;
}
max_arr($create_arr);