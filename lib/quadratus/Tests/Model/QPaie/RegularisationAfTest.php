<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use DateTime;
use Throwable;
use WBW\Library\Quadratus\Model\QPaie\RegularisationAf;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Regularisation af test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class RegularisationAfTest extends AbstractTestCase {

    /**
     * Test setBaseAf()
     *
     * @return void
     */
    public function testSetBaseAf(): void {

        $obj = new RegularisationAf();

        $obj->setBaseAf(10.092018);
        $this->assertEquals(10.092018, $obj->getBaseAf());
    }

    /**
     * Test setCodeLibelle()
     *
     * @return void
     */
    public function testSetCodeLibelle(): void {

        $obj = new RegularisationAf();

        $obj->setCodeLibelle("codeLibelle");
        $this->assertEquals("codeLibelle", $obj->getCodeLibelle());
    }

    /**
     * Test setIndiceBulDeb()
     *
     * @return void
     */
    public function testSetIndiceBulDeb(): void {

        $obj = new RegularisationAf();

        $obj->setIndiceBulDeb(10);
        $this->assertEquals(10, $obj->getIndiceBulDeb());
    }

    /**
     * Test setIndiceBulFin()
     *
     * @return void
     */
    public function testSetIndiceBulFin(): void {

        $obj = new RegularisationAf();

        $obj->setIndiceBulFin(10);
        $this->assertEquals(10, $obj->getIndiceBulFin());
    }

    /**
     * Test setIndicePeriode()
     *
     * @return void
     */
    public function testSetIndicePeriode(): void {

        $obj = new RegularisationAf();

        $obj->setIndicePeriode(10);
        $this->assertEquals(10, $obj->getIndicePeriode());
    }

    /**
     * Test setNumeroEmploye()
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new RegularisationAf();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Test setPerBulDeb()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPerBulDeb(): void {

        // Set a Date/time mock.
        $perBulDeb = new DateTime("2018-09-10");

        $obj = new RegularisationAf();

        $obj->setPerBulDeb($perBulDeb);
        $this->assertSame($perBulDeb, $obj->getPerBulDeb());
    }

    /**
     * Test setPerBulFin()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPerBulFin(): void {

        // Set a Date/time mock.
        $perBulFin = new DateTime("2018-09-10");

        $obj = new RegularisationAf();

        $obj->setPerBulFin($perBulFin);
        $this->assertSame($perBulFin, $obj->getPerBulFin());
    }

    /**
     * Test setPeriode()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPeriode(): void {

        // Set a Date/time mock.
        $periode = new DateTime("2018-09-10");

        $obj = new RegularisationAf();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

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
}
