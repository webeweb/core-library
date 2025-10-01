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

namespace WBW\Library\Wsdl2Php\Tests\Factory;

use DOMDocument;
use Throwable;
use WBW\Library\Wsdl2Php\Factory\ModelFactory;
use WBW\Library\Wsdl2Php\Model\SComplexContentNode;
use WBW\Library\Wsdl2Php\Model\SComplexTypeNode;
use WBW\Library\Wsdl2Php\Model\SElementNode;
use WBW\Library\Wsdl2Php\Model\SExtensionNode;
use WBW\Library\Wsdl2Php\Model\Soap12AddressNode;
use WBW\Library\Wsdl2Php\Model\Soap12BodyNode;
use WBW\Library\Wsdl2Php\Model\Soap12OperationNode;
use WBW\Library\Wsdl2Php\Model\SoapAddressNode;
use WBW\Library\Wsdl2Php\Model\SoapBindingNode;
use WBW\Library\Wsdl2Php\Model\SoapBodyNode;
use WBW\Library\Wsdl2Php\Model\SoapOperationNode;
use WBW\Library\Wsdl2Php\Model\SSchemaNode;
use WBW\Library\Wsdl2Php\Model\SSequenceNode;
use WBW\Library\Wsdl2Php\Model\WsdlBindingNode;
use WBW\Library\Wsdl2Php\Model\WsdlDefinitionsNode;
use WBW\Library\Wsdl2Php\Model\WsdlInputNode;
use WBW\Library\Wsdl2Php\Model\WsdlMessageNode;
use WBW\Library\Wsdl2Php\Model\WsdlOperationNode;
use WBW\Library\Wsdl2Php\Model\WsdlOutputNode;
use WBW\Library\Wsdl2Php\Model\WsdlPartNode;
use WBW\Library\Wsdl2Php\Model\WsdlPortNode;
use WBW\Library\Wsdl2Php\Model\WsdlPortTypeNode;
use WBW\Library\Wsdl2Php\Model\WsdlServiceNode;
use WBW\Library\Wsdl2Php\Model\WsdlTypesNode;
use WBW\Library\Wsdl2Php\Tests\AbstractTestCase;

/**
 * Model factory test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Wsdl2Php\Tests\Factory
 */
class ModelFactoryTest extends AbstractTestCase {

