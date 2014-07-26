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
     * @return void
     */
    public function test_getFirstnamesMale_isArray() {
        $this->assertInternalType('array', RandomFirstname::getFirstnamesMale());
    }

    /**
     * @return void
     */
    public function test_getFirstnamesMale_containsNames() {
        $this->assertGreaterThan(0, count(RandomFirstname::getFirstnamesMale()));
    }

    /**
     * @return void
     */
    public function test_getFirstnamesMale_forWrongCharIsEmptyArray() {
        $this->assertInternalType('array', RandomFirstname::getFirstnamesMale('foo'));
        $this->assertEmpty(RandomFirstname::getFirstnamesMale('foo'));
    }

    /**
     * @return void
     */
    public function test_getFirstnamesFemale_isArray() {
        $this->assertInternalType('array', RandomFirstname::getFirstnamesFemale());
    }

    /**
     * @return void
     */
    public function test_getFirstnamesFemale_containsNames() {
        $this->assertGreaterThan(0, count(RandomFirstname::getFirstnamesFemale()));
    }

    /**
     * @return void
     */
    public function test_getFirstnamesFemale_forWrongCharIsEmptyArray() {
        $this->assertInternalType('array', RandomFirstname::getFirstnamesFemale('foo'));
        $this->assertEmpty(RandomFirstname::getFirstnamesFemale('foo'));
    }

    /**
     * @return void
     */
    public function test_getFirstnameMale_default() {
        $this->assertInternalType('string', RandomFirstname::getFirstnameMale());
    }

    /**
     * @return void
     */
    public function test_getFirstnameMale_forChar() {
        $name = RandomFirstname::getFirstnameMale('a');
        $char = strtolower($name[0]);

        $this->assertInternalType('string', $name);
        $this->assertEquals('a', $char);
    }

    /**
     * @return void
     */
    public function test_getFirstnameMale_forWrongChar() {
        $name = RandomFirstname::getFirstnameMale('foo');

        $this->assertNull($name);
    }

    /**
     * @return void
     */
    public function test_getFirstnameFemale_default() {
        $this->assertInternalType('string', RandomFirstname::getFirstnameFemale());
    }

    /**
     * @return void
     */
    public function test_getFirstnameFemale_forChar() {
        $name = RandomFirstname::getFirstnameFemale('a');
        $char = strtolower($name[0]);

        $this->assertInternalType('string', $name);
        $this->assertEquals('a', $char);
    }

    /**
     * @return void
     */
    public function test_getFirstnameFemale_forWrongChar() {
        $name = RandomFirstname::getFirstnameFemale('foo');

        $this->assertNull($name);
    }
}