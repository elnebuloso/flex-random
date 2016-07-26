<?php
namespace elnebuloso\Flex\Random\Text;

/**
 * Class RandomAdjective
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class RandomAdjective
{
    /**
     * @var array
     */
    private static $collection = [];

    /**
     * returns random adjective
     *
     * @param string $char
     * @param string $lang
     * @return string
     */
    public static function getAdjective($char = null, $lang = 'en')
    {
        if (empty($char)) {
            $char = RandomChar::get();
        }

        $words = self::getAdjectives($char, $lang);

        if (empty($words)) {
            return null;
        }

        shuffle($words);

        return $words[0];
    }

    /**
     * returns adjectives for given char
     *
     * @param string $char
     * @param string $lang
     * @return array
     */
    public static function getAdjectives($char = 'a', $lang = 'en')
    {
        $char = strtolower($char);
        $lang = strtolower($lang);

        // return previous fetched collection
        if (array_key_exists($char, self::$collection) && array_key_exists($lang, self::$collection[$char])) {
            return self::$collection[$char][$lang];
        }

        $resource = realpath(dirname(__FILE__) . '/../../../../../resources/adjectives/' . $lang);
        $filename = $resource . "/adjectives-{$lang}-{$char}.php";

        // store fetched collection
        self::$collection[$char][$lang] = (file_exists($filename)) ? include $filename : [];

        return self::$collection[$char][$lang];
    }
}
