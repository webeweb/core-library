<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Node;

use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Tests\Fixtures\Node\TestNode;

/**
 * Abstract node test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Navigation\Item
 * @final
 */
final class AbstractNodeTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestNode("id");

        $this->assertEquals("id", $obj->getId());

        $this->assertEquals(null, $obj->getFirstNode());
        $this->assertEquals(null, $obj->getLastNode());
        $this->assertEquals([], $obj->getNodes());
        $this->assertEquals(null, $obj->getParent());
    }

    /**
     * Tests the addNode() method.
     *
     * @return void.
     */
    public function testAddNode() {

        $obj = new TestNode("id");
        $add = new TestNode("id2");

        $obj->addNode($add);
        $this->assertEquals([$add], $obj->getNodes());
    }

    /**
     * Tests the clearNode() method.
     *
     * @return void.
     */
    public function testClearNode() {

        $obj = new TestNode("id");
        $add = new TestNode("id2");

        $obj->addNode($add);
        $this->assertEquals([$add], $obj->getNodes());

        $obj->clearNodes();
        $this->assertEquals([], $obj->getNodes());
    }

    /**
     * Tests the getFirstNode() method.
     *
     * @return void.
     */
    public function testGetFirstNode() {

        $obj = new TestNode("id");
        $add = new TestNode("id2");

        $obj->addNode($add);
        $this->assertEquals($add, $obj->getFirstNode());
    }

    /**
     * Tests the getLastNode() method.
     *
     * @return void.
     */
    public function testGetLastNode() {

        $obj = new TestNode("id");
        $add = new TestNode("id2");

        $obj->addNode($add);
        $this->assertEquals($add, $obj->getLastNode());
    }

    /**
     * Tests the getNodeAt() method.
     *
     * @return void.
     */
    public function testGetNodeAt() {

        $obj = new TestNode("id");
        $add = new TestNode("id2");

        $obj->addNode($add);
        $this->assertEquals(null, $obj->getNodeAt(-1));
        $this->assertEquals($add, $obj->getNodeAt(0));
        $this->assertEquals(null, $obj->getNodeAt(1));
    }

    /**
     * Tests the getNodeById() method.
     *
     * @return void.
     */
    public function testGetNodeById() {

        $obj  = new TestNode("id");
        $add1 = new TestNode("id2");
        $add2 = new TestNode("id3");

        $obj->addNode($add1);
        $add1->addNode($add2);
        $this->assertEquals(null, $obj->getNodeById("exception"));
        $this->assertEquals($add1, $obj->getNodeById("id2"));
        $this->assertEquals(null, $obj->getNodeById("id3"));
        $this->assertEquals($add2, $obj->getNodeById("id3", true));
    }

    /**
     * Tests the removeNode() method.
     *
     * @return void.
     */
    public function testRemoveNode() {

        $obj = new TestNode("id");
        $add = new TestNode("id2");

        $obj->addNode($add);
        $this->assertEquals([$add], $obj->getNodes());

        $obj->removeNode($add);
        $this->assertEquals([], $obj->getNodes());
    }

}
