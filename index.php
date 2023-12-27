<?php
//////
//////class Person
//////{
//////    public $name = "Undefined", $age = 18;
//////
//////    function displayInfo()
//////    {
//////        echo "Name: " . $this->name . "; Age: " . $this->age . "<br>";
//////        // также можно написать
//////        // echo "Name: $this->name; Age: $this->age<br>";
//////    }
//////}
//////
//////$tom = new Person();
//////$tom->name = "Tom";
//////$tom->displayInfo();   // Name: Tom; Age: 18
//////
//////$person = new Person();
//////
//////$tom = $person;
//////$tom -> name = "Tom";
//////$tom -> age = 36;
//////
//////$tomas = $person;
//////
//////if($tom == $tomas) echo "переменные tom и tomas равны<br>";
//////else echo "переменные tom и tomas НЕ равны<br>";
//////
//////if($tom === $tomas) echo "переменные tom и tomas эквивалентны";
//////else echo "переменные tom и tomas НЕ эквивалентны";
//////
////
////
//////class Person
//////{
//////    public $name;
//////    public $age;
//////
//////    function __construct($name,$age)
//////    {
//////        $this->name = $name;
//////        $this->age = $age;
//////
//////    }
//////
//////    function displayInfo()
//////    {
//////        echo "Имя: $this->name<br>";
//////    }
//////}
//////
//////class Employee extends Person
//////
//////{
//////}
//////
//////$tom = new Employee("Tom",18);
//////var_dump($tom);
//////$tom->displayInfo();
//////$tom->age=18
////
////
//////class student{
//////    public $name;
//////    public $age;
//////    public $id;
//////
////////    function __construct($name,$age,$id){
////////        $this->name=$name;
////////        $this->age=$age;
////////        $this->id=$id;
//////
////////    }
//////    function information(){
//////        var_dump("имя".$this->name."age".$this->age."id".$this->id);
//////    }
//////}
//////$davo=new student();
//////$davo->name="DAVO";
//////$davo->information();
////
//////
//////class car{
//////    public $brand;
//////    public $model;
//////    public $color;
//////    public $year;
////////    function __construct($brand,$model,$color,$year){
////////        $this->a=$brand;
////////        $this->model=$model;
////////        $this->color=$color;
////////        $this->year=$year;
////////    }
//////    function carsInform(){
//////        echo $this->a."  модель:  ".$this->model. " цвет и год выпуска:  ".$this->color.$this->year;
//////    }
//////
//////
//////
//////}
//////$nissan=new car("nissan","x-trail","black","2005");
//////$nissan->a="nissan";
//////$nissan->carsInform();
////
////
//////class bankAccount
//////{
//////    private $balance = 0;
//////
//////
//////    function deposit($amount)
//////    {
//////        if ($amount > 0) {
//////            $this->balance += $amount;
//////            echo "cумма внесена<br>";
//////        } else {
//////            echo "ошибка";
//////        }
//////    }
//////        function withdraw($amount)
//////        {
//////            if ($amount > 0 && $this->balance >= $amount) {
//////                $this->balance -= $amount;
//////                echo "сумма $amount успешна снята";
//////            } else {
//////                echo "недостаточно средств";
//////            }
//////
//////        }
//////
//////        function getBalance()
//////        {
//////            return "баланс на счете:" .$this->balance."<br>";
//////        }
//////
//////
//////}
//////
//////$card = new bankAccount();
//////$card->deposit(100);
//////$card->withdraw(30);
////
////
//////
//////
//////class person {
//////  public $name;
//////  public $age;
//////
//////    function __construct($name,$age){
//////        $this->name=$name;
//////        $this->age=$age;
//////    }
//////    function displayINfo(){
//////        echo "name : $this->name; age : $this->age";
//////    }
//////};
//////$davo=new person("davo",50);
//////$davo->name="tom";
//////$davo->displayINfo();
//////
//////
//////
//////
//////class book
//////{
//////    public $title, $author, $genre;
//////
//////    function __construct($author, $genre, $title)
//////    {
//////        $this->author = $author;
//////        $this->genre = $genre;
//////        $this->title = $title;
//////        echo "автор:  $this->author ! жанр:   $this->genre  название:   $this->title";
//////    }
//////
//////}
//////$litlePrince=new book("А.Экзьюпери","приключения","маленький принц");
////
////
//////
//////
//////class user{
//////    public $name;
//////    public $age;
//////    function __construct( $name,$age){
//////        $this->name=$name;
//////        $this->age=$age;
//////    }
//////    function dicplayInfo(){
//////     echo   $this->name.$this->age;
//////    }
//////}
//////$davo=new user("Davo",70);
//////$davo->dicplayInfo();
////
////
//////
//////class Store{
//////    public $unitOfGoods=[];
//////    function addItem($product){
//////        $this->unitOfGoods[]=$product;
//////        echo "товар добавлен";
//////    }
//////    function removeItem($item){
//////        $key=array_search($item,$this->unitOfGoods);
//////        if ($key !==false){
//////            unset($this->unitOfGoods[$key]);
//////            echo "товар удален ";
//////        }else{
//////            echo "товар не найден";
//////        }
//////    }
//////    function __destruct(){
//////        echo "магазин закрыт,данные очищены";
//////    }
//////}
//////
//////$pila=new Store();
//////$pila->addItem("fish");
//////$pila->removeItem("fis");
//////$pila->unitOfGoods;
//////var_dump( $pila->unitOfGoods);
////
////
//////
//////class employee{
//////    public $name;
//////    function __construct($name){
//////        $this->name=$name;
//////    }
//////    function getName(){
//////        return $this->name;
//////    }
//////    function __destruct(){
//////        echo "сотрудника звали :  $this->name";
//////    }
//////}
//////
//////$petr=new employee("Petr");
//////$petr->getName();
//////echo $petr->getName();
////
////
//////class UserAccount
//////{
//////    public $userName, $email, $password;
//////
//////    function __construct($userName, $email, $password)
//////    {
//////        $this->userName = $userName;
//////        $this->email = $email;
//////        $this->password = $password;
//////    }
//////    function getUsername(){
//////        return $this->userName;
//////    }
//////    function getEmail(){
//////        return $this->email;
//////    }
//////    function setPassword($newPassword){
//////        $this->password=$newPassword;
//////        return $newPassword;
//////    }
//////    function getInfo(){
//////        return "name:  $this->userName. email:  $this->email";
//////    }
//////}
//////$Davo=new UserAccount("Davo","vavka@mail.ru","123b456");
//////
//////$Davo->getUsername();
//////$Davo->getInfo();
//////$Davo->getEmail();
//////$Davo->setPassword("22bb222");
////
////
//////class ProjectManager
//////{
//////    public $name;
//////    public $projects;
//////
//////    function __construct($name)
//////    {
//////        $this->name = $name;
//////        $this->projects = [];
//////    }
//////
//////    function addProject($projectName)
//////    {
//////        $this->projects[] = $projectName;
//////
//////    }
//////
//////    function removeProject($projectName)
//////    {
//////        for ($i = 0; $i < count($this->projects); $i++) {
//////            if ($this->projects[$i] === $projectName) {
//////                unset($this->projects[$i]);
//////            }
//////        }
//////
//////    }
//////
//////    function getProjects()
//////    {
//////        return $this->projects;
//////    }
//////}
//////
//////
//////$manager=new ProjectManager("Aro");
//////
//////$manager->addProject("project1");
//////$manager->addProject("project2");
//////$manager->addProject("project3");
//////
//////$projects=$manager->getProjects();
//////
//////echo "список проектов: ".implode(",",$projects)."<br>";
//////$manager->removeProject("project3");
//////
//////$updateProjects=$manager->getProjects();
//////echo "обновленный список проектов:".implode(",",$updateProjects);
////
////
//////
//////
//////class Bag{
//////    public $pens,$notebook,$colorBag;
//////
//////    function __construct($pens,$notebook,$colorBag){
//////        $this->colorBag=$colorBag;
//////        $this->pens=$pens;
//////        $this->notebook=$notebook;
//////    }
//////    function addPensAndNotebook($number){
//////        $this->notebook+=$number;
//////        $this->pens+=$number;
//////
//////    }
//////    function changeColor($color){
//////        $this->colorBag=$color;
//////    }
//////}
//////
//////
//////
//////class student{
//////    public $name,$LastName,$age,$science=[];
//////    public Bag $bag;
//////
//////    function __construct($name,$age,$LastName,$bag){
//////        $this->name=$name;
//////        $this->age=$age;
//////        $this->LastName=$LastName;
//////        $this->bag=$bag;
//////
//////    }
//////    function addSubjects($subject){
//////        $this->science[]=$subject;
//////    }
//////
//////    function setName($name){
//////        return $this->name=$name;
//////    }
//////    function increment($subject){
//////        for($i=0;$i<count($this->science);$i++){
//////            if($this->science[$i]===$subject){
//////                unset($this->science[$i]);
//////            }
//////        }
//////    }
//////}
//////$bug=new Bag(5,10,"red");
//////$Davo=new student("David",25,"Grigoryan",$bug);
//////$Davo->setName("Aleks");
//////$Davo->addSubjects("Inglish");
//////$Davo->increment("Inglish");
////
//////
//////class Shape
//////{
//////    public function getArea()
//////    {
//////
//////    }
//////
//////    public function getPerimetr()
//////    {
//////
//////    }
//////}
//////
//////class Circle extends Shape
//////{
//////    private $radius;
//////
//////    public function __construct($radius)
//////    {
//////        $this->radius = $radius;
//////    }
//////    public function getArea()
//////    {
//////        return pi()*$this->radius*$this->radius;
//////    }
//////  public function getPerimetr()
//////  {
//////    return 2*pi()*$this->radius;
//////  }
//////}
//////
//////class Square extends Shape{
//////    private $side;
//////
//////    public function __construct($side)
//////    {
//////        $this->side = $side;
//////    }
//////public function getArea()
//////{
//////
//////}
//////}
////
//////
//////class Vehicles
//////{
//////
//////    public int $capacity;
//////    public int $numberOfWheels;
//////    public int $speed;
//////
//////
//////    public function __construct(int $capacity, int $numberOfWheels, int $speed)
//////    {
//////        $this->capacity = $capacity;
//////        $this->numberOfWheels = $numberOfWheels;
//////        $this->speed = $speed;
//////    }
//////    public function movement(){
//////        return"движение транспортного средства";
//////    }
//////    public function stop(){
//////
//////    return"остановка транспортного средства";
//////    }
//////
//////}
//////class Car extends Vehicles{
//////    public function honk(){
//////        return"гудок авто";
//////    }
//////}
//////
//////class Bicycle extends Vehicles{
//////
//////    public function bellRing(){
//////        return "звонок велосипеда";
//////    }
//////}
//////
//////$car=new Car(5,4,180);
//////var_dump($car->movement());
//////var_dump($car->numberOfWheels);
//////
//////$bicycle=new Bicycle(1,2,60);
//////var_dump($bicycle->movement());
//////var_dump($bicycle->bellRing());
////
////
////class Structur
////{
////    public string $addres;
////    public int $numberOfrooms;
////    public int $squareMeters;
////
////    public function __construct(string $addres, int $numberOfrooms, int $squareMeters)
////    {
////        $this->addres = $addres;
////        $this->numberOfrooms = $numberOfrooms;
////        $this->squareMeters = $squareMeters;
////    }
////
////    public function countSquaremeters($squareMeters)
////    {
////        if ($squareMeters > 100) {
////            return "налог будет больщим";
////
////        } else {
////            return "налог будет нормальным";
////        }
////
////    }
////
////
////}
////
////class OfficeSpace extends structur
////{
////    public function countofficeSquaremeters( $squareMeters)
////    {
////       if( parent:: countSquaremeters($squareMeters)>100){
////           return "полагаются налоговые льготы для офисов";
////       }else{
////           return "вы ничего не светит";
////       }
////    }
////}
////
////$office=new OfficeSpace("Furmanova 26",2,120);
////var_dump($office->countofficeSquaremeters($office->squareMeters));
//
//
//
//
//
////
////
////class Student{
////    public string $name;
////    private int $age;
////
////    public function getAge(){
////        return $this->age;
////    }
////    public function setAge($age){
////       if($age>0){ $this->age=$age;
////       }
////    }
////}
////$student=new Student();
//
//
//
//
//
//
//
//class Counter{
//    public static $count=0;
//    public function __construct(){
//        self::$count++;
//    }
//    public static function getCount(){
//        return self::$count;
//    }
//}
//$obj1=new Counter();
//$obj2=new Counter();
//$obj3=new Counter();
//$obj4=new Counter();
//
//
//var_dump(Counter::getCount());
//
//
//
//
//class MathUtils{
//    public static $PI=3.14159;
//    public static function square($number){
//        return $number*$number;
//    }
//    public static function circleArea($radius){
//        return self::$PI*self::square($radius);
//    }
//}
//var_dump(MathUtils::);


