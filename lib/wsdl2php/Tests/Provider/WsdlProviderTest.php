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

namespace WBW\Library\Wsdl2Php\Tests\Provider;

use WBW\Library\Wsdl2Php\Model\IndexedNode;
use WBW\Library\Wsdl2Php\Provider\WsdlProvider;
use WBW\Library\Wsdl2Php\Tests\AbstractTestCase;

/**
 * WSDL provider test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Wsdl2Php\Tests\Provider
 */
class WsdlProviderTest extends AbstractTestCase {

    /**
     * Test index()
     *
     * @return void
     */
    public function testIndex(): void {

        $obj = new WsdlProvider($this->wsdl);
        $obj->load();

        $obj->index();
        $this->assertNotNull($obj->getDefinitions());
        $this->assertCount(263, $obj->getInputs());
        $this->assertCount(526, $obj->getMessages());
        $this->assertCount(263, $obj->getOperations());
        $this->assertCount(263, $obj->getOutputs());
        $this->assertCount(0, $obj->getParts());
        $this->assertNotNull($obj->getService());
        $this->assertCount(1033, $obj->getTypes());
        $this->assertEquals($this->wsdl, $obj->getWsdl());
    }

    /**
     * Test isModel()
     *
     * @return void
     */
    public function testIsModel(): void {

        $obj = new WsdlProvider($this->wsdl);
        $obj->load();
        $obj->index();

        /** @var IndexedNode $arg */
        $arg = $obj->getTypes()["ArrayOfBoolean"];
        $this->assertTrue($obj->isModel($arg));
    }

    /**
     * Test isRequest()
     *
     * @return void
     */
    public function testIsRequest(): void {

        $obj = new WsdlProvider($this->wsdl);
        $obj->load();
        $obj->index();

        /** @var IndexedNode $arg */
        $arg = $obj->getTypes()["SWS_AcquisitionContenuPartielDSN"];
        $this->assertTrue($obj->isRequest($arg));
    }

    /**
     * Test isResponse()
     *
     * @return void
     */
    public function testIsResponse(): void {

        $obj = new WsdlProvider($this->wsdl);
        $obj->load();
        $obj->index();

        /** @var IndexedNode $arg */
        $arg = $obj->getTypes()["SWS_AcquisitionContenuPartielDSNResponse"];
        $this->assertTrue($obj->isResponse($arg));
    }

    /**
     * Test load()
     *
     * @return void
     */
    public function testLoad(): void {

        $obj = new WsdlProvider($this->wsdl);

        $obj->load();
        $this->assertNotNull($obj->getDefinitions());
        $this->assertEquals([], $obj->getInputs());
        $this->assertEquals([], $obj->getMessages());
        $this->assertEquals([], $obj->getOperations());
        $this->assertEquals([], $obj->getOutputs());
        $this->assertEquals([], $obj->getParts());
        $this->assertNull($obj->getService());
        $this->assertEquals([], $obj->getTypes());
        $this->assertEquals($this->wsdl, $obj->getWsdl());
    }

    /**
     * Test sort()
     *
     * @return void
     */
    public function testSort(): void {

        $obj = new WsdlProvider($this->wsdl);
        $obj->load();
        $obj->index();

        $obj->sort();
        $this->assertNotNull($obj->getDefinitions());
        $this->assertCount(263, $obj->getInputs());
        $this->assertCount(526, $obj->getMessages());
        $this->assertCount(263, $obj->getOperations());
        $this->assertCount(263, $obj->getOutputs());
        $this->assertCount(0, $obj->getParts());
        $this->assertNotNull($obj->getService());
        $this->assertCount(1033, $obj->getTypes());
        $this->assertEquals($this->wsdl, $obj->getWsdl());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new WsdlProvider($this->wsdl);

        $this->assertNull($obj->getDefinitions());
        $this->assertEquals([], $obj->getInputs());
        $this->assertEquals([], $obj->getMessages());
        $this->assertEquals([], $obj->getOperations());
        $this->assertEquals([], $obj->getOutputs());
        $this->assertEquals([], $obj->getParts());
        $this->assertNull($obj->getService());
        $this->assertEquals([], $obj->getTypes());
        $this->assertEquals($this->wsdl, $obj->getWsdl());
    }
}
