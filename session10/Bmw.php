<?php

include_once ('Vehicle.php');

class Bmw extends Vehicle
{
    public function setColor()
    {
        $this->color = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
    }

    public function setAutomaticGear()
    {
        $this->automaticGear = rand(0,1);
    }
}