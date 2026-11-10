<?php

$word = 'test';

$person = [
    'name' => 'Vasia',
    'age' => 20,
];

print_r($person);
echo $word;

//foreach - делает цикличность - в примере ниже выводит все элементы массива
foreach ($person as $item) {
    echo $item;
}

//foreach - можно вывести еще и клоюч. точка соединяет
foreach ($person as $key => $item) {
    echo $key . ': ';
    echo $item . '\n';
};

$persons = [
    [
        'name' => 'Vasia',
        'age' => 20,
    ],

    [
        'name' => 'Irina',
        'age' => 30,
    ]

];

foreach ($persons as $person) {
    if ($person['age'] == 30) {
        echo $person['name'];
    };
};

//функции
function sayHello()
{
    echo 'hello';
};

sayHello();

function sum($a, $b)
{
    $summ = $a + $b;
    echo $summ;
};

sum(4, 5);

//возвращаемые функции - для них в названии принято использовать get

function getSum($a, $b)
{
    $summ = $a + $b;
    return $summ;
};
echo getSum(6, 11);

//классы. в н их переменные - это свойства класса, а функции - этометоды класса. Все названия классов пишутся с большой буквы. там есть public - это доступ к переменным и метожам

class Person
{
    public $name = "Vasia";
    public $age = 13;
    public function sayHi()
    {
        echo 'hello';
    }
};

//далее надо создать объект

$personClass = new Person();

//вызывая какую-то переменную внутри класса, к ней надо обращаться через переменную, в которую присвоили класс

echo $personClass->age;

//