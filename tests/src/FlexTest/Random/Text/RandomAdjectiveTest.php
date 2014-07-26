<?php
namespace FlexTest\Random\Text;

use Flex\Random\Text\RandomAdjective;

/**
 * Class RandomAdjectiveTest
 *
 * @package FlexTest\Random\Text
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class RandomAdjectiveTest extends \PHPUnit_Framework_TestCase {

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