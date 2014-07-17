<?php
namespace FlexTest\Text;

use Flex\Random\Text\Sentence;

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
        $sentence = Sentence::get(100);
        $this->assertNotNull($sentence);
    }
}