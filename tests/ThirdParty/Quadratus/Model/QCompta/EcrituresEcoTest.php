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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\EcrituresEco;

/**
 * Ecritures eco test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class EcrituresEcoTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new EcrituresEco();

        $this->assertNull($obj->getCentre());
        $this->assertNull($obj->getCodeJournal());
        $this->assertNull($obj->getCodeLibelleAuto());
        $this->assertNull($obj->getFolio());
        $this->assertNull($obj->getJourEcriture());
        $this->assertNull($obj->getLiaisonEcriture());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getMontantTenuCredit());
        $this->assertNull($obj->getMontantTenuDebit());
        $this->assertNull($obj->getNature());
        $this->assertNull($obj->getNoLotTrace());
        $this->assertNull($obj->getNumEcrEco());
        $this->assertNull($obj->getNumeroCompte());
        $this->assertNull($obj->getPeriodeEcriture());
        $this->assertNull($obj->getQuantite());
        $this->assertNull($obj->getQuantite2());
    }

    /**
     * Tests the setCentre() method.
     *
     * @return void
     */
    public function testSetCentre() {

        $obj = new EcrituresEco();

        $obj->setCentre("centre");
        $this->assertEquals("centre", $obj->getCentre());
    }

    /**
     * Tests the setCodeJournal() method.
     *
     * @return void
     */
    public function testSetCodeJournal() {

        $obj = new EcrituresEco();

        $obj->setCodeJournal("codeJournal");
        $this->assertEquals("codeJournal", $obj->getCodeJournal());
    }

    /**
     * Tests the setCodeLibelleAuto() method.
     *
     * @return void
     */
    public function testSetCodeLibelleAuto() {

        $obj = new EcrituresEco();

        $obj->setCodeLibelleAuto("codeLibelleAuto");
        $this->assertEquals("codeLibelleAuto", $obj->getCodeLibelleAuto());
    }

    /**
     * Tests the setFolio() method.
     *
     * @return void
     */
    public function testSetFolio() {

        $obj = new EcrituresEco();

        $obj->setFolio(10);
        $this->assertEquals(10, $obj->getFolio());
    }

    /**
     * Tests the setJourEcriture() method.
     *
     * @return void
     */
    public function testSetJourEcriture() {

        $obj = new EcrituresEco();

        $obj->setJourEcriture("jourEcriture");
        $this->assertEquals("jourEcriture", $obj->getJourEcriture());
    }

    /**
     * Tests the setLiaisonEcriture() method.
     *
     * @return void
     */
    public function testSetLiaisonEcriture() {

        $obj = new EcrituresEco();

        $obj->setLiaisonEcriture(true);
        $this->assertEquals(true, $obj->getLiaisonEcriture());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle() {

        $obj = new EcrituresEco();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setMontantTenuCredit() method.
     *
     * @return void
     */
    public function testSetMontantTenuCredit() {

        $obj = new EcrituresEco();

        $obj->setMontantTenuCredit(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantTenuCredit());
    }

    /**
     * Tests the setMontantTenuDebit() method.
     *
     * @return void
     */
    public function testSetMontantTenuDebit() {

        $obj = new EcrituresEco();

        $obj->setMontantTenuDebit(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantTenuDebit());
    }

    /**
     * Tests the setNature() method.
     *
     * @return void
     */
    public function testSetNature() {

        $obj = new EcrituresEco();

        $obj->setNature("nature");
        $this->assertEquals("nature", $obj->getNature());
    }

    /**
     * Tests the setNoLotTrace() method.
     *
     * @return void
     */
    public function testSetNoLotTrace() {

        $obj = new EcrituresEco();

        $obj->setNoLotTrace("noLotTrace");
        $this->assertEquals("noLotTrace", $obj->getNoLotTrace());
    }

    /**
     * Tests the setNumEcrEco() method.
     *
     * @return void
     */
    public function testSetNumEcrEco() {

        $obj = new EcrituresEco();

        $obj->setNumEcrEco(10);
        $this->assertEquals(10, $obj->getNumEcrEco());
    }

    /**
     * Tests the setNumeroCompte() method.
     *
     * @return void
     */
    public function testSetNumeroCompte() {

        $obj = new EcrituresEco();

        $obj->setNumeroCompte("numeroCompte");
        $this->assertEquals("numeroCompte", $obj->getNumeroCompte());
    }

    /**
     * Tests the setPeriodeEcriture() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeEcriture() {

        // Set a Date/time mock.
        $periodeEcriture = new DateTime("2018-09-10");

        $obj = new EcrituresEco();

        $obj->setPeriodeEcriture($periodeEcriture);
        $this->assertSame($periodeEcriture, $obj->getPeriodeEcriture());
    }

    /**
     * Tests the setQuantite() method.
     *
     * @return void
     */
    public function testSetQuantite() {

        $obj = new EcrituresEco();

        $obj->setQuantite(10.092018);
        $this->assertEquals(10.092018, $obj->getQuantite());
    }

    /**
     * Tests the setQuantite2() method.
     *
     * @return void
     */
    public function testSetQuantite2() {

        $obj = new EcrituresEco();

        $obj->setQuantite2(10.092018);
        $this->assertEquals(10.092018, $obj->getQuantite2());
    }
}
