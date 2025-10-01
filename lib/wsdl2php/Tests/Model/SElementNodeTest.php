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
use Throwable;
use WBW\Library\Wsdl2Php\Model\SElementNode;
use WBW\Library\Wsdl2Php\Tests\AbstractTestCase;

/**
 * s:element node test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Wsdl2Php\Tests\Model
 */
class SElementNodeTest extends AbstractTestCase {

    /**
     * Test getIndexName()
     *
     * @return void
     */
    public function testGetIndexName(): void {

        $obj = new SElementNode();

        $obj->setName("index:name");
        $this->assertEquals("index:name", $obj->getIndexName());
    }

    /**
     * Test init()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testInit() {

        // Set a DOM node mock.
        $doc  = new DOMDocument();
        $node = $doc->createElement("mock");
        $node->setAttribute("name", "name");
        $node->setAttribute("minOccurs", "0");
        $node->setAttribute("maxOccurs", "1");
        $node->setAttribute("nillable", "true");
        $node->setAttribute("type", "type");

        $obj = new SElementNode();

        $obj->init($node);
        $this->assertEquals("name", $obj->getName());
        $this->assertEquals(0, $obj->getMinOccurs());
        $this->assertEquals(1, $obj->getMaxOccurs());
        $this->assertTrue($obj->getNillable());
        $this->assertEquals("type", $obj->getType());
    }

    /**
     * Test setMaxOccurs()
     *
     * @return void
     */
    public function testSetMaxOccurs(): void {

        $obj = new SElementNode();

        $obj->setMaxOccurs(1);
        $this->assertEquals(1, $obj->getMaxOccurs());
    }

    /**
     * Test setMinOccurs()
     *
     * @return void
     */
    public function testSetMinOccurs(): void {

        $obj = new SElementNode();

        $obj->setMinOccurs(0);
        $this->assertEquals(0, $obj->getMinOccurs());
    }

    /**
     * Test setNillable()
     *
     * @return void
     */
    public function testSetNillable(): void {

        $obj = new SElementNode();

        $obj->setNillable(true);
        $this->assertTrue($obj->getNillable());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("s:element", SElementNode::NODE_NAME);

        $obj = new SElementNode();

        $this->assertNull($obj->getName());
        $this->assertNull($obj->getType());

        $this->assertNull($obj->getIndexName());
        $this->assertNull($obj->getMaxOccurs());
        $this->assertNull($obj->getMinOccurs());
        $this->assertNull($obj->getNillable());
    }
}
