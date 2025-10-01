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
use WBW\Library\Wsdl2Php\Model\WsdlDefinitionsNode;
use WBW\Library\Wsdl2Php\Tests\AbstractTestCase;

/**
 * wsdl:definitions node test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Wsdl2Php\Tests\Model
 */
class WsdlDefinitionsNodeTest extends AbstractTestCase {

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
        $node->setAttribute("targetNamespace", "targetNamespace");

        $obj = new WsdlDefinitionsNode();

        $obj->init($node);
        $this->assertEquals("targetNamespace", $obj->getTargetNamespace());
    }

    /**
     * Test setHttp()
     *
     * @return void
     */
    public function testSetHttp() {

        $obj = new WsdlDefinitionsNode();

        $obj->setHttp("http");
        $this->assertEquals("http", $obj->getHttp());
    }

    /**
     * Test setMime()
     *
     * @return void
     */
    public function testSetMime() {

        $obj = new WsdlDefinitionsNode();

        $obj->setMime("mime");
        $this->assertEquals("mime", $obj->getMime());
    }

    /**
     * Test setS()
     *
     * @return void
     */
    public function testSetS() {

        $obj = new WsdlDefinitionsNode();

        $obj->setS("s");
        $this->assertEquals("s", $obj->getS());
    }

    /**
     * Test setSoap()
     *
     * @return void
     */
    public function testSetSoap() {

        $obj = new WsdlDefinitionsNode();

        $obj->setSoap("soap");
        $this->assertEquals("soap", $obj->getSoap());
    }

    /**
     * Test setSoap12()
     *
     * @return void
     */
    public function testSetSoap12() {

        $obj = new WsdlDefinitionsNode();

        $obj->setSoap12("soap12");
        $this->assertEquals("soap12", $obj->getSoap12());
    }

    /**
     * Test setSoapEnc()
     *
     * @return void
     */
    public function testSetSoapEnc() {

        $obj = new WsdlDefinitionsNode();

        $obj->setSoapEnc("soapEnc");
        $this->assertEquals("soapEnc", $obj->getSoapEnc());
    }

    /**
     * Test setTm()
     *
     * @return void
     */
    public function testSetTm() {

        $obj = new WsdlDefinitionsNode();

        $obj->setTm("tm");
        $this->assertEquals("tm", $obj->getTm());
    }

    /**
     * Test setTns()
     *
     * @return void
     */
    public function testSetTns() {

        $obj = new WsdlDefinitionsNode();

        $obj->setTns("tns");
        $this->assertEquals("tns", $obj->getTns());
    }

    /**
     * Test setWsdl()
     *
     * @return void
     */
    public function testSetWsdl() {

        $obj = new WsdlDefinitionsNode();

        $obj->setWsdl("wsdl");
        $this->assertEquals("wsdl", $obj->getWsdl());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wsdl:definitions", WsdlDefinitionsNode::NODE_NAME);

        $obj = new WsdlDefinitionsNode();

        $this->assertNull($obj->getTargetNamespace());

        $this->assertNull($obj->getHttp());
        $this->assertNull($obj->getMime());
        $this->assertNull($obj->getS());
        $this->assertNull($obj->getSoap());
        $this->assertNull($obj->getSoap12());
        $this->assertNull($obj->getSoapEnc());
        $this->assertNull($obj->getTm());
        $this->assertNull($obj->getTns());
        $this->assertNull($obj->getWsdl());
    }
}
