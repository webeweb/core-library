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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\EcrituresDecTva;

/**
 * Ecritures dec tva test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class EcrituresDecTvaTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

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

    /**
     * Tests the setCodeTva() method.
     *
     * @return void
     */
    public function testSetCodeTva() {

        $obj = new EcrituresDecTva();

        $obj->setCodeTva(10);
        $this->assertEquals(10, $obj->getCodeTva());
    }

    /**
     * Tests the setDateDecTva() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDecTva() {

        // Set a Date/time mock.
        $dateDecTva = new DateTime("2018-09-10");

        $obj = new EcrituresDecTva();

        $obj->setDateDecTva($dateDecTva);
        $this->assertSame($dateDecTva, $obj->getDateDecTva());
    }

    /**
     * Tests the setJourEcriture() method.
     *
     * @return void
     */
    public function testSetJourEcriture() {

        $obj = new EcrituresDecTva();

        $obj->setJourEcriture("jourEcriture");
        $this->assertEquals("jourEcriture", $obj->getJourEcriture());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle() {

        $obj = new EcrituresDecTva();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setMontantHt() method.
     *
     * @return void
     */
    public function testSetMontantHt() {

        $obj = new EcrituresDecTva();

        $obj->setMontantHt(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantHt());
    }

    /**
     * Tests the setNumUniq() method.
     *
     * @return void
     */
    public function testSetNumUniq() {

        $obj = new EcrituresDecTva();

        $obj->setNumUniq(10);
        $this->assertEquals(10, $obj->getNumUniq());
    }

    /**
     * Tests the setNumeroCompte() method.
     *
     * @return void
     */
    public function testSetNumeroCompte() {

        $obj = new EcrituresDecTva();

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

        $obj = new EcrituresDecTva();

        $obj->setPeriodeEcriture($periodeEcriture);
        $this->assertSame($periodeEcriture, $obj->getPeriodeEcriture());
    }

    /**
     * Tests the setTypeCdi() method.
     *
     * @return void
     */
    public function testSetTypeCdi() {

        $obj = new EcrituresDecTva();

        $obj->setTypeCdi("typeCdi");
        $this->assertEquals("typeCdi", $obj->getTypeCdi());
    }
}
