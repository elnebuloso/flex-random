<?php
namespace Flex\Random\Text;

/**
 * Class RandomAdjective
 *
 * @package Flex\Random\Text
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class RandomAdjective {

    /**
     * @var array
     */
    private static $collection = array();

    /**
     * returns random adjective
     *
     * @param string $char
     * @param string $lang
     * @return string
     */
    public static function getAdjective($char = null, $lang = 'en') {
        if(empty($char)) {
            $char = RandomChar::get();
        }

        $words = self::getAdjectives($char, $lang);

        if(empty($words)) {
            return null;
        }

        shuffle($words);

        return $words[0];
    }

    /**
     * returns adjectives for given char
     *
     * @param string $char
     * @param string $lang
     * @return array
     */
    public static function getAdjectives($char = 'a', $lang = 'en') {
        $char = strtolower($char);
        $words = self::getAdjectiveCollection($lang);

        return array_key_exists($char, $words) ? $words[$char] : array();
    }

    /**
     * returns all adjectives for given language
     *
     * @param string $lang
     * @return array
     */
    public static function getAdjectiveCollection($lang = 'en') {
        $lang = strtolower($lang);

        // return previous fetched collection
        if(array_key_exists($lang, self::$collection)) {
            return self::$collection[$lang];
        }

        $resource = realpath(dirname(__FILE__) . '/../../../../resources');
        $filename = $resource . "/{$lang}/adjectives.php";

        // store fetched collection
        self::$collection[$lang] = (file_exists($filename)) ? include $filename : array();

        return self::$collection[$lang];
    }
}