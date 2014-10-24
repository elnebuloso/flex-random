<?php
namespace FlexTest\Text;

use Flex\Random\Text\RandomSentence;

/**
 * Class RandomSentenceTest
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class RandomSentenceTest extends \PHPUnit_Framework_TestCase {

    /**
     * @test
     */
    public function test_get() {
        $sentence = RandomSentence::get(100);
        $this->assertNotNull($sentence);
    }
}