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
use WBW\Library\Core\Navigation\Node\NavigationNode;

/**
 * Navigation node test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Navigation\Node
 * @final
 */
final class NavigationNodeTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj = new NavigationNode("id");

		$this->assertEquals(false, $obj->getActive(), "The method getActive() does not return the expecetd value");
		$this->assertEquals(false, $obj->getEnable(), "The method getEnable() does not return the expecetd value");
		$this->assertEquals(null, $obj->getIcon(), "The method getIcon() does not return the expecetd value");
		$this->assertEquals(null, $obj->getRoute(), "The method getRoute() does not return the expecetd value");
		$this->assertEquals(null, $obj->getUrl(), "The method getUrl() does not return the expecetd value");
		$this->assertEquals(true, $obj->getVisible(), "The method getVisible() does not return the expecetd value");
		$this->assertEquals(false, $obj->isDisplayable(), "The method isDisplayable() does not return the expecetd value");

		$obj->setActive(true);
		$obj->setEnable(true);
		$obj->setIcon("icon");
		$obj->setRoute("route");
		$obj->setUrl("url");

		$this->assertEquals(true, $obj->getActive(), "The method getActive() does not return the expecetd value");
		$this->assertEquals(true, $obj->getEnable(), "The method getEnable() does not return the expecetd value");
		$this->assertEquals("icon", $obj->getIcon(), "The method getIcon() does not return the expecetd value");
		$this->assertEquals("route", $obj->getRoute(), "The method getRoute() does not return the expecetd value");
		$this->assertEquals("url", $obj->getUrl(), "The method getUrl() does not return the expecetd value");
		$this->assertEquals(true, $obj->isDisplayable(), "The method isDisplayable() does not return the expecetd value");
	}

}
