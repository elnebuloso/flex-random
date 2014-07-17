<?php
namespace Flex\Random\Text;

/**
 * Class Lastname
 *
 * @package Flex\Random\Text
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class Lastname {

    /**
     * returns lastname collection
     *
     * @param string $lang
     * @return array
     */
    public static function getLastnameCollection($lang = 'de') {
        $resources = realpath(dirname(__FILE__) . '/../../../../resources');
        $include = "/{$lang}/lastnames.php";

        if(!file_exists($resources . $include)) {
            return array();
        }

        return include $resources . $include;
    }

    /**
     * returns lastnames
     *
     * @param string $lang
     * @param string $char
     * @return array
     */
    public static function getLastnames($char = 'a', $lang = 'de') {
        $names = self::getLastnameCollection($lang);

        return array_key_exists($char, $names) ? $names[$char] : array();
    }

    /**
     * returns random lastname
     *
     * @param string $char
     * @param string $lang
     * @return string
     */
    public static function getLastname($char = null, $lang = 'de') {
        if(is_null($char)) {
            $char = Char::get();
        }

        $names = self::getLastnames($char, $lang);

        if(empty($names)) {
            return null;
        }

        shuffle($names);

        return $names[0];
    }
}