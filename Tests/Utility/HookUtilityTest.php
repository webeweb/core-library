<?php

/**
 * This file is part of the core-library package.
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
use WBW\Library\Core\Exception\Hook\HookMethodNotFoundException;
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

		$classpath	 = getcwd() . "/Tests/Utility/";
		$namespace	 = "WBW\\Library\\Core\\Tests\\Utility\\";

		$hooks1 = HookUtility::getHooks($classpath, $namespace);
		foreach ($hooks1 as $current) {

			$this->assertEquals($classpath, $current["classpath"]);
			$this->assertEquals($namespace, $current["namespace"]);
			$this->assertStringEndsWith(".php", $current["filename"]);
			$this->assertContainsOnlyInstancesOf(ReflectionClass::class, [$current["class"]]);
			$this->assertNull($current["method"], "The method getHooks() does not return the expected value");
		}

		$hooks2 = HookUtility::getHooks($classpath, $namespace, "/Exception/");
		$this->assertCount(0, $hooks2);

		$hooks3 = HookUtility::getHooks($classpath, $namespace, "/HookUtilityTest/");
		$this->assertCount(1, $hooks3);
		foreach ($hooks3 as $current) {

			$this->assertEquals($classpath, $current["classpath"]);
			$this->assertEquals($namespace, $current["namespace"]);
			$this->assertEquals("HookUtilityTest.php", $current["filename"]);
			$this->assertContainsOnlyInstancesOf(ReflectionClass::class, [$current["class"]]);
			$this->assertNull($current["method"], "The method getHooks() does not return the expected value");
		}

		$hooks4 = HookUtility::getHooks($classpath, $namespace, "/HookUtilityTest/", "Exception");
		$this->assertCount(0, $hooks4);

		$hooks5 = HookUtility::getHooks($classpath, $namespace, "/HookUtilityTest/", PHPUnit_Framework_TestCase::class);
		$this->assertCount(1, $hooks5);
		foreach ($hooks5 as $current) {

			$this->assertEquals($classpath, $current["classpath"]);
			$this->assertEquals($namespace, $current["namespace"]);
			$this->assertEquals("HookUtilityTest.php", $current["filename"]);
			$this->assertContainsOnlyInstancesOf(ReflectionClass::class, [$current["class"]]);
			$this->assertNull($current["method"], "The method getHooks() does not return the expected value");
		}

		$hooks6 = HookUtility::getHooks($classpath, $namespace, "/HookUtilityTest/", PHPUnit_Framework_TestCase::class, "testGetHooks");
		$this->assertCount(1, $hooks6);
		foreach ($hooks6 as $current) {

			$this->assertEquals($classpath, $current["classpath"]);
			$this->assertEquals($namespace, $current["namespace"]);
			$this->assertEquals("HookUtilityTest.php", $current["filename"]);
			$this->assertContainsOnlyInstancesOf(ReflectionClass::class, [$current["class"]]);
			$this->assertContainsOnlyInstancesOf(ReflectionMethod::class, [$current["method"]]);
		}

		try {
			HookUtility::getHooks($classpath, $namespace, "/HookUtilityTest/", PHPUnit_Framework_TestCase::class, "testGetHook");
		} catch (Exception $ex) {
			$this->assertInstanceOf(HookMethodNotFoundException::class, $ex);
			$this->assertEquals("The hook method \"testGetHook\" is not found", $ex->getMessage());
		}
	}

}
