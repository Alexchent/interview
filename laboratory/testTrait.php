<?php
/**
 * 优先级 子类 > trait > 父类
 * Created by PhpStorm.
 * User: 10000865
 * Date: 2019/8/5
 * Time: 15:13
 */

class A
{
    public function sayHello(){
        return 'A';
    }
}

class B extends A
{
	//use trait 视为将traint类加载到这个类中，因此优先级比父类高
	//而子类本身的成员属性和方法会覆盖trait和父类的
    use T;

    // public function sayHello(){
    //    echo "B".PHP_EOL;
    // }
}

trait T
{
    public function sayHello(){
        echo "T".PHP_EOL;
        echo parent::sayHello().PHP_EOL;
        echo "子类 》 trait > 父类".PHP_EOL;
    }
}


$c = new B();
$c->sayHello();
