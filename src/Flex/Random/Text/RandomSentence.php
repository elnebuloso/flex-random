<?php
namespace Flex\Random\Text;

/**
 * Class RandomSentence
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class RandomSentence {

    /**
     * returns random sentence for given number of words
     *
     * @param int $count
     * @return string
     */
    public static function get($count = null) {
        $count = empty($count) ? mt_rand(8, 25) : $count;
        $words = array();

        for($a = 0; $a < $count; $a++) {
            // random word
            if(mt_rand(1, 100) % 2 === 0) {
                $word = RandomWord::consonant(mt_rand(3, 12));
            }
            else {
                $word = RandomWord::vowel(mt_rand(3, 12));
            }

            // first word in sentence first letter uppercase
            if($a === 0) {
                $word = ucfirst($word);
            }

            // chance for word with first letter uppercase
            if(mt_rand(1, 100) <= 5) {
                $word = ucfirst($word);
            }

            // chance to add comma
            if($a < ($count - 2) && mt_rand(1, 100) <= 5) {
                $word = $word . ', ';
            }

            $words[] = $word;
        }

        return implode(' ', $words) . '.';
    }
}