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
 * Fillon2012 test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class Fillon2012Test extends AbstractTestCase {

    /**
     * Tests the setCoeff() method.
     *
     * @return void
     */
    public function testSetCoeff(): void {

        $obj = new Fillon2012();

        $obj->setCoeff(10.092018);
        $this->assertEquals(10.092018, $obj->getCoeff());
    }

    /**
     * Tests the setForce() method.
     *
     * @return void
     */
    public function testSetForce(): void {

        $obj = new Fillon2012();

        $obj->setForce(true);
        $this->assertEquals(true, $obj->getForce());
    }

    /**
     * Tests the setIndicePeriode() method.
     *
     * @return void
     */
    public function testSetIndicePeriode(): void {

        $obj = new Fillon2012();

        $obj->setIndicePeriode(10);
        $this->assertEquals(10, $obj->getIndicePeriode());
    }

    /**
     * Tests the setNbHSupFillon() method.
     *
     * @return void
     */
    public function testSetNbHSupFillon(): void {

        $obj = new Fillon2012();

        $obj->setNbHSupFillon(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHSupFillon());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

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
    public function testSetPeriode(): void {

        // Set a Date/time mock.
        $periode = new DateTime("2018-09-10");

        $obj = new Fillon2012();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Tests the setReducFillon() method.
     *
     * @return void
     */
    public function testSetReducFillon(): void {

        $obj = new Fillon2012();

        $obj->setReducFillon(10.092018);
        $this->assertEquals(10.092018, $obj->getReducFillon());
    }

    /**
     * Tests the setReducFillonMajoHe() method.
     *
     * @return void
     */
    public function testSetReducFillonMajoHe(): void {

        $obj = new Fillon2012();

        $obj->setReducFillonMajoHe(10.092018);
        $this->assertEquals(10.092018, $obj->getReducFillonMajoHe());
    }

    /**
     * Tests the setRmb() method.
     *
     * @return void
     */
    public function testSetRmb(): void {

        $obj = new Fillon2012();

        $obj->setRmb(10.092018);
        $this->assertEquals(10.092018, $obj->getRmb());
    }

    /**
     * Tests the setRmbMajoHe() method.
     *
     * @return void
     */
    public function testSetRmbMajoHe(): void {

        $obj = new Fillon2012();

        $obj->setRmbMajoHe(10.092018);
        $this->assertEquals(10.092018, $obj->getRmbMajoHe());
    }

    /**
     * Tests the setSmicM() method.
     *
     * @return void
     */
    public function testSetSmicM(): void {

        $obj = new Fillon2012();

        $obj->setSmicM(10.092018);
        $this->assertEquals(10.092018, $obj->getSmicM());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Fillon2012();

        $this->assertNull($obj->getCoeff());
        $this->assertNull($obj->getForce());
        $this->assertNull($obj->getIndicePeriode());
        $this->assertNull($obj->getNbHSupFillon());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getRmb());
        $this->assertNull($obj->getRmbMajoHe());
        $this->assertNull($obj->getReducFillon());
        $this->assertNull($obj->getReducFillonMajoHe());
        $this->assertNull($obj->getSmicM());
    }
}
