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
use WBW\Library\Core\Utility\StringUtility;

/**
 * String utility test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Utility
 * @final
 */
final class StringUtilityTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the parseArray() method.
	 *
	 * @return void
	 */
	public function testParseArray() {

		$arg1	 = ["exception" => null, "id" => "id", "class" => "class"];
		$res1	 = "id=\"id\" class=\"class\"";
		$this->assertEquals($res1, StringUtility::parseArray($arg1));

		$arg2	 = ["exception" => null, "id" => "    id   ", "class" => " class "];
		$res2	 = "id=\"id\" class=\"class\"";
		$this->assertEquals($res2, StringUtility::parseArray($arg2));

		$arg3	 = ["exception" => null, "id" => "id", "class" => ["class1", "class2", "class3   class4"]];
		$res3	 = "id=\"id\" class=\"class1 class2 class3 class4\"";
		$this->assertEquals($res3, StringUtility::parseArray($arg3));
	}

	/**
	 * Tests the parseBoolean() method.
	 *
	 * @return void
	 */
	public function testParseBoolean() {

		$this->assertEquals("false", StringUtility::parseBoolean(null));
		$this->assertEquals("false", StringUtility::parseBoolean(false));
		$this->assertEquals("true", StringUtility::parseBoolean(true));
	}

}
