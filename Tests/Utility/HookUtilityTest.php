<?php

/*
 * This file is part of the WBWCoreLibrary package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Utility;

use Exception;
use PHPUnit_Framework_TestCase;
use ReflectionClass;
use ReflectionMethod;
use WBW\Library\Core\Utility\HookUtility;

/**
 * Hook utility test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Utility
 * @final
 */
final class HookUtilityTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the getHooks() method.
     */
    public function testGetHooks() {

        $classpath = getcwd() . "/Tests/Utility/";
        $namespace = "WBW\\Library\\Core\\Tests\\Utility\\";

        $hooks1 = HookUtility::getHooks($classpath, $namespace);
        foreach ($hooks1 as $current) {

            $this->assertEquals($classpath, $current["classpath"], "The method getHooks() does not return the expected class path");
            $this->assertEquals($namespace, $current["namespace"], "The method getHooks() does not return the expected namespace");
            $this->assertStringEndsWith(".php", $current["filename"], "The method getHooks() does not return the expected filename");
            $this->assertContainsOnlyInstancesOf(ReflectionClass::class, [$current["class"]], "The methog getHooks() does not return the expected class");
            $this->assertNull($current["method"]);
        }

        $hooks2 = HookUtility::getHooks($classpath, $namespace, "/HookUtilityTest/");
        $this->assertCount(1, $hooks2, "The method getHooks() does not return the expected hooks with classname");
        foreach ($hooks2 as $current) {

            $this->assertEquals($classpath, $current["classpath"], "The method getHooks() does not return the expected class path with classname");
            $this->assertEquals($namespace, $current["namespace"], "The method getHooks() does not return the expected namespace with classname");
            $this->assertEquals("HookUtilityTest.php", $current["filename"], "The method getHooks() does not return the expected filename with classname");
            $this->assertContainsOnlyInstancesOf(ReflectionClass::class, [$current["class"]], "The methog getHooks() does not return the expected class with classname");
            $this->assertNull($current["method"]);
        }

        $hooks3 = HookUtility::getHooks($classpath, $namespace, "/HookUtilityTest/", PHPUnit_Framework_TestCase::class);
        $this->assertCount(1, $hooks3, "The method getHooks() does not return the expected hooks with extends");
        foreach ($hooks3 as $current) {

            $this->assertEquals($classpath, $current["classpath"], "The method getHooks() does not return the expected class path with extends");
            $this->assertEquals($namespace, $current["namespace"], "The method getHooks() does not return the expected namespace with extends");
            $this->assertEquals("HookUtilityTest.php", $current["filename"], "The method getHooks() does not return the expected filename with extends");
            $this->assertContainsOnlyInstancesOf(ReflectionClass::class, [$current["class"]], "The methog getHooks() does not return the expected class with extends");
            $this->assertNull($current["method"]);
        }

        $hooks4 = HookUtility::getHooks($classpath, $namespace, "/HookUtilityTest/", PHPUnit_Framework_TestCase::class, "testGetHooks");
        $this->assertCount(1, $hooks4, "The method getHooks() does not return the expected hooks with method");
        foreach ($hooks4 as $current) {

            $this->assertEquals($classpath, $current["classpath"], "The method getHooks() does not return the expected class path with method");
            $this->assertEquals($namespace, $current["namespace"], "The method getHooks() does not return the expected namespace with method");
            $this->assertEquals("HookUtilityTest.php", $current["filename"], "The method getHooks() does not return the expected filename with method");
            $this->assertContainsOnlyInstancesOf(ReflectionClass::class, [$current["class"]], "The methog getHooks() does not return the expected class with method");
            $this->assertContainsOnlyInstancesOf(ReflectionMethod::class, [$current["method"]]);
        }

        try {
            HookUtility::getHooks($classpath, $namespace, "/HookUtilityTest/", PHPUnit_Framework_TestCase::class, "testGetHook");
        } catch (Exception $ex) {
            $this->assertEquals("The hook method \"testGetHook\" is not found", $ex->getMessage(), "The method getHooks() does not return the expected exception");
        }
    }

}
