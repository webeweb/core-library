<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Argument;

use Exception;
use PHPUnit_Framework_TestCase;
use ReflectionClass;
use ReflectionException;
use ReflectionMethod;
use WBW\Library\Core\Argument\ObjectHelper;
use WBW\Library\Core\Exception\Reflection\MethodNotFoundException;
use WBW\Library\Core\Tests\Cases\AbstractCoreFrameworkTestCase;

/**
 * Object helper test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Argument
 * @final
 */
final class ObjectHelperTest extends AbstractCoreFrameworkTestCase {

    /**
     * Tests the getDirectory() method.
     *
     * @return void
     */
    public function testGetDirectory() {

        // ===
        $res = "/tests/Argument";

        $this->assertStringEndsWith($res, ObjectHelper::getDirectory($this));
        $this->assertStringEndsWith($res, ObjectHelper::getDirectory(ArgumentHelperTest::class));
        $this->assertStringEndsWith($res, ObjectHelper::getDirectory("WBW\\Library\\Core\\Tests\\Argument\\ObjectHelperTest"));

        // ===
        try {

            ObjectHelper::getDirectory("classnotfound");
        } catch (Exception $ex) {

            $this->assertInstanceOf(ReflectionException::class, $ex);
            $this->assertEquals("Class classnotfound does not exist", $ex->getMessage());
        }
    }

    /**
     * Tests the getHooks() method.
     *
     * @return void
     */
    public function testGetHooks() {

        $classpath = getcwd() . "/tests/Argument";
        $namespace = "WBW\\Library\\Core\\Tests\\Argument\\";

        // ===
        $hooks1 = ObjectHelper::getHooks($classpath, $namespace);
        foreach ($hooks1 as $current) {

            $this->assertSame($classpath, $current["classpath"]);
            $this->assertSame($namespace, $current["namespace"]);
            $this->assertStringEndsWith(".php", $current["filename"]);
            $this->assertContainsOnlyInstancesOf(ReflectionClass::class, [$current["class"]]);
            $this->assertNull($current["method"], "The method getHooks() does not return the expected value");
        }

        // ===
        $hooks2 = ObjectHelper::getHooks($classpath, $namespace, "/Exception/");
        $this->assertCount(0, $hooks2);

        // ===
        $hooks3 = ObjectHelper::getHooks($classpath, $namespace, "/ObjectHelperTest/");
        $this->assertCount(1, $hooks3);
        foreach ($hooks3 as $current) {

            $this->assertSame($classpath, $current["classpath"]);
            $this->assertSame($namespace, $current["namespace"]);
            $this->assertEquals("ObjectHelperTest.php", $current["filename"]);
            $this->assertContainsOnlyInstancesOf(ReflectionClass::class, [$current["class"]]);
            $this->assertNull($current["method"], "The method getHooks() does not return the expected value");
        }

        // ===
        $hooks4 = ObjectHelper::getHooks($classpath, $namespace, "/ObjectHelperTest/", "Exception");
        $this->assertCount(0, $hooks4);

        // ===
        $hooks5 = ObjectHelper::getHooks($classpath, $namespace, "/ObjectHelperTest/", PHPUnit_Framework_TestCase::class);
        $this->assertCount(1, $hooks5);
        foreach ($hooks5 as $current) {

            $this->assertSame($classpath, $current["classpath"]);
            $this->assertSame($namespace, $current["namespace"]);
            $this->assertEquals("ObjectHelperTest.php", $current["filename"]);
            $this->assertContainsOnlyInstancesOf(ReflectionClass::class, [$current["class"]]);
            $this->assertNull($current["method"], "The method getHooks() does not return the expected value");
        }

        // ===
        $hooks6 = ObjectHelper::getHooks($classpath, $namespace, "/ObjectHelperTest/", PHPUnit_Framework_TestCase::class, "testGetHooks");
        $this->assertCount(1, $hooks6);
        foreach ($hooks6 as $current) {

            $this->assertSame($classpath, $current["classpath"]);
            $this->assertSame($namespace, $current["namespace"]);
            $this->assertEquals("ObjectHelperTest.php", $current["filename"]);
            $this->assertContainsOnlyInstancesOf(ReflectionClass::class, [$current["class"]]);
            $this->assertContainsOnlyInstancesOf(ReflectionMethod::class, [$current["method"]]);
        }

        // ===
        try {

            ObjectHelper::getHooks($classpath, $namespace, "/ObjectHelperTest/", PHPUnit_Framework_TestCase::class, "testGetHook");
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

        // ===
        $this->assertEquals("WBW\Library\Core\Tests\Argument\ObjectHelperTest", ObjectHelper::getName($this));

        // ===
        try {

            ObjectHelper::getName("classnotfound");
        } catch (Exception $ex) {

            $this->assertInstanceOf(ReflectionException::class, $ex);
            $this->assertEquals("Class classnotfound does not exist", $ex->getMessage());
        }
    }

    /**
     * Tests the getShortName() method.
     *
     * @return void
     */
    public function testGetShortName() {

        // ===
        $this->assertEquals("ObjectHelperTest", ObjectHelper::getShortName($this));

        // ===
        try {

            ObjectHelper::getShortName("classnotfound");
        } catch (Exception $ex) {

            $this->assertInstanceOf(ReflectionException::class, $ex);
            $this->assertEquals("Class classnotfound does not exist", $ex->getMessage());
        }
    }

}
