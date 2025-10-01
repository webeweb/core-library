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
use WBW\Library\Wsdl2Php\Model\SoapBodyNode;
use WBW\Library\Wsdl2Php\Tests\AbstractTestCase;

/**
 * soap:body node test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Wsdl2Php\Tests\Model
 */
class SoapBodyNodeTest extends AbstractTestCase {

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
        $node->setAttribute("use", "use");

        $obj = new SoapBodyNode();

        $obj->init($node);
        $this->assertEquals("use", $obj->getUse());
    }

    /**
     * Test setUse()
     *
     * @return void
     */
    public function testSetUse(): void {

        $obj = new SoapBodyNode();

        $obj->setUse("use");
        $this->assertEquals("use", $obj->getUse());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("soap:body", SoapBodyNode::NODE_NAME);

        $obj = new SoapBodyNode();

        $this->assertNull($obj->getUse());
    }
}
