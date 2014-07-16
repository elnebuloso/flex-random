<?php
namespace Flex\Random\Text;

use Flex\Random\Constants;

/**
 * Class Firstname
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class Firstname {

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
        $resources = realpath(dirname(__FILE__) . '/../../../../resources');
        $include = "/firstnames-{$gender}.php";

        return include $resources . $include;
    }

    /**
     * returns firstnames
     *
     * @param string $gender
     * @param string $char
     * @return array
     */
    public static function getFirstnames($gender = Constants::GENDER_MALE, $char = 'a') {
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
        if(is_null($char)) {
            $char = Char::get();
        }

        $firstnames = self::getFirstnames($gender, $char);

        if(empty($firstnames)) {
            return null;
        }

        shuffle($firstnames);

        return $firstnames[0];
    }
}