<?php
namespace FlexTest\Text;

use Flex\Random\Text\RandomWord;

/**
 * Class RandomWordTest
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class RandomWordTest extends \PHPUnit_Framework_TestCase {

    /**
     * @test
     */
    public function test_speakableConsonant() {
        $word = RandomWord::consonant();
        $this->assertGreaterThanOrEqual(3, strlen($word));
        $this->assertLessThanOrEqual(8, strlen($word));
    }

    /**
     * @test
     */
    public function test_speakableVowel() {
        $word = RandomWord::vowel();
        $this->assertGreaterThanOrEqual(3, strlen($word));
        $this->assertLessThanOrEqual(8, strlen($word));
    }

    /**
     * @test
     */
    public function test_get() {
        $word = RandomWord::get();
        $this->assertGreaterThanOrEqual(3, strlen($word));
        $this->assertLessThanOrEqual(8, strlen($word));
    }
}