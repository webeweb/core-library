<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QPaie\HeuresEffectuees;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Heures effectuees test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class HeuresEffectueesTest extends AbstractTestCase {

    /**
     * Tests setDateJour()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateJour(): void {

        // Set a Date/time mock.
        $dateJour = new DateTime("2018-09-10");

        $obj = new HeuresEffectuees();

        $obj->setDateJour($dateJour);
        $this->assertSame($dateJour, $obj->getDateJour());
    }

    /**
     * Tests setHDebAm()
     *
     * @return void
     */
    public function testSetHDebAm(): void {

        $obj = new HeuresEffectuees();

        $obj->setHDebAm("hDebAm");
        $this->assertEquals("hDebAm", $obj->getHDebAm());
    }

    /**
     * Tests setHDebPm()
     *
     * @return void
     */
    public function testSetHDebPm(): void {

        $obj = new HeuresEffectuees();

        $obj->setHDebPm("hDebPm");
        $this->assertEquals("hDebPm", $obj->getHDebPm());
    }

    /**
     * Tests setHFinAm()
     *
     * @return void
     */
    public function testSetHFinAm(): void {

        $obj = new HeuresEffectuees();

        $obj->setHFinAm("hFinAm");
        $this->assertEquals("hFinAm", $obj->getHFinAm());
    }

    /**
     * Tests setHFinPm()
     *
     * @return void
     */
    public function testSetHFinPm(): void {

        $obj = new HeuresEffectuees();

        $obj->setHFinPm("hFinPm");
        $this->assertEquals("hFinPm", $obj->getHFinPm());
    }

    /**
     * Tests setNbHAbsenceCp()
     *
     * @return void
     */
    public function testSetNbHAbsenceCp(): void {

        $obj = new HeuresEffectuees();

        $obj->setNbHAbsenceCp(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHAbsenceCp());
    }

    /**
     * Tests setNbHMajo()
     *
     * @return void
     */
    public function testSetNbHMajo(): void {

        $obj = new HeuresEffectuees();

        $obj->setNbHMajo(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHMajo());
    }

    /**
     * Tests setNbHNuit()
     *
     * @return void
     */
    public function testSetNbHNuit(): void {

        $obj = new HeuresEffectuees();

        $obj->setNbHNuit(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHNuit());
    }

    /**
     * Tests setNbHReposCompPris()
     *
     * @return void
     */
    public function testSetNbHReposCompPris(): void {

        $obj = new HeuresEffectuees();

        $obj->setNbHReposCompPris(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHReposCompPris());
    }

    /**
     * Tests setNbHReposRemplacePris()
     *
     * @return void
     */
    public function testSetNbHReposRemplacePris(): void {

        $obj = new HeuresEffectuees();

        $obj->setNbHReposRemplacePris(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHReposRemplacePris());
    }

    /**
     * Tests setNbHTravailReel()
     *
     * @return void
     */
    public function testSetNbHTravailReel(): void {

        $obj = new HeuresEffectuees();

        $obj->setNbHTravailReel(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHTravailReel());
    }

    /**
     * Tests setNbHjfnt()
     *
     * @return void
     */
    public function testSetNbHjfnt(): void {

        $obj = new HeuresEffectuees();

        $obj->setNbHjfnt(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHjfnt());
    }

    /**
     * Tests setNbJReposRecupPris()
     *
     * @return void
     */
    public function testSetNbJReposRecupPris(): void {

        $obj = new HeuresEffectuees();

        $obj->setNbJReposRecupPris(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJReposRecupPris());
    }

    /**
     * Tests setNbJourCpPris()
     *
     * @return void
     */
    public function testSetNbJourCpPris(): void {

        $obj = new HeuresEffectuees();

        $obj->setNbJourCpPris(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourCpPris());
    }

    /**
     * Tests setNumeroEmploye()
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new HeuresEffectuees();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new HeuresEffectuees();

        $this->assertNull($obj->getDateJour());
        $this->assertNull($obj->getHDebAm());
        $this->assertNull($obj->getHDebPm());
        $this->assertNull($obj->getHFinAm());
        $this->assertNull($obj->getHFinPm());
        $this->assertNull($obj->getNbHAbsenceCp());
        $this->assertNull($obj->getNbHjfnt());
        $this->assertNull($obj->getNbHMajo());
        $this->assertNull($obj->getNbHNuit());
        $this->assertNull($obj->getNbHReposCompPris());
        $this->assertNull($obj->getNbHReposRemplacePris());
        $this->assertNull($obj->getNbHTravailReel());
        $this->assertNull($obj->getNbJReposRecupPris());
        $this->assertNull($obj->getNbJourCpPris());
        $this->assertNull($obj->getNumeroEmploye());
    }
}
