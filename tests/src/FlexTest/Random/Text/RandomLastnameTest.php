<?php
namespace FlexTest\Text;

use Flex\Random\Text\RandomLastname;

/**
 * Class RandomLastnameTest
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class RandomLastnameTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function testGetLastnamesDefault()
    {
        $names = RandomLastname::getLastnames();

        $this->assertInternalType('array', $names);
        $this->assertGreaterThan(0, count($names));
        $this->assertEquals('a', strtolower($names[0][0]));
    }

    /**
     * @test
     */
    public function testGetLastnamesForChar()
    {
        $names = RandomLastname::getLastnames('b');

        $this->assertInternalType('array', $names);
        $this->assertGreaterThan(0, count($names));
        $this->assertEquals('b', strtolower($names[0][0]));
    }

    /**
     * @test
     */
    public function testGetLastnamesForWrongChar()
    {
        $names = RandomLastname::getLastnames('foo');

        $this->assertInternalType('array', $names);
        $this->assertEmpty($names);
    }

    /**
     * @test
     */
    public function testGetLastnameDefault()
    {
        $name = RandomLastname::getLastname();

        $this->assertInternalType('string', $name);
    }

    /**
     * @test
     */
    public function testGetLastnameForChar()
    {
        $name = RandomLastname::getLastname('a');
        $char = strtolower($name[0]);

        $this->assertInternalType('string', $name);
        $this->assertEquals('a', $char);

        foreach (range('a', 'z') as $char) {
            $name = RandomLastname::getLastname($char);
            $this->assertNotEmpty($name, 'missing RandomLastname::getLastname for char ' . $char);
        }
    }

    /**
     * @test
     */
    public function testGetLastnameForWrongChar()
    {
        $name = RandomLastname::getLastname('foo');

        $this->assertNull($name);
    }
}
