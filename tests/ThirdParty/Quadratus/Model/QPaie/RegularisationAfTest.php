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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\RegularisationAf;

/**
 * Regularisation af test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class RegularisationAfTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new RegularisationAf();

        $this->assertNull($obj->getBaseAf());
        $this->assertNull($obj->getCodeLibelle());
        $this->assertNull($obj->getIndiceBulDeb());
        $this->assertNull($obj->getIndiceBulFin());
        $this->assertNull($obj->getIndicePeriode());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPerBulDeb());
        $this->assertNull($obj->getPerBulFin());
        $this->assertNull($obj->getPeriode());
    }

    /**
     * Tests the setBaseAf() method.
     *
     * @return void
     */
    public function testSetBaseAf() {

        $obj = new RegularisationAf();

        $obj->setBaseAf(10.092018);
        $this->assertEquals(10.092018, $obj->getBaseAf());
    }

    /**
     * Tests the setCodeLibelle() method.
     *
     * @return void
     */
    public function testSetCodeLibelle() {

        $obj = new RegularisationAf();

        $obj->setCodeLibelle("codeLibelle");
        $this->assertEquals("codeLibelle", $obj->getCodeLibelle());
    }

    /**
     * Tests the setIndiceBulDeb() method.
     *
     * @return void
     */
    public function testSetIndiceBulDeb() {

        $obj = new RegularisationAf();

        $obj->setIndiceBulDeb(10);
        $this->assertEquals(10, $obj->getIndiceBulDeb());
    }

    /**
     * Tests the setIndiceBulFin() method.
     *
     * @return void
     */
    public function testSetIndiceBulFin() {

        $obj = new RegularisationAf();

        $obj->setIndiceBulFin(10);
        $this->assertEquals(10, $obj->getIndiceBulFin());
    }

    /**
     * Tests the setIndicePeriode() method.
     *
     * @return void
     */
    public function testSetIndicePeriode() {

        $obj = new RegularisationAf();

        $obj->setIndicePeriode(10);
        $this->assertEquals(10, $obj->getIndicePeriode());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye() {

        $obj = new RegularisationAf();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setPerBulDeb() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPerBulDeb() {

        // Set a Date/time mock.
        $perBulDeb = new DateTime("2018-09-10");

        $obj = new RegularisationAf();

        $obj->setPerBulDeb($perBulDeb);
        $this->assertSame($perBulDeb, $obj->getPerBulDeb());
    }

    /**
     * Tests the setPerBulFin() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPerBulFin() {

        // Set a Date/time mock.
        $perBulFin = new DateTime("2018-09-10");

        $obj = new RegularisationAf();

        $obj->setPerBulFin($perBulFin);
        $this->assertSame($perBulFin, $obj->getPerBulFin());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriode() {

        // Set a Date/time mock.
        $periode = new DateTime("2018-09-10");

        $obj = new RegularisationAf();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }
}
