<?php
namespace elnebuloso\FlexTest\Text;

use elnebuloso\Flex\Random\Text\RandomText;
use PHPUnit_Framework_TestCase;

/**
 * Class RandomTextTest
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class RandomTextTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function testGet()
    {
        $text = RandomText::get(100);
        $this->assertNotNull($text);
    }
}
