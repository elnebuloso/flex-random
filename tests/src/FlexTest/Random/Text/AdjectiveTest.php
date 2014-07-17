<?php
namespace FlexTest\Random\Text;

use Flex\Random\Text\RandomAdjective;

/**
 * Class AdjectiveTest
 *
 * @package FlexTest\Random\Text
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class AdjectiveTest extends \PHPUnit_Framework_TestCase {

    /**
     * @return void
     */
    public function test_getAdjectiveCollection_isArray() {
        $this->assertInternalType('array', RandomAdjective::getAdjectiveCollection());
    }

    /**
     * @return void
     */
    public function test_getAdjectiveCollection_countAlphabeticalRange() {
        $this->assertCount(26, RandomAdjective::getAdjectiveCollection());
        $this->assertEmpty(array_diff(range('a', 'z'), array_keys(RandomAdjective::getAdjectiveCollection())));
    }

    /**
     * @return void
     */
    public function test_getAdjectiveCollection_isArrayForWrongLanguage() {
        $this->assertInternalType('array', RandomAdjective::getAdjectiveCollection('language'));
        $this->assertEmpty(RandomAdjective::getAdjectiveCollection('language'));
    }

    /**
     * @return void
     */
    public function test_getAdjectives_default() {
        $words = RandomAdjective::getAdjectives();

        $this->assertInternalType('array', $words);
        $this->assertGreaterThan(0, count($words));
        $this->assertEquals('a', strtolower($words[0][0]));
    }

    /**
     * @return void
     */
    public function test_getAdjectives_forChar() {
        $words = RandomAdjective::getAdjectives('b');

        $this->assertInternalType('array', $words);
        $this->assertGreaterThan(0, count($words));
        $this->assertEquals('b', strtolower($words[0][0]));
    }

    /**
     * @return void
     */
    public function test_getAdjectives_forWrongChar() {
        $words = RandomAdjective::getAdjectives('foo');

        $this->assertInternalType('array', $words);
        $this->assertEmpty($words);
    }

    /**
     * @return void
     */
    public function test_getRandomAdjective_default() {
        $word = RandomAdjective::getAdjective();

        $this->assertInternalType('string', $word);
    }

    /**
     * @return void
     */
    public function test_getRandomAdjective_forChar() {
        $word = RandomAdjective::getAdjective('a');
        $char = strtolower($word[0]);

        $this->assertInternalType('string', $word);
        $this->assertEquals('a', $char);
    }

    /**
     * @return void
     */
    public function test_getRandomAdjective_forWrongChar() {
        $word = RandomAdjective::getAdjective('foo');

        $this->assertNull($word);
    }
}