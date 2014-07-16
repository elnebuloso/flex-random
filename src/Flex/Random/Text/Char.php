<?php
namespace Flex\Random\Text;

/**
 * Class Char
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class Char {

    /**
     * returns random char
     *
     * @return string
     */
    public static function get() {
        $chars = range('a', 'z');
        shuffle($chars);

        return $chars[0];
    }
}