<?php
namespace Flex\Random\Text;

/**
 * Class RandomWord
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class RandomWord {

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
     * @param int $length
     * @return string
     */
    public static function consonant($length = null) {
        $length = empty($length) ? mt_rand(3, 8) : $length;
        $word = null;

        for($x = 0; $x < $length; $x++) {
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
     * @param int $length
     * @return string
     */
    public static function vowel($length = null) {
        $length = empty($length) ? mt_rand(3, 8) : $length;
        $word = null;

        for($x = 0; $x < $length; $x++) {
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
     * @param int $length
     * @return string
     */
    public static function get($length = null) {
        $wordChars = str_shuffle(self::$consonants . self::$vowels);
        $length = empty($length) ? mt_rand(3, 8) : $length;
        $word = null;

        for($x = 0; $x < $length; $x++) {
            $word .= $wordChars[mt_rand(0, strlen($wordChars) - 1)];
        }

        return $word;
    }
}