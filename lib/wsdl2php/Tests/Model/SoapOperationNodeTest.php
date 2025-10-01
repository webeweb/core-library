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
use WBW\Library\Wsdl2Php\Model\SoapOperationNode;
use WBW\Library\Wsdl2Php\Tests\AbstractTestCase;

/**
 * soap:operation node test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Wsdl2Php\Tests\Model
 */
class SoapOperationNodeTest extends AbstractTestCase {

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
        $node->setAttribute("soapAction", "soapAction");
        $node->setAttribute("style", "style");

        $obj = new SoapOperationNode();

        $obj->init($node);
        $this->assertEquals("soapAction", $obj->getSoapAction());
        $this->assertEquals("style", $obj->getStyle());
    }

    /**
     * Test setSoapAction()
     *
     * @return void
     */
    public function testSetSoapAction(): void {

        $obj = new SoapOperationNode();

        $obj->setSoapAction("soapAction");
        $this->assertEquals("soapAction", $obj->getSoapAction());
    }

    /**
     * Test setStyle()
     *
     * @return void
     */
    public function testSetStyle(): void {

        $obj = new SoapOperationNode();

        $obj->setStyle("style");
        $this->assertEquals("style", $obj->getStyle());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("soap:operation", SoapOperationNode::NODE_NAME);

        $obj = new SoapOperationNode();

        $this->assertNull($obj->getSoapAction());
        $this->assertNull($obj->getStyle());
    }
}
