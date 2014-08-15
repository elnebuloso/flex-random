<?php
namespace FlexTest\Text;

use Flex\Random\Text\RandomFirstname;

/**
 * Class RandomFirstnameTest
 *
 * @package FlexTest\Text
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class RandomFirstnameTest extends \PHPUnit_Framework_TestCase {

    /**
     * @test
     */
    public function getFirstnamesMale_isArray() {
        $this->assertInternalType('array', RandomFirstname::getFirstnamesMale());
    }

    /**
     * @test
     */
    public function getFirstnamesMale_containsNames() {
        $this->assertGreaterThan(0, count(RandomFirstname::getFirstnamesMale()));
    }

    /**
     * @test
     */
    public function getFirstnamesMale_forWrongCharIsEmptyArray() {
        $this->assertInternalType('array', RandomFirstname::getFirstnamesMale('foo'));
        $this->assertEmpty(RandomFirstname::getFirstnamesMale('foo'));
    }

    /**
     * @test
     */
    public function getFirstnamesFemale_isArray() {
        $this->assertInternalType('array', RandomFirstname::getFirstnamesFemale());
    }

    /**
     * @test
     */
    public function getFirstnamesFemale_containsNames() {
        $this->assertGreaterThan(0, count(RandomFirstname::getFirstnamesFemale()));
    }

    /**
     * @test
     */
    public function getFirstnamesFemale_forWrongCharIsEmptyArray() {
        $this->assertInternalType('array', RandomFirstname::getFirstnamesFemale('foo'));
        $this->assertEmpty(RandomFirstname::getFirstnamesFemale('foo'));
    }

    /**
     * @test
     */
    public function getFirstnameMale_default() {
        $this->assertInternalType('string', RandomFirstname::getFirstnameMale());
    }

    /**
     * @test
     */
    public function getFirstnameMale_forChar() {
        $name = RandomFirstname::getFirstnameMale('a');
        $char = strtolower($name[0]);

        $this->assertInternalType('string', $name);
        $this->assertEquals('a', $char);
    }

    /**
     * @test
     */
    public function getFirstnameMale_forWrongChar() {
        $name = RandomFirstname::getFirstnameMale('foo');

        $this->assertNull($name);
    }

    /**
     * @test
     */
    public function getFirstnameFemale_default() {
        $this->assertInternalType('string', RandomFirstname::getFirstnameFemale());
    }

    /**
     * @test
     */
    public function getFirstnameFemale_forChar() {
        $name = RandomFirstname::getFirstnameFemale('a');
        $char = strtolower($name[0]);

        $this->assertInternalType('string', $name);
        $this->assertEquals('a', $char);
    }

    /**
     * @test
     */
    public function getFirstnameFemale_forWrongChar() {
        $name = RandomFirstname::getFirstnameFemale('foo');

        $this->assertNull($name);
    }
}