//
//class MathOperation{
//    public static function add($a,$b){
//        return $a+$b;
//    }
//    public static function subtract($a,$b){
//        return $a-$b;
//    }
//    public static function multiply($a,$b){
//        return $a*$b;
//    }
//    public static function divide($a,$b){
//        return$a/$b;
//    }
//}
//var_dump(MathOperation::divide(50,4));
//


//
//
//interface Animal{
//    public function makeSound();
//    public function move();
//}
//class Dog implements Animal{
//    public function makeSound()
//    {
//        echo "гав";
//    }
//    public function move(){
//        echo "бегает по земле";
//    }
//}
//class Bird implements Animal{
//    public function makeSound()
//    {
//        echo "чирик";
//    }
//    public function move(){
//        echo "летает в воздухе";
//    }
//}
//$dog=new Dog();
//$bird=new Bird();
//$dog->move();
//$dog->makeSound();
//$bird->move();
//$bird->makeSound();


//
//
//interface AccountInterface{
//    public function deposit($sum);
//    public function withdraw($sum);
//}
//
//class Account implements AccountInterface{
//    public static $interestRate=20;
//    public int $balance=0;
//    public function deposit($sum)
//    {if ($sum>0){
//        $this->balance+=$sum;
//    }
//
//    }
//    public function withdraw($sum)
//    { if ($this->balance>=$sum){
//        $this->balance-=$sum;
//    }else{
//        echo "недостаточно средств на счете";
//    }
//
//    }
//    public function getBalance(){
//        return $this->balance;
//    }
//}

