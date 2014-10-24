<?php
namespace FlexTest\Text;

use Flex\Random\Text\RandomFirstname;

/**
 * Class RandomFirstnameTest
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class RandomFirstnameTest extends \PHPUnit_Framework_TestCase {

    /**
     * @test
     */
    public function test_getFirstnamesMale_isArray() {
        $this->assertInternalType('array', RandomFirstname::getFirstnamesMale());
    }

    /**
     * @test
     */
    public function test_getFirstnamesMale_containsNames() {
        $this->assertGreaterThan(0, count(RandomFirstname::getFirstnamesMale()));
    }

    /**
     * @test
     */
    public function test_getFirstnamesMale_forWrongCharIsEmptyArray() {
        $this->assertInternalType('array', RandomFirstname::getFirstnamesMale('foo'));
        $this->assertEmpty(RandomFirstname::getFirstnamesMale('foo'));
    }

    /**
     * @test
     */
    public function test_getFirstnamesFemale_isArray() {
        $this->assertInternalType('array', RandomFirstname::getFirstnamesFemale());
    }

    /**
     * @test
     */
    public function test_getFirstnamesFemale_containsNames() {
        $this->assertGreaterThan(0, count(RandomFirstname::getFirstnamesFemale()));
    }

    /**
     * @test
     */
    public function test_getFirstnamesFemale_forWrongCharIsEmptyArray() {
        $this->assertInternalType('array', RandomFirstname::getFirstnamesFemale('foo'));
        $this->assertEmpty(RandomFirstname::getFirstnamesFemale('foo'));
    }

    /**
     * @test
     */
    public function test_getFirstnameMale_default() {
        $this->assertInternalType('string', RandomFirstname::getFirstnameMale());
    }

    /**
     * @test
     */
    public function test_getFirstnameMale_forChar() {
        $name = RandomFirstname::getFirstnameMale('a');
        $char = strtolower($name[0]);

        $this->assertInternalType('string', $name);
        $this->assertEquals('a', $char);
    }

    /**
     * @test
     */
    public function test_getFirstnameMale_forWrongChar() {
        $name = RandomFirstname::getFirstnameMale('foo');

        $this->assertNull($name);
    }

    /**
     * @test
     */
    public function test_getFirstnameFemale_default() {
        $this->assertInternalType('string', RandomFirstname::getFirstnameFemale());
    }

    /**
     * @test
     */
    public function test_getFirstnameFemale_forChar() {
        $name = RandomFirstname::getFirstnameFemale('a');
        $char = strtolower($name[0]);

        $this->assertInternalType('string', $name);
        $this->assertEquals('a', $char);
    }

    /**
     * @test
     */
    public function test_getFirstnameFemale_forWrongChar() {
        $name = RandomFirstname::getFirstnameFemale('foo');

        $this->assertNull($name);
    }
}