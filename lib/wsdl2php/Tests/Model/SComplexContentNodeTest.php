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
use WBW\Library\Wsdl2Php\Model\SComplexContentNode;
use WBW\Library\Wsdl2Php\Tests\AbstractTestCase;

/**
 * s:complexContent node test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Wsdl2Php\Tests\Model
 */
class SComplexContentNodeTest extends AbstractTestCase {

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
        $node->setAttribute("mixed", "true");

        $obj = new SComplexContentNode();

        $obj->init($node);
        $this->assertTrue($obj->getMixed());
    }

    /**
     * Test setMixed()
     *
     * @return void
     */
    public function testSetMixed(): void {

        $obj = new SComplexContentNode();

        $obj->setMixed(true);
        $this->assertTrue($obj->getMixed());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("s:complexContent", SComplexContentNode::NODE_NAME);

        $obj = new SComplexContentNode();

        $this->assertNull($obj->getMixed());
    }
}
