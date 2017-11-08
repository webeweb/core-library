<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Argument;

use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Argument\ArgumentInterface;

/**
 * Argument interface test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Argument
 * @final
 */
final class ArgumentInterfaceTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$this->assertEquals(63, ArgumentInterface::TYPE_ARRAY, "The constant TYPE_ARRAY does not return the expecetd value");
		$this->assertEquals(64, ArgumentInterface::TYPE_BOOLEAN, "The constant TYPE_BOOLEAN does not return the expecetd value");
		$this->assertEquals(30, ArgumentInterface::TYPE_DATE, "The constant TYPE_DATE does not return the expecetd value");
		$this->assertEquals(59, ArgumentInterface::TYPE_DOUBLE, "The constant TYPE_DOUBLE does not return the expecetd value");
		$this->assertEquals(54, ArgumentInterface::TYPE_FLOAT, "The constant TYPE_FLOAT does not return the expecetd value");
		$this->assertEquals(78, ArgumentInterface::TYPE_INTEGER, "The constant TYPE_INTEGER does not return the expecetd value");
		$this->assertEquals(73, ArgumentInterface::TYPE_NUMBER, "The constant TYPE_NUMBER does not return the expecetd value");
		$this->assertEquals(55, ArgumentInterface::TYPE_OBJECT, "The constant TYPE_OBJECT does not return the expecetd value");
		$this->assertEquals(104, ArgumentInterface::TYPE_RESOURCE, "The constant TYPE_RESOURCE does not return the expecetd value");
		$this->assertEquals(87, ArgumentInterface::TYPE_STRING, "The constant TYPE_STRING does not return the expecetd value");
		$this->assertEquals(116, ArgumentInterface::TYPE_TIMESTAMP, "The constant TYPE_TIMESTAMP does not return the expecetd value");
	}

}
