<?php
namespace Flex\Random\Text;

/**
 * Class RandomLastname
 *
 * @package Flex\Random\Text
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class RandomLastname {

    /**
     * @var array
     */
    private static $collection = array();

    /**
     * returns random lastname
     *
     * @param string $char
     * @param string $lang
     * @return string
     */
    public static function getLastname($char = null, $lang = 'de') {
        if(is_null($char)) {
            $char = RandomChar::get();
        }

        $names = self::getLastnames($char, $lang);

        if(empty($names)) {
            return null;
        }

        shuffle($names);

        return $names[0];
    }

    /**
     * returns lastnames
     *
     * @param string $lang
     * @param string $char
     * @return array
     */
    public static function getLastnames($char = 'a', $lang = 'de') {
        $char = strtolower($char);
        $names = self::getLastnameCollection($lang);

        return array_key_exists($char, $names) ? $names[$char] : array();
    }

    /**
     * returns lastname collection
     *
     * @param string $lang
     * @return array
     */
    public static function getLastnameCollection($lang = 'de') {
        $lang = strtolower($lang);

        // return previous fetched collection
        if(array_key_exists($lang, self::$collection)) {
            return self::$collection[$lang];
        }

        $resource = realpath(dirname(__FILE__) . '/../../../../resources');
        $filename = $resource . "/{$lang}/lastnames.php";

        // store fetched collection
        self::$collection[$lang] = (file_exists($filename)) ? include $filename : array();

        return self::$collection[$lang];
    }
}