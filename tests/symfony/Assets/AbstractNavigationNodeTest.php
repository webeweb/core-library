<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Assets;

use JsonSerializable;
use WBW\Library\Serializer\SerializerKeys;
use WBW\Library\Sorter\Model\AlphabeticalTreeNodeInterface;
use WBW\Library\Symfony\Assets\Navigation\NavigationNode;
use WBW\Library\Symfony\Assets\NavigationNodeInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Assets\TestNavigationNode;

/**
 * Abstract navigation node test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Assets
 */
class AbstractNavigationNodeTest extends AbstractTestCase {

    /**
     * Tests addNode()
     *
     * @return void
     */
    public function testAddNode(): void {

        // Set a Navigation node mock.
        $node = new TestNavigationNode("node");

        $obj = new TestNavigationNode("id");

        $this->assertSame($obj, $obj->addNode($node));
        $this->assertEquals([$node], $obj->getNodes());

        $this->assertSame($obj, $node->getParent());
        $this->assertSame($obj, $node->getAlphabeticalTreeNodeParent());
    }

    /**
     * Tests clearNode()
     *
     * @return void
     */
    public function testClearNode(): void {

        // Set a Navigation node mock.
        $node = new TestNavigationNode("node");

        $obj = new TestNavigationNode("id");

        $this->assertSame($obj, $obj->addNode($node));
        $this->assertEquals([$node], $obj->getNodes());

        $this->assertSame($obj, $obj->clearNodes());
        $this->assertEquals([], $obj->getNodes());
    }

    /**
     * Tests getFirstNode()
     *
     * @return void
     */
    public function testGetFirstNode(): void {

        // Set a Navigation node mock.
        $node = new TestNavigationNode("node");

        $obj = new TestNavigationNode("id");

        $this->assertSame($obj, $obj->addNode($node));
        $this->assertSame($node, $obj->getFirstNode());
    }

    /**
     * Tests getLastNode()
     *
     * @return void
     */
    public function testGetLastNode(): void {

        // Set a Navigation node mock.
        $node = new TestNavigationNode("node");

        $obj = new TestNavigationNode("id");

        $this->assertSame($obj, $obj->addNode($node));
        $this->assertSame($node, $obj->getLastNode());
    }

    /**
     * Tests getNodeAt()
     *
     * @return void
     */
    public function testGetNodeAt(): void {

        // Set a Navigation node mock.
        $node = new TestNavigationNode("node");

        $obj = new TestNavigationNode("id");

        $this->assertSame($obj, $obj->addNode($node));
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

        // Set the Navigation mocks.
        $node1 = new TestNavigationNode("id1");
        $node2 = new TestNavigationNode("id2");

        $obj = new TestNavigationNode("id");
        $obj->addNode($node1);

        $this->assertNull($obj->getNodeById($node2->getId()));
        $this->assertNull($obj->getNodeById($node2->getId(), true));

        $this->assertSame($node1, $obj->getNodeById($node1->getId()));
        $this->assertSame($node1, $obj->getNodeById($node1->getId(), true));

        $node1->addNode($node2);
        $this->assertNull($obj->getNodeById($node2->getId()));
        $this->assertSame($node2, $obj->getNodeById($node2->getId(), true));
    }

    /**
     * Tests isDisplayable()
     *
     * @return void
     */
    public function testIsDisplayable(): void {

        $obj = new TestNavigationNode("id");

        $this->assertSame($obj, $obj->addNode(new NavigationNode("node")));

        $this->assertFalse($obj->isDisplayable());

        $this->assertNotSame($obj, $obj->getLastNode()->setActive(true));
        $this->assertNotSame($obj, $obj->getLastNode()->setEnable(true));
        $this->assertTrue($obj->isDisplayable());
    }

    /**
     * Tests jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        // Set a parent mock.
        $parent = new TestNavigationNode("parent");

        // Set the expected data.
        $data = file_get_contents(__DIR__ . "/AbstractNavigationNodeTest.testJsonSerialize.json");
        $json = json_decode($data, true);

        $obj = new TestNavigationNode(SerializerKeys::LABEL);
        $obj->setActive(true);
        $obj->setEnable(true);
        $obj->setIcon(SerializerKeys::ICON);
        $obj->setTarget(SerializerKeys::TARGET);
        $obj->setUri(SerializerKeys::URI);

        $parent->addNode($obj);

        $res = $obj->jsonSerialize();
        $this->assertCount(10, $res);

        // Because id is an unique id.
        $json["id"]           = $obj->getId();
        $json["parent"]["id"] = $parent->getId();

        $this->assertEquals($json, $res);
    }

    /**
     * Tests removeNode()
     *
     * @return void
     */
    public function testRemoveNode(): void {

        // Set a Navigation node mock.
        $node = new TestNavigationNode("node");

        $obj = new TestNavigationNode("id");

        $this->assertSame($obj, $obj->removeNode($node));

        $this->assertSame($obj, $obj->addNode($node));
        $this->assertEquals([$node], $obj->getNodes());

        $this->assertSame($obj, $obj->removeNode($node));
        $this->assertEquals([], $obj->getNodes());
    }

    /**
     * Tests setMatcher()
     *
     * @return void
     */
    public function testSetMatcher(): void {

        $obj = new TestNavigationNode("id");

        $obj->setMatcher(NavigationNodeInterface::MATCHER_ROUTER);
        $this->assertEquals(NavigationNodeInterface::MATCHER_ROUTER, $obj->getMatcher());
    }

    /**
     * Tests size()
     *
     * @return void
     */
    public function testSize(): void {

        // Set a Navigation node mock.
        $node = new TestNavigationNode("node");

        $obj = new TestNavigationNode("id");

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

        $obj = new TestNavigationNode("id");

        $this->assertInstanceOf(JsonSerializable::class, $obj);
        $this->assertInstanceOf(AlphabeticalTreeNodeInterface::class, $obj);
        $this->assertInstanceOf(NavigationNodeInterface::class, $obj);

        $this->assertFalse($obj->getActive());
        $this->assertFalse($obj->getEnable());
        $this->assertNull($obj->getIcon());
        $this->assertNotEquals("", $obj->getId());
        $this->assertEquals("id", $obj->getLabel());
        $this->assertNull($obj->getTarget());
        $this->assertNull($obj->getUri());
        $this->assertTrue($obj->getVisible());

        $this->assertNotEquals("", $obj->getAlphabeticalTreeNodeLabel());
        $this->assertNull($obj->getAlphabeticalTreeNodeParent());
        $this->assertNull($obj->getFirstNode());
        $this->assertNull($obj->getLastNode());
        $this->assertEquals(NavigationNodeInterface::MATCHER_URL, $obj->getMatcher());
        $this->assertEquals([], $obj->getNodes());
        $this->assertNull($obj->getParent());
    }
}
