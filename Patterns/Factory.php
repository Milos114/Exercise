<?php

class Auto
{
    public $name;
    public $model;

    public function __construct($name, $model)
    {
        $this->name = $name;
        $this->model = $model;
    }

    public function getName()
    {
        return "Name is " . $this->name . " " . $this->model;
    }
}

class AutoFactory
{
    public static function getCar($name, $model)
    {
        return new Auto($name, $model);
    }
}

$car = AutoFactory::getCar('lamburgini', '924');
echo $car->getName();