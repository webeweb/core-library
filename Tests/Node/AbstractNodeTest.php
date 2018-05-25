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
    public function testConstruct() {

        $obj = new TestNode("id");

        $this->assertEquals("id", $obj->getId());

        $this->assertNull($obj->getFirstNode());
        $this->assertNull($obj->getLastNode());
        $this->assertEquals([], $obj->getNodes());
        $this->assertNull($obj->getParent());
    }

    /**
     * Tests the addNode() method.
     *
     * @return void
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
     * @return void
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
     * @return void
     */
    public function testGetFirstNode() {

        $obj = new TestNode("id");
        $add = new TestNode("id2");

        $obj->addNode($add);
        $this->assertSame($add, $obj->getFirstNode());
    }

    /**
     * Tests the getLastNode() method.
     *
     * @return void
     */
    public function testGetLastNode() {

        $obj = new TestNode("id");
        $add = new TestNode("id2");

        $obj->addNode($add);
        $this->assertSame($add, $obj->getLastNode());
    }

    /**
     * Tests the getNodeAt() method.
     *
     * @return void
     */
    public function testGetNodeAt() {

        $obj = new TestNode("id");
        $add = new TestNode("id2");

        $obj->addNode($add);
        $this->assertNull($obj->getNodeAt(-1));
        $this->assertSame($add, $obj->getNodeAt(0));
        $this->assertNull($obj->getNodeAt(1));
    }

    /**
     * Tests the getNodeById() method.
     *
     * @return void
     */
    public function testGetNodeById() {

        $obj  = new TestNode("id");
        $add1 = new TestNode("id2");
        $add2 = new TestNode("id3");

        $obj->addNode($add1);
        $add1->addNode($add2);
        $this->assertNull($obj->getNodeById("exception"));
        $this->assertSame($add1, $obj->getNodeById("id2"));
        $this->assertNull($obj->getNodeById("id3"));
        $this->assertSame($add2, $obj->getNodeById("id3", true));
    }

    /**
     * Tests the removeNode() method.
     *
     * @return void
     */
    public function testRemoveNode() {

        $obj = new TestNode("id");
        $add = new TestNode("id2");

        $obj->addNode($add);
        $this->assertEquals([$add], $obj->getNodes());

        $obj->removeNode($add);
        $this->assertEquals([], $obj->getNodes());
    }

    /**
     * Tests the size() method.
     *
     * @return void
     */
    public function testSize() {

        $obj = new TestNode("id");
        $add = new TestNode("id2");

        $this->assertEquals(0, $obj->size());

        $obj->addNode($add);
        $this->assertEquals(1, $obj->size());
    }

}
