<?php

class Car {
    public $car_id;
    public $brand;
    public $model;
    public $year;
    public $transmission;
    public $fuel;
    public $horsepower;
    public $price;
    public $bail;

    public static function CreateCar($brand, $model, $year, $transmission, $fuel, $horsepower, $price, $bail) {
        $car = new Car();
        $car->brand = $brand;
        $car->model = $model;
        $car->year = $year;
        $car->transmission = $transmission;
        $car->fuel = $fuel;
        $car->horsepower = $horsepower;
        $car->price = $price;
        $car->bail = $bail;
        return $car;
    }
}