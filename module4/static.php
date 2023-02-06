<?php

class Counter {
  public static $count = 0;

  public static function increment() {
    self::$count++;
  }
}

Counter::$count++; 
echo Counter::$count; 

$counter = new Counter();
$counter->increment(); 
echo Counter::$count; 
?>