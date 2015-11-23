<?php
namespace FlexTest\Text;

use Flex\Random\Text\RandomFullname;

/**
 * Class RandomFullnameTest
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class RandomFullnameTest extends \PHPUnit_Framework_TestCase
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
