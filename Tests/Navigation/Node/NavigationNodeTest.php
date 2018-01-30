<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Navigation\Node;

use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Navigation\Item\NavigationItem;
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

        $this->assertEquals(false, $obj->getActive());
        $this->assertEquals(false, $obj->getEnable());
        $this->assertEquals(null, $obj->getIcon());
        $this->assertEquals(null, $obj->getRoute());
        $this->assertEquals(null, $obj->getTarget());
        $this->assertEquals(null, $obj->getUrl());
        $this->assertEquals(true, $obj->getVisible());

        $obj->setActive(true);
        $obj->setEnable(true);
        $obj->setIcon("icon");
        $obj->setRoute("route");
        $obj->setTarget("_blank");
        $obj->setUrl("url");

        $this->assertEquals(true, $obj->getActive());
        $this->assertEquals(true, $obj->getEnable());
        $this->assertEquals("icon", $obj->getIcon());
        $this->assertEquals("route", $obj->getRoute());
        $this->assertEquals("_blank", $obj->getTarget());
        $this->assertEquals("url", $obj->getUrl());
    }

    /**
     * Tests the isDisplayable() method.
     *
     * @return void
     */
    public function testIsDisplayable() {

        $obj = new NavigationNode("id");

        $obj->addNode(new NavigationItem("id1"));
        $obj->addNode(new NavigationNode("id2"));

        $this->assertEquals(false, $obj->isDisplayable());

        $obj->getLastNode()->setActive(true);
        $obj->getLastNode()->setEnable(true);
        $this->assertEquals(true, $obj->isDisplayable());
    }

}
