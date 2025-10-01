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
use WBW\Library\Wsdl2Php\Model\WsdlPortNode;
use WBW\Library\Wsdl2Php\Tests\AbstractTestCase;

/**
 * wsdl:port node test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Wsdl2Php\Tests\Model
 */
class WsdlPortNodeTest extends AbstractTestCase {

    /**
     * Test getIndexName()
     *
     * @return void
     */
    public function testGetIndexName(): void {

        $obj = new WsdlPortNode();

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
        $node->setAttribute("binding", "binding");
        $node->setAttribute("name", "name");

        $obj = new WsdlPortNode();

        $obj->init($node);
        $this->assertEquals("binding", $obj->getBinding());
        $this->assertEquals("name", $obj->getName());
    }

    /**
     * Test setBinding()
     *
     * @return void
     */
    public function testSetBinding(): void {

        $obj = new WsdlPortNode();

        $obj->setBinding("binding");
        $this->assertEquals("binding", $obj->getBinding());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wsdl:port", WsdlPortNode::NODE_NAME);

        $obj = new WsdlPortNode();

        $this->assertNull($obj->getName());

        $this->assertNull($obj->getIndexName());
        $this->assertNull($obj->getBinding());
    }
}
