<?php

// 所有餐饮项的基类
interface MenuItem {
    function getName();
    function getPrice();
    function print(int $indent = 0) : void;
}

// 辅助工具：缩进打印
class StringUtils {
    public static function indent(string $level): string
    {
        return "  ".$level;
    }
}

class Dish implements MenuItem {

    private $name;
    private $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    function getName()
    {
        return $this->name;
    }

    function getPrice()
    {
        return $this->price;
    }

    function print(int $indent = 0): void
    {
        echo str_repeat("  ", $indent) . "🍲 " . $this->name . " - ￥" . $this->price . PHP_EOL;
    }

    public function toArray(): array {
        return [
            'name' => $this->getName(),
            'price' => $this->getPrice(),
        ];
    }
}

class ComboMeal implements MenuItem {
    private $name;
    private $discount;
    /** @var MenuItem[] */
    private array $items = [];

//    public function __construct(string $name) {
//        $this->name = $name;
//    }
    public function __construct(string $name, float $discount = 0.9) {
        $this->name = $name;
        $this->discount = $discount;
    }


    public function add(MenuItem $item): void {
        $this->items[] = $item;
    }

    public function getName(): string {
        return $this->name . "（套餐）";
    }

    public function getPrice(): float {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item->getPrice();
        }
        return $total * $this->discount; // 套餐9折
    }

    public function print(int $indent = 0): void {
        echo str_repeat("  ", $indent) . "📦 " . $this->getName() . " - ￥" . $this->getPrice() . PHP_EOL;
        foreach ($this->items as $item) {
            $item->print($indent + 1);
        }
    }

    public function toArray(): array {
        return [
            'name' => $this->getName(),
            'price' => $this->getPrice(),
            'items' => array_map(fn($item) => $item->toArray(), $this->items)
        ];
    }
}

// 使用示例
$rice = new Dish("米饭", 2.0);
$fish = new Dish("清蒸鱼", 38.0);
$veggie = new Dish("清炒时蔬", 18.0);

$basicCombo = new ComboMeal("经济套餐", 0.9);
$basicCombo->add($rice);
$basicCombo->add($veggie);

$premiumCombo = new ComboMeal("豪华套餐", 1);
$premiumCombo->add($basicCombo); // 套餐嵌套套餐
$premiumCombo->add($fish);

// 打印菜单
$premiumCombo->print();
var_export($premiumCombo->toArray());