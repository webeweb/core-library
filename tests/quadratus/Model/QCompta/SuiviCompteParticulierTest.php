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
use WBW\Library\Quadratus\Model\QCompta\SuiviCompteParticulier;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Suivi compte particulier test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class SuiviCompteParticulierTest extends AbstractTestCase {

    /**
     * Tests the setCodeJournal() method.
     *
     * @return void
     */
    public function testSetCodeJournal(): void {

        $obj = new SuiviCompteParticulier();

        $obj->setCodeJournal("codeJournal");
        $this->assertEquals("codeJournal", $obj->getCodeJournal());
    }

    /**
     * Tests the setCodeLettrage() method.
     *
     * @return void
     */
    public function testSetCodeLettrage(): void {

        $obj = new SuiviCompteParticulier();

        $obj->setCodeLettrage("codeLettrage");
        $this->assertEquals("codeLettrage", $obj->getCodeLettrage());
    }

    /**
     * Tests the setCodeLibelleAuto() method.
     *
     * @return void
     */
    public function testSetCodeLibelleAuto(): void {

        $obj = new SuiviCompteParticulier();

        $obj->setCodeLibelleAuto("codeLibelleAuto");
        $this->assertEquals("codeLibelleAuto", $obj->getCodeLibelleAuto());
    }

    /**
     * Tests the setCodeOperateur() method.
     *
     * @return void
     */
    public function testSetCodeOperateur(): void {

        $obj = new SuiviCompteParticulier();

        $obj->setCodeOperateur("codeOperateur");
        $this->assertEquals("codeOperateur", $obj->getCodeOperateur());
    }

    /**
     * Tests the setDateOperation() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateOperation(): void {

        // Set a Date/time mock.
        $dateOperation = new DateTime("2018-09-10");

        $obj = new SuiviCompteParticulier();

        $obj->setDateOperation($dateOperation);
        $this->assertSame($dateOperation, $obj->getDateOperation());
    }

    /**
     * Tests the setFolio() method.
     *
     * @return void
     */
    public function testSetFolio(): void {

        $obj = new SuiviCompteParticulier();

        $obj->setFolio(10);
        $this->assertEquals(10, $obj->getFolio());
    }

    /**
     * Tests the setJourEcriture() method.
     *
     * @return void
     */
    public function testSetJourEcriture(): void {

        $obj = new SuiviCompteParticulier();

        $obj->setJourEcriture("jourEcriture");
        $this->assertEquals("jourEcriture", $obj->getJourEcriture());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new SuiviCompteParticulier();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setLigneFolio() method.
     *
     * @return void
     */
    public function testSetLigneFolio(): void {

        $obj = new SuiviCompteParticulier();

        $obj->setLigneFolio(10);
        $this->assertEquals(10, $obj->getLigneFolio());
    }

    /**
     * Tests the setMontantTenuCredit() method.
     *
     * @return void
     */
    public function testSetMontantTenuCredit(): void {

        $obj = new SuiviCompteParticulier();

        $obj->setMontantTenuCredit(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantTenuCredit());
    }

    /**
     * Tests the setMontantTenuDebit() method.
     *
     * @return void
     */
    public function testSetMontantTenuDebit(): void {

        $obj = new SuiviCompteParticulier();

        $obj->setMontantTenuDebit(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantTenuDebit());
    }

    /**
     * Tests the setNumUniq() method.
     *
     * @return void
     */
    public function testSetNumUniq(): void {

        $obj = new SuiviCompteParticulier();

        $obj->setNumUniq(10);
        $this->assertEquals(10, $obj->getNumUniq());
    }

    /**
     * Tests the setNumeroCompte() method.
     *
     * @return void
     */
    public function testSetNumeroCompte(): void {

        $obj = new SuiviCompteParticulier();

        $obj->setNumeroCompte("numeroCompte");
        $this->assertEquals("numeroCompte", $obj->getNumeroCompte());
    }

    /**
     * Tests the setNumeroPiece() method.
     *
     * @return void
     */
    public function testSetNumeroPiece(): void {

        $obj = new SuiviCompteParticulier();

        $obj->setNumeroPiece("numeroPiece");
        $this->assertEquals("numeroPiece", $obj->getNumeroPiece());
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

        $obj = new SuiviCompteParticulier();

        $obj->setPeriodeEcriture($periodeEcriture);
        $this->assertSame($periodeEcriture, $obj->getPeriodeEcriture());
    }

    /**
     * Tests the setTypeLigne() method.
     *
     * @return void
     */
    public function testSetTypeLigne(): void {

        $obj = new SuiviCompteParticulier();

        $obj->setTypeLigne("typeLigne");
        $this->assertEquals("typeLigne", $obj->getTypeLigne());
    }

    /**
     * Tests the setTypeOperation() method.
     *
     * @return void
     */
    public function testSetTypeOperation(): void {

        $obj = new SuiviCompteParticulier();

        $obj->setTypeOperation("typeOperation");
        $this->assertEquals("typeOperation", $obj->getTypeOperation());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new SuiviCompteParticulier();

        $this->assertNull($obj->getCodeJournal());
        $this->assertNull($obj->getCodeLettrage());
        $this->assertNull($obj->getCodeLibelleAuto());
        $this->assertNull($obj->getCodeOperateur());
        $this->assertNull($obj->getDateOperation());
        $this->assertNull($obj->getFolio());
        $this->assertNull($obj->getJourEcriture());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getLigneFolio());
        $this->assertNull($obj->getMontantTenuCredit());
        $this->assertNull($obj->getMontantTenuDebit());
        $this->assertNull($obj->getNumUniq());
        $this->assertNull($obj->getNumeroCompte());
        $this->assertNull($obj->getNumeroPiece());
        $this->assertNull($obj->getPeriodeEcriture());
        $this->assertNull($obj->getTypeLigne());
        $this->assertNull($obj->getTypeOperation());
    }
}
