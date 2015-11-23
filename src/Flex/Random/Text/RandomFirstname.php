<?php
namespace Flex\Random\Text;

use Flex\Random\Constants;

/**
 * Class RandomFirstname
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class RandomFirstname
{
    /**
     * @var array
     */
    private static $collection = [];

    /**
     * returns random firstname
     *
     * @param string $gender
     * @param string $char
     * @return string
     */
    public static function getFirstname($gender = Constants::GENDER_MALE, $char = null)
    {
        if (empty($char)) {
            $char = RandomChar::get();
        }

        $firstnames = self::getFirstnames($gender, $char);

        if (empty($firstnames)) {
            return null;
        }

        shuffle($firstnames);

        return $firstnames[0];
    }

    /**
     * returns random female firstname
     *
     * @param string $char
     * @return string
     */
    public static function getFirstnameFemale($char = null)
    {
        return self::getFirstname(Constants::GENDER_FEMALE, $char);
    }

    /**
     * returns random male firstname
     *
     * @param string $char
     * @return string
     */
    public static function getFirstnameMale($char = null)
    {
        return self::getFirstname(Constants::GENDER_MALE, $char);
    }

    /**
     * returns female firstnames
     *
     * @param string $char
     * @return array
     */
    public static function getFirstnamesFemale($char = 'a')
    {
        return self::getFirstnames(Constants::GENDER_FEMALE, $char);
    }

    /**
     * returns male firstnames
     *
     * @param string $char
     * @return array
     */
    public static function getFirstnamesMale($char = 'a')
    {
        return self::getFirstnames(Constants::GENDER_MALE, $char);
    }

    /**
     * returns firstnames
     *
     * @param string $gender
     * @param string $char
     * @return array
     */
    public static function getFirstnames($gender = Constants::GENDER_MALE, $char = 'a')
    {
        $char = strtolower($char);
        $gender = strtolower($gender);

        // return previous fetched collection
        if (array_key_exists($char, self::$collection) && array_key_exists($gender, self::$collection[$char])) {
            return self::$collection[$char][$gender];
        }

        $resource = realpath(dirname(__FILE__) . '/../../../../resources/firstnames/' . $gender);
        $filename = $resource . "/firstnames-{$gender}-{$char}.php";

        // store fetched collection
        self::$collection[$char][$gender] = (file_exists($filename)) ? include $filename : [];

        return self::$collection[$char][$gender];
    }
}
