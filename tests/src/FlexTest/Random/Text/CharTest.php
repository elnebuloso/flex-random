<?php
namespace FlexTest\Text;

use Flex\Random\Text\Char;

/**
 * Class CharTest
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class RandomCharTest extends \PHPUnit_Framework_TestCase {

    /**
     * @return void
     */
    public function test_get() {
        $char = Char::get();
        $this->assertTrue(in_array($char, range('a', 'z')));
    }
}