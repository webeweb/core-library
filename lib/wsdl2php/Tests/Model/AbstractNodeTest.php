<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Wsdl2Php\Tests\Model;

use DOMDocument;
use WBW\Library\Wsdl2Php\Model\AbstractNode;
use WBW\Library\Wsdl2Php\Model\WsdlDefinitionsNode;
use WBW\Library\Wsdl2Php\Tests\AbstractTestCase;
use WBW\Library\Wsdl2Php\Tests\Fixtures\Model\TestAbstractNode;

/**
 * Abstract node test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Wsdl2Php\Tests\Model
 */
class AbstractNodeTest extends AbstractTestCase {

    /**
     * Test addChild()
     *
     * @return void
     */
    public function testAddChild(): void {

        // Set a child mock.
        $child = new TestAbstractNode();

        $obj = new TestAbstractNode();

        $obj->addChild($child);
        $this->assertSame($child, $obj->getChildren()[0]);

        $this->assertEquals(1, $obj->count());
        $this->assertTrue($obj->hasChildren());
    }

    /**
     * Test parse()
     *
     * @return void
     */
    public function testParse(): void {

        $document = new DOMDocument();
        $document->load($this->wsdl);

        $obj = AbstractNode::parse($document->childNodes->item(0));
        $this->assertInstanceOf(WsdlDefinitionsNode::class, $obj);
    }

    /**
     * Test setNodeName()
     *
     * @return void
     */
    public function testSetNodeName(): void {

        $obj = new TestAbstractNode();

        $obj->setNodeName("nodeName");
        $this->assertEquals("nodeName", $obj->getNodeName());
    }

    /**
     * Test setParent()
     *
     * @return void
     */
    public function testSetParent(): void {

        // Set a child mock.
        $child = new TestAbstractNode();

        $obj = new TestAbstractNode();

        $obj->setParent($child);
        $this->assertSame($child, $obj->getParent());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestAbstractNode();

        $this->assertEquals([], $obj->getChildren());
        $this->assertNull($obj->getNodeName());
        $this->assertNull($obj->getParent());
    }
}
