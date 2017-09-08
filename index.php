<?php

class Car{
    private $brand;
    private $model;
    private $type;
    private $winterEquipment;
    private $typeEngine;
    private $powerElectric;
    private $powerDVS;
    private $maxSpeed;

    public function __construct($brand,$model,$type,$winterEquipment,$typeEngine,$powerElectric,$powerDVS,$maxSpeed)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->type = $type;
        $this->winterEquipment = $winterEquipment;
        $this->typeEngine = $typeEngine;
        $this->powerElectric = $powerElectric;
        $this->powerDVS = $powerDVS;
        $this->maxSpeed = $maxSpeed;
    }
    public function printBrand(){
        echo $this->brand;
    }
    public function printModel(){
        echo $this->model;
    }
    public function printType(){
        echo $this->type;
    }
    public function printWinter(){
        echo $this->winterEquipment;
    }
    public function printTypeEngine(){
        echo 'Тип двигателя: '.$this->typeEngine.'<br>';
    }
    public function printPowerElectric(){
        echo 'Мощность электродивгателя: '.$this->powerElectric;
    }
    public function printPowerDVS(){
        echo 'Мощность ДВС: '.$this->powerDVS;
    }
    public function printMaxSpeed(){
        echo 'Максимальная скорость: '.$this->maxSpeed;
    }
}

$mashine1 = new Car('BMW','i8', 'Спорткар','','ДВС/Электрический',96.0,170,250.0);
$mashine2 = new Car('Toyota','Camry', 'Седан','Есть','ДВС','',120,210.0);

class TV{
    private $Brand;
    private $Model;
    private $Type;
    private $DScreen;
    private $DScreenCM;
    private $ImageQualityIndex;
    private $ImageQualityIndexString;
    private $NumberPorts;
    private $Price;

    public function __construct($Brand,$Model,$Type,$DScreen,$DScreenCM,$ImageQualityIndex,$ImageQualityIndexString,$NumberPorts,$Price){
        $this->Brand = $Brand;
        $this->Model = $Model;
        $this->Type = $Type;
        $this->DScreen = $DScreen;
        $this->DScreenCM = $DScreenCM;
        $this->ImageQualityIndex = $ImageQualityIndex;
        $this->ImageQualityIndexString = $ImageQualityIndexString;
        $this->NumberPorts = $NumberPorts;
        $this->Price = $Price;
    }

    public function printBrand(){
        return $this->Brand;
    }
    public function printModel(){
        return $this->Model;
    }
    public function printType(){
        return $this->Type;
    }
    public function printDScreen(){
        return $this->DScreen;
    }
    public function printDScreenCM(){
        return $this->DScreenCM;
    }
    public function printImageQualityIndex(){
        return $this->ImageQualityIndex;
    }
    public function printImageQualityIndexString(){
        return $this->ImageQualityIndexString;
    }
    public function printNumberPorts(){
        return $this->NumberPorts;
    }
    public function printPrice(){
        return $this->Price;
    }
}

$TV1 = new TV('LG','22LH450V','Edge LED',22,55,100,'PMI',1,10499);
$TV2 = new TV('Samsung','UE32J5205','Edge LED',32,81,100,'CMR',1,21999);

class Pen{
    private $Brand;
    private $Type;
    private $Length;
    private $LineThickness;
    private $ColorPen;
    private $ColorLine;
    private $Price;

    public function __construct($Brand,$Type,$Length,$LineThickness,$ColorPen,$ColorLine,$Price){
        $this->Brand = $Brand;
        $this->Type = $Type;
        $this->Length = $Length;
        $this->LineThickness = $LineThickness;
        $this->ColorPen = $ColorPen;
        $this->ColorLine = $ColorLine;
        $this->Price = $Price;
    }

    public function printBrand(){
        return $this->Brand;
    }
    public function printType(){
        return $this->Type;
    }
    public function printLength(){
        return $this->Length;
    }
    public function printLineThickness(){
        return $this->LineThickness;
    }
    public function printColorPen(){
        return $this->ColorPen;
    }
    public function printColorLine(){
        return $this->ColorLine;
    }
    public function printPrice(){
        return $this->Price;
    }
}

