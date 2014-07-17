<?php
namespace FlexTest\Text;

use Flex\Random\Text\RandomProject;

/**
 * Class RandomProjectTest
 *
 * @package FlexTest\Text
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class RandomProjectTest extends \PHPUnit_Framework_TestCase {

    /**
     * @return void
     */
    public function test_getRandomProjectNameMale() {
        $this->assertInternalType('string', RandomProject::getProjectNameMale());
    }

    /**
     * @return void
     */
    public function test_getRandomProjectNameMale_default() {
        $name = RandomProject::getProjectNameMale();

        $this->assertInternalType('string', $name);
    }

    /**
     * @return void
     */
    public function test_getRandomProjectNameMale_forChar() {
        $name = RandomProject::getProjectNameMale('b');

        $this->assertInternalType('string', $name);
        $this->assertEquals('b', strtolower($name[0]));
    }

    /**
     * @return void
     */
    public function test_getRandomProjectNameMale_forWrongChar() {
        $name = RandomProject::getProjectNameMale('foo');

        $this->assertNull($name);
    }

    /**
     * @return void
     */
    public function test_getRandomProjectNameFemale() {
        $this->assertInternalType('string', RandomProject::getProjectNameFemale());
    }

    /**
     * @return void
     */
    public function test_getRandomProjectNameFemale_default() {
        $name = RandomProject::getProjectNameFemale();

        $this->assertInternalType('string', $name);
    }

    /**
     * @return void
     */
    public function test_getRandomProjectNameFemale_forChar() {
        $name = RandomProject::getProjectNameFemale('b');

        $this->assertInternalType('string', $name);
        $this->assertEquals('b', strtolower($name[0]));
    }

    /**
     * @return void
     */
    public function test_getRandomProjectNameFemale_forWrongChar() {
        $name = RandomProject::getProjectNameFemale('foo');

        $this->assertNull($name);
    }
}