//
//class User{
//    public $name;
//    public Account $account;
//
//
//    public function __construct($name, Account $account)
//    {
//        $this->name = $name;
//        $this->account = $account;
//    }
//    public function deposit($amount){
//        $this->account->deposit($amount);
//    }
//    public function withdraw($amount){
//        $this->account->withdraw($amount);
//    }
//    public function getBalance(){
//        return $this->account->getBalance();
//    }
//}
//
//$account=new Account();
//$user=new User("Vlad",$account);
//$user->deposit(1000);
//echo $user->getBalance();
//$user->withdraw(300);
//echo $user->getBalance();
//
//
//Account::$interestRate=0.06;
//echo "процентная ставка:  ".Account::$interestRate * 100;
//


//
//
//abstract class Math{
//    abstract public function calculateArea();
//}
//class Shape extends Math{
//    public function calculateArea()
//    {
//
//    }
//}
//class Circle extends Shape{
//    private $PI=3.14;
//    public int $radius;
//
//    public function __construct(int $radius)
//    {
//        $this->radius = $radius;
//    }
//
//    public function calculateArea()
//    {
//       return $this->PI*$this->radius*$this->radius;
//    }
//}
//class Rectangle extends Shape{
//    public int $lenght;
//    public int $width;
//
//
//    public function __construct($lenght, $width)
//    {
//        $this->lenght = $lenght;
//        $this->width = $width;
//    }
//
//    public function calculateArea(){
//      return $this->lenght*$this->width;
//    }
//}
//
//class Triangle extends Shape{
//    public int $footing;
//    public int $height;
//
//
//    public function __construct(int $footing, int $height)
//    {
//        $this->footing = $footing;
//        $this->height = $height;
//    }
//    public function calculateArea()
//    {
//      return 0.5*$this->footing*$this->height;
//    }
//}
//
//$instanceOfShapes=[];
//
//$instanceOfShapes[]=new Circle(15);
//$instanceOfShapes[]=new Triangle(15,20);
//$instanceOfShapes[]=new Rectangle(15,20);
//$instanceOfShapes[]=new Circle(30);
//foreach ($instanceOfShapes as $shape){
//    echo "площадь:  ". $shape->calculateArea()."<br>";
//}


