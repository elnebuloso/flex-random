<?php
namespace FlexTest\Text;

use Flex\Random\Text\RandomFullname;

/**
 * Class RandomFullnameTest
 *
 * @package FlexTest\Text
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class RandomFullnameTest extends \PHPUnit_Framework_TestCase {

    /**
     * @return void
     */
    public function test_getRandomFullnameMale() {
        $this->assertInternalType('string', RandomFullname::getFullnameMale());
    }

    /**
     * @return void
     */
    public function test_getRandomFullnameFemale() {
        $this->assertInternalType('string', RandomFullname::getFullnameFemale());
    }
}