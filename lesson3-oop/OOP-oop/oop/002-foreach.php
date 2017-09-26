<?php
/**
 * @Author: anchen
 * @Date:   2017-09-20 21:29:53
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-09-20 21:51:13
 */
class MyClass
{
    public $var1 = 'value 1';
    public $var2 = 'value 2';
    public $var3 = 'value 3';

    protected $protected = 'protected var';
    private   $private   = 'private var';
     function item(){
        // echo 'MyClass::item:\n';
        foreach ($this as $key=>$value){
            print "$key=$value <br/>";
            echo'<hr>';
        }
     }
}
$class=new MyClass();
foreach ($class as $key=>$value){
    print "$key=>$value <br/>";
}
$class->item();




class MyIterator implements Iterator
{
    private $var = array();

    public function __construct($array)
    {
        if (is_array($array)) {
            $this->var = $array;
            var_dump ($this->var);
        }
    }

    public function rewind() {
        echo "rewinding<br/>";
        reset($this->var);
    }

    public function current() {
        $var = current($this->var);
        echo "current: $var<br/>";
        return $var;
    }

    public function key() {
        $var = key($this->var);
        echo "key: $var<br/>";
        return $var;
    }

    public function next() {
        $var = next($this->var);
        echo "next: $var<br/>";
        return $var;
    }

    public function valid() {
        $var = $this->current() !== false;
        echo "valid: {$var}<br/>";
        return $var;
    }
}

$values = array(1,2,3);
$it = new MyIterator($values);

foreach ($it as $a => $b) {
    print "$a: $b<br/>";
}