//class Page
//{
//    public static $count = 0;
//
//    public function __construct()
//    {
//        self::$count++;
//    }
//
//
//    public function getCount()
//    {
//        return self::$count;
//    }
//
//}
//
//$page = new Page();
//$page1 = new Page();
//var_dump($page1->getCount());


//
//interface Drivable{
//    public function startEngine();
//    public function stopEngine();
//    public function accelerate($speed);
//}
//interface HasWheels{
//    public function getNumberofWheels();
//}
//
//abstract class Vehicle{
//    protected $model;
//    protected $color;
//
//
//    public function __construct($model, $color)
//    {
//        $this->model = $model;
//        $this->color = $color;
//    }
//     abstract public function getInfo();
//}
//
//trait Maintenance{
//    public function doMaitenance(){
//        return "Performing maintenance for {$this->model}";
//    }
//
//}
//
//
//class Car extends Vehicle implements Drivable,HasWheels{
//    use Maintenance;
//    private static $totalCars=0;
//    private $engineStarted=false;
//    private $wheels=4;
//  public function __construct($model, $color)
//  {
//      parent::__construct($model, $color);
//      self::$totalCars++;
//  }
//  public function startEngine()
//  {
//      $this->engineStarted=true;
//      return "Engine started for {$this->model}";
//  }
//  public function stopEngine()
//  {
//      $this->engineStarted=false;
//      return "Engine stopped for {$this->model}";
//  }
//  public function accelerate($speed)
//  {
//      return "Acceleraiting {$this->model} to {$speed} km/h";
//  }
//  public function getNumberofWheels()
//  {
//     return $this->wheels;
//  }
//  public function getInfo()
//  {
//      return "car model: {$this->model},Color: {$this->color}";
//  }
//  public static function getTotalcars(){
//      return self::$totalCars;
//  }
//}
//class Motorcycle extends Vehicle implements Drivable,HasWheels{
//    use Maintenance;
//    private static $totalMotorcycle=0;
//    private $engineStarted=false;
//    private $wheels=2;
//    public function __construct($model, $color)
//    {
//        parent::__construct($model, $color);
//        self::$totalMotorcycle++;
//    }
//    public function startEngine()
//    {
//        $this->engineStarted=true;
//        return "Engine started for {$this->model}";
//    }
//    public function stopEngine()
//    {
//        $this->engineStarted=false;
//        return "Engine stopped for {$this->model}";
//    }
//    public function accelerate($speed)
//    {
//        return "Acceleraiting {$this->model} to {$speed} km/h";
//    }
//    public function getNumberofWheels()
//    {
//        return $this->wheels;
//    }
//    public function getInfo()
//    {
//        return "car model: {$this->model},Color: {$this->color}";
//    }
//    public static function getTotalMotocycle(){
//        return self::$totalMotorcycle;
//    }
//}
//$car=new Car("nissan","black");
//
// var_dump($car->startEngine());
// var_dump($car->stopEngine());
// var_dump($car->accelerate(100));
// var_dump($car->doMaitenance());
// var_dump(Car::getTotalcars());


