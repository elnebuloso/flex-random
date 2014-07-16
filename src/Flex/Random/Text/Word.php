<?php
namespace Flex\Random\Text;

/**
 * Class RandomWord
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class Word {

    /**
     * @var string
     */
    private static $consonants = 'bcdfghklmprstvw';

    /**
     * @var string
     */
    private static $vowels = 'aeiou';

    /**
     * returns random speakable word beginning with consonant
     *
     * @param int $chars
     * @return string
     */
    public static function speakableConsonant($chars = null) {
        $chars = (empty($chars)) ? mt_rand(3, 8) : $chars;
        $word = '';

        for($x = 0; $x < $chars; $x++) {
            if($x % 2 == 0) {
                $word .= self::$consonants[mt_rand(0, strlen(self::$consonants) - 1)];
            }
            else {
                $word .= self::$vowels[mt_rand(0, strlen(self::$vowels) - 1)];
            }
        }

        return $word;
    }

    /**
     * returns random speakable word beginning with vowel
     *
     * @param int $chars
     * @return string
     */
    public static function speakableVowel($chars = null) {
        $chars = (empty($chars)) ? mt_rand(3, 8) : $chars;
        $word = '';

        for($x = 0; $x < $chars; $x++) {
            if($x % 2 == 0) {
                $word .= self::$vowels[mt_rand(0, strlen(self::$vowels) - 1)];
            }
            else {
                $word .= self::$consonants[mt_rand(0, strlen(self::$consonants) - 1)];
            }
        }

        return $word;
    }

    /**
     * return random word
     *
     * @param int $chars
     * @return string
     */
    public static function get($chars = null) {
        $chars = (empty($chars)) ? mt_rand(3, 8) : $chars;
        $wordChars = str_shuffle(self::$consonants . self::$vowels);
        $word = '';

        for($x = 0; $x < $chars; $x++) {
            $word .= $wordChars[mt_rand(0, strlen($wordChars) - 1)];
        }

        return $word;
    }
}