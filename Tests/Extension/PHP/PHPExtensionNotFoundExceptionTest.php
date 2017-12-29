<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Exception\Extension\PHP;

use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Exception\Extension\PHP\PHPExtensionNotFoundException;

/**
 * PHP extension not found exception test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Exception\Extension\PHP
 * @final
 */
final class PHPExtensionNotFoundExceptionTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj = new PHPExtensionNotFoundException("exception");
		$this->assertEquals("The PHP extension \"exception\" is not found", $obj->getMessage());
	}

}
