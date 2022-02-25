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
use WBW\Library\Quadratus\Model\QCompta\EcrituresRapproBancaire;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Ecritures rappro bancaire test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class EcrituresRapproBancaireTest extends AbstractTestCase {

    /**
     * Tests setCodeDevise()
     *
     * @return void
     */
    public function testSetCodeDevise(): void {

        $obj = new EcrituresRapproBancaire();

        $obj->setCodeDevise("codeDevise");
        $this->assertEquals("codeDevise", $obj->getCodeDevise());
    }

    /**
     * Tests setDateRapproBancaire()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateRapproBancaire(): void {

        // Set a Date/time mock.
        $dateRapproBancaire = new DateTime("2018-09-10");

        $obj = new EcrituresRapproBancaire();

        $obj->setDateRapproBancaire($dateRapproBancaire);
        $this->assertSame($dateRapproBancaire, $obj->getDateRapproBancaire());
    }

    /**
     * Tests setJourEcriture()
     *
     * @return void
     */
    public function testSetJourEcriture(): void {

        $obj = new EcrituresRapproBancaire();

        $obj->setJourEcriture("jourEcriture");
        $this->assertEquals("jourEcriture", $obj->getJourEcriture());
    }

    /**
     * Tests setJrnRapproBancaire()
     *
     * @return void
     */
    public function testSetJrnRapproBancaire(): void {

        $obj = new EcrituresRapproBancaire();

        $obj->setJrnRapproBancaire("jrnRapproBancaire");
        $this->assertEquals("jrnRapproBancaire", $obj->getJrnRapproBancaire());
    }

    /**
     * Tests setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new EcrituresRapproBancaire();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests setMontantSaisiCredit()
     *
     * @return void
     */
    public function testSetMontantSaisiCredit(): void {

        $obj = new EcrituresRapproBancaire();

        $obj->setMontantSaisiCredit(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSaisiCredit());
    }

    /**
     * Tests setMontantSaisiDebit()
     *
     * @return void
     */
    public function testSetMontantSaisiDebit(): void {

        $obj = new EcrituresRapproBancaire();

        $obj->setMontantSaisiDebit(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSaisiDebit());
    }

    /**
     * Tests setMontantTenuCredit()
     *
     * @return void
     */
    public function testSetMontantTenuCredit(): void {

        $obj = new EcrituresRapproBancaire();

        $obj->setMontantTenuCredit(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantTenuCredit());
    }

    /**
     * Tests setMontantTenuDebit()
     *
     * @return void
     */
    public function testSetMontantTenuDebit(): void {

        $obj = new EcrituresRapproBancaire();

        $obj->setMontantTenuDebit(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantTenuDebit());
    }

    /**
     * Tests setNumUniq()
     *
     * @return void
     */
    public function testSetNumUniq(): void {

        $obj = new EcrituresRapproBancaire();

        $obj->setNumUniq(10);
        $this->assertEquals(10, $obj->getNumUniq());
    }

    /**
     * Tests setNumeroPiece()
     *
     * @return void
     */
    public function testSetNumeroPiece(): void {

        $obj = new EcrituresRapproBancaire();

        $obj->setNumeroPiece("numeroPiece");
        $this->assertEquals("numeroPiece", $obj->getNumeroPiece());
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

        $obj = new EcrituresRapproBancaire();

        $obj->setPeriodeEcriture($periodeEcriture);
        $this->assertSame($periodeEcriture, $obj->getPeriodeEcriture());
    }

    /**
     * Tests setRapproBancaireOk()
     *
     * @return void
     */
    public function testSetRapproBancaireOk(): void {

        $obj = new EcrituresRapproBancaire();

        $obj->setRapproBancaireOk(true);
        $this->assertEquals(true, $obj->getRapproBancaireOk());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

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
