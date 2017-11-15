<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Utility;

use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Utility\HTTPUtility;

/**
 * HTTPUtilityTest
 *
 * @author Camille A. <c.attia@nectardecode.com>
 * @package WBW\Library\Core\Tests\Utility
 */
final class HTTPUtilityTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the getCodes() method.
	 *
	 * @return void
	 */
	public function testGetCodes() {

		$res = HTTPUtility::getCodes();

		$this->assertCount(57, $res);
	}

}
