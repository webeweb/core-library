<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Argument;

use Exception;
use ReflectionClass;
use ReflectionException;
use ReflectionMethod;
use WBW\Library\Core\Argument\ObjectHelper;
use WBW\Library\Core\Exception\Reflection\MethodNotFoundException;
use WBW\Library\Core\Exception\Reflection\SyntaxErrorException;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Object helper test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Argument
 */
class ObjectHelperTest extends AbstractFrameworkTestCase {

    /**
     * Tests the getDirectory() method.
     *
     * @return void
     */
    public function testGetDirectory() {

        $res = "/tests/Argument";

        $this->assertStringEndsWith($res, ObjectHelper::getDirectory($this));
        $this->assertStringEndsWith($res, ObjectHelper::getDirectory(ArgumentHelperTest::class));
        $this->assertStringEndsWith($res, ObjectHelper::getDirectory("WBW\\Library\\Core\\Tests\\Argument\\ObjectHelperTest"));
    }

    /**
     * Tests the getDirectory() method.
     *
     * @return void
     */
    public function testGetDirectoryWithReflectionException() {

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
        $hooks5 = ObjectHelper::getHooks($classpath, $namespace, "/ObjectHelperTest/", AbstractFrameworkTestCase::class);
        $this->assertCount(1, $hooks5);
        foreach ($hooks5 as $current) {

            $this->assertSame($classpath, $current["classpath"]);
            $this->assertSame($namespace, $current["namespace"]);
            $this->assertEquals("ObjectHelperTest.php", $current["filename"]);
            $this->assertContainsOnlyInstancesOf(ReflectionClass::class, [$current["class"]]);
            $this->assertNull($current["method"], "The method getHooks() does not return the expected value");
        }

        // ===
        $hooks6 = ObjectHelper::getHooks($classpath, $namespace, "/ObjectHelperTest/", AbstractFrameworkTestCase::class, "testGetHooks");
        $this->assertCount(1, $hooks6);
        foreach ($hooks6 as $current) {

            $this->assertSame($classpath, $current["classpath"]);
            $this->assertSame($namespace, $current["namespace"]);
            $this->assertEquals("ObjectHelperTest.php", $current["filename"]);
            $this->assertContainsOnlyInstancesOf(ReflectionClass::class, [$current["class"]]);
            $this->assertContainsOnlyInstancesOf(ReflectionMethod::class, [$current["method"]]);
        }
    }

    /**
     * Tests the getHooks() method.
     *
     * @return void
     */
    public function testGetHooksWithMethodNotFoundException() {

        $classpath = getcwd() . "/tests/Argument";
        $namespace = "WBW\\Library\\Core\\Tests\\Argument\\";

        try {

            ObjectHelper::getHooks($classpath, $namespace, "/ObjectHelperTest/", AbstractFrameworkTestCase::class, "testGetHook");
        } catch (Exception $ex) {

            $this->assertInstanceOf(MethodNotFoundException::class, $ex);
            $this->assertEquals("The method \"testGetHook\" is not found", $ex->getMessage());
        }
    }

    /**
     * Tests the getHooks() method.
     *
     * @return void
     * @requires PHP 7.0
     */
    public function testGetHooksWithSyntaxErrorException() {

        $classpath = getcwd() . "/tests/Fixtures/Argument";
        $namespace = "WBW\\Library\\Core\\Tests\\Fixtures\\Argument\\";
        $classname = "ObjectHelperSyntaxErrorException";

        try {

            ObjectHelper::getHooks($classpath, $namespace, "/" . $classname . "/");
        } catch (Exception $ex) {

            $this->assertInstanceOf(SyntaxErrorException::class, $ex);
            $this->assertEquals("The file \"" . implode("/", [$classpath, $classname . ".php"]) . "\" contains syntax errors", $ex->getMessage());
        }
    }

    /**
     * Tests the getName() method.
     *
     * @return void
     */
    public function testGetName() {

        $this->assertEquals("WBW\Library\Core\Tests\Argument\ObjectHelperTest", ObjectHelper::getName($this));
    }

    /**
     * Tests the getName() method.
     *
     * @return void
     */
    public function testGetNameWithReflectionException() {

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

        $this->assertEquals("ObjectHelperTest", ObjectHelper::getShortName($this));
    }

    /**
     * Tests the getShortName() method.
     *
     * @return void
     */
    public function testGetShortNameWithReflectionException() {

        try {

            ObjectHelper::getShortName("classnotfound");
        } catch (Exception $ex) {

            $this->assertInstanceOf(ReflectionException::class, $ex);
            $this->assertEquals("Class classnotfound does not exist", $ex->getMessage());
        }
    }

    /**
     * Tests the urlDecodeShortName() method.
     *
     * @return void
     */
    public function testUrlDecodeShortName() {

        $this->assertEquals("DateTimeZoneHelperTest", ObjectHelper::urlDecodeShortName("date-time-zone-helper-test"));
        $this->assertEquals("ObjectHelperTest", ObjectHelper::urlDecodeShortName("object-helper-test"));
    }

    /**
     * Tests the urlEncodeShortName() method.
     *
     * @return void
     */
    public function testUrlEncodeShortName() {

        $this->assertEquals("date-time-zone-helper-test", ObjectHelper::urlEncodeShortName(DateTimeZoneHelperTest::class));
        $this->assertEquals("object-helper-test", ObjectHelper::urlEncodeShortName($this));
    }

}
