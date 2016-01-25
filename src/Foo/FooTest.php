<?php
namespace Foo;

class FooTest extends \PHPUnit_Framework_TestCase {
    /**
     * @dataProvider providerReverse
     */
    public function testReverse($input, $output) {
        $foo = new Foo();
        $this->assertEquals($foo->Reverse($input), $output);
    }

    public function providerReverse() {
        return [
            ['Hello world!', '!dlrw llH'],
            ['abc', 'cb'],
            ['abcdefghijklmnopqrstuvwxyz1234567890-=_/', '/_=-0987654321zyxwvtsrqpnmlkjhgfdcb'],
            ['aou', ''],
        ];
    }
}