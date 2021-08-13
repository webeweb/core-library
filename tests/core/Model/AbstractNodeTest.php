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
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Node
 */
class AbstractNodeTest extends AbstractTestCase {

    /**
     * Tests the addNode() method.
     *
     * @return void
     */
    public function testAddNode(): void {

        $obj = new TestNode("id");
        $add = new TestNode("id2");

        $this->assertSame($obj, $obj->addNode($add));
        $this->assertEquals([$add], $obj->getNodes());
    }

    /**
     * Tests the clearNode() method.
     *
     * @return void
     */
    public function testClearNode(): void {

        $obj = new TestNode("id");
        $add = new TestNode("id2");

        $this->assertSame($obj, $obj->addNode($add));
        $this->assertEquals([$add], $obj->getNodes());

        $this->assertSame($obj, $obj->clearNodes());
        $this->assertEquals([], $obj->getNodes());
    }

    /**
     * Tests the getFirstNode() method.
     *
     * @return void
     */
    public function testGetFirstNode(): void {

        $obj = new TestNode("id");
        $add = new TestNode("id2");

        $this->assertSame($obj, $obj->addNode($add));
        $this->assertSame($add, $obj->getFirstNode());
    }

    /**
     * Tests the getLastNode() method.
     *
     * @return void
     */
    public function testGetLastNode(): void {

        $obj = new TestNode("id");
        $add = new TestNode("id2");

        $this->assertSame($obj, $obj->addNode($add));
        $this->assertSame($add, $obj->getLastNode());
    }

    /**
     * Tests the getNodeAt() method.
     *
     * @return void
     */
    public function testGetNodeAt(): void {

        $obj = new TestNode("id");
        $add = new TestNode("id2");

        $this->assertSame($obj, $obj->addNode($add));
        $this->assertNull($obj->getNodeAt(-1));
        $this->assertSame($add, $obj->getNodeAt(0));
        $this->assertNull($obj->getNodeAt(1));
    }

    /**
     * Tests the getNodeById() method.
     *
     * @return void
     */
    public function testGetNodeById(): void {

        $obj  = new TestNode("id");
        $add1 = new TestNode("id2");
        $add2 = new TestNode("id3");

        $this->assertSame($obj, $obj->addNode($add1));
        $this->assertSame($add1, $add1->addNode($add2));
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
    public function testRemoveNode(): void {

        $obj = new TestNode("id");
        $add = new TestNode("id2");

        $this->assertSame($obj, $obj->addNode($add));
        $this->assertEquals([$add], $obj->getNodes());

        $this->assertSame($obj, $obj->removeNode($add));
        $this->assertEquals([], $obj->getNodes());
    }

    /**
     * Tests the size() method.
     *
     * @return void
     */
    public function testSize(): void {

        $obj = new TestNode("id");
        $add = new TestNode("id2");

        $this->assertEquals(0, $obj->size());

        $this->assertSame($obj, $obj->addNode($add));
        $this->assertEquals(1, $obj->size());
    }

    /**
     * Tests the __construct() method.
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
