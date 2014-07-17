<?php
namespace FlexTest\Text;

use Flex\Random\Text\RandomText;

/**
 * Class TextTest
 *
 * @package Flex\Random\Text
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class TextTest extends \PHPUnit_Framework_TestCase {

    /**
     * @return void
     */
    public function test_get() {
        $text = RandomText::get(100);
        $this->assertNotNull($text);
    }
}