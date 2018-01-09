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

use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Utility\ArrayUtility;

/**
 * Array utility test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Utility
 * @final
 */
final class ArrayUtilityTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the get() method.
	 *
	 * @return void
	 */
	public function testGet() {

		$arg = ["array" => [], "boolean" => true, "double" => 4.0, "float" => 6.0, "integer" => 9, "string" => "string"];

		$this->assertEquals([], ArrayUtility::get($arg, "array"));
		$this->assertEquals(true, ArrayUtility::get($arg, "boolean"));
		$this->assertEquals(4.0, ArrayUtility::get($arg, "double"));
		$this->assertEquals(6.0, ArrayUtility::get($arg, "float"));
		$this->assertEquals(9, ArrayUtility::get($arg, "integer"));
		$this->assertEquals("string", ArrayUtility::get($arg, "string"));

		$this->assertEquals(null, ArrayUtility::get($arg, "inexistant_array"));
		$this->assertEquals(null, ArrayUtility::get($arg, "inexistant_boolean"));
		$this->assertEquals(null, ArrayUtility::get($arg, "inexistant_double"));
		$this->assertEquals(null, ArrayUtility::get($arg, "inexistant_float"));
		$this->assertEquals(null, ArrayUtility::get($arg, "inexistant_integer"));
		$this->assertEquals(null, ArrayUtility::get($arg, "inexistant_string"));

		$this->assertEquals([], ArrayUtility::get($arg, "inexistant_array", []));
		$this->assertEquals(false, ArrayUtility::get($arg, "inexistant_boolean", false));
		$this->assertEquals(-4.0, ArrayUtility::get($arg, "inexistant_double", -4.0));
		$this->assertEquals(-6.0, ArrayUtility::get($arg, "inexistant_float", -6.0));
		$this->assertEquals(-9, ArrayUtility::get($arg, "inexistant_integer", -9));
		$this->assertEquals("exception", ArrayUtility::get($arg, "inexistant_string", "exception"));
	}

}
