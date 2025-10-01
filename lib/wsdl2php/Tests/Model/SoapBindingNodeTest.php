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
use WBW\Library\Wsdl2Php\Model\SoapBindingNode;
use WBW\Library\Wsdl2Php\Tests\AbstractTestCase;

/**
 * soap:binding node test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Wsdl2Php\Tests\Model
 */
class SoapBindingNodeTest extends AbstractTestCase {

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
        $node->setAttribute("transport", "transport");

        $obj = new SoapBindingNode();

        $obj->init($node);
        $this->assertEquals("transport", $obj->getTransport());
    }

    /**
     * Test setTransport()
     *
     * @return void
     */
    public function testSetTransport(): void {

        $obj = new SoapBindingNode();

        $obj->setTransport("transport");
        $this->assertEquals("transport", $obj->getTransport());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("soap:binding", SoapBindingNode::NODE_NAME);

        $obj = new SoapBindingNode();

        $this->assertNull($obj->getTransport());
    }
}
