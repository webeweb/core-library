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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\EcrituresDecTVA;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * Ecritures dec t v a model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class EcrituresDecTVATest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new EcrituresDecTVA();

        $this->assertNull($obj->getCodeTva());
        $this->assertNull($obj->getDateDecTVA());
        $this->assertNull($obj->getJourEcriture());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getMontantHT());
        $this->assertNull($obj->getNumUniq());
        $this->assertNull($obj->getNumeroCompte());
        $this->assertNull($obj->getPeriodeEcriture());
        $this->assertNull($obj->getTypeCDI());
    }

    /**
     * Tests the setCodeTva() method.
     *
     * @return void
     */
    public function testSetCodeTva() {

        $obj = new EcrituresDecTVA();

        $obj->setCodeTva(10);
        $this->assertEquals(10, $obj->getCodeTva());
    }

    /**
     * Tests the setDateDecTVA() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDecTVA() {

        $obj = new EcrituresDecTVA();

        $obj->setDateDecTVA(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateDecTVA());
    }

    /**
     * Tests the setJourEcriture() method.
     *
     * @return void
     */
    public function testSetJourEcriture() {

        $obj = new EcrituresDecTVA();

        $obj->setJourEcriture("jourEcriture");
        $this->assertEquals("jourEcriture", $obj->getJourEcriture());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle() {

        $obj = new EcrituresDecTVA();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setMontantHT() method.
     *
     * @return void
     */
    public function testSetMontantHT() {

        $obj = new EcrituresDecTVA();

        $obj->setMontantHT(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantHT());
    }

    /**
     * Tests the setNumUniq() method.
     *
     * @return void
     */
    public function testSetNumUniq() {

        $obj = new EcrituresDecTVA();

        $obj->setNumUniq(10);
        $this->assertEquals(10, $obj->getNumUniq());
    }

    /**
     * Tests the setNumeroCompte() method.
     *
     * @return void
     */
    public function testSetNumeroCompte() {

        $obj = new EcrituresDecTVA();

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

        $obj = new EcrituresDecTVA();

        $obj->setPeriodeEcriture(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeEcriture());
    }

    /**
     * Tests the setTypeCDI() method.
     *
     * @return void
     */
    public function testSetTypeCDI() {

        $obj = new EcrituresDecTVA();

        $obj->setTypeCDI("typeCDI");
        $this->assertEquals("typeCDI", $obj->getTypeCDI());
    }
}
