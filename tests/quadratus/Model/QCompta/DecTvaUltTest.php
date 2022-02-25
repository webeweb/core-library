<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QCompta;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QCompta\DecTvaUlt;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Dec tva ult test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class DecTvaUltTest extends AbstractTestCase {

    /**
     * Tests setCodeJournal()
     *
     * @return void
     */
    public function testSetCodeJournal(): void {

        $obj = new DecTvaUlt();

        $obj->setCodeJournal("codeJournal");
        $this->assertEquals("codeJournal", $obj->getCodeJournal());
    }

    /**
     * Tests setCodeTva()
     *
     * @return void
     */
    public function testSetCodeTva(): void {

        $obj = new DecTvaUlt();

        $obj->setCodeTva(10);
        $this->assertEquals(10, $obj->getCodeTva());
    }

    /**
     * Tests setCompteur()
     *
     * @return void
     */
    public function testSetCompteur(): void {

        $obj = new DecTvaUlt();

        $obj->setCompteur(10);
        $this->assertEquals(10, $obj->getCompteur());
    }

    /**
     * Tests setFolio()
     *
     * @return void
     */
    public function testSetFolio(): void {

        $obj = new DecTvaUlt();

        $obj->setFolio(10);
        $this->assertEquals(10, $obj->getFolio());
    }

    /**
     * Tests setLibelleEcr()
     *
     * @return void
     */
    public function testSetLibelleEcr(): void {

        $obj = new DecTvaUlt();

        $obj->setLibelleEcr("libelleEcr");
        $this->assertEquals("libelleEcr", $obj->getLibelleEcr());
    }

    /**
     * Tests setLigneFolio()
     *
     * @return void
     */
    public function testSetLigneFolio(): void {

        $obj = new DecTvaUlt();

        $obj->setLigneFolio(10);
        $this->assertEquals(10, $obj->getLigneFolio());
    }

    /**
     * Tests setMontantHt()
     *
     * @return void
     */
    public function testSetMontantHt(): void {

        $obj = new DecTvaUlt();

        $obj->setMontantHt(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantHt());
    }

    /**
     * Tests setMontantTva()
     *
     * @return void
     */
    public function testSetMontantTva(): void {

        $obj = new DecTvaUlt();

        $obj->setMontantTva(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantTva());
    }

    /**
     * Tests setNumLigne()
     *
     * @return void
     */
    public function testSetNumLigne(): void {

        $obj = new DecTvaUlt();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Tests setNumUniqEcr()
     *
     * @return void
     */
    public function testSetNumUniqEcr(): void {

        $obj = new DecTvaUlt();

        $obj->setNumUniqEcr(10);
        $this->assertEquals(10, $obj->getNumUniqEcr());
    }

    /**
     * Tests setPerDec()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPerDec(): void {

        // Set a Date/time mock.
        $perDec = new DateTime("2018-09-10");

        $obj = new DecTvaUlt();

        $obj->setPerDec($perDec);
        $this->assertSame($perDec, $obj->getPerDec());
    }

    /**
     * Tests setPerDecUlt()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPerDecUlt(): void {

        // Set a Date/time mock.
        $perDecUlt = new DateTime("2018-09-10");

        $obj = new DecTvaUlt();

        $obj->setPerDecUlt($perDecUlt);
        $this->assertSame($perDecUlt, $obj->getPerDecUlt());
    }

    /**
     * Tests setPeriodeEcriture()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeEcriture(): void {

        // Set a Date/time mock.
        $periodeEcriture = new DateTime("2018-09-10");

        $obj = new DecTvaUlt();

        $obj->setPeriodeEcriture($periodeEcriture);
        $this->assertSame($periodeEcriture, $obj->getPeriodeEcriture());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DecTvaUlt();

        $this->assertNull($obj->getCodeJournal());
        $this->assertNull($obj->getCodeTva());
        $this->assertNull($obj->getCompteur());
        $this->assertNull($obj->getFolio());
        $this->assertNull($obj->getLibelleEcr());
        $this->assertNull($obj->getLigneFolio());
        $this->assertNull($obj->getMontantHt());
        $this->assertNull($obj->getMontantTva());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getNumUniqEcr());
        $this->assertNull($obj->getPerDec());
        $this->assertNull($obj->getPerDecUlt());
        $this->assertNull($obj->getPeriodeEcriture());
    }
}
