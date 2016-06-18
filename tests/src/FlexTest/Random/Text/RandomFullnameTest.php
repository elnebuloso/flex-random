<?php
namespace elnebuloso\FlexTest\Text;

use elnebuloso\Flex\Random\Text\RandomFullname;
use PHPUnit_Framework_TestCase;

/**
 * Class RandomFullnameTest
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class RandomFullnameTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function testGetRandomFullnameMale()
    {
        $this->assertInternalType('string', RandomFullname::getFullnameMale());
    }

    /**
     * @test
     */
    public function testGetRandomFullnameFemale()
    {
        $this->assertInternalType('string', RandomFullname::getFullnameFemale());
    }
}
