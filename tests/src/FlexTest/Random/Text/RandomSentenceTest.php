<?php
namespace elnebuloso\FlexTest\Text;

use elnebuloso\Flex\Random\Text\RandomSentence;
use PHPUnit_Framework_TestCase;

/**
 * Class RandomSentenceTest
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class RandomSentenceTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function testGet()
    {
        $sentence = RandomSentence::get(100);
        $this->assertNotNull($sentence);
    }
}
