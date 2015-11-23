<?php
namespace FlexTest\Text;

use Flex\Random\Text\RandomText;

/**
 * Class RandomTextTest
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class RandomTextTest extends \PHPUnit_Framework_TestCase
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
