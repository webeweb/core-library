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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\SuiviCompteParticulier;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Suivi compte particulier model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class SuiviCompteParticulierTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

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

    /**
     * Tests the setCodeJournal() method.
     *
     * @return void
     */
    public function testSetCodeJournal() {

        $obj = new SuiviCompteParticulier();

        $obj->setCodeJournal("codeJournal");
        $this->assertEquals("codeJournal", $obj->getCodeJournal());
    }

    /**
     * Tests the setCodeLettrage() method.
     *
     * @return void
     */
    public function testSetCodeLettrage() {

        $obj = new SuiviCompteParticulier();

        $obj->setCodeLettrage("codeLettrage");
        $this->assertEquals("codeLettrage", $obj->getCodeLettrage());
    }

    /**
     * Tests the setCodeLibelleAuto() method.
     *
     * @return void
     */
    public function testSetCodeLibelleAuto() {

        $obj = new SuiviCompteParticulier();

        $obj->setCodeLibelleAuto("codeLibelleAuto");
        $this->assertEquals("codeLibelleAuto", $obj->getCodeLibelleAuto());
    }

    /**
     * Tests the setCodeOperateur() method.
     *
     * @return void
     */
    public function testSetCodeOperateur() {

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
    public function testSetDateOperation() {

        $obj = new SuiviCompteParticulier();

        $obj->setDateOperation(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateOperation());
    }

    /**
     * Tests the setFolio() method.
     *
     * @return void
     */
    public function testSetFolio() {

        $obj = new SuiviCompteParticulier();

        $obj->setFolio(10);
        $this->assertEquals(10, $obj->getFolio());
    }

    /**
     * Tests the setJourEcriture() method.
     *
     * @return void
     */
    public function testSetJourEcriture() {

        $obj = new SuiviCompteParticulier();

        $obj->setJourEcriture("jourEcriture");
        $this->assertEquals("jourEcriture", $obj->getJourEcriture());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle() {

        $obj = new SuiviCompteParticulier();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setLigneFolio() method.
     *
     * @return void
     */
    public function testSetLigneFolio() {

        $obj = new SuiviCompteParticulier();

        $obj->setLigneFolio(10);
        $this->assertEquals(10, $obj->getLigneFolio());
    }

    /**
     * Tests the setMontantTenuCredit() method.
     *
     * @return void
     */
    public function testSetMontantTenuCredit() {

        $obj = new SuiviCompteParticulier();

        $obj->setMontantTenuCredit(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantTenuCredit());
    }

    /**
     * Tests the setMontantTenuDebit() method.
     *
     * @return void
     */
    public function testSetMontantTenuDebit() {

        $obj = new SuiviCompteParticulier();

        $obj->setMontantTenuDebit(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantTenuDebit());
    }

    /**
     * Tests the setNumUniq() method.
     *
     * @return void
     */
    public function testSetNumUniq() {

        $obj = new SuiviCompteParticulier();

        $obj->setNumUniq(10);
        $this->assertEquals(10, $obj->getNumUniq());
    }

    /**
     * Tests the setNumeroCompte() method.
     *
     * @return void
     */
    public function testSetNumeroCompte() {

        $obj = new SuiviCompteParticulier();

        $obj->setNumeroCompte("numeroCompte");
        $this->assertEquals("numeroCompte", $obj->getNumeroCompte());
    }

    /**
     * Tests the setNumeroPiece() method.
     *
     * @return void
     */
    public function testSetNumeroPiece() {

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
    public function testSetPeriodeEcriture() {

        $obj = new SuiviCompteParticulier();

        $obj->setPeriodeEcriture(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeEcriture());
    }

    /**
     * Tests the setTypeLigne() method.
     *
     * @return void
     */
    public function testSetTypeLigne() {

        $obj = new SuiviCompteParticulier();

        $obj->setTypeLigne("typeLigne");
        $this->assertEquals("typeLigne", $obj->getTypeLigne());
    }

    /**
     * Tests the setTypeOperation() method.
     *
     * @return void
     */
    public function testSetTypeOperation() {

        $obj = new SuiviCompteParticulier();

        $obj->setTypeOperation("typeOperation");
        $this->assertEquals("typeOperation", $obj->getTypeOperation());
    }
}
