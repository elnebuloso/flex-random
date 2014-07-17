<?php
namespace FlexTest\Text;

use Flex\Random\Text\Firstname;

/**
 * Class FirstnameTest
 *
 * @package FlexTest\Text
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class FirstnameTest extends \PHPUnit_Framework_TestCase {

    /**
     * @return void
     */
    public function test_getFirstnameCollectionMale_isArray() {
        $this->assertInternalType('array', Firstname::getFirstnameCollectionMale());
    }

    /**
     * @return void
     */
    public function test_getFirstnameCollectionMale_countAlphabeticalRange() {
        $this->assertCount(26, Firstname::getFirstnameCollectionMale());
        $this->assertEmpty(array_diff(range('a', 'z'), array_keys(Firstname::getFirstnameCollectionMale())));
    }

    /**
     * @return void
     */
    public function test_getFirstnameCollectionFemale_isArray() {
        $this->assertInternalType('array', Firstname::getFirstnameCollectionFemale());
    }

    /**
     * @return void
     */
    public function test_getFirstnameCollectionFemale_countAlphabeticalRange() {
        $this->assertCount(26, Firstname::getFirstnameCollectionFemale());
        $this->assertEmpty(array_diff(range('a', 'z'), array_keys(Firstname::getFirstnameCollectionFemale())));
    }

    /**
     * @return void
     */
    public function test_getFirstnamesMale_isArray() {
        $this->assertInternalType('array', Firstname::getFirstnamesMale());
    }

    /**
     * @return void
     */
    public function test_getFirstnamesMale_containsNames() {
        $this->assertGreaterThan(0, count(Firstname::getFirstnamesMale()));
    }

    /**
     * @return void
     */
    public function test_getFirstnamesMale_forWrongCharIsEmptyArray() {
        $this->assertInternalType('array', Firstname::getFirstnamesMale('foo'));
        $this->assertEmpty(Firstname::getFirstnamesMale('foo'));
    }

    /**
     * @return void
     */
    public function test_getFirstnamesFemale_isArray() {
        $this->assertInternalType('array', Firstname::getFirstnamesFemale());
    }

    /**
     * @return void
     */
    public function test_getFirstnamesFemale_containsNames() {
        $this->assertGreaterThan(0, count(Firstname::getFirstnamesFemale()));
    }

    /**
     * @return void
     */
    public function test_getFirstnamesFemale_forWrongCharIsEmptyArray() {
        $this->assertInternalType('array', Firstname::getFirstnamesFemale('foo'));
        $this->assertEmpty(Firstname::getFirstnamesFemale('foo'));
    }

    /**
     * @return void
     */
    public function test_getFirstnameMale_default() {
        $this->assertInternalType('string', Firstname::getFirstnameMale());
    }

    /**
     * @return void
     */
    public function test_getFirstnameMale_forChar() {
        $name = Firstname::getFirstnameMale('a');
        $char = strtolower($name[0]);

        $this->assertInternalType('string', $name);
        $this->assertEquals('a', $char);
    }

    /**
     * @return void
     */
    public function test_getFirstnameMale_forWrongChar() {
        $name = Firstname::getFirstnameMale('foo');

        $this->assertNull($name);
    }

    /**
     * @return void
     */
    public function test_getFirstnameFemale_default() {
        $this->assertInternalType('string', Firstname::getFirstnameFemale());
    }

    /**
     * @return void
     */
    public function test_getFirstnameFemale_forChar() {
        $name = Firstname::getFirstnameFemale('a');
        $char = strtolower($name[0]);

        $this->assertInternalType('string', $name);
        $this->assertEquals('a', $char);
    }

    /**
     * @return void
     */
    public function test_getFirstnameFemale_forWrongChar() {
        $name = Firstname::getFirstnameFemale('foo');

        $this->assertNull($name);
    }
}