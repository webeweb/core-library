<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Navigation\Item;

use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Navigation\Item\NavigationItem;

/**
 * Navigation item test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Navigation\Item
 * @final
 */
final class NavigationItemTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj = new NavigationItem("id");

		$this->assertEquals("id", $obj->getId(), "The method getId() does not return the expected value");

		$this->assertEquals(null, $obj->getFirstNode(), "The method getFirstNode() does not return the expected value");
		$this->assertEquals(null, $obj->getLastNode(), "The method getLastNode() does not return the expected value");
		$this->assertEquals([], $obj->getNodes(), "The method getNodes() does not return the expected value");
		$this->assertEquals(null, $obj->getParent(), "The method getParent() does not return the expected value");

		$this->assertEquals("id", $obj->getSpan(), "The method getSpan() does not return the expected value");
		$this->assertEquals("javascript: void(0);", $obj->getHref(), "The method getHref() does not return the expected value");
		$this->assertEquals(null, $obj->getIcon(), "The method getIcon() does not return the expected value");
	}

	/**
	 * Tests the addNode() method.
	 *
	 * @return void.
	 */
	public function testAddNode() {

		$obj = new NavigationItem("id");
		$add = new NavigationItem("id2");

		$this->assertEquals(0, $obj->size(), "The method size() does no return the expected value");

		$obj->addNode($add);

		$this->assertEquals(1, $obj->size(), "The method size() does no return the expected value");
		$this->assertEquals($add, $obj->getFirstNode(), "The method getFirstNode() does not return the expecetd value");
		$this->assertEquals($add, $obj->getLastNode(), "The method getLastNode() does not return the expecetd value");
		$this->assertEquals($add, $obj->getNodeAt(0), "The method getNodeAt() does not return the expecetd value");
		$this->assertEquals($add, $obj->getNodeById("id2"), "The method getNodeById() does not return the expecetd value");
		$this->assertEquals(null, $obj->getNodeById("exception"), "The method getNodeById() does not return the expecetd value");
	}

}
