<?php
namespace Flex\Random\Text;

/**
 * Class Adjective
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class Adjective {

    /**
     * @param string $char
     * @param string $lang
     * @return array
     */
    public static function getAdjective($char = null, $lang = 'en') {
        if(is_null($char)) {
            $char = Char::get();
        }

        $words = self::getAdjectives($char, $lang);

        if(empty($words)) {
            return null;
        }

        shuffle($words);

        return $words[0];
    }

    /**
     * @param string $char
     * @param string $lang
     * @return array
     */
    public static function getAdjectives($char = 'a', $lang = 'en') {
        $words = self::getAdjectiveCollection($lang);

        return array_key_exists($char, $words) ? $words[$char] : array();
    }

    /**
     * @param string $lang
     * @return array
     */
    public static function getAdjectiveCollection($lang = 'en') {
        if(!file_exists(dirname(__FILE__) . '/resources/adjectives.' . $lang . '.php')) {
            return array();
        }

        return include dirname(__FILE__) . '/resources/adjectives.' . $lang . '.php';
    }
}