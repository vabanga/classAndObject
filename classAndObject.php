<?php

class machine {
	private $color = "Красный";
	private $brand = "bmw";
	private $name = "bmw X5";
	private $age = "2015";
	private $dvig = "2500";
	function printColor(){
		echo "<b>Машина</b>:<br>";
		$this->color = "Серый";
		echo "Цвет"." - ".$this->color;
		echo "<br>";
	}
	function printBrand(){
		$this->brand = "Porsche";
		echo "Брэнд"." - ".$this->brand;
		echo "<br>";
	}
	function printName(){
		$this->name = "Porsche Panamera Turbo";
		echo "Название"." - ".$this->name;
		echo "<br>";
	}
	function printAge(){
		$this->age = "2017";
		echo "Дата выпуска: ".$this->age."г.";
		echo "<br>";
	}
	function printDvig(){
		$this->dvig = "3996";
		echo "Объём двигателя: ".$this->dvig." см<sup>3</sup>";
		echo "<br>";
		echo "<br>";
	}
}

$obj1 = new machine();
$obj1->printColor();

$obj2 = new machine();
$obj2->printBrand();

$obj3 = new machine();
$obj3->printName();

$obj4 = new machine();
$obj4->printAge();

$obj4 = new machine();
$obj4->printDvig();


class TV {
	private $diagonal = "102";
	private $brand = "lg";
	private $type = "pql";
	private $model = "LG 24LJ480U";
	function printDiagonal(){
		echo "<b>Телевизор</b>:<br>";
		$this->diagonal = "152";
		echo "Диагональ"." - ".$this->diagonal;
		echo "<br>";
	}
	function printBrand(){
		$this->brand = "samsung";
		echo "Брэнд"." - ".$this->brand;
		echo "<br>";
	}
	function printType(){
		$this->type = "LED";
		echo "Тип телевизора"." - ".$this->type;
		echo "<br>";
	}
	function printModel(){
		$this->model = "Samsung UE32K5500";
		echo "Модель телевизора"." - ".$this->model;
		echo "<br>";
		echo "<br>";
	}
}

$obj1 = new TV();
$obj1->printDiagonal();

$obj2 = new TV();
$obj2->printBrand();

$obj2 = new TV();
$obj2->printType();

$obj2 = new TV();
$obj2->printModel();

class pen {
	private $length = "12";
	private $lineThickness = "0.6";
	function printlength(){
		echo "<b>Шариковая ручка</b>:<br>";
		$this->length = "10";
		echo "Длина"." - ".$this->length;
		echo "<br>";
	}
	function printlineThickness(){
		$this->lineThickness = "0.7";
		echo "Ширина линии"." - ".$this->lineThickness;
		echo "<br>";
		echo "<br>";
	}
}

$obj1 = new pen();
$obj1->printlength();

$obj2 = new pen();
$obj2->printlineThickness();

class duck {
	private $delegate = "Настоящие утки";
	private $weight = "4";
	function printdelegate(){
		echo "<b>Утка</b>:<br>";
		$this->delegate = "Древесные утки";
		echo "Представитель"." - ".$this->delegate;
		echo "<br>";
	}
	function printweight(){
		$this->weight = "6";
		echo "Вес"." - ".$this->weight."(кг)";
		echo "<br>";
		echo "<br>";
	}
}

$obj1 = new duck();
$obj1->printdelegate();

$obj2 = new duck();
$obj2->printweight();

class product {
	private $quantity = "4";
	private $price = "80";
	function printquantity(){
		echo "<b>Товар</b>:<br>";
		$this->quantity = "8";
		echo "Количество"." - ".$this->quantity;
		echo "<br>";
	}
	function printprice(){
		$this->price = "160";
		echo "Цена"." - ".$this->price."(р)";
		echo "<br>";
		echo "<br>";
	}
}

$obj1 = new product();
$obj1->printquantity();

$obj2 = new product();
$obj2->printprice();



?>