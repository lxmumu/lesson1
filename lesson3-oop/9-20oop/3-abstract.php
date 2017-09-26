<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/20
 * Time: 11:08
 */
//抽象类
//1,定义为抽象的类不可以被实例化（抽象类就是个模版）
//2.类中只要包含一个抽象方法，这个类必须声明为抽象类
//3.抽象方法，只可以有声明，不能有具体的实现
//4.继承于抽象类的子类必须实现抽象类中的抽象方法

  abstract class AbstractClass{

    //定义一个抽象的方法 使用abstract关键字
    abstract  public function info();

    //抽象类中普通的方法
    public  function  show(){
        echo'普通的方法';

    }
  }

//$a = new AbstractClass;不能实例化抽象类


class SubClass extends AbstractClass{

    //继承抽象类，必须实现抽象类方法
    public  function info()
    {
     echo __CLASS__;
    }
}

class SmallClass extends  AbstractClass{
    public  function  info()
    {
        echo __CLASS__;
    }
}

$sub=new SubClass();
$small= new SmallClass();
$sub->info();
$small->info();

echo'<hr/>';

//继承的方法实现多态
//播放器
//播放视频，音频

//播放介质抽象类
abstract class PlayItem{
    abstract  public  function  play();
}
//视频
class  Video  extends  PlayItem{
    public  function  play(){
        echo '播放视频';
    }
}

//音频
 class Audio extends  PlayItem{
     public  function  play(){
         echo '播放音频';
     }
 }
//播放器
class Player{
    //开始播放
    //PlayItem $item:参数的类型限制
    //$item这个参数必须是PlayItem的实例（对象）
    //item是播放介质
    public  function start(PlayItem $item){
//        instanceof 检测对象是否是类的实例
//        if($item instanceof PlayItem){
       $item->play();
//        }
    }
}

$player= new Player();
$mv= new Video();
$mp3= new Audio();
$player->start($mv);
$player->start($mp3);
echo '<hr/>';


//练习：文本编辑器，可以打开多种类型的文件，使用多态
 abstract class Openfile{
     abstract  public function open();
 }
 class PhpStorm extends  Openfile{
  public  function open()
     {
         echo'打开phpstorm..<br/>';
     }
 }
class Sublime extends  Openfile{
  public function  open()
    {
        echo'打开sublime...<br/>';
    }
}

class Open{
   static public function  start(Openfile $file){
        $file->open();
    }
}

$php= new PhpStorm();
$sub=new Sublime();
echo Open::start($php);
echo Open::start($sub);














































