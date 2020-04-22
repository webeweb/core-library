<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\AnnexeSuite;

/**
 * Annexe suite test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class AnnexeSuiteTest extends AbstractTestCase {

    /**
     * Tests the setCode1() method.
     *
     * @return void
     */
    public function testSetCode1() {

        $obj = new AnnexeSuite();

        $obj->setCode1("code1");
        $this->assertEquals("code1", $obj->getCode1());
    }

    /**
     * Tests the setCode2() method.
     *
     * @return void
     */
    public function testSetCode2() {

        $obj = new AnnexeSuite();

        $obj->setCode2("code2");
        $this->assertEquals("code2", $obj->getCode2());
    }

    /**
     * Tests the setCritereLibre1() method.
     *
     * @return void
     */
    public function testSetCritereLibre1() {

        $obj = new AnnexeSuite();

        $obj->setCritereLibre1("critereLibre1");
        $this->assertEquals("critereLibre1", $obj->getCritereLibre1());
    }

    /**
     * Tests the setCritereLibre2() method.
     *
     * @return void
     */
    public function testSetCritereLibre2() {

        $obj = new AnnexeSuite();

        $obj->setCritereLibre2("critereLibre2");
        $this->assertEquals("critereLibre2", $obj->getCritereLibre2());
    }

    /**
     * Tests the setDestRelance() method.
     *
     * @return void
     */
    public function testSetDestRelance() {

        $obj = new AnnexeSuite();

        $obj->setDestRelance(true);
        $this->assertEquals(true, $obj->getDestRelance());
    }

    /**
     * Tests the setFax() method.
     *
     * @return void
     */
    public function testSetFax() {

        $obj = new AnnexeSuite();

        $obj->setFax("fax");
        $this->assertEquals("fax", $obj->getFax());
    }

    /**
     * Tests the setNumero() method.
     *
     * @return void
     */
    public function testSetNumero() {

        $obj = new AnnexeSuite();

        $obj->setNumero(10);
        $this->assertEquals(10, $obj->getNumero());
    }

    /**
     * Tests the setPrenom() method.
     *
     * @return void
     */
    public function testSetPrenom() {

        $obj = new AnnexeSuite();

        $obj->setPrenom("prenom");
        $this->assertEquals("prenom", $obj->getPrenom());
    }

    /**
     * Tests the setRemarquesRtf() method.
     *
     * @return void
     */
    public function testSetRemarquesRtf() {

        $obj = new AnnexeSuite();

        $obj->setRemarquesRtf("remarquesRtf");
        $this->assertEquals("remarquesRtf", $obj->getRemarquesRtf());
    }

    /**
     * Tests the setService() method.
     *
     * @return void
     */
    public function testSetService() {

        $obj = new AnnexeSuite();

        $obj->setService("service");
        $this->assertEquals("service", $obj->getService());
    }

    /**
     * Tests the setType() method.
     *
     * @return void
     */
    public function testSetType() {

        $obj = new AnnexeSuite();

        $obj->setType("type");
        $this->assertEquals("type", $obj->getType());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

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
