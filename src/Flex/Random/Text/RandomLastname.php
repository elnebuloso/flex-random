<?php
namespace elnebuloso\Flex\Random\Text;

/**
 * Class RandomLastname
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class RandomLastname
{
    /**
     * @var array
     */
    private static $collection = [];

    /**
     * returns random lastname
     *
     * @param string $char
     * @return string
     */
    public static function getLastname($char = null)
    {
        if (is_null($char)) {
            $char = RandomChar::get();
        }

        $names = self::getLastnames($char);

        if (empty($names)) {
            return null;
        }

        shuffle($names);

        return $names[0];
    }

    /**
     * returns lastnames
     *
     * @param string $char
     * @return array
     */
    public static function getLastnames($char = 'a')
    {
        $char = strtolower($char);

        // return previous fetched collection
        if (array_key_exists($char, self::$collection)) {
            return self::$collection[$char];
        }

        $resource = realpath(dirname(__FILE__) . '/../../../../resources/lastnames');
        $filename = $resource . "/lastnames-{$char}.php";

        // store fetched collection
        self::$collection[$char] = (file_exists($filename)) ? include $filename : [];

        return self::$collection[$char];
    }
}
