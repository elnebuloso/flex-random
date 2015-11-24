<?php
namespace FlexTest\Text;

use Flex\Random\Text\RandomProject;

/**
 * Class RandomProjectTest
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class RandomProjectTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function testGetRandomProjectNameMale()
    {
        $this->assertInternalType('string', RandomProject::getProjectNameMale());
    }

    /**
     * @test
     */
    public function testGetRandomProjectNameMaleDefault()
    {
        $name = RandomProject::getProjectNameMale();
        $this->assertInternalType('string', $name);
    }

    /**
     * @test
     */
    public function testGetRandomProjectNameMaleForChar()
    {
        $name = RandomProject::getProjectNameMale('b');
        $this->assertInternalType('string', $name);
        $this->assertEquals('b', strtolower($name[0]));

        foreach (range('a', 'z') as $char) {
            $name = RandomProject::getProjectNameMale($char);
            $this->assertNotEmpty($name, 'missing RandomProject::getProjectNameMale for char ' . $char);
        }
    }

    /**
     * @test
     */
    public function testGetRandomProjectNameMaleForWrongChar()
    {
        $name = RandomProject::getProjectNameMale('foo');
        $this->assertNull($name);
    }

    /**
     * @test
     */
    public function testGetRandomProjectNameFemale()
    {
        $this->assertInternalType('string', RandomProject::getProjectNameFemale());
    }

    /**
     * @test
     */
    public function testGetRandomProjectNameFemaleDefault()
    {
        $name = RandomProject::getProjectNameFemale();
        $this->assertInternalType('string', $name);
    }

    /**
     * @test
     */
    public function testGetRandomProjectNameFemaleForChar()
    {
        $name = RandomProject::getProjectNameFemale('b');
        $this->assertInternalType('string', $name);
        $this->assertEquals('b', strtolower($name[0]));

        foreach (range('a', 'z') as $char) {
            $name = RandomProject::getProjectNameFemale($char);
            $this->assertNotEmpty($name, 'missing RandomProject::getProjectNameFemale for char ' . $char);
        }
    }

    /**
     * @test
     */
    public function testGetRandomProjectNameFemaleForWrongChar()
    {
        $name = RandomProject::getProjectNameFemale('foo');
        $this->assertNull($name);
    }
}
