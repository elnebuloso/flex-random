<?php
namespace elnebuloso\Flex\Random\Text;

/**
 * Class RandomText
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class RandomText
{
    /**
     * return random text for given numbers of sentences
     *
     * @param int $sentences
     * @return string
     */
    public static function get($sentences = null)
    {
        $sentences = empty($sentences) ? mt_rand(1, 20) : $sentences;
        $text = null;

        for ($x = 0; $x < $sentences; $x++) {
            $text .= RandomSentence::get(mt_rand(10, 20));
        }

        return $text;
    }
}