$Pen1 = new Pen('PRESTO','Гелевая',12,0.6,'Красный','Красный',40);
$Pen2 = new Pen('Elementary','Шариковая',10,0.7,'Жёлтый','Синий',19);

class Ducks{
    private $Group;
    private $Name;
    private $DGroup;
    private $Pol;
    private $Ves;
    private $Geoloction;

    public function __construct($Group,$Name,$DGroup,$Pol,$Ves,$Geoloction){
        $this->Group = $Group;
        $this->Name = $Name;
        $this->DGroup = $DGroup;
        $this->Pol = $Pol;
        $this->Ves = $Ves;
        $this->Geoloction = $Geoloction;
    }
    public function printGroup(){
        return $this->Group;
    }
    public function printName(){
        return $this->Name;
    }
    public function printDGroup(){
        return $this->DGroup;
    }
    public function printPol(){
        return $this->Pol;
    }
    public function printVes(){
        return $this->Ves;
    }
    public function printGeoloction(){
        return $this->Geoloction;
    }
}

$Duck1 = new Ducks('Домашняя', 'Домашняя утка','','Самец',4.25,'Евразии');
$Duck2 = new Ducks('Дикая', 'Нырки','Ныркова','Самец',3.34,'Евразии');
$Duck3 = new Ducks('Дикая', 'Речная утка','Речная','Самка',3.78,'Евразии');

class Tovars{
    private $Name;
    private $Type;
    private $Price;
    private $Nali;

    public function __construct($Name,$Type,$Price,$Nali){
        $this->Name = $Name;
        $this->Type = $Type;
        $this->Price = $Price;
        $this->Nali = $Nali;
    }
    public function printName(){
        return $this->Name;
    }
    public function printType(){
        return $this->Type;
    }
    public function printPrice(){
        return $this->Price;
    }
    public function printNali(){
        return $this->Nali;
    }
}

