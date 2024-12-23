<?php

class mic
{
    private $color;
    public $brand;
    public $price;
    public $light;
    public $model;
    public $usb_port;

    public function setlight($light)
    {
        // printf( $light);

        // printf($this->light);
        $this->light= $light; 
    }
    public function getmodel()
    {
       return $this->model;
    }
    public function setmodel($model)
    {
       $this->model = ucwords($model);
    }
    public function setcolor($color)
    {
        $this->color = $color;
    }
    public function getcolor()
    {
        return $this->color;
    }
}