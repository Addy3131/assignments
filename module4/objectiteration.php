<?php
class MyClass
{
    public $var1 = 'value 1';
    public $var2 = 'value 2';
    public $var3 = 'value 3';

    protected $protected = 'protected var';
    private   $private   = 'private var';

    function iterateVisible() {
       echo "MyClass::iterateVisible:\n"."<br>";
       foreach ($this as $key => $value) {
           print "$key => $value\n"."<br>";
       }
    }
}

$class = new MyClass();

foreach($class as $key => $value) {
    print "$key => $value\n"."<br>";
}
echo "\n";


$class->iterateVisible();

?>