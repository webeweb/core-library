<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\SaisieArret;

/**
 * Saisie arret model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class SaisieArretTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new SaisieArret();

        $this->assertNull($obj->getDtCourrier());
        $this->assertNull($obj->getDtDebutSaisie());
        $this->assertNull($obj->getDtFinSaisie());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getMtCreance());
        $this->assertNull($obj->getMtDejaPaye());
        $this->assertNull($obj->getNbACharge());
        $this->assertNull($obj->getNomTribunal());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getTypeSaisie());
    }

    /**
     * Tests the setDtCourrier() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtCourrier() {

        $obj = new SaisieArret();

        $obj->setDtCourrier(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDtCourrier());
    }

    /**
     * Tests the setDtDebutSaisie() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtDebutSaisie() {

        $obj = new SaisieArret();

        $obj->setDtDebutSaisie(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDtDebutSaisie());
    }

    /**
     * Tests the setDtFinSaisie() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtFinSaisie() {

        $obj = new SaisieArret();

        $obj->setDtFinSaisie(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDtFinSaisie());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle() {

        $obj = new SaisieArret();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setMtCreance() method.
     *
     * @return void
     */
    public function testSetMtCreance() {

        $obj = new SaisieArret();

        $obj->setMtCreance(10.092018);
        $this->assertEquals(10.092018, $obj->getMtCreance());
    }

    /**
     * Tests the setMtDejaPaye() method.
     *
     * @return void
     */
    public function testSetMtDejaPaye() {

        $obj = new SaisieArret();

        $obj->setMtDejaPaye(10.092018);
        $this->assertEquals(10.092018, $obj->getMtDejaPaye());
    }

    /**
     * Tests the setNbACharge() method.
     *
     * @return void
     */
    public function testSetNbACharge() {

        $obj = new SaisieArret();

        $obj->setNbACharge("nbACharge");
        $this->assertEquals("nbACharge", $obj->getNbACharge());
    }

    /**
     * Tests the setNomTribunal() method.
     *
     * @return void
     */
    public function testSetNomTribunal() {

        $obj = new SaisieArret();

        $obj->setNomTribunal("nomTribunal");
        $this->assertEquals("nomTribunal", $obj->getNomTribunal());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye() {

        $obj = new SaisieArret();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setTypeSaisie() method.
     *
     * @return void
     */
    public function testSetTypeSaisie() {

        $obj = new SaisieArret();

        $obj->setTypeSaisie("typeSaisie");
        $this->assertEquals("typeSaisie", $obj->getTypeSaisie());
    }
}
