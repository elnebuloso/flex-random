<?php
namespace FlexTest\Random\Text;

use Flex\Random\Text\Adjective;

/**
 * Class AdjectiveTest
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class AdjectiveTest extends \PHPUnit_Framework_TestCase {

    /**
     * @return void
     */
    public function test_getAdjectiveCollection_isArray() {
        $this->assertInternalType('array', Adjective::getAdjectiveCollection());
    }

    /**
     * @return void
     */
    public function test_getAdjectiveCollection_countAlphabeticalRange() {
        $this->assertCount(26, Adjective::getAdjectiveCollection());
        $this->assertEmpty(array_diff(range('a', 'z'), array_keys(Adjective::getAdjectiveCollection())));
    }

    /**
     * @return void
     */
    public function test_getAdjectiveCollection_isArrayForWrongLanguage() {
        $this->assertInternalType('array', Adjective::getAdjectiveCollection('language'));
        $this->assertEmpty(Adjective::getAdjectiveCollection('language'));
    }

    /**
     * @return void
     */
    public function test_getAdjectives_default() {
        $words = Adjective::getAdjectives();

        $this->assertInternalType('array', $words);
        $this->assertGreaterThan(0, count($words));
        $this->assertEquals('a', strtolower($words[0][0]));
    }

    /**
     * @return void
     */
    public function test_getAdjectives_forChar() {
        $words = Adjective::getAdjectives('b');

        $this->assertInternalType('array', $words);
        $this->assertGreaterThan(0, count($words));
        $this->assertEquals('b', strtolower($words[0][0]));
    }

    /**
     * @return void
     */
    public function test_getAdjectives_forWrongChar() {
        $words = Adjective::getAdjectives('foo');

        $this->assertInternalType('array', $words);
        $this->assertEmpty($words);
    }

    /**
     * @return void
     */
    public function test_getRandomAdjective_default() {
        $word = Adjective::getAdjective();

        $this->assertInternalType('string', $word);
    }

    /**
     * @return void
     */
    public function test_getRandomAdjective_forChar() {
        $word = Adjective::getAdjective('a');
        $char = strtolower($word[0]);

        $this->assertInternalType('string', $word);
        $this->assertEquals('a', $char);
    }

    /**
     * @return void
     */
    public function test_getRandomAdjective_forWrongChar() {
        $word = Adjective::getAdjective('foo');

        $this->assertNull($word);
    }
}