<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Utility\Reflection;

use Exception;
use PHPUnit_Framework_TestCase;
use ReflectionClass;
use ReflectionException;
use ReflectionMethod;
use WBW\Library\Core\Exception\Reflection\MethodNotFoundException;
use WBW\Library\Core\Utility\Reflection\ClassUtility;

/**
 * Class utility test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Utility\Reflection
 * @final
 */
final class ClassUtilityTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the getHooks() method.
     *
     * @return void
     */
    public function testGetHooks() {

        $classpath = getcwd() . "/Tests/Utility/Reflection";
        $namespace = "WBW\\Library\\Core\\Tests\\Utility\\Reflection\\";

        $hooks1 = ClassUtility::getHooks($classpath, $namespace);
        foreach ($hooks1 as $current) {

            $this->assertSame($classpath, $current["classpath"]);
            $this->assertSame($namespace, $current["namespace"]);
            $this->assertStringEndsWith(".php", $current["filename"]);
            $this->assertContainsOnlyInstancesOf(ReflectionClass::class, [$current["class"]]);
            $this->assertNull($current["method"], "The method getHooks() does not return the expected value");
        }

        $hooks2 = ClassUtility::getHooks($classpath, $namespace, "/Exception/");
        $this->assertCount(0, $hooks2);

        $hooks3 = ClassUtility::getHooks($classpath, $namespace, "/ClassUtilityTest/");
        $this->assertCount(1, $hooks3);
        foreach ($hooks3 as $current) {

            $this->assertSame($classpath, $current["classpath"]);
            $this->assertSame($namespace, $current["namespace"]);
            $this->assertEquals("ClassUtilityTest.php", $current["filename"]);
            $this->assertContainsOnlyInstancesOf(ReflectionClass::class, [$current["class"]]);
            $this->assertNull($current["method"], "The method getHooks() does not return the expected value");
        }

        $hooks4 = ClassUtility::getHooks($classpath, $namespace, "/ClassUtilityTest/", "Exception");
        $this->assertCount(0, $hooks4);

        $hooks5 = ClassUtility::getHooks($classpath, $namespace, "/ClassUtilityTest/", PHPUnit_Framework_TestCase::class);
        $this->assertCount(1, $hooks5);
        foreach ($hooks5 as $current) {

            $this->assertSame($classpath, $current["classpath"]);
            $this->assertSame($namespace, $current["namespace"]);
            $this->assertEquals("ClassUtilityTest.php", $current["filename"]);
            $this->assertContainsOnlyInstancesOf(ReflectionClass::class, [$current["class"]]);
            $this->assertNull($current["method"], "The method getHooks() does not return the expected value");
        }

        $hooks6 = ClassUtility::getHooks($classpath, $namespace, "/ClassUtilityTest/", PHPUnit_Framework_TestCase::class, "testGetHooks");
        $this->assertCount(1, $hooks6);
        foreach ($hooks6 as $current) {

            $this->assertSame($classpath, $current["classpath"]);
            $this->assertSame($namespace, $current["namespace"]);
            $this->assertEquals("ClassUtilityTest.php", $current["filename"]);
            $this->assertContainsOnlyInstancesOf(ReflectionClass::class, [$current["class"]]);
            $this->assertContainsOnlyInstancesOf(ReflectionMethod::class, [$current["method"]]);
        }

        try {
            ClassUtility::getHooks($classpath, $namespace, "/ClassUtilityTest/", PHPUnit_Framework_TestCase::class, "testGetHook");
        } catch (Exception $ex) {
            $this->assertInstanceOf(MethodNotFoundException::class, $ex);
            $this->assertEquals("The method \"testGetHook\" is not found", $ex->getMessage());
        }
    }

    /**
     * Tests the getName() method.
     *
     * @return void
     */
    public function testGetName() {

        try {
            ClassUtility::getName("classnotfound");
        } catch (Exception $ex) {
            $this->assertInstanceOf(ReflectionException::class, $ex);
            $this->assertEquals("Class classnotfound does not exist", $ex->getMessage());
        }

        $this->assertEquals("WBW\Library\Core\Tests\Utility\Reflection\ClassUtilityTest", ClassUtility::getName($this));
    }

    /**
     * Tests the getShortName() method.
     *
     * @return void
     */
    public function testGetShortName() {

        try {
            ClassUtility::getShortName("classnotfound");
        } catch (Exception $ex) {
            $this->assertInstanceOf(ReflectionException::class, $ex);
            $this->assertEquals("Class classnotfound does not exist", $ex->getMessage());
        }

        $this->assertEquals("ClassUtilityTest", ClassUtility::getShortName($this));
    }

}
