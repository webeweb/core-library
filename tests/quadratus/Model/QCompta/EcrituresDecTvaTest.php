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
use WBW\Library\Quadratus\Model\QCompta\EcrituresDecTva;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Ecritures dec tva test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class EcrituresDecTvaTest extends AbstractTestCase {

    /**
     * Tests setCodeTva()
     *
     * @return void
     */
    public function testSetCodeTva(): void {

        $obj = new EcrituresDecTva();

        $obj->setCodeTva(10);
        $this->assertEquals(10, $obj->getCodeTva());
    }

    /**
     * Tests setDateDecTva()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDecTva(): void {

        // Set a Date/time mock.
        $dateDecTva = new DateTime("2018-09-10");

        $obj = new EcrituresDecTva();

        $obj->setDateDecTva($dateDecTva);
        $this->assertSame($dateDecTva, $obj->getDateDecTva());
    }

    /**
     * Tests setJourEcriture()
     *
     * @return void
     */
    public function testSetJourEcriture(): void {

        $obj = new EcrituresDecTva();

        $obj->setJourEcriture("jourEcriture");
        $this->assertEquals("jourEcriture", $obj->getJourEcriture());
    }

    /**
     * Tests setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new EcrituresDecTva();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests setMontantHt()
     *
     * @return void
     */
    public function testSetMontantHt(): void {

        $obj = new EcrituresDecTva();

        $obj->setMontantHt(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantHt());
    }

    /**
     * Tests setNumUniq()
     *
     * @return void
     */
    public function testSetNumUniq(): void {

        $obj = new EcrituresDecTva();

        $obj->setNumUniq(10);
        $this->assertEquals(10, $obj->getNumUniq());
    }

    /**
     * Tests setNumeroCompte()
     *
     * @return void
     */
    public function testSetNumeroCompte(): void {

        $obj = new EcrituresDecTva();

        $obj->setNumeroCompte("numeroCompte");
        $this->assertEquals("numeroCompte", $obj->getNumeroCompte());
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

        $obj = new EcrituresDecTva();

        $obj->setPeriodeEcriture($periodeEcriture);
        $this->assertSame($periodeEcriture, $obj->getPeriodeEcriture());
    }

    /**
     * Tests setTypeCdi()
     *
     * @return void
     */
    public function testSetTypeCdi(): void {

        $obj = new EcrituresDecTva();

        $obj->setTypeCdi("typeCdi");
        $this->assertEquals("typeCdi", $obj->getTypeCdi());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new EcrituresDecTva();

        $this->assertNull($obj->getCodeTva());
        $this->assertNull($obj->getDateDecTva());
        $this->assertNull($obj->getJourEcriture());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getMontantHt());
        $this->assertNull($obj->getNumUniq());
        $this->assertNull($obj->getNumeroCompte());
        $this->assertNull($obj->getPeriodeEcriture());
        $this->assertNull($obj->getTypeCdi());
    }
}
