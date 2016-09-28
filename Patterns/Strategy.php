<?php

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