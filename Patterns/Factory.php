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

    /**
     * @return string
     */
    public function getName()
    {
        return "Name is " . $this->name . " " . $this->model;
    }
}

class AutoFactory
{
    /**
     * @param  string $name
     * @param  string $model
     * @return Auto
     */
    public static function getCar($name, $model)
    {
        return new Auto($name, $model);
    }
}

$car = AutoFactory::getCar('Lada', '92s4');
echo $car->getName();