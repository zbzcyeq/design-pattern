<?php 
/**
 * 单例模式
 * 
 *1. 保证一个类仅有一个实例,并提供一个访问他的全局访问点
 *
 *2. 对象不应该被存储在会被复写的全局变量中
 *
 *3. x对象对类设置一个属性，y对象不需要通过其他对象可直接获取该属性的值
 *
 **/
class Singleton {
 
    static private $_instance = null;
    private $props = '';
    private function __construct () {}
 
    static function getInstance () {
 
        if (is_null(self::$_instance)) {
            self::$_instance = new Singleton();
        }
 
        return self::$_instance;
 
    }
 
    public function setProp($value){
        $this->props = $value;
    }
 
    public function getProp(){
        return $this->props."\r\n";
    }
 
    public function display() {
        echo "this is a Singleton class function\r\n";
    }
 
}

$obj_a = Singleton::getInstance();
$obj_a->setProp('hello world');
 
$obj_b = Singleton::getInstance();
var_dump($obj_a == $obj_b);
echo $obj_b->getProp();