    /**
     * Test newNode()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testNewNode(): void {

        // Set a DOM node mock.
        $doc  = new DOMDocument();
        $node = $doc->createElement("null");

        $obj = ModelFactory::newNode($node);
        $this->assertNull($obj);
    }

    /**
     * Test newNode()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testNewNodeWithSComplexContentNode(): void {

        // Set a DOM node mock.
        $doc  = new DOMDocument();
        $node = $doc->createElement(SComplexContentNode::NODE_NAME);

        $obj = ModelFactory::newNode($node);
        $this->assertInstanceOf(SComplexContentNode::class, $obj);
    }

    /**
     * Test newNode()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testNewNodeWithSComplexTypeNode(): void {

        // Set a DOM node mock.
        $doc  = new DOMDocument();
        $node = $doc->createElement(SComplexTypeNode::NODE_NAME);

        $obj = ModelFactory::newNode($node);
        $this->assertInstanceOf(SComplexTypeNode::class, $obj);
    }

    /**
     * Test newNode()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testNewNodeWithSElementNode(): void {

        // Set a DOM node mock.
        $doc  = new DOMDocument();
        $node = $doc->createElement(SElementNode::NODE_NAME);

        $obj = ModelFactory::newNode($node);
        $this->assertInstanceOf(SElementNode::class, $obj);
    }

    /**
     * Test newNode()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testNewNodeWithSExtensionNode(): void {

        // Set a DOM node mock.
        $doc  = new DOMDocument();
        $node = $doc->createElement(SExtensionNode::NODE_NAME);

        $obj = ModelFactory::newNode($node);
        $this->assertInstanceOf(SExtensionNode::class, $obj);
    }

    /**
     * Test newNode()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testNewNodeWithSSchemaNode(): void {

        // Set a DOM node mock.
        $doc  = new DOMDocument();
        $node = $doc->createElement(SSchemaNode::NODE_NAME);

        $obj = ModelFactory::newNode($node);
        $this->assertInstanceOf(SSchemaNode::class, $obj);
    }

    /**
     * Test newNode()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testNewNodeWithSSequenceNode(): void {

        // Set a DOM node mock.
        $doc  = new DOMDocument();
        $node = $doc->createElement(SSequenceNode::NODE_NAME);

        $obj = ModelFactory::newNode($node);
        $this->assertInstanceOf(SSequenceNode::class, $obj);
    }

    /**
     * Test newNode()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testNewNodeWithSoap12AddressNode(): void {

        // Set a DOM node mock.
        $doc  = new DOMDocument();
        $node = $doc->createElement(Soap12AddressNode::NODE_NAME);

        $obj = ModelFactory::newNode($node);
        $this->assertInstanceOf(Soap12AddressNode::class, $obj);
    }

    /**
     * Test newNode()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testNewNodeWithSoap12BodyNode(): void {

        // Set a DOM node mock.
        $doc  = new DOMDocument();
        $node = $doc->createElement(Soap12BodyNode::NODE_NAME);

        $obj = ModelFactory::newNode($node);
        $this->assertInstanceOf(Soap12BodyNode::class, $obj);
    }

    /**
     * Test newNode()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testNewNodeWithSoap12OperationNode(): void {

        // Set a DOM node mock.
        $doc  = new DOMDocument();
        $node = $doc->createElement(Soap12OperationNode::NODE_NAME);

        $obj = ModelFactory::newNode($node);
        $this->assertInstanceOf(Soap12OperationNode::class, $obj);
    }

    /**
     * Test newNode()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testNewNodeWithSoapAddressNode(): void {

        // Set a DOM node mock.
        $doc  = new DOMDocument();
        $node = $doc->createElement(SoapAddressNode::NODE_NAME);

        $obj = ModelFactory::newNode($node);
        $this->assertInstanceOf(SoapAddressNode::class, $obj);
    }

    /**
     * Test newNode()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testNewNodeWithSoapBindingNode(): void {

        // Set a DOM node mock.
        $doc  = new DOMDocument();
        $node = $doc->createElement(SoapBindingNode::NODE_NAME);

        $obj = ModelFactory::newNode($node);
        $this->assertInstanceOf(SoapBindingNode::class, $obj);
    }

    /**
     * Test newNode()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testNewNodeWithSoapBodyNode(): void {

        // Set a DOM node mock.
        $doc  = new DOMDocument();
        $node = $doc->createElement(SoapBodyNode::NODE_NAME);

        $obj = ModelFactory::newNode($node);
        $this->assertInstanceOf(SoapBodyNode::class, $obj);
    }

    /**
     * Test newNode()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testNewNodeWithSoapOperationNode(): void {

        // Set a DOM node mock.
        $doc  = new DOMDocument();
        $node = $doc->createElement(SoapOperationNode::NODE_NAME);

        $obj = ModelFactory::newNode($node);
        $this->assertInstanceOf(SoapOperationNode::class, $obj);
    }

    /**
     * Test newNode()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testNewNodeWithWsdlBindingNode(): void {

        // Set a DOM node mock.
        $doc  = new DOMDocument();
        $node = $doc->createElement(WsdlBindingNode::NODE_NAME);

        $obj = ModelFactory::newNode($node);
        $this->assertInstanceOf(WsdlBindingNode::class, $obj);
    }

    /**
     * Test newNode()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testNewNodeWithWsdlDefinitionsNode(): void {

        // Set a DOM node mock.
        $doc  = new DOMDocument();
        $node = $doc->createElement(WsdlDefinitionsNode::NODE_NAME);

        $obj = ModelFactory::newNode($node);
        $this->assertInstanceOf(WsdlDefinitionsNode::class, $obj);
    }

    /**
     * Test newNode()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testNewNodeWithWsdlInputNode(): void {

        // Set a DOM node mock.
        $doc  = new DOMDocument();
        $node = $doc->createElement(WsdlInputNode::NODE_NAME);

        $obj = ModelFactory::newNode($node);
        $this->assertInstanceOf(WsdlInputNode::class, $obj);
    }

    /**
     * Test newNode()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testNewNodeWithWsdlMessageNode(): void {

        // Set a DOM node mock.
        $doc  = new DOMDocument();
        $node = $doc->createElement(WsdlMessageNode::NODE_NAME);

        $obj = ModelFactory::newNode($node);
        $this->assertInstanceOf(WsdlMessageNode::class, $obj);
    }

    /**
     * Test newNode()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testNewNodeWithWsdlOperationNode(): void {

        // Set a DOM node mock.
        $doc  = new DOMDocument();
        $node = $doc->createElement(WsdlOperationNode::NODE_NAME);

        $obj = ModelFactory::newNode($node);
        $this->assertInstanceOf(WsdlOperationNode::class, $obj);
    }

    /**
     * Test newNode()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testNewNodeWithWsdlOutputNode(): void {

        // Set a DOM node mock.
        $doc  = new DOMDocument();
        $node = $doc->createElement(WsdlOutputNode::NODE_NAME);

        $obj = ModelFactory::newNode($node);
        $this->assertInstanceOf(WsdlOutputNode::class, $obj);
    }

    /**
     * Test newNode()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testNewNodeWithWsdlPartNode(): void {

        // Set a DOM node mock.
        $doc  = new DOMDocument();
        $node = $doc->createElement(WsdlPartNode::NODE_NAME);

        $obj = ModelFactory::newNode($node);
        $this->assertInstanceOf(WsdlPartNode::class, $obj);
    }

    /**
     * Test newNode()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testNewNodeWithWsdlPortNode(): void {

        // Set a DOM node mock.
        $doc  = new DOMDocument();
        $node = $doc->createElement(WsdlPortNode::NODE_NAME);

        $obj = ModelFactory::newNode($node);
        $this->assertInstanceOf(WsdlPortNode::class, $obj);
    }

    /**
     * Test newNode()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testNewNodeWithWsdlPortTypeNode(): void {

        // Set a DOM node mock.
        $doc  = new DOMDocument();
        $node = $doc->createElement(WsdlPortTypeNode::NODE_NAME);

        $obj = ModelFactory::newNode($node);
        $this->assertInstanceOf(WsdlPortTypeNode::class, $obj);
    }

    /**
     * Test newNode()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testNewNodeWithWsdlServiceNode(): void {

        // Set a DOM node mock.
        $doc  = new DOMDocument();
        $node = $doc->createElement(WsdlServiceNode::NODE_NAME);

        $obj = ModelFactory::newNode($node);
        $this->assertInstanceOf(WsdlServiceNode::class, $obj);
    }

    /**
     * Test newNode()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testNewNodeWithWsdlTypesNode(): void {

        // Set a DOM node mock.
        $doc  = new DOMDocument();
        $node = $doc->createElement(WsdlTypesNode::NODE_NAME);

        $obj = ModelFactory::newNode($node);
        $this->assertInstanceOf(WsdlTypesNode::class, $obj);
    }
}