//
//Задача с одного сайта, найди сумму зарплат двух объектов. $name, $age, $salary объявлены private. Нужно создать функции
//которые установят имя возраст и зарплату а так же через функции получать значение. Вот мой код

//
//class Employee{
//    private string $name;
//    private int $age;
//    private int $salary;
//
//
//    public function __construct(string $name, int $age, int $salary)
//    {
//        $this->name = $name;
//        $this->age = $age;
//        $this->salary = $salary;
//    }
//    public function getInfo(){
//        return "имя: { $this->name} , age: {$this->age}, salary: {$this->salary}";
//
//    }
//    public function getSalary(){
//        return $this->salary;
//    }
//
//}
//$valera=new Employee("Valera",45,100);
//$igor=new Employee("Igor",24,60);
//
//$igor->getInfo();
//
//var_dump($valera->getSalary()+$igor->getSalary());

//
//class User
//{
//    private $name;
//    private $age;
//    private $email;
//
//
//    public function __construct($name, $email, $age)
//    {
//        $this->name = $name;
//        $this->email = $email;
//        $this->age = $age;
//    }
//
//    public function getName()
//    {
//        return $this->name;
//
//    }
//
//    public function getAge()
//    {
//        return $this->age;
//    }
//
//    public function getEmail()
//    {
//        return $this->email;
//    }
//}
//
//class Product
//{
//    private $name;
//    private $price;
//    private $description;
//
//    public function __construct($name, $price, $description)
//    {
//        $this->name = $name;
//        $this->price = $price;
//        $this->description = $description;
//    }
//
//    public function getName()
//    {
//        return $this->name;
//
//    }
//     public function getPrice(){
//        return $this->price;
//     }
//    public function getDescription(){
//        return $this->description;
//    }
//}
//
//class Order
//{
//    private $product = [];
//    private  $user;
//    private $total=0;
//    private $status="new";
//    public function __construct(User $user){
//        $this->user=$user;
//    }
//    public function addProduct($product){
//        $this->product[]=$product;
//    }
//    public function calculateTotal(){
//        foreach ($this->product as $product){
//            $this->total+=$product->getPrice();
//        }
//
//    }
//    public function getUser(){
//        return $this->user;
//    }
//    public function getStatus(){
//        return $this->status;
//}
//public function setStatus($status){
//        return $this->status=$status;
//}
//
//public function getOrderDetails() {
//    $details = "Статус заказа: {$this->status}\n";
//    $details .= "Пользователь: {$this->user->getName()} ({$this->user->getEmail()})\n";
//    $details .= "Товары в заказе:\n";
//    foreach ($this->product as $product) {
//        $details .= "- {$product->getName()} - {$product->getDescription()} - Цена: {$product->getPrice()}$\n";
//    }
//    $details .= "Общая стоимость заказа: {$this->total}$\n";
//
//    return $details;
//}
//}
//
//
//$user = new User("Иван", "ivan@example.com",25);
//
//// Создаем товары
//$product1 = new Product("Телефон", 500, "Смартфон");
//$product2 = new Product("Ноутбук", 1200, "Легкий и мощный ноутбук");
//
//// Создаем заказ и добавляем товары
//$order = new Order($user);
//$order->addProduct($product1);
//$order->addProduct($product2);
//
//// Рассчитываем общую стоимость заказа
//$order->calculateTotal();
//
//// Устанавливаем статус заказа
//$order->setStatus("в обработке");
//
//// Получаем информацию о заказе
//$orderDetails = $order->getOrderDetails();
//echo $orderDetails;


