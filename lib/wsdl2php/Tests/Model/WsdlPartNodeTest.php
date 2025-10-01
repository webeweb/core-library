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
use WBW\Library\Wsdl2Php\Model\WsdlPartNode;
use WBW\Library\Wsdl2Php\Tests\AbstractTestCase;

/**
 * wsdl:part node test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Wsdl2Php\Tests\Model
 */
class WsdlPartNodeTest extends AbstractTestCase {

    /**
     * Test getIndexName()
     *
     * @return void
     */
    public function testGetIndexName(): void {

        $obj = new WsdlPartNode();

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
        $node->setAttribute("element", "element");
        $node->setAttribute("name", "name");

        $obj = new WsdlPartNode();

        $obj->init($node);
        $this->assertEquals("element", $obj->getElement());
        $this->assertEquals("name", $obj->getName());
    }

    /**
     * Test setElement()
     *
     * @return void
     */
    public function testSetElement(): void {

        $obj = new WsdlPartNode();

        $obj->setElement("element");
        $this->assertEquals("element", $obj->getElement());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wsdl:part", WsdlPartNode::NODE_NAME);

        $obj = new WsdlPartNode();

        $this->assertNull($obj->getName());

        $this->assertNull($obj->getIndexName());
        $this->assertNull($obj->getElement());
    }
}
