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
use WBW\Library\Wsdl2Php\Model\SoapAddressNode;
use WBW\Library\Wsdl2Php\Tests\AbstractTestCase;

/**
 * soap:address node test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Wsdl2Php\Tests\Model
 */
class SoapAddressNodeTest extends AbstractTestCase {

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
        $node->setAttribute("location", "location");

        $obj = new SoapAddressNode();

        $obj->init($node);
        $this->assertEquals("location", $obj->getLocation());
    }

    /**
     * Test setLocation()
     *
     * @return void
     */
    public function testSetLocation(): void {

        $obj = new SoapAddressNode();

        $obj->setLocation("location");
        $this->assertEquals("location", $obj->getLocation());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("soap:address", SoapAddressNode::NODE_NAME);

        $obj = new SoapAddressNode();

        $this->assertNull($obj->getLocation());
    }
}
