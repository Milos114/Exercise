<?php

// FACTORY
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

// SINGLETON
class Singleton
{
    /**
     * @var Singleton The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     *
     * @return Singleton The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }
}

// STRATEGY
interface creatureInterface
{
    public function getName();
}

class Robot implements creatureInterface
{
    public function getName()
    {
        return 'robot name';
    }
}

class Human implements creatureInterface
{
    public function getName()
    {
        return 'human name';
    }
}

class SomeController
{
    public $creature;

    public function __construct(creatureInterface $creature)
    {
        $this->creature = $creature;
    }

    public function getInfo()
    {
        return $this->creature->getName();
    }
}

echo (new SomeController(new Robot))->getInfo();