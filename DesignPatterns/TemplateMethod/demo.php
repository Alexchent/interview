<?php



abstract class Dish {
    public abstract function start();
    public abstract function doing();
    public abstract function end();

    public function dodish()
    {
        $this->start();
        $this->doing();
        $this->end();
    }
}

class EggsWithTomato extends Dish {
    public function start(){
        echo "洗切番茄，打蛋\n";
    }
    public function doing(){
        echo "炒蛋\n";
    }
    public function end(){
        echo "将炒好的西红寺鸡蛋装入碟子里，端给客人吃。\n";
    }
}

class Bouilli extends Dish {
    public function start(){
        echo "洗切牛肉和土豆\n";
    }
    public function doing(){
        echo "将切好的牛肉倒入锅中炒一会然后倒入土豆连炒带炖。\n";
    }
    public function end(){
        echo "将做好的红烧肉盛进碗里端给客人吃。\n";
    }
}

$order = new EggsWithTomato();
$order->dodish();

echo "=======\n";

$order = new Bouilli();
$order->dodish();

