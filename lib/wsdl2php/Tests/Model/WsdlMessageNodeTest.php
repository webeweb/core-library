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
use WBW\Library\Wsdl2Php\Model\WsdlMessageNode;
use WBW\Library\Wsdl2Php\Tests\AbstractTestCase;

/**
 * wsdl:message node test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Wsdl2Php\Tests\Model
 */
class WsdlMessageNodeTest extends AbstractTestCase {

    /**
     * Test getIndexName()
     *
     * @return void
     */
    public function testGetIndexName(): void {

        $obj = new WsdlMessageNode();

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

        $obj = new WsdlMessageNode();

        $obj->init($node);
        $this->assertEquals("name", $obj->getName());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wsdl:message", WsdlMessageNode::NODE_NAME);

        $obj = new WsdlMessageNode();

        $this->assertNull($obj->getIndexName());
    }
}
