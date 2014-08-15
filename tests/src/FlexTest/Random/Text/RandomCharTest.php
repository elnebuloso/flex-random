<?php
namespace FlexTest\Text;

use Flex\Random\Text\RandomChar;

/**
 * Class RandomCharTest
 *
 * @package FlexTest\Text
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class RandomCharTest extends \PHPUnit_Framework_TestCase {

    /**
     * @test
     */
    public function get() {
        $char = RandomChar::get();
        $this->assertTrue(in_array($char, range('a', 'z')));
    }
}