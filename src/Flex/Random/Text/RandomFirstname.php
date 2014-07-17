<?php
namespace Flex\Random\Text;

use Flex\Random\Constants;

/**
 * Class RandomFirstname
 *
 * @package Flex\Random\Text
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class RandomFirstname {

    /**
     * @var array
     */
    private static $collection = array();

    /**
     * returns male firstname collection
     *
     * @return array
     */
    public static function getFirstnameCollectionMale() {
        return self::getFirstnameCollection(Constants::GENDER_MALE);
    }

    /**
     * returns female firstname collection
     *
     * @return array
     */
    public static function getFirstnameCollectionFemale() {
        return self::getFirstnameCollection(Constants::GENDER_FEMALE);
    }

    /**
     * returns male firstnames
     *
     * @param string $char
     * @return array
     */
    public static function getFirstnamesMale($char = 'a') {
        return self::getFirstnames(Constants::GENDER_MALE, $char);
    }

    /**
     * returns female firstnames
     *
     * @param string $char
     * @return array
     */
    public static function getFirstnamesFemale($char = 'a') {
        return self::getFirstnames(Constants::GENDER_FEMALE, $char);
    }

    /**
     * returns random male firstname
     *
     * @param string $char
     * @return string
     */
    public static function getFirstnameMale($char = null) {
        return self::getFirstname(Constants::GENDER_MALE, $char);
    }

    /**
     * returns random female firstname
     *
     * @param string $char
     * @return string
     */
    public static function getFirstnameFemale($char = null) {
        return self::getFirstname(Constants::GENDER_FEMALE, $char);
    }

    /**
     * returns firstname collection
     *
     * @param string $gender
     * @return array
     */
    public static function getFirstnameCollection($gender = Constants::GENDER_MALE) {
        // return previous fetched collection
        if(array_key_exists($gender, self::$collection)) {
            return self::$collection[$gender];
        }

        $resource = realpath(dirname(__FILE__) . '/../../../../resources');
        $filename = $resource . "/firstnames-{$gender}.php";

        // store fetched collection
        self::$collection[$gender] = (file_exists($filename)) ? include $filename : array();

        return self::$collection[$gender];
    }

    /**
     * returns firstnames
     *
     * @param string $gender
     * @param string $char
     * @return array
     */
    public static function getFirstnames($gender = Constants::GENDER_MALE, $char = 'a') {
        $char = strtolower($char);
        $firstnames = self::getFirstnameCollection($gender);

        return array_key_exists($char, $firstnames) ? $firstnames[$char] : array();
    }

    /**
     * returns random firstname
     *
     * @param string $gender
     * @param string $char
     * @return string
     */
    public static function getFirstname($gender = Constants::GENDER_MALE, $char = null) {
        if(empty($char)) {
            $char = RandomChar::get();
        }

        $firstnames = self::getFirstnames($gender, $char);

        if(empty($firstnames)) {
            return null;
        }

        shuffle($firstnames);

        return $firstnames[0];
    }
}