<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\DecTvaUlt;

/**
 * Dec tva ult test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class DecTvaUltTest extends AbstractTestCase {

    /**
     * Tests the setCodeJournal() method.
     *
     * @return void
     */
    public function testSetCodeJournal(): void {

        $obj = new DecTvaUlt();

        $obj->setCodeJournal("codeJournal");
        $this->assertEquals("codeJournal", $obj->getCodeJournal());
    }

    /**
     * Tests the setCodeTva() method.
     *
     * @return void
     */
    public function testSetCodeTva(): void {

        $obj = new DecTvaUlt();

        $obj->setCodeTva(10);
        $this->assertEquals(10, $obj->getCodeTva());
    }

    /**
     * Tests the setCompteur() method.
     *
     * @return void
     */
    public function testSetCompteur(): void {

        $obj = new DecTvaUlt();

        $obj->setCompteur(10);
        $this->assertEquals(10, $obj->getCompteur());
    }

    /**
     * Tests the setFolio() method.
     *
     * @return void
     */
    public function testSetFolio(): void {

        $obj = new DecTvaUlt();

        $obj->setFolio(10);
        $this->assertEquals(10, $obj->getFolio());
    }

    /**
     * Tests the setLibelleEcr() method.
     *
     * @return void
     */
    public function testSetLibelleEcr(): void {

        $obj = new DecTvaUlt();

        $obj->setLibelleEcr("libelleEcr");
        $this->assertEquals("libelleEcr", $obj->getLibelleEcr());
    }

    /**
     * Tests the setLigneFolio() method.
     *
     * @return void
     */
    public function testSetLigneFolio(): void {

        $obj = new DecTvaUlt();

        $obj->setLigneFolio(10);
        $this->assertEquals(10, $obj->getLigneFolio());
    }

    /**
     * Tests the setMontantHt() method.
     *
     * @return void
     */
    public function testSetMontantHt(): void {

        $obj = new DecTvaUlt();

        $obj->setMontantHt(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantHt());
    }

    /**
     * Tests the setMontantTva() method.
     *
     * @return void
     */
    public function testSetMontantTva(): void {

        $obj = new DecTvaUlt();

        $obj->setMontantTva(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantTva());
    }

    /**
     * Tests the setNumLigne() method.
     *
     * @return void
     */
    public function testSetNumLigne(): void {

        $obj = new DecTvaUlt();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Tests the setNumUniqEcr() method.
     *
     * @return void
     */
    public function testSetNumUniqEcr(): void {

        $obj = new DecTvaUlt();

        $obj->setNumUniqEcr(10);
        $this->assertEquals(10, $obj->getNumUniqEcr());
    }

    /**
     * Tests the setPerDec() method.
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
     * Tests the setPerDecUlt() method.
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
     * Tests the setPeriodeEcriture() method.
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
     * Tests the __construct() method.
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
