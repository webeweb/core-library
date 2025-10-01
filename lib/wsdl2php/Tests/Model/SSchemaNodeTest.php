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
use WBW\Library\Wsdl2Php\Model\SSchemaNode;
use WBW\Library\Wsdl2Php\Tests\AbstractTestCase;

/**
 * s:schema node test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Wsdl2Php\Tests\Model
 */
class SSchemaNodeTest extends AbstractTestCase {

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
        $node->setAttribute("elementFormDefault", "elementFormDefault");

        $obj = new SSchemaNode();

        $obj->init($node);
        $this->assertEquals("elementFormDefault", $obj->getElementFormDefault());
    }

    /**
     * Test setElementFormDefault()
     *
     * @return void
     */
    public function testSetElementFormDefault(): void {

        $obj = new SSchemaNode();

        $obj->setElementFormDefault("elementFormDefault");
        $this->assertEquals("elementFormDefault", $obj->getElementFormDefault());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("s:schema", SSchemaNode::NODE_NAME);

        $obj = new SSchemaNode();

        $this->assertNull($obj->getTargetNamespace());

        $this->assertNull($obj->getElementFormDefault());
    }
}
