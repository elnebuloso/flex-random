<?php
namespace Flex\Random\Text;

/**
 * Class Adjective
 *
 * @package Flex\Random\Text
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class Adjective {

    /**
     * returns random adjective
     *
     * @param string $char
     * @param string $lang
     * @return string
     */
    public static function getAdjective($char = null, $lang = 'en') {
        if(is_null($char)) {
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
        $resources = realpath(dirname(__FILE__) . '/../../../../resources');
        $include = "/{$lang}/adjectives.php";

        if(!file_exists($resources . $include)) {
            return array();
        }

        return include $resources . $include;
    }
}