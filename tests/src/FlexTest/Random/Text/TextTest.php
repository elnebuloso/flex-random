<?php
namespace FlexTest\Text;

use Flex\Random\Text\Text;

/**
 * Class TextTest
 *
 * @package FlexTest\Text
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class TextTest extends \PHPUnit_Framework_TestCase {

    /**
     * @return void
     */
    public function test_get() {
        $text = Text::get(100);
        $this->assertNotNull($text);
    }
}