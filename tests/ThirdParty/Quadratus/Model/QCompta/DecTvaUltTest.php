<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
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
 * Dec tva ult model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class DecTvaUltTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DecTvaUlt();

        $this->assertNull($obj->getCodeJournal());
        $this->assertNull($obj->getCodeTva());
        $this->assertNull($obj->getCompteur());
        $this->assertNull($obj->getFolio());
        $this->assertNull($obj->getLibelleEcr());
        $this->assertNull($obj->getLigneFolio());
        $this->assertNull($obj->getMontantHT());
        $this->assertNull($obj->getMontantTVA());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getNumUniqEcr());
        $this->assertNull($obj->getPerDec());
        $this->assertNull($obj->getPerDecUlt());
        $this->assertNull($obj->getPeriodeEcriture());
    }

    /**
     * Tests the setCodeJournal() method.
     *
     * @return void
     */
    public function testSetCodeJournal() {

        $obj = new DecTvaUlt();

        $obj->setCodeJournal("codeJournal");
        $this->assertEquals("codeJournal", $obj->getCodeJournal());
    }

    /**
     * Tests the setCodeTva() method.
     *
     * @return void
     */
    public function testSetCodeTva() {

        $obj = new DecTvaUlt();

        $obj->setCodeTva(10);
        $this->assertEquals(10, $obj->getCodeTva());
    }

    /**
     * Tests the setCompteur() method.
     *
     * @return void
     */
    public function testSetCompteur() {

        $obj = new DecTvaUlt();

        $obj->setCompteur(10);
        $this->assertEquals(10, $obj->getCompteur());
    }

    /**
     * Tests the setFolio() method.
     *
     * @return void
     */
    public function testSetFolio() {

        $obj = new DecTvaUlt();

        $obj->setFolio(10);
        $this->assertEquals(10, $obj->getFolio());
    }

    /**
     * Tests the setLibelleEcr() method.
     *
     * @return void
     */
    public function testSetLibelleEcr() {

        $obj = new DecTvaUlt();

        $obj->setLibelleEcr("libelleEcr");
        $this->assertEquals("libelleEcr", $obj->getLibelleEcr());
    }

    /**
     * Tests the setLigneFolio() method.
     *
     * @return void
     */
    public function testSetLigneFolio() {

        $obj = new DecTvaUlt();

        $obj->setLigneFolio(10);
        $this->assertEquals(10, $obj->getLigneFolio());
    }

    /**
     * Tests the setMontantHT() method.
     *
     * @return void
     */
    public function testSetMontantHT() {

        $obj = new DecTvaUlt();

        $obj->setMontantHT(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantHT());
    }

    /**
     * Tests the setMontantTVA() method.
     *
     * @return void
     */
    public function testSetMontantTVA() {

        $obj = new DecTvaUlt();

        $obj->setMontantTVA(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantTVA());
    }

    /**
     * Tests the setNumLigne() method.
     *
     * @return void
     */
    public function testSetNumLigne() {

        $obj = new DecTvaUlt();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Tests the setNumUniqEcr() method.
     *
     * @return void
     */
    public function testSetNumUniqEcr() {

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
    public function testSetPerDec() {

        $obj = new DecTvaUlt();

        $obj->setPerDec(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPerDec());
    }

    /**
     * Tests the setPerDecUlt() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPerDecUlt() {

        $obj = new DecTvaUlt();

        $obj->setPerDecUlt(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPerDecUlt());
    }

    /**
     * Tests the setPeriodeEcriture() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeEcriture() {

        $obj = new DecTvaUlt();

        $obj->setPeriodeEcriture(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeEcriture());
    }
}
