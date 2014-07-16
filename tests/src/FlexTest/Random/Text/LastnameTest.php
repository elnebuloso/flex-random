<?php
namespace FlexTest\Text;

use Flex\Random\Text\Lastname;

/**
 * Class LastnameTest
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class LastnameTest extends \PHPUnit_Framework_TestCase {

    /**
     * @return void
     */
    public function test_getLastnameCollection_isArray() {
        $this->assertInternalType('array', Lastname::getLastnameCollection());
    }

    /**
     * @return void
     */
    public function test_getLastnameCollection_countAlphabeticalRange() {
        $this->assertCount(26, Lastname::getLastnameCollection());
        $this->assertEmpty(array_diff(range('a', 'z'), array_keys(Lastname::getLastnameCollection())));
    }

    /**
     * @return void
     */
    public function test_getLastnameCollection_isArrayForWrongLanguage() {
        $this->assertInternalType('array', Lastname::getLastnameCollection('language'));
        $this->assertEmpty(Lastname::getLastnameCollection('language'));
    }

    /**
     * @return void
     */
    public function test_getLastnames_default() {
        $names = Lastname::getLastnames();

        $this->assertInternalType('array', $names);
        $this->assertGreaterThan(0, count($names));
        $this->assertEquals('a', strtolower($names[0][0]));
    }

    /**
     * @return void
     */
    public function test_getLastnames_forChar() {
        $names = Lastname::getLastnames('b');

        $this->assertInternalType('array', $names);
        $this->assertGreaterThan(0, count($names));
        $this->assertEquals('b', strtolower($names[0][0]));
    }

    /**
     * @return void
     */
    public function test_getLastnames_forWrongChar() {
        $names = Lastname::getLastnames('foo');

        $this->assertInternalType('array', $names);
        $this->assertEmpty($names);
    }

    /**
     * @return void
     */
    public function test_getLastname_default() {
        $name = Lastname::getLastname();

        $this->assertInternalType('string', $name);
    }

    /**
     * @return void
     */
    public function test_getLastname_forChar() {
        $name = Lastname::getLastname('a');
        $char = strtolower($name[0]);

        $this->assertInternalType('string', $name);
        $this->assertEquals('a', $char);
    }

    /**
     * @return void
     */
    public function test_getLastname_forWrongChar() {
        $name = Lastname::getLastname('foo');

        $this->assertNull($name);
    }
}