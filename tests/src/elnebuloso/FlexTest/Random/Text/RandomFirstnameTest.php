<?php
namespace elnebuloso\FlexTest\Text;

use elnebuloso\Flex\Random\Text\RandomFirstname;
use PHPUnit_Framework_TestCase;

/**
 * Class RandomFirstnameTest
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class RandomFirstnameTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function testGetFirstnamesMaleIsArray()
    {
        $this->assertInternalType('array', RandomFirstname::getFirstnamesMale());
    }

    /**
     * @test
     */
    public function testGetFirstnamesMaleContainsNames()
    {
        $this->assertGreaterThan(0, count(RandomFirstname::getFirstnamesMale()));
    }

    /**
     * @test
     */
    public function testGetFirstnamesMaleForWrongCharIsEmptyArray()
    {
        $this->assertInternalType('array', RandomFirstname::getFirstnamesMale('foo'));
        $this->assertEmpty(RandomFirstname::getFirstnamesMale('foo'));
    }

    /**
     * @test
     */
    public function testGetFirstnamesFemaleIsArray()
    {
        $this->assertInternalType('array', RandomFirstname::getFirstnamesFemale());
    }

    /**
     * @test
     */
    public function testGetFirstnamesFemaleContainsNames()
    {
        $this->assertGreaterThan(0, count(RandomFirstname::getFirstnamesFemale()));
    }

    /**
     * @test
     */
    public function testGetFirstnamesFemaleForWrongCharIsEmptyArray()
    {
        $this->assertInternalType('array', RandomFirstname::getFirstnamesFemale('foo'));
        $this->assertEmpty(RandomFirstname::getFirstnamesFemale('foo'));
    }

    /**
     * @test
     */
    public function testGetFirstnameMaleDefault()
    {
        $this->assertInternalType('string', RandomFirstname::getFirstnameMale());
    }

    /**
     * @test
     */
    public function testGetFirstnameMaleForChar()
    {
        $name = RandomFirstname::getFirstnameMale('a');
        $char = strtolower($name[0]);

        $this->assertInternalType('string', $name);
        $this->assertEquals('a', $char);

        foreach (range('a', 'z') as $char) {
            $name = RandomFirstname::getFirstnameMale($char);
            $this->assertNotEmpty($name, 'missing RandomFirstname::getFirstnameMale for char ' . $char);
        }
    }

    /**
     * @test
     */
    public function testGetFirstnameMaleForWrongChar()
    {
        $name = RandomFirstname::getFirstnameMale('foo');
        $this->assertNull($name);
    }

    /**
     * @test
     */
    public function testGetFirstnameFemaleDefault()
    {
        $this->assertInternalType('string', RandomFirstname::getFirstnameFemale());
    }

    /**
     * @test
     */
    public function testGetFirstnameFemaleForChar()
    {
        $name = RandomFirstname::getFirstnameFemale('a');
        $char = strtolower($name[0]);

        $this->assertInternalType('string', $name);
        $this->assertEquals('a', $char);

        foreach (range('a', 'z') as $char) {
            $name = RandomFirstname::getFirstnameFemale($char);
            $this->assertNotEmpty($name, 'missing RandomFirstname::getFirstnameFemale for char ' . $char);
        }
    }

    /**
     * @test
     */
    public function testGetFirstnameFemaleForWrongChar()
    {
        $name = RandomFirstname::getFirstnameFemale('foo');
        $this->assertNull($name);
    }
}
