<?php 

class rent{
    public $car , $driver ;
    public function __construct(Car $car, Driver $driver){
        $this->car = $car;
        $this->driver = $driver;
    }
   public function getCar(): Car{
    return $this->car;
   }
   public function getDriver() : Driver{
    return $this->driver;
   }

}
class Driver{

    public $name,$age,$family,$hourlyRate,$relationStatus;

    public function setName(string $name){
        $this->name=$name;
    }
    public function getName($name) : string{
        return $this->name;
    }

    public function setAge(int $age){
        $this->age=$age;
    }
    public function getAge() : int{
        return $this->age;
    }
    public function setFamily(array $family){
        $this->family=$family;
    }
    public function getFamily() : array{
        return $this->family;
    }
    public function setHourlyRate(float $hourlyRate){
        $this->hourlyRate=$hourlyRate;
    }
    public function getHourlyRate() :float{
        return $this->hourlyRate;
    }
    public function setRelationStatus(bool $relationStatus){
        $this->relationStatus=$relationStatus;
    }
    public function getRelationStatus() :bool{
        return $this->relationStatus;
    }

}

class Car{
    public $brand,$model,$price,$spare,$available;
    public function __construct(string $brand,int $model,float $price,array $spare, bool $available){

        $this->brand=$brand;
        $this->model=$model;
        $this->price=$price;
        $this->spare=$spare;
        $this->available=$available;
    }
    public function getBrand() :string{
        return $this->brand;
    }
    public function getModel() :int{
        return $this->model;
    }
    public function getPrice() : float{
        return $this->price;
    }
    public function getSpare() : array{
        return $this->spare;
    }
    public function getAvailable() : bool{
        return $this->available;
    }

}


$daungaung = new Driver();
$daungaung->setName("Aung Aung");
$daungaung->setAge(23);
$daungaung->setFamily(array("hla","mya","nu","yu","tun","khon","loon") );
$daungaung->setHourlyRate(8.4);
$daungaung->setRelationStatus(true);

$dmaungmaung = new Driver();
$dmaungmaung->setName("Maung");
$dmaungmaung->setAge(33);
$dmaungmaung->setFamily(array("kyi","shwin","aye","yu","Hmwe","khay","loon") );
$dmaungmaung->setHourlyRate(6.4);
$dmaungmaung->setRelationStatus(false);


$toyota = new Car("Hondafit",2018,45.5,["one","tow","three"],true);
$hondai = new Car("hoon",2020,50.5,["three","one","two"],false);


$rent1 = new rent($toyota,$daungaung);
$rent2 = new rent($hondai,$dmaungmaung);

$list = [$rent1,$rent2];

$data1 = serialize($list);
echo $$data1;

















?>