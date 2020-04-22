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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\EcrituresRapproBancaire;

/**
 * Ecritures rappro bancaire test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class EcrituresRapproBancaireTest extends AbstractTestCase {

    /**
     * Tests the setCodeDevise() method.
     *
     * @return void
     */
    public function testSetCodeDevise() {

        $obj = new EcrituresRapproBancaire();

        $obj->setCodeDevise("codeDevise");
        $this->assertEquals("codeDevise", $obj->getCodeDevise());
    }

    /**
     * Tests the setDateRapproBancaire() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateRapproBancaire() {

        // Set a Date/time mock.
        $dateRapproBancaire = new DateTime("2018-09-10");

        $obj = new EcrituresRapproBancaire();

        $obj->setDateRapproBancaire($dateRapproBancaire);
        $this->assertSame($dateRapproBancaire, $obj->getDateRapproBancaire());
    }

    /**
     * Tests the setJourEcriture() method.
     *
     * @return void
     */
    public function testSetJourEcriture() {

        $obj = new EcrituresRapproBancaire();

        $obj->setJourEcriture("jourEcriture");
        $this->assertEquals("jourEcriture", $obj->getJourEcriture());
    }

    /**
     * Tests the setJrnRapproBancaire() method.
     *
     * @return void
     */
    public function testSetJrnRapproBancaire() {

        $obj = new EcrituresRapproBancaire();

        $obj->setJrnRapproBancaire("jrnRapproBancaire");
        $this->assertEquals("jrnRapproBancaire", $obj->getJrnRapproBancaire());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle() {

        $obj = new EcrituresRapproBancaire();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setMontantSaisiCredit() method.
     *
     * @return void
     */
    public function testSetMontantSaisiCredit() {

        $obj = new EcrituresRapproBancaire();

        $obj->setMontantSaisiCredit(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSaisiCredit());
    }

    /**
     * Tests the setMontantSaisiDebit() method.
     *
     * @return void
     */
    public function testSetMontantSaisiDebit() {

        $obj = new EcrituresRapproBancaire();

        $obj->setMontantSaisiDebit(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSaisiDebit());
    }

    /**
     * Tests the setMontantTenuCredit() method.
     *
     * @return void
     */
    public function testSetMontantTenuCredit() {

        $obj = new EcrituresRapproBancaire();

        $obj->setMontantTenuCredit(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantTenuCredit());
    }

    /**
     * Tests the setMontantTenuDebit() method.
     *
     * @return void
     */
    public function testSetMontantTenuDebit() {

        $obj = new EcrituresRapproBancaire();

        $obj->setMontantTenuDebit(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantTenuDebit());
    }

    /**
     * Tests the setNumUniq() method.
     *
     * @return void
     */
    public function testSetNumUniq() {

        $obj = new EcrituresRapproBancaire();

        $obj->setNumUniq(10);
        $this->assertEquals(10, $obj->getNumUniq());
    }

    /**
     * Tests the setNumeroPiece() method.
     *
     * @return void
     */
    public function testSetNumeroPiece() {

        $obj = new EcrituresRapproBancaire();

        $obj->setNumeroPiece("numeroPiece");
        $this->assertEquals("numeroPiece", $obj->getNumeroPiece());
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

        $obj = new EcrituresRapproBancaire();

        $obj->setPeriodeEcriture($periodeEcriture);
        $this->assertSame($periodeEcriture, $obj->getPeriodeEcriture());
    }

    /**
     * Tests the setRapproBancaireOk() method.
     *
     * @return void
     */
    public function testSetRapproBancaireOk() {

        $obj = new EcrituresRapproBancaire();

        $obj->setRapproBancaireOk(true);
        $this->assertEquals(true, $obj->getRapproBancaireOk());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new EcrituresRapproBancaire();

        $this->assertNull($obj->getCodeDevise());
        $this->assertNull($obj->getDateRapproBancaire());
        $this->assertNull($obj->getJourEcriture());
        $this->assertNull($obj->getJrnRapproBancaire());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getMontantSaisiCredit());
        $this->assertNull($obj->getMontantSaisiDebit());
        $this->assertNull($obj->getMontantTenuCredit());
        $this->assertNull($obj->getMontantTenuDebit());
        $this->assertNull($obj->getNumUniq());
        $this->assertNull($obj->getNumeroPiece());
        $this->assertNull($obj->getPeriodeEcriture());
        $this->assertNull($obj->getRapproBancaireOk());
    }
}
