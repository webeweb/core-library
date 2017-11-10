<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Navigation\Node;

use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Navigation\Node\BreadcrumbNode;

/**
 * Breadcrumb node test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Navigation\Node
 * @final
 */
final class BreadcrumbNodeTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj = new BreadcrumbNode("id");

		$this->assertEquals(false, $obj->isDisplayable(), "The method isDisplayable() does not return the expecetd value");

		$obj->setActive(true);

		$this->assertEquals(false, $obj->isDisplayable(), "The method isDisplayable() does not return the expecetd value");
	}

}
