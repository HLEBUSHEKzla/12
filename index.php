<? 

//12 Фабричный метод

class Car{
  private $car;
  private $price;

  public function __construct($cartype){
    $this->car = $cartype->GetCar();
    $this->price = $cartype->GetPrice();
  }

  public function GetInfo(){
    echo "Car: " . $this->car . " <br>Price: $" . $this->price;
  }
}
interface Delivery
{
  public function GetCar();
  public function GetPrice();
}

class TaxiEco implements Delivery
{
  public function GetCar(){
    return "Daewoo Lanos";
  }
  public function GetPrice(){
    return 10;
  }
}

class TaxiStandart implements Delivery
{
  public function GetCar(){
    return "Volkswagen Golf";
  }
  public function GetPrice(){
    return 20;
  }
}

class TaxiLux implements Delivery
{
  public function GetCar(){
    return "Mercedes S400";
  }
  public function GetPrice(){
    return 50;
  }
}

$taxi = new Car(new TaxiEco());
$taxi->GetInfo();
