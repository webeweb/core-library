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
use WBW\Library\Wsdl2Php\Model\WsdlOutputNode;
use WBW\Library\Wsdl2Php\Tests\AbstractTestCase;

/**
 * wsdl:output node test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Wsdl2Php\Tests\Model
 */
class WsdlOutputNodeTest extends AbstractTestCase {

    /**
     * Test getIndexName()
     *
     * @return void
     */
    public function testGetIndexName(): void {

        $obj = new WsdlOutputNode();

        $obj->setMessage("index:name");
        $this->assertEquals("name", $obj->getIndexName());
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
        $node->setAttribute("message", "message");

        $obj = new WsdlOutputNode();

        $obj->init($node);
        $this->assertEquals("message", $obj->getMessage());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wsdl:output", WsdlOutputNode::NODE_NAME);

        $obj = new WsdlOutputNode();

        $this->assertNull($obj->getIndexName());
    }
}
