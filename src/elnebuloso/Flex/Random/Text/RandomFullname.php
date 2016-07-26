<?php
namespace elnebuloso\Flex\Random\Text;

/**
 * Class RandomFullname
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class RandomFullname
{
    /**
     * returns female fullname
     *
     * @return string
     */
    public static function getFullnameFemale()
    {
        return RandomFirstname::getFirstnameFemale() . ' ' . RandomLastname::getLastname();
    }

    /**
     * returns male fullname
     *
     * @return string
     */
    public static function getFullnameMale()
    {
        return RandomFirstname::getFirstnameMale() . ' ' . RandomLastname::getLastname();
    }
}
