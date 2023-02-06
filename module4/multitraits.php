
<?php
trait A {
    public function sayHello() {
      echo "Hello from trait A"."<br>";
    }
  }
  
  trait B {
    public function sayHi() {
      echo "Hi from trait B";
    }
  }
  
  class MyClass {
    use A, B;
  }
  
  $obj = new MyClass();
  $obj->sayHello(); 
  $obj->sayHi(); 
  
?>