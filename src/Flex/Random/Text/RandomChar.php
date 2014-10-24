<?php
namespace Flex\Random\Text;

/**
 * Class RandomChar
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class RandomChar {

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