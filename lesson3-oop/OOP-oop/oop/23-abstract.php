<?php
/**
 * @Author: anchen
 * @Date:   2017-09-19 19:43:29
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-09-19 20:04:47
 */
abstract class Shape{

    protected $width;
    protected $height;

    public function __construct($width,$height){
        $this->width=$width;
        $this->height=$height;
    }
    abstract protected function getArea();
    abstract protected function getPrimeter();
}
class Retangle extends Shape{
    public  function getArea(){
        return $this->width*$this->height;
    }
    public function getPrimeter(){
        return ($this->width+$this->height)*2;
    }
    public function isSquare(){
        if($this->width==$this->height){
            return true;
        }
        return false;
    }
}

class Square extends Shape{
    protected $side;
    public function __construct($side){
        $this->side=$side;
    }
    public  function getArea(){
        return pow($this->side,2);
    }
    public function getPrimeter(){
        return $this->side*4;
    }


}
$rect = new Retangle('50','50');
 echo $rect->getArea();
 echo $rect->getPrimeter();
 echo $rect->isSquare()?'正方形':'矩形';
 echo'<hr>';
 $rect1= new Square('50');
 echo $rect1->getArea();
 echo $rect1->getPrimeter();
 var_dump($rect1);