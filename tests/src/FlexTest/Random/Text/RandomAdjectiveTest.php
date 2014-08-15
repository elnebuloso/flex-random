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
     * @test
     */
    public function getAdjectives_default() {
        $words = RandomAdjective::getAdjectives();

        $this->assertInternalType('array', $words);
        $this->assertGreaterThan(0, count($words));
        $this->assertEquals('a', strtolower($words[0][0]));
    }

    /**
     * @test
     */
    public function getAdjectives_forChar() {
        $words = RandomAdjective::getAdjectives('b');

        $this->assertInternalType('array', $words);
        $this->assertGreaterThan(0, count($words));
        $this->assertEquals('b', strtolower($words[0][0]));
    }

    /**
     * @test
     */
    public function getAdjectives_forWrongChar() {
        $words = RandomAdjective::getAdjectives('foo');

        $this->assertInternalType('array', $words);
        $this->assertEmpty($words);
    }

    /**
     * @test
     */
    public function getRandomAdjective_default() {
        $word = RandomAdjective::getAdjective();

        $this->assertInternalType('string', $word);
    }

    /**
     * @test
     */
    public function getRandomAdjective_forChar() {
        $word = RandomAdjective::getAdjective('a');
        $char = strtolower($word[0]);

        $this->assertInternalType('string', $word);
        $this->assertEquals('a', $char);
    }

    /**
     * @test
     */
    public function getRandomAdjective_forWrongChar() {
        $word = RandomAdjective::getAdjective('foo');

        $this->assertNull($word);
    }
}