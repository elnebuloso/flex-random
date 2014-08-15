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
     * @test
     */
    public function getRandomFullnameMale() {
        $this->assertInternalType('string', RandomFullname::getFullnameMale());
    }

    /**
     * @test
     */
    public function getRandomFullnameFemale() {
        $this->assertInternalType('string', RandomFullname::getFullnameFemale());
    }
}