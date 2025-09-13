<?php

class TrafficLight {
    public $color;

    public function __construct()
    {
        $this->color = "красный";
    }

    public function work()
    {
        if ($this->color == "красный") {
            $this->color = "зеленый";
        } elseif ($this->color == "зеленый") {
            $this->color = "желтый";
        } elseif ($this->color == "желтый") {
            $this->color = "красный";
        }
    }

    public function getColor()
    {
        return "Сейчас горит: " . $this->color;
    }
}

$trafficLight = new TrafficLight();

echo $trafficLight->getColor() . "\n";

for ($i = 0; $i < 5; $i++) {
    $trafficLight->work();
    echo $trafficLight->getColor() . "\n";
}