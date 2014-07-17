<?php
namespace Flex\Random\Text;

/**
 * Class Project
 *
 * @package Flex\Random\Text
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class Project {

    /**
     * returns male project name
     *
     * @param string $char
     * @return string
     */
    public static function getProjectNameMale($char = null) {
        if(is_null($char)) {
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
        if(is_null($char)) {
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