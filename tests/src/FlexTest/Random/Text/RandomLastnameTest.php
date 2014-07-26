<?php
namespace FlexTest\Text;

use Flex\Random\Text\RandomLastname;

/**
 * Class RandomLastnameTest
 *
 * @package FlexTest\Text
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class RandomLastnameTest extends \PHPUnit_Framework_TestCase {

    /**
     * @return void
     */
    public function test_getLastnames_default() {
        $names = RandomLastname::getLastnames();

        $this->assertInternalType('array', $names);
        $this->assertGreaterThan(0, count($names));
        $this->assertEquals('a', strtolower($names[0][0]));
    }

    /**
     * @return void
     */
    public function test_getLastnames_forChar() {
        $names = RandomLastname::getLastnames('b');

        $this->assertInternalType('array', $names);
        $this->assertGreaterThan(0, count($names));
        $this->assertEquals('b', strtolower($names[0][0]));
    }

    /**
     * @return void
     */
    public function test_getLastnames_forWrongChar() {
        $names = RandomLastname::getLastnames('foo');

        $this->assertInternalType('array', $names);
        $this->assertEmpty($names);
    }

    /**
     * @return void
     */
    public function test_getLastname_default() {
        $name = RandomLastname::getLastname();

        $this->assertInternalType('string', $name);
    }

    /**
     * @return void
     */
    public function test_getLastname_forChar() {
        $name = RandomLastname::getLastname('a');
        $char = strtolower($name[0]);

        $this->assertInternalType('string', $name);
        $this->assertEquals('a', $char);
    }

    /**
     * @return void
     */
    public function test_getLastname_forWrongChar() {
        $name = RandomLastname::getLastname('foo');

        $this->assertNull($name);
    }
}