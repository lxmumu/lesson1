<?php
/**
 * @Author: anchen
 * @Date:   2017-09-25 21:02:25
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-09-25 22:01:35
 */
class MySqliDB{
    static public $_instance=null;
    private $host='localhost';
    private $username='root';
    private $pwd='123456';
    private $port=3306;
    private $db='';
    private $charset='utf8';
    private $prefix='';
    private $link=null;
    private $debug=false;
    private $logs=array();


    private function __construct($config=array()){
     if(isset($config['host'])){
        $this->host=$config['host'];
     }
     .....
      if(isset($config['db'])){
       $this->link=new MySqli($this->host,$this->username,$this->pwd$this->db,$this->port);
      }else{
        $this->link=new MySqli($this->host,$this->username,$this->pwd);
      }
      if(is_object($this->link)){
        //设置编码方式
        $this->link->set_charset($this->charset);
      }else{
        // mysqli_connect_errno() 返回一个整数，标识连接数据库是否成功和各种错误的数值。
        // mysqli_connect_error() 函数返回上一次连接错误的错误描述。
        $this->error ='数据库连接失败/<br/>ERROR:'.mysqli_connect_error().':'.mysqli_connect_errno();
        return false;
      }

    }

    static public function getInstance($config=array()){
     if(!(self::$_instance instanceof self)){
        self::$_insance=new self($config);
     }
     return self::$_instance;
  }
  return $this->link;
}

//打开指定数据库
public function select_db($dbname){
  if($this->link->select_db($dbname)){
         return $this;
  }else{
    $this->error='指定数据库打开失败<br/>ERROR:'.$this->link->erron.':'.$this->link->error;
    return false;
  }
  // 获取错误信息
  public function get_error(){
    return $this->error;
  }
  // 执行sql查询
  public function query($query){
    if($this->debug){
      echo $query,'<br/>';
      $this->logs[]=$query;
    }
    return $this->link->query($query);
  }
  // 开启调试模式
  public function  debug(){
    $this->debug =true;
  }
  // 得到sql语句的日志
  public function get_log(){
    return $this->logs;
  }
  //得到最后执行的sql语句
  public function get_last_query(){
    if($this->debug){
      return end($this->log);
    }
  }
  public function  insert($table,$data){
    if(!is_array($data)){
      $this->error ='数据错误';
      return false;
    }
    // array_keys — 返回数组中部分的或所有的键名
    // array_values — 返回数组中所有的值
    $keys=join(',',array_keys($data));
    $vals="'".join("','",array_values($data))."'";
    $query="INSERT {$this->prefix}{$table}({$keys}) VALUES ({$vals})"
    if($this->query($query)){
     return $this->link->insert_id;
    }else{
      $this->error='数据插入失败';
      return false;
    }
  }
}
$db=MySqliDB::getInstance();
if(!$db->select_db('表名')){
 echo  $db->get_error();
}