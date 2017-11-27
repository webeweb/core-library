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
use WBW\Library\Core\Exception\Argument\IntegerArgumentException;
use WBW\Library\Core\Utility\IntegerUtility;

/**
 * Integer utility test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Utility
 * @final
 */
final class IntegerUtilityTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the parseString() method.
	 *
	 * @return void
	 */
	public function testParseString() {

		try {
			IntegerUtility::parseString("exception");
		} catch (Exception $ex) {
			$this->assertInstanceOf(IntegerArgumentException::class, $ex);
			$this->assertEquals("The argument \"exception\" is not an integer", $ex->getMessage());
		}

		try {
			IntegerUtility::parseString("1A");
		} catch (Exception $ex) {
			$this->assertInstanceOf(IntegerArgumentException::class, $ex);
			$this->assertEquals("The argument \"1A\" is not an integer", $ex->getMessage());
		}

		try {
			IntegerUtility::parseString("1.");
		} catch (Exception $ex) {
			$this->assertInstanceOf(IntegerArgumentException::class, $ex);
			$this->assertEquals("The argument \"1.\" is not an integer", $ex->getMessage());
		}

		try {
			IntegerUtility::parseString("1.0");
		} catch (Exception $ex) {
			$this->assertInstanceOf(IntegerArgumentException::class, $ex);
			$this->assertEquals("The argument \"1.0\" is not an integer", $ex->getMessage());
		}

		$this->assertEquals(null, IntegerUtility::parseString(null));
		$this->assertEquals(1, IntegerUtility::parseString("1"));
	}

}
