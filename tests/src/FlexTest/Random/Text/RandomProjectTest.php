<?php
namespace FlexTest\Text;

use Flex\Random\Text\RandomProject;

/**
 * Class RandomProjectTest
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class RandomProjectTest extends \PHPUnit_Framework_TestCase {

    /**
     * @test
     */
    public function test_getRandomProjectNameMale() {
        $this->assertInternalType('string', RandomProject::getProjectNameMale());
    }

    /**
     * @test
     */
    public function test_getRandomProjectNameMale_default() {
        $name = RandomProject::getProjectNameMale();

        $this->assertInternalType('string', $name);
    }

    /**
     * @test
     */
    public function test_getRandomProjectNameMale_forChar() {
        $name = RandomProject::getProjectNameMale('b');

        $this->assertInternalType('string', $name);
        $this->assertEquals('b', strtolower($name[0]));
    }

    /**
     * @test
     */
    public function test_getRandomProjectNameMale_forWrongChar() {
        $name = RandomProject::getProjectNameMale('foo');

        $this->assertNull($name);
    }

    /**
     * @test
     */
    public function test_getRandomProjectNameFemale() {
        $this->assertInternalType('string', RandomProject::getProjectNameFemale());
    }

    /**
     * @test
     */
    public function test_getRandomProjectNameFemale_default() {
        $name = RandomProject::getProjectNameFemale();

        $this->assertInternalType('string', $name);
    }

    /**
     * @test
     */
    public function test_getRandomProjectNameFemale_forChar() {
        $name = RandomProject::getProjectNameFemale('b');

        $this->assertInternalType('string', $name);
        $this->assertEquals('b', strtolower($name[0]));
    }

    /**
     * @test
     */
    public function test_getRandomProjectNameFemale_forWrongChar() {
        $name = RandomProject::getProjectNameFemale('foo');

        $this->assertNull($name);
    }
}