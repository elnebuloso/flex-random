<?php
namespace FlexTest\Text;

use Flex\Random\Text\Word;

/**
 * Class WordTest
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class WordTest extends \PHPUnit_Framework_TestCase {

    /**
     * @return void
     */
    public function test_speakableConsonant() {
        $word = Word::speakableConsonant(100);
        $this->assertEquals(100, strlen($word));
    }

    /**
     * @return void
     */
    public function test_speakableVowel() {
        $word = Word::speakableVowel(100);
        $this->assertEquals(100, strlen($word));
    }

    /**
     * @return void
     */
    public function test_get() {
        $word = Word::get(100);
        $this->assertEquals(100, strlen($word));
    }
}