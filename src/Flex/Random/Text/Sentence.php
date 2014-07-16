<?php
namespace Flex\Random\Text;

/**
 * Class RandomSentence
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class Sentence {

    /**
     * returns random sentence for given number of words
     *
     * @param int $wordcount
     * @return string
     */
    public static function get($wordcount = null) {
        // words per senctence
        $wordcount = (empty($wordcount)) ? mt_rand(8, 25) : $wordcount;
        $words = array();

        for($a = 0; $a < $wordcount; $a++) {
            // random word
            if(mt_rand(1, 100) % 2 === 0) {
                $word = Word::speakableConsonant(mt_rand(3, 12));
            }
            else {
                $word = Word::speakableVowel(mt_rand(3, 12));
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
            if($a < ($wordcount - 2) && mt_rand(1, 100) <= 5) {
                $word = $word . ', ';
            }

            $words[] = $word;
        }

        return implode(' ', $words) . '.';
    }
}