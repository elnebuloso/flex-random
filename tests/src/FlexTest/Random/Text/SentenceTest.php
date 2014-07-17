<?php
namespace FlexTest\Text;

use Flex\Random\Text\RandomSentence;

/**
 * Class SentenceTest
 *
 * @package FlexTest\Text
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class SentenceTest extends \PHPUnit_Framework_TestCase {

    /**
     * @return void
     */
    public function test_get() {
        $sentence = RandomSentence::get(100);
        $this->assertNotNull($sentence);
    }
}