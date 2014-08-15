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
     * @test
     */
    public function getRandomProjectNameMale() {
        $this->assertInternalType('string', RandomProject::getProjectNameMale());
    }

    /**
     * @test
     */
    public function getRandomProjectNameMale_default() {
        $name = RandomProject::getProjectNameMale();

        $this->assertInternalType('string', $name);
    }

    /**
     * @test
     */
    public function getRandomProjectNameMale_forChar() {
        $name = RandomProject::getProjectNameMale('b');

        $this->assertInternalType('string', $name);
        $this->assertEquals('b', strtolower($name[0]));
    }

    /**
     * @test
     */
    public function getRandomProjectNameMale_forWrongChar() {
        $name = RandomProject::getProjectNameMale('foo');

        $this->assertNull($name);
    }

    /**
     * @test
     */
    public function getRandomProjectNameFemale() {
        $this->assertInternalType('string', RandomProject::getProjectNameFemale());
    }

    /**
     * @test
     */
    public function getRandomProjectNameFemale_default() {
        $name = RandomProject::getProjectNameFemale();

        $this->assertInternalType('string', $name);
    }

    /**
     * @test
     */
    public function getRandomProjectNameFemale_forChar() {
        $name = RandomProject::getProjectNameFemale('b');

        $this->assertInternalType('string', $name);
        $this->assertEquals('b', strtolower($name[0]));
    }

    /**
     * @test
     */
    public function getRandomProjectNameFemale_forWrongChar() {
        $name = RandomProject::getProjectNameFemale('foo');

        $this->assertNull($name);
    }
}