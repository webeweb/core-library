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
use WBW\Library\Core\Utility\BooleanUtility;

/**
 * Boolean utility test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Utility
 * @final
 */
final class BooleanUtilityTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the parseString() method.
	 *
	 * @return void
	 */
	public function testParseString() {

		$this->assertEquals(false, BooleanUtility::parseString(null));
		$this->assertEquals(false, BooleanUtility::parseString(""));
		$this->assertEquals(true, BooleanUtility::parseString("1"));
		$this->assertEquals(true, BooleanUtility::parseString("O"));
		$this->assertEquals(true, BooleanUtility::parseString("o"));
		$this->assertEquals(true, BooleanUtility::parseString("OK"));
		$this->assertEquals(true, BooleanUtility::parseString("ok"));
		$this->assertEquals(true, BooleanUtility::parseString("OUI"));
		$this->assertEquals(true, BooleanUtility::parseString("oui"));
		$this->assertEquals(true, BooleanUtility::parseString("TRUE"));
		$this->assertEquals(true, BooleanUtility::parseString("true"));
		$this->assertEquals(true, BooleanUtility::parseString("Y"));
		$this->assertEquals(true, BooleanUtility::parseString("y"));
		$this->assertEquals(true, BooleanUtility::parseString("YES"));
		$this->assertEquals(true, BooleanUtility::parseString("yes"));
	}

}