//
//interface Figure3D{
//    public function getVolume();
//    public function getSurfaceSquare();
//}
//class Cube implements Figure3D {
//    public $edge;
//
//
//
//    public function __construct($edge)
//    {
//        $this->edge = $edge;
//    }
//  public function getVolume()
//  {
//     return $this->a ** 3;
//  }
//  public function getSurfaceSquare()
//  {
//      return ($this->edge**2)*6;
//
//  }
//}
//class Quadrate{
//    public $side;
//
//
//    public function __construct($side)
//    {
//        $this->side = $side;
//    }
//
//    public function getSurfaceSquare(){
//        return $this->side**2;
//    }
//}
//$a=new Quadrate(5);
//$b=new Quadrate(10);
//$d=new Cube(5);
//$c=new Cube(10);
//$arr=[$a,$c,$d,$b];
//foreach ($arr as $figure){
//    if ($figure instanceof Figure3D){
//        return $d->getSurfaceSquare();
//    }
//}

//
//class Post{
//    private  $name;
//    private  $salary;
//
//
//    public function __construct(string $name,int $salary)
//    {
//        $this->name = $name;
//        $this->salary = $salary;
//    }
//   public function getName(){
//        return $this->name;
//   }
//   public function getSalary(){
//        return $this->salary;
//   }
//}
//$programmer=new Post("programmer",100);
//$driver=new Post("driver",80);
//$manager=new Post("manager",120);
//
//class Employee{
//    private $name;
//    private $surname;
//    private $post;
//
//    public function __construct(string $name,string $surname,Post $post)
//    {
//        $this->name = $name;
//        $this->surname = $surname;
//        $this->post=$post;
//    }
//  public function getName(){
//        return $this->name;
//  }
//  public function setName($name){
//        $this->name=$name;
//  }
//  public function getSurname(){
//        return $this->surname;
//  }
//  public function setSurname($surname){
//        return $this->surname=$surname;
//  }
//  public function getInfo(){
//        echo "имя: {$this->name},фамилия: {$this->surname},должность:{$this->post->getName()},зарплата: {$this->post->getSalary()}";
//  }
//  public function changePost(Post $post){
//     return   $this->post=$post;
//  }
//
//
//}
//$employee=new Employee("David","Grigoryan",$programmer);
//
//$employee->getInfo();
//
// $employee->changePost($driver);
//$employee->getInfo();


