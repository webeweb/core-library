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
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\HeuresEffectuees;

/**
 * Heures effectuees model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class HeuresEffectueesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new HeuresEffectuees();

        $this->assertNull($obj->getDateJour());
        $this->assertNull($obj->getHDebAM());
        $this->assertNull($obj->getHDebPM());
        $this->assertNull($obj->getHFinAM());
        $this->assertNull($obj->getHFinPM());
        $this->assertNull($obj->getNbHAbsenceCp());
        $this->assertNull($obj->getNbHJFNT());
        $this->assertNull($obj->getNbHMajo());
        $this->assertNull($obj->getNbHNuit());
        $this->assertNull($obj->getNbHReposCompPris());
        $this->assertNull($obj->getNbHReposRemplacePris());
        $this->assertNull($obj->getNbHTravailReel());
        $this->assertNull($obj->getNbJReposRecupPris());
        $this->assertNull($obj->getNbJourCpPris());
        $this->assertNull($obj->getNumeroEmploye());
    }

    /**
     * Tests the setDateJour() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateJour() {

        $obj = new HeuresEffectuees();

        $obj->setDateJour(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateJour());
    }

    /**
     * Tests the setHDebAM() method.
     *
     * @return void
     */
    public function testSetHDebAM() {

        $obj = new HeuresEffectuees();

        $obj->setHDebAM("hDebAM");
        $this->assertEquals("hDebAM", $obj->getHDebAM());
    }

    /**
     * Tests the setHDebPM() method.
     *
     * @return void
     */
    public function testSetHDebPM() {

        $obj = new HeuresEffectuees();

        $obj->setHDebPM("hDebPM");
        $this->assertEquals("hDebPM", $obj->getHDebPM());
    }

    /**
     * Tests the setHFinAM() method.
     *
     * @return void
     */
    public function testSetHFinAM() {

        $obj = new HeuresEffectuees();

        $obj->setHFinAM("hFinAM");
        $this->assertEquals("hFinAM", $obj->getHFinAM());
    }

    /**
     * Tests the setHFinPM() method.
     *
     * @return void
     */
    public function testSetHFinPM() {

        $obj = new HeuresEffectuees();

        $obj->setHFinPM("hFinPM");
        $this->assertEquals("hFinPM", $obj->getHFinPM());
    }

    /**
     * Tests the setNbHAbsenceCp() method.
     *
     * @return void
     */
    public function testSetNbHAbsenceCp() {

        $obj = new HeuresEffectuees();

        $obj->setNbHAbsenceCp(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHAbsenceCp());
    }

    /**
     * Tests the setNbHJFNT() method.
     *
     * @return void
     */
    public function testSetNbHJFNT() {

        $obj = new HeuresEffectuees();

        $obj->setNbHJFNT(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHJFNT());
    }

    /**
     * Tests the setNbHMajo() method.
     *
     * @return void
     */
    public function testSetNbHMajo() {

        $obj = new HeuresEffectuees();

        $obj->setNbHMajo(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHMajo());
    }

    /**
     * Tests the setNbHNuit() method.
     *
     * @return void
     */
    public function testSetNbHNuit() {

        $obj = new HeuresEffectuees();

        $obj->setNbHNuit(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHNuit());
    }

    /**
     * Tests the setNbHReposCompPris() method.
     *
     * @return void
     */
    public function testSetNbHReposCompPris() {

        $obj = new HeuresEffectuees();

        $obj->setNbHReposCompPris(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHReposCompPris());
    }

    /**
     * Tests the setNbHReposRemplacePris() method.
     *
     * @return void
     */
    public function testSetNbHReposRemplacePris() {

        $obj = new HeuresEffectuees();

        $obj->setNbHReposRemplacePris(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHReposRemplacePris());
    }

    /**
     * Tests the setNbHTravailReel() method.
     *
     * @return void
     */
    public function testSetNbHTravailReel() {

        $obj = new HeuresEffectuees();

        $obj->setNbHTravailReel(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHTravailReel());
    }

    /**
     * Tests the setNbJReposRecupPris() method.
     *
     * @return void
     */
    public function testSetNbJReposRecupPris() {

        $obj = new HeuresEffectuees();

        $obj->setNbJReposRecupPris(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJReposRecupPris());
    }

    /**
     * Tests the setNbJourCpPris() method.
     *
     * @return void
     */
    public function testSetNbJourCpPris() {

        $obj = new HeuresEffectuees();

        $obj->setNbJourCpPris(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourCpPris());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye() {

        $obj = new HeuresEffectuees();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }
}
