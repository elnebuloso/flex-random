<?php
namespace FlexTest\Text;

use Flex\Random\Text\RandomText;

/**
 * Class RandomTextTest
 *
 * @package Flex\Random\Text
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class RandomTextTest extends \PHPUnit_Framework_TestCase {

    /**
     * @test
     */
    public function get() {
        $text = RandomText::get(100);
        $this->assertNotNull($text);
    }
}