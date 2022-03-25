<?php

abstract class Vehicle
{
    public string $color;
    public bool $automaticGear;
    abstract public function setColor();
    abstract public function setAutomaticGear();
}