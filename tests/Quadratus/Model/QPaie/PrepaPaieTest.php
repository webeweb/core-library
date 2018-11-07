<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\QPaie;

use DateTime;
use WBW\Library\Core\Quadratus\Model\QPaie\PrepaPaie;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Prepa paie model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 */
class PrepaPaieTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new PrepaPaie();

        $this->assertNull($obj->getCpPris());
        $this->assertNull($obj->getHMajoAcquis());
        $this->assertNull($obj->getHMajoPris());
        $this->assertNull($obj->getHSupAComptabiliserRC());
        $this->assertNull($obj->getHSupAComptabiliserRCIT());
        $this->assertNull($obj->getHSupBonif());
        $this->assertNull($obj->getHorairePrevu());
        $this->assertNull($obj->getNbHComp());
        $this->assertNull($obj->getNbHNuit());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getPourcentHBonif());
        $this->assertNull($obj->getRCAcquis());
        $this->assertNull($obj->getRCPris());
        $this->assertNull($obj->getRRAcquis());
        $this->assertNull($obj->getRRPris());
        $this->assertNull($obj->getRRecupAcquis());
        $this->assertNull($obj->getRRecupPris());
        $this->assertNull($obj->getSemaine());
        $this->assertNull($obj->getTotRealise());
        $this->assertNull($obj->getTravailEffectif());
    }

    /**
     * Tests the setCpPris() method.
     *
     * @return void
     */
    public function testSetCpPris() {

        $obj = new PrepaPaie();

        $obj->setCpPris(10.092018);
        $this->assertEquals(10.092018, $obj->getCpPris());
    }

    /**
     * Tests the setHMajoAcquis() method.
     *
     * @return void
     */
    public function testSetHMajoAcquis() {

        $obj = new PrepaPaie();

        $obj->setHMajoAcquis(10.092018);
        $this->assertEquals(10.092018, $obj->getHMajoAcquis());
    }

    /**
     * Tests the setHMajoPris() method.
     *
     * @return void
     */
    public function testSetHMajoPris() {

        $obj = new PrepaPaie();

        $obj->setHMajoPris(10.092018);
        $this->assertEquals(10.092018, $obj->getHMajoPris());
    }

    /**
     * Tests the setHSupAComptabiliserRC() method.
     *
     * @return void
     */
    public function testSetHSupAComptabiliserRC() {

        $obj = new PrepaPaie();

        $obj->setHSupAComptabiliserRC(10.092018);
        $this->assertEquals(10.092018, $obj->getHSupAComptabiliserRC());
    }

    /**
     * Tests the setHSupAComptabiliserRCIT() method.
     *
     * @return void
     */
    public function testSetHSupAComptabiliserRCIT() {

        $obj = new PrepaPaie();

        $obj->setHSupAComptabiliserRCIT(10.092018);
        $this->assertEquals(10.092018, $obj->getHSupAComptabiliserRCIT());
    }

    /**
     * Tests the setHSupBonif() method.
     *
     * @return void
     */
    public function testSetHSupBonif() {

        $obj = new PrepaPaie();

        $obj->setHSupBonif(10.092018);
        $this->assertEquals(10.092018, $obj->getHSupBonif());
    }

    /**
     * Tests the setHorairePrevu() method.
     *
     * @return void
     */
    public function testSetHorairePrevu() {

        $obj = new PrepaPaie();

        $obj->setHorairePrevu(10.092018);
        $this->assertEquals(10.092018, $obj->getHorairePrevu());
    }

    /**
     * Tests the setNbHComp() method.
     *
     * @return void
     */
    public function testSetNbHComp() {

        $obj = new PrepaPaie();

        $obj->setNbHComp(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHComp());
    }

    /**
     * Tests the setNbHNuit() method.
     *
     * @return void
     */
    public function testSetNbHNuit() {

        $obj = new PrepaPaie();

        $obj->setNbHNuit(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHNuit());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye() {

        $obj = new PrepaPaie();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     */
    public function testSetPeriode() {

        $obj = new PrepaPaie();

        $obj->setPeriode(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriode());
    }

    /**
     * Tests the setPourcentHBonif() method.
     *
     * @return void
     */
    public function testSetPourcentHBonif() {

        $obj = new PrepaPaie();

        $obj->setPourcentHBonif(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentHBonif());
    }

    /**
     * Tests the setRCAcquis() method.
     *
     * @return void
     */
    public function testSetRCAcquis() {

        $obj = new PrepaPaie();

        $obj->setRCAcquis(10.092018);
        $this->assertEquals(10.092018, $obj->getRCAcquis());
    }

    /**
     * Tests the setRCPris() method.
     *
     * @return void
     */
    public function testSetRCPris() {

        $obj = new PrepaPaie();

        $obj->setRCPris(10.092018);
        $this->assertEquals(10.092018, $obj->getRCPris());
    }

    /**
     * Tests the setRRAcquis() method.
     *
     * @return void
     */
    public function testSetRRAcquis() {

        $obj = new PrepaPaie();

        $obj->setRRAcquis(10.092018);
        $this->assertEquals(10.092018, $obj->getRRAcquis());
    }

    /**
     * Tests the setRRPris() method.
     *
     * @return void
     */
    public function testSetRRPris() {

        $obj = new PrepaPaie();

        $obj->setRRPris(10.092018);
        $this->assertEquals(10.092018, $obj->getRRPris());
    }

    /**
     * Tests the setRRecupAcquis() method.
     *
     * @return void
     */
    public function testSetRRecupAcquis() {

        $obj = new PrepaPaie();

        $obj->setRRecupAcquis(10.092018);
        $this->assertEquals(10.092018, $obj->getRRecupAcquis());
    }

    /**
     * Tests the setRRecupPris() method.
     *
     * @return void
     */
    public function testSetRRecupPris() {

        $obj = new PrepaPaie();

        $obj->setRRecupPris(10.092018);
        $this->assertEquals(10.092018, $obj->getRRecupPris());
    }

    /**
     * Tests the setSemaine() method.
     *
     * @return void
     */
    public function testSetSemaine() {

        $obj = new PrepaPaie();

        $obj->setSemaine("semaine");
        $this->assertEquals("semaine", $obj->getSemaine());
    }

    /**
     * Tests the setTotRealise() method.
     *
     * @return void
     */
    public function testSetTotRealise() {

        $obj = new PrepaPaie();

        $obj->setTotRealise(10.092018);
        $this->assertEquals(10.092018, $obj->getTotRealise());
    }

    /**
     * Tests the setTravailEffectif() method.
     *
     * @return void
     */
    public function testSetTravailEffectif() {

        $obj = new PrepaPaie();

        $obj->setTravailEffectif(10.092018);
        $this->assertEquals(10.092018, $obj->getTravailEffectif());
    }

}
