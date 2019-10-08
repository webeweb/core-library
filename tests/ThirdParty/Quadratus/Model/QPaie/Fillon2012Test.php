<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\Fillon2012;

/**
 * Fillon2012 model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class Fillon2012Test extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Fillon2012();

        $this->assertNull($obj->getCoeff());
        $this->assertNull($obj->getForce());
        $this->assertNull($obj->getIndicePeriode());
        $this->assertNull($obj->getNbHSupFillon());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getRMB());
        $this->assertNull($obj->getRMBMajoHE());
        $this->assertNull($obj->getReducFillon());
        $this->assertNull($obj->getReducFillonMajoHE());
        $this->assertNull($obj->getSMICM());
    }

    /**
     * Tests the setCoeff() method.
     *
     * @return void
     */
    public function testSetCoeff() {

        $obj = new Fillon2012();

        $obj->setCoeff(10.092018);
        $this->assertEquals(10.092018, $obj->getCoeff());
    }

    /**
     * Tests the setForce() method.
     *
     * @return void
     */
    public function testSetForce() {

        $obj = new Fillon2012();

        $obj->setForce(true);
        $this->assertEquals(true, $obj->getForce());
    }

    /**
     * Tests the setIndicePeriode() method.
     *
     * @return void
     */
    public function testSetIndicePeriode() {

        $obj = new Fillon2012();

        $obj->setIndicePeriode(10);
        $this->assertEquals(10, $obj->getIndicePeriode());
    }

    /**
     * Tests the setNbHSupFillon() method.
     *
     * @return void
     */
    public function testSetNbHSupFillon() {

        $obj = new Fillon2012();

        $obj->setNbHSupFillon(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHSupFillon());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye() {

        $obj = new Fillon2012();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriode() {

        $obj = new Fillon2012();

        $obj->setPeriode(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriode());
    }

    /**
     * Tests the setRMB() method.
     *
     * @return void
     */
    public function testSetRMB() {

        $obj = new Fillon2012();

        $obj->setRMB(10.092018);
        $this->assertEquals(10.092018, $obj->getRMB());
    }

    /**
     * Tests the setRMBMajoHE() method.
     *
     * @return void
     */
    public function testSetRMBMajoHE() {

        $obj = new Fillon2012();

        $obj->setRMBMajoHE(10.092018);
        $this->assertEquals(10.092018, $obj->getRMBMajoHE());
    }

    /**
     * Tests the setReducFillon() method.
     *
     * @return void
     */
    public function testSetReducFillon() {

        $obj = new Fillon2012();

        $obj->setReducFillon(10.092018);
        $this->assertEquals(10.092018, $obj->getReducFillon());
    }

    /**
     * Tests the setReducFillonMajoHE() method.
     *
     * @return void
     */
    public function testSetReducFillonMajoHE() {

        $obj = new Fillon2012();

        $obj->setReducFillonMajoHE(10.092018);
        $this->assertEquals(10.092018, $obj->getReducFillonMajoHE());
    }

    /**
     * Tests the setSMICM() method.
     *
     * @return void
     */
    public function testSetSMICM() {

        $obj = new Fillon2012();

        $obj->setSMICM(10.092018);
        $this->assertEquals(10.092018, $obj->getSMICM());
    }
}
