<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use WBW\Library\Quadratus\Model\QGI\AnnexeSuite;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Annexe suite test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class AnnexeSuiteTest extends AbstractTestCase {

    /**
     * Tests setCode1()
     *
     * @return void
     */
    public function testSetCode1(): void {

        $obj = new AnnexeSuite();

        $obj->setCode1("code1");
        $this->assertEquals("code1", $obj->getCode1());
    }

    /**
     * Tests setCode2()
     *
     * @return void
     */
    public function testSetCode2(): void {

        $obj = new AnnexeSuite();

        $obj->setCode2("code2");
        $this->assertEquals("code2", $obj->getCode2());
    }

    /**
     * Tests setCritereLibre1()
     *
     * @return void
     */
    public function testSetCritereLibre1(): void {

        $obj = new AnnexeSuite();

        $obj->setCritereLibre1("critereLibre1");
        $this->assertEquals("critereLibre1", $obj->getCritereLibre1());
    }

    /**
     * Tests setCritereLibre2()
     *
     * @return void
     */
    public function testSetCritereLibre2(): void {

        $obj = new AnnexeSuite();

        $obj->setCritereLibre2("critereLibre2");
        $this->assertEquals("critereLibre2", $obj->getCritereLibre2());
    }

    /**
     * Tests setDestRelance()
     *
     * @return void
     */
    public function testSetDestRelance(): void {

        $obj = new AnnexeSuite();

        $obj->setDestRelance(true);
        $this->assertEquals(true, $obj->getDestRelance());
    }

    /**
     * Tests setFax()
     *
     * @return void
     */
    public function testSetFax(): void {

        $obj = new AnnexeSuite();

        $obj->setFax("fax");
        $this->assertEquals("fax", $obj->getFax());
    }

    /**
     * Tests setNumero()
     *
     * @return void
     */
    public function testSetNumero(): void {

        $obj = new AnnexeSuite();

        $obj->setNumero(10);
        $this->assertEquals(10, $obj->getNumero());
    }

    /**
     * Tests setPrenom()
     *
     * @return void
     */
    public function testSetPrenom(): void {

        $obj = new AnnexeSuite();

        $obj->setPrenom("prenom");
        $this->assertEquals("prenom", $obj->getPrenom());
    }

    /**
     * Tests setRemarquesRtf()
     *
     * @return void
     */
    public function testSetRemarquesRtf(): void {

        $obj = new AnnexeSuite();

        $obj->setRemarquesRtf("remarquesRtf");
        $this->assertEquals("remarquesRtf", $obj->getRemarquesRtf());
    }

    /**
     * Tests setService()
     *
     * @return void
     */
    public function testSetService(): void {

        $obj = new AnnexeSuite();

        $obj->setService("service");
        $this->assertEquals("service", $obj->getService());
    }

    /**
     * Tests setType()
     *
     * @return void
     */
    public function testSetType(): void {

        $obj = new AnnexeSuite();

        $obj->setType("type");
        $this->assertEquals("type", $obj->getType());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new AnnexeSuite();

        $this->assertNull($obj->getCode1());
        $this->assertNull($obj->getCode2());
        $this->assertNull($obj->getCritereLibre1());
        $this->assertNull($obj->getCritereLibre2());
        $this->assertNull($obj->getDestRelance());
        $this->assertNull($obj->getFax());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getPrenom());
        $this->assertNull($obj->getRemarquesRtf());
        $this->assertNull($obj->getService());
        $this->assertNull($obj->getType());
    }
}
