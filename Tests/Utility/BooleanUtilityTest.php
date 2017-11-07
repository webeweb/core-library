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

		$this->assertEquals(false, BooleanUtility::parseString(null), "The method parseString() does not return the expected value with \"null\"");
		$this->assertEquals(false, BooleanUtility::parseString(""), "The method parseString() does not return the expected value with \"\"");
		$this->assertEquals(true, BooleanUtility::parseString("1"), "The method parseString() does not return the expected value with \"1\"");
		$this->assertEquals(true, BooleanUtility::parseString("O"), "The method parseString() does not return the expected value for \"O\"");
		$this->assertEquals(true, BooleanUtility::parseString("o"), "The method parseString() does not return the expected value for \"o\"");
		$this->assertEquals(true, BooleanUtility::parseString("OK"), "The method parseString() does not return the expected value for \"OK\"");
		$this->assertEquals(true, BooleanUtility::parseString("ok"), "The method parseString() does not return the expected value for \"ok\"");
		$this->assertEquals(true, BooleanUtility::parseString("OUI"), "The method parseString() does not return the expected value for \"OUI\"");
		$this->assertEquals(true, BooleanUtility::parseString("oui"), "The method parseString() does not return the expected value for \"oui\"");
		$this->assertEquals(true, BooleanUtility::parseString("TRUE"), "The method parseString() does not return the expected value for \"TRUE\"");
		$this->assertEquals(true, BooleanUtility::parseString("true"), "The method parseString() does not return the expected value for \"true\"");
		$this->assertEquals(true, BooleanUtility::parseString("Y"), "The method parseString() does not return the expected value for \"Y\"");
		$this->assertEquals(true, BooleanUtility::parseString("y"), "The method parseString() does not return the expected value for \"y\"");
		$this->assertEquals(true, BooleanUtility::parseString("YES"), "The method parseString() does not return the expected value for \"YES\"");
		$this->assertEquals(true, BooleanUtility::parseString("yes"), "The method parseString() does not return the expected value for \"yes\"");
	}

}
