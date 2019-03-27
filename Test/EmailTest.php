<?php
/**
 * Created by PhpStorm.
 * User: chentao
 * Date: 2019/3/22
 * Time: 3:34 PM
 */

use PHPUnit\Framework\TestCase;

/**
 * 执行测试：   phpunit --bootstrap Helper/Email.php Test/EmailTest.php
 * @covers Email
 */
final class EmailTest extends TestCase
{
    public function testCanBeCreatedFromValidEmailAddress()
    {
        $this->assertInstanceOf(
            \Helper\Email::class,
            \Helper\Email::fromString('user@example.com')
        );
    }

    public function testCannotBeCreatedFromInvalidEmailAddress()
    {
        $this->expectException(InvalidArgumentException::class);

        \Helper\Email::fromString('invalid');
    }

    public function testCanBeUsedAsString()
    {
        $this->assertEquals(
            'user@example.com',
            \Helper\Email::fromString('user@example.com')
        );
    }
}