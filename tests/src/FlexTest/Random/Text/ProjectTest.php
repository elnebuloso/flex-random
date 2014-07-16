<?php
namespace FlexTest\Text;

use Flex\Random\Text\Project;

/**
 * Class ProjectTest
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class ProjectTest extends \PHPUnit_Framework_TestCase {

    /**
     * @return void
     */
    public function test_getRandomProjectNameMale() {
        $this->assertInternalType('string', Project::getProjectNameMale());
    }

    /**
     * @return void
     */
    public function test_getRandomProjectNameMale_default() {
        $name = Project::getProjectNameMale();

        $this->assertInternalType('string', $name);
    }

    /**
     * @return void
     */
    public function test_getRandomProjectNameMale_forChar() {
        $name = Project::getProjectNameMale('b');

        $this->assertInternalType('string', $name);
        $this->assertEquals('b', strtolower($name[0]));
    }

    /**
     * @return void
     */
    public function test_getRandomProjectNameMale_forWrongChar() {
        $name = Project::getProjectNameMale('foo');

        $this->assertNull($name);
    }

    /**
     * @return void
     */
    public function test_getRandomProjectNameFemale() {
        $this->assertInternalType('string', Project::getProjectNameFemale());
    }

    /**
     * @return void
     */
    public function test_getRandomProjectNameFemale_default() {
        $name = Project::getProjectNameFemale();

        $this->assertInternalType('string', $name);
    }

    /**
     * @return void
     */
    public function test_getRandomProjectNameFemale_forChar() {
        $name = Project::getProjectNameFemale('b');

        $this->assertInternalType('string', $name);
        $this->assertEquals('b', strtolower($name[0]));
    }

    /**
     * @return void
     */
    public function test_getRandomProjectNameFemale_forWrongChar() {
        $name = Project::getProjectNameFemale('foo');

        $this->assertNull($name);
    }
}