//
//
//class Product{
//    private $name;
//    private $price;
//    private $quantity;
//
//
//    public function __construct($name, $price, $quantity)
//    {
//        $this->name = $name;
//        $this->price = $price;
//        $this->quantity = $quantity;
//    }
//    public function getName(){
//        return $this->name;
//    }
//    public function getPrice(){
//        return $this->price;
//    }
//    public function getQuantity(){
//        return $this->quantity;
//    }
//    public function getCost(){
//       return $this->quantity * $this->price;
//    }
//}
//
//class Cart{
//    private $products=[];
//    public function add(Product $product){
//        $this->products[]=$product;
//    }
//    public function remove(Product $removeProduct){
//        foreach ($this->products as $key=> $product){
//            if ($product===$removeProduct){
//                unset($this->products[$key]);
//            }
//        }
//    }
//    public function getTotalQuantity(){
//        $sum=0;
//
//        foreach ($this->products as $product){
//            $sum+=$product->getQuantity;
//
//        }
//        return $sum;
//    }
//    public function getAvgPrice(){
//        $totalPrice=0;
//        foreach ($this->products as $product){
//            $totalPrice+=$product->getPrice;
//        }
//        return $totalPrice/$this->getTotalQuantity();
//    }
//}
//
//$product=new Product("milk",60,30);
//$product1=new Product("bread",40,100);
//$cart=new Cart();
//$cart->add($product);
//$cart->add($product1);
//echo  $cart->getTotalQuantity();


//
//
//Ваша задача - разработать систему управления транспортными средствами, используя принципы объектно-ориентированного программирования в PHP.
//
//Определение классов:
//
//Создайте абстрактный класс Vehicle, который будет представлять общие свойства и методы для всех транспортных средств. Включите в него свойства, такие как brand (марка), model (модель), year (год выпуска), и абстрактный метод start(), который будет запускать двигатель.
//
//От Vehicle унаследуйте классы Car и Motorcycle, представляющие соответственно автомобили и мотоциклы. Реализуйте метод start() для каждого из них с соответствующими действиями (например, вывод сообщения о запуске двигателя).
//
//Создайте интерфейс Fuelable, который будет иметь метод refuel(). Реализуйте этот интерфейс в классе Car.
//
//Полиморфизм:
//
//Создайте несколько объектов типа Car и Motorcycle, установите различные значения для их свойств.
//
//Создайте массив, содержащий объекты разных типов, и пройдитесь по нему, вызывая метод start() для каждого элемента. Обратите внимание на полиморфизм, который позволяет вызывать одинаковый метод для разных типов объектов.
//
//Интерфейсы и абстрактные классы:
//
//Реализуйте интерфейс Fuelable в классе Car, добавив метод refuel(), который будет выводить сообщение о заправке.
//
//Создайте абстрактный класс PublicTransport, который расширяет Vehicle и реализует метод carryPassengers(). Создайте класс Bus, который наследуется от PublicTransport и реализует свой метод carryPassengers().
//
//Создайте объекты Bus и вызовите методы start() и carryPassengers() для него. Обратите внимание на использование абстрактных классов и интерфейсов в вашей системе.
//
//Дополнительные задания:
//
//Реализуйте класс ElectricCar, наследующийся от Car, и переопределите метод start() для учета особенностей запуска электромобиля.
//
//Создайте еще один интерфейс, например, Convertible, и реализуйте его в классе Car для автомобилей с откидным верхом. Добавьте метод openRoof().
//
//Это задание позволит студенту применить различные принципы ООП в PHP, такие как наследование, абстрактные классы, интерфейсы и полиморфизм, создавая систему управления транспортными средствами с различными типами и функциональностью.

