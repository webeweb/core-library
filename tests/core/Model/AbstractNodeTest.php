<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Model;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\Model\TestNode;

/**
 * Abstract node test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Tests\Node
 */
class AbstractNodeTest extends AbstractTestCase {

    /**
     * Tests clearNode()
     *
     * @return void
     */
    public function testClearNode(): void {

        // Set a Node mock.
        $node = new TestNode("node");

        $obj = new TestNode("id");
        $obj->addNode($node);

        $this->assertSame($obj, $obj->clearNodes());
        $this->assertEquals([], $obj->getNodes());
    }

    /**
     * Tests getFirstNode()
     *
     * @return void
     */
    public function testGetFirstNode(): void {

        // Set a Node mock.
        $node = new TestNode("node");

        $obj = new TestNode("id");
        $obj->addNode($node);

        $this->assertSame($node, $obj->getFirstNode());
    }

    /**
     * Tests getLastNode()
     *
     * @return void
     */
    public function testGetLastNode(): void {

        // Set a Node mock.
        $node = new TestNode("node");

        $obj = new TestNode("id");
        $obj->addNode($node);

        $this->assertSame($node, $obj->getLastNode());
    }

    /**
     * Tests getNodeAt()
     *
     * @return void
     */
    public function testGetNodeAt(): void {

        // Set a Node mock.
        $node = new TestNode("node");

        $obj = new TestNode("id");
        $obj->addNode($node);

        $this->assertNull($obj->getNodeAt(-1));
        $this->assertSame($node, $obj->getNodeAt(0));
        $this->assertNull($obj->getNodeAt(1));
    }

    /**
     * Tests getNodeById()
     *
     * @return void
     */
    public function testGetNodeById(): void {

        // Set the Node mocks.
        $node1 = new TestNode("node1");
        $node2 = new TestNode("node2");

        $obj = new TestNode("id");
        $obj->addNode($node1);
        $obj->getFirstNode()->addNode($node2);

        $this->assertSame($node1, $obj->getNodeById("node1"));
        $this->assertSame($node2, $obj->getNodeById("node2", true));
        $this->assertNull($obj->getNodeById("exception"));
        $this->assertNull($obj->getNodeById("node3"));
    }

    /**
     * Tests removeNode()
     *
     * @return void
     */
    public function testRemoveNode(): void {

        // Set a Node mock.
        $node = new TestNode("node");

        $obj = new TestNode("id");
        $obj->addNode($node);

        $this->assertEquals([$node], $obj->getNodes());

        $this->assertSame($obj, $obj->removeNode($node));
        $this->assertEquals([], $obj->getNodes());
    }

    /**
     * Tests setParent()
     *
     * @return void
     */
    public function testSetParent(): void {

        // Set a Node mock.
        $parent = new TestNode("");

        $obj = new TestNode("id");
        $obj->setParent($parent);

        $this->assertSame($parent, $obj->getParent());
    }

    /**
     * Tests size()
     *
     * @return void
     */
    public function testSize(): void {

        // Set a Node mock.
        $node = new TestNode("node");

        $obj = new TestNode("id");

        $this->assertEquals(0, $obj->size());

        $this->assertSame($obj, $obj->addNode($node));
        $this->assertEquals(1, $obj->size());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestNode("id");

        $this->assertEquals("id", $obj->getId());

        $this->assertNull($obj->getFirstNode());
        $this->assertNull($obj->getLastNode());
        $this->assertEquals([], $obj->getNodes());
        $this->assertNull($obj->getParent());
    }
}
