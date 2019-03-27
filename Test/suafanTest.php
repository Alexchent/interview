<?php
/**
 * 执行测试 phpunit --bootstrap suanfa/Tool.php Test/suafanTest.php
 * Created by PhpStorm.
 * User: chentao
 * Date: 2019/3/21
 * Time: 8:59 PM
 */

use PHPUnit\Framework\TestCase;

class suafanTest extends TestCase
{

    public function testPushAndPop()
    {
        $stack = [];
        $this->assertEquals(0, count($stack));

        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack)-1]);
        $this->assertEquals(1, count($stack));

        $this->assertEquals('foo', array_pop($stack));
        $this->assertEquals(0, count($stack));
    }

    public function testAdd()
    {
        $a = 1;
        $b = 2;
        $c = \suanfa\Tool::add($a,$b);
        $this->assertEquals($a+$b, $c);
    }
}
