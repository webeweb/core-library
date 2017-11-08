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

		$obj->addNode($add);
		$this->assertEquals([$add], $obj->getNodes(), "The method getNodes() does no return the expected value");
	}

	/**
	 * Tests the clearNode() method.
	 *
	 * @return void.
	 */
	public function testClearNode() {

		$obj = new NavigationItem("id");
		$add = new NavigationItem("id2");

		$obj->addNode($add);
		$this->assertEquals([$add], $obj->getNodes(), "The method getNodes() does not return the expecetd value");

		$obj->clearNodes();
		$this->assertEquals([], $obj->getNodes(), "The method getNodes() does not return the expecetd value");
	}

	/**
	 * Tests the getFirstNode() method.
	 *
	 * @return void.
	 */
	public function testGetFirstNode() {

		$obj = new NavigationItem("id");
		$add = new NavigationItem("id2");

		$obj->addNode($add);
		$this->assertEquals($add, $obj->getFirstNode(), "The method getFirstNode() does not return the expecetd value");
	}

	/**
	 * Tests the getLastNode() method.
	 *
	 * @return void.
	 */
	public function testGetLastNode() {

		$obj = new NavigationItem("id");
		$add = new NavigationItem("id2");

		$obj->addNode($add);
		$this->assertEquals($add, $obj->getLastNode(), "The method getLastNode() does not return the expecetd value");
	}

	/**
	 * Tests the getNodeAt() method.
	 *
	 * @return void.
	 */
	public function testGetNodeAt() {

		$obj = new NavigationItem("id");
		$add = new NavigationItem("id2");

		$obj->addNode($add);
		$this->assertEquals(null, $obj->getNodeAt(-1), "The method getNodeAt() does not return the expecetd value");
		$this->assertEquals($add, $obj->getNodeAt(0), "The method getNodeAt() does not return the expecetd value");
		$this->assertEquals(null, $obj->getNodeAt(1), "The method getNodeAt() does not return the expecetd value");
	}

	/**
	 * Tests the getNodeById() method.
	 *
	 * @return void.
	 */
	public function testGetNodeById() {

		$obj	 = new NavigationItem("id");
		$add1	 = new NavigationItem("id2");
		$add2	 = new NavigationItem("id3");

		$obj->addNode($add1);
		$add1->addNode($add2);
		$this->assertEquals(null, $obj->getNodeById("exception"), "The method getNodeById() does not return the expecetd value");
		$this->assertEquals($add1, $obj->getNodeById("id2"), "The method getNodeById() does not return the expecetd value");
		$this->assertEquals(null, $obj->getNodeById("id3"), "The method getNodeById() does not return the expecetd value");
		$this->assertEquals($add2, $obj->getNodeById("id3", true), "The method getNodeById() does not return the expecetd value");
	}

	/**
	 * Tests the removeNode() method.
	 *
	 * @return void.
	 */
	public function testRemoveNode() {

		$obj = new NavigationItem("id");
		$add = new NavigationItem("id2");

		$obj->addNode($add);
		$this->assertEquals([$add], $obj->getNodes(), "The method getNodes() does no return the expected value");

		$obj->removeNode($add);
		$this->assertEquals([], $obj->getNodes(), "The method getNodes() does no return the expected value");
	}

	/**
	 * Tests the toArray() method.
	 *
	 * @return void.
	 */
	public function testToArray() {

		$obj = new NavigationItem("id");

		$res1 = ["span" => "id", "href" => "javascript: void(0);"];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expecetd value");

		$obj->setHref("href");
		$res2 = ["span" => "id", "href" => "href"];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expecetd value");

		$obj->setIcon("icon");
		$res3 = ["span" => "id", "href" => "href", "icon" => "icon"];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expecetd value");

		$obj->setSpan("span");
		$res4 = ["span" => "span", "href" => "href", "icon" => "icon"];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expecetd value");

		$obj->addNode(new NavigationItem("id2"));
		$res5 = ["span" => "span", "href" => "href", "icon" => "icon", "subitems" => [["span" => "id2", "href" => "javascript: void(0);"]]];
		$this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expecetd value");
	}

}
