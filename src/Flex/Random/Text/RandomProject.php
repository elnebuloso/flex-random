<?php
namespace Flex\Random\Text;

/**
 * Class RandomProject
 *
 * @package Flex\Random\Text
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class RandomProject {

    /**
     * returns male project name
     *
     * @param string $char
     * @return string
     */
    public static function getProjectNameMale($char = null) {
        if(empty($char)) {
            $char = RandomChar::get();
        }

        $adjective = RandomAdjective::getAdjective($char);
        $name = Firstname::getFirstnameMale($char);

        if(empty($adjective) || empty($name)) {
            return null;
        }

        return ucwords($adjective . ' ' . $name);
    }

    /**
     * returns female project name
     *
     * @param string $char
     * @return string
     */
    public static function getProjectNameFemale($char = null) {
        if(empty($char)) {
            $char = RandomChar::get();
        }

        $adjective = RandomAdjective::getAdjective($char);
        $name = Firstname::getFirstnameFemale($char);

        if(empty($adjective) || empty($name)) {
            return null;
        }

        return ucwords($adjective . ' ' . $name);
    }
}