$Tovar1 = new Tovars('Очки','Оптический прибор',2000,5);
$Tovar2 = new Tovars('Наушники','Аудиотехника',4300,0);
$Tovar3 = new Tovars('Fairy','Моющее средство',150.5,7);

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    <h2>Автомобили:</h2>
    <div>
        Бренд: <?=$mashine1->printBrand()?><br>
        Модель: <?=$mashine1->printModel()?><br>
        Тип: <?=$mashine1->printType()?><br>
        Название: <?=$mashine1->printBrand()?> <?=$mashine1->printModel()?><br>
        <?=$mashine1->printTypeEngine()?>
        <?=$mashine1->printPowerElectric()?>(КВт)<br>
        <?=$mashine1->printPowerDVS()?>(кВт)<br>
        <?=$mashine1->printMaxSpeed()?>(км/ч)
    </div>
    <br>
    <div>
        Бренд: <?=$mashine2->printBrand()?><br>
        Модель: <?=$mashine2->printModel()?><br>
        Тип: <?=$mashine2->printType()?><br>
        Название: <?=$mashine2->printBrand()?> <?=$mashine2->printModel()?><br>
        Зимняя комплектация: <?=$mashine2->printWinter()?><br>
        <?=$mashine2->printTypeEngine()?>
        <?=$mashine2->printPowerDVS()?>(кВт)<br>
        <?=$mashine2->printMaxSpeed()?>(км/ч)
    </div>
    <br>
    <h2>Телевизоры:</h2>
    <div>
        Название: <?=$TV1->printBrand();?> <?=$TV1->printModel();?><br>
        Тип экрана: <?php echo $TV1->printType();?><br>
        Диагональ экрана: <?php echo $TV1->printDScreen().', '.$TV1->printDScreenCM().'(см)';?><br>
        Индекс качества изоображения: <?php echo $TV1->printImageQualityIndex().' '.$TV1->printImageQualityIndexString();?><br>
        Количество HDMI портов: <?php echo $TV1->printNumberPorts();?><br>
        Цена: <?php echo $TV1->printPrice()." рублей";?>
    </div>
    <br>
    <div>
        Название: <?=$TV2->printBrand();?> <?=$TV2->printModel();?><br>
        Тип экрана: <?php echo $TV2->printType();?><br>
        Диагональ экрана: <?php echo $TV2->printDScreen().', '.$TV2->printDScreenCM().'(см)';?><br>
        Индекс качества изоображения: <?php echo $TV2->printImageQualityIndex().' '.$TV2->printImageQualityIndexString();?><br>
        Количество HDMI портов: <?php echo $TV2->printNumberPorts();?><br>
        Цена: <?php echo $TV2->printPrice()." рублей";?>
    </div>
    <br>
    <div>
        <h2>Ручки:</h2>
        <div>
            Брэнд: <?php echo $Pen1->printBrand();?><br>
            Тип ручки: <?php echo $Pen1->printType();?><br>
            Длина ручки: <?php echo $Pen1->printLength();?><br>
            Игольчатый пишущий узел: <?php echo $Pen1->printLineThickness() . '(мм)';?><br>
            Цвет ручки: <?php echo $Pen1->printColorPen();?><br>
            Цвет чернил: <?php echo $Pen1->printColorLine();?><br>
            Цена: <?php echo $Pen1->printPrice()." рублей";?>
            <br>
            <br>
        </div>
        <div>
            Брэнд: <?php echo $Pen2->printBrand();?><br>
            Тип ручки: <?php echo $Pen2->printType();?><br>
            Длина ручки: <?php echo $Pen2->printLength();?><br>
            Игольчатый пишущий узел: <?php echo $Pen2->printLineThickness() . '(мм)';?><br>
            Цвет ручки: <?php echo $Pen2->printColorPen();?><br>
            Цвет чернил: <?php echo $Pen2->printColorLine();?><br>
            Цена: <?php echo $Pen2->printPrice()." рублей";?>
        </div>
    </div>
    <br>
    <div>
        <h2>Утки:</h2>
        <div>
            Группа: <?php echo $Duck1->printGroup();?><br>
            Название: <?php echo $Duck1->printName();?><br>
            Пол: <?php echo $Duck1->printPol();?><br>
            Вес: <?php echo $Duck1->printVes().'(кг)';?><br>
            Обитает: <?php echo 'в ' . $Duck1->printGeoloction();?>
            <br>
            <br>
        </div>
        <div>
            Группа: <?php echo $Duck2->printGroup();?><br>
            Название: <?php echo $Duck2->printName();?><br>
            Группа диких уток: <?php echo $Duck2->printDGroup();?><br>
            Пол: <?php echo $Duck2->printPol();?><br>
            Вес: <?php echo $Duck2->printVes().'(кг)';?><br>
            Обитает: <?php echo 'в ' . $Duck2->printGeoloction();?>
            <br>
            <br>
            <div>
                Группа: <?php echo $Duck3->printGroup();?><br>
                Название: <?php echo $Duck3->printName();?><br>
                Группа диких уток: <?php echo $Duck3->printDGroup();?><br>
                Пол: <?php echo $Duck3->printPol();?><br>
                Вес: <?php echo $Duck3->printVes().'(кг)';?><br>
                Обитает: <?php echo 'в ' . $Duck3->printGeoloction();?>
            </div>
        </div>
    </div>
    <br>
    <div>
        <h2>Товары:</h2>
        <div>
            Название: <?php echo $Tovar1->printName();?><br>
            Тип: <?php echo $Tovar1->printType();?><br>
            Цена: <?php echo $Tovar1->printPrice(). ' рублей';?><br>
            Вналичии: <?php echo $Tovar1->printNali(). '(шт)';?>
            <br>
            <br>
        </div>
        <div>
            Название: <?php echo $Tovar2->printName();?><br>
            Тип: <?php echo $Tovar2->printType();?><br>
            Цена: <?php echo $Tovar2->printPrice(). ' рублей';?><br>
            Вналичии: <?php echo $Tovar2->printNali(). '(шт)';?>
            <br>
            <br>
        </div>
        <div>
            Название: <?php echo $Tovar3->printName();?><br>
            Тип: <?php echo $Tovar3->printType();?><br>
            Цена: <?php echo $Tovar3->printPrice(). ' рублей';?><br>
            Вналичии: <?php echo $Tovar3->printNali(). '(шт)';?>
        </div>
    </div>
</body>
</html>


