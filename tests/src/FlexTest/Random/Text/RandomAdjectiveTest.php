<?php
namespace elnebuloso\FlexTest\Random\Text;

use elnebuloso\Flex\Random\Text\RandomAdjective;
use PHPUnit_Framework_TestCase;

/**
 * Class RandomAdjectiveTest
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class RandomAdjectiveTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function testGetAdjectivesDefault()
    {
        $words = RandomAdjective::getAdjectives();
        $this->assertInternalType('array', $words);
        $this->assertGreaterThan(0, count($words));
        $this->assertEquals('a', strtolower($words[0][0]));
    }

    /**
     * @test
     */
    public function testGetAdjectivesForChar()
    {
        $words = RandomAdjective::getAdjectives('b');
        $this->assertInternalType('array', $words);
        $this->assertGreaterThan(0, count($words));
        $this->assertEquals('b', strtolower($words[0][0]));
    }

    /**
     * @test
     */
    public function testGetAdjectivesForWrongChar()
    {
        $words = RandomAdjective::getAdjectives('foo');
        $this->assertInternalType('array', $words);
        $this->assertEmpty($words);
    }

    /**
     * @test
     */
    public function testGetRandomAdjectiveDefault()
    {
        $word = RandomAdjective::getAdjective();
        $this->assertInternalType('string', $word);
    }

    /**
     * @test
     */
    public function testGetRandomAdjectiveForChar()
    {
        $word = RandomAdjective::getAdjective('a');
        $char = strtolower($word[0]);

        $this->assertInternalType('string', $word);
        $this->assertEquals('a', $char);

        foreach (range('a', 'z') as $char) {
            $word = RandomAdjective::getAdjective($char);
            $this->assertNotEmpty($word, 'missing RandomAdjective::getAdjective for char ' . $char);
        }
    }

    /**
     * @test
     */
    public function testGetRandomAdjectiveForWrongChar()
    {
        $word = RandomAdjective::getAdjective('foo');
        $this->assertNull($word);
    }
}
