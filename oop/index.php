<?php 
// class One{
//    public $name = 'david'; //property
//    public function sayName(){
//     echo "i am ".$this->name;
//    }
// }
// $obj = new One();
// echo $obj->name;
// $obj->sayName();

// constructor and destructor
// class One{
//    public function __construct(){
//    echo "i am constructor";
//    }
//    public function __destruct(){
//       echo "i am destructor";
//       }
// }
// new One;

// inheriance
// class One{
//    public $name = 'david'; //property
// }
// class two extends One{
// }
// $obj = new Two();
// echo $obj->name;

//trait
// trait one{
//    public $name = 'david'; //property
// }
// trait two{
//  public $email = 'david@example.com';
// }
// class three{
//    use one,two;
// }
// $obj = new three();
// echo $obj->name. $obj->email; 

// Access Modifier
//priavte -> only within parent class
//protected -> within parent class and extends class
// class One{
//    private $name = 'david'; 
//    public function sayname()
//    { 
//       echo $this->name;
//    }
//    //property
// }
// $obj = new One;
// echo $obj->sayname();

//Static
// class one{
//    public static $num= 0;
//    public function getCount(){ 
//       Self::$num++;
//       echo self::$num;
//    }
// }
// $obj1 = new one;
// $obj1->getCount();
// $obj1->getCount();
// $obj2 = new one;
// $obj2->getCount();
// $obj2->getCount();

//polymorphism
// class one{
//    public function calArea(){
//       $num = func_num_args();
//       if ($num ==1){
//          $r = func_get_arg(0);
//          echo "Circle area is ".pi()*$r**2;
//       }
//       if ($num == 2){
//          $h = func_get_arg(0);
//          $w = func_get_arg(0);
//          echo "Square area is ".pi()*$h*$w;
//       }
//    }
// }
// $obj= new one;
// $obj->calArea(8,9);

// namespace and autoload
// $obj1 =  new one();
// $obj1->getOne();
// $obj2 =new two();
// $obj2->getTwo();
// use app\One;
// use app\Two;
?>