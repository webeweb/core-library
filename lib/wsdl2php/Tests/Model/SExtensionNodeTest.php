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
use WBW\Library\Wsdl2Php\Model\SExtensionNode;
use WBW\Library\Wsdl2Php\Tests\AbstractTestCase;

/**
 * s:extension node test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Wsdl2Php\Tests\Model
 */
class SExtensionNodeTest extends AbstractTestCase {

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
        $node->setAttribute("base", "base");

        $obj = new SExtensionNode();

        $obj->init($node);
        $this->assertEquals("base", $obj->getBase());
    }

    /**
     * Test setBase()
     *
     * @return void
     */
    public function testSetBase(): void {

        $obj = new SExtensionNode();

        $obj->setBase("base");
        $this->assertEquals("base", $obj->getBase());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("s:extension", SExtensionNode::NODE_NAME);

        $obj = new SExtensionNode();

        $this->assertNull($obj->getBase());
    }
}
