<?php
namespace Flex\Random\Text;

/**
 * Class RandomFullname
 *
 * @package Flex\Random\Text
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class RandomFullname {

    /**
     * returns female fullname
     *
     * @return string
     */
    public static function getFullnameFemale() {
        return RandomFirstname::getFirstnameFemale() . ' ' . RandomLastname::getLastname();
    }

    /**
     * returns male fullname
     *
     * @return string
     */
    public static function getFullnameMale() {
        return RandomFirstname::getFirstnameMale() . ' ' . RandomLastname::getLastname();
    }
}