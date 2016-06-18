<?php
namespace elnebuloso\FlexTest\Text;

use elnebuloso\Flex\Random\Text\RandomChar;
use PHPUnit_Framework_TestCase;

/**
 * Class RandomCharTest
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class RandomCharTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function testGet()
    {
        $char = RandomChar::get();
        $this->assertTrue(in_array($char, range('a', 'z')));
    }
}
