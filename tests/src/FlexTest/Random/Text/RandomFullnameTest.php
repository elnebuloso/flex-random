<?php
namespace FlexTest\Text;

use Flex\Random\Text\RandomFullname;

/**
 * Class RandomFullnameTest
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class RandomFullnameTest extends \PHPUnit_Framework_TestCase {

    /**
     * @test
     */
    public function test_getRandomFullnameMale() {
        $this->assertInternalType('string', RandomFullname::getFullnameMale());
    }

    /**
     * @test
     */
    public function test_getRandomFullnameFemale() {
        $this->assertInternalType('string', RandomFullname::getFullnameFemale());
    }
}