abstract class Vehicle
{
    public string $model;
    public string $brand;
    public int $year;


    public function __construct(string $model, string $brand, int $year)
    {
        $this->model = $model;
        $this->brand = $brand;
        $this->year = $year;
    }

    abstract function start();
}
abstract class PublicTransport extends Vehicle{
    public function carryPassengers(){
        echo "перевозка пассажиров началась";
    }
}
class Bus extends PublicTransport{
    public function start()
    {
      echo "бртбртбрт двигатель автобуса заведен";
    }
    public function carryPassengers()
    {
        parent::carryPassengers()."автобус едет из Ставрополя в Москву";
    }
}

interface Fuelable{
    public function refuel();
}
interface Convertable{
    public function openRoof();
}
class Car extends Vehicle implements Fuelable,Convertable
{

    public int $safetyBelt;
    public int $powerReserve;
    public bool $convertableTop;

    public function __construct(string $model, string $brand, int $year, int $safetyBelt,int $powerReserve,bool $convertableTop)
    {
        parent::__construct($model, $brand, $year);
        $this->safetyBelt = $safetyBelt;
        $this->powerReserve=$powerReserve;
        $this->convertableTop=$convertableTop;
    }

    public function start()
    {
        echo "брррррммм, двигатель :{$this->model} заведен!!! ";
    }

    public function warningSafetyBelt(int $passenger)
    {
        if ($passenger > $this->safetyBelt && $passenger > 0) {
            echo "перевозка пассажиров без наличия ремня безопасности запрещена";

        } else{
            echo "good поездки";
        }
    }
    public function refuel(){
        if ($this->powerReserve<30){
            echo "надо дозаправиться";
        }else{
            echo "у вас еще : {$this->powerReserve} езжайте";
        }

    }
    public function openRoof()
    {if( $this->convertableTop===true){
        echo "откинуть верх";
    }
        else{
            echo "у данного автомобиля нет такой функции";
        }
    }

}
class ElectricCar extends Car{
    public function start()
    {
        echo ">>>>>>>>>>>>двигатель заведен";
    }
}
class Motorcycle extends Vehicle
{
    public bool $safetyHelmet;

    public function __construct(string $model, string $brand, int $year, bool $safetyHelmet)
    {
        parent::__construct($model, $brand, $year);
        $this->safetyHelmet = $safetyHelmet;
    }

    public function start()
    {
        echo "xxxxxxmmmmmm, двигатель :{$this->model} заведен!!! ";
    }

    public function warningHelmet()
    {
        if ($this->safetyHelmet === true) {
            echo "приятной поездки";
        } else {
            echo "поездка без шлема опасна!!";
        }
    }
}
$car1=new Car("rav-4","toyota",2020,5,90,true);
$car2=new Car("Civic","Honda",2000,5,25,false);
$car3=new Car("aventador","lamborgini",2022,40,10,true);
$motorcycle1=new Motorcycle("Panigale","Ducati",2020,true);
$motorcycle2=new Motorcycle("gsx-r1000","suzuki",1998,false);
$electro1=new ElectricCar("bx-1","smart",2000,2,100,false);
$motorcycle1->warningHelmet();
$arr=[$car1,$car2,$motorcycle2,$car3,$motorcycle1];
foreach ($arr as $vehicle){
    $vehicle->start();

}


$electro1->openRoof();
$electro1->warningSafetyBelt(2);
$electro1->refuel();