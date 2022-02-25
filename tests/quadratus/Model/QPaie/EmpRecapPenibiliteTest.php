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
use WBW\Library\Quadratus\Model\QPaie\EmpRecapPenibilite;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Emp recap penibilite test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class EmpRecapPenibiliteTest extends AbstractTestCase {

    /**
     * Tests setCodeCollab()
     *
     * @return void
     */
    public function testSetCodeCollab(): void {

        $obj = new EmpRecapPenibilite();

        $obj->setCodeCollab("codeCollab");
        $this->assertEquals("codeCollab", $obj->getCodeCollab());
    }

    /**
     * Tests setDateCreat()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCreat(): void {

        // Set a Date/time mock.
        $dateCreat = new DateTime("2018-09-10");

        $obj = new EmpRecapPenibilite();

        $obj->setDateCreat($dateCreat);
        $this->assertSame($dateCreat, $obj->getDateCreat());
    }

    /**
     * Tests setDateDebut()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDebut(): void {

        // Set a Date/time mock.
        $dateDebut = new DateTime("2018-09-10");

        $obj = new EmpRecapPenibilite();

        $obj->setDateDebut($dateDebut);
        $this->assertSame($dateDebut, $obj->getDateDebut());
    }

    /**
     * Tests setDateFin()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFin(): void {

        // Set a Date/time mock.
        $dateFin = new DateTime("2018-09-10");

        $obj = new EmpRecapPenibilite();

        $obj->setDateFin($dateFin);
        $this->assertSame($dateFin, $obj->getDateFin());
    }

    /**
     * Tests setDateModif()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateModif(): void {

        // Set a Date/time mock.
        $dateModif = new DateTime("2018-09-10");

        $obj = new EmpRecapPenibilite();

        $obj->setDateModif($dateModif);
        $this->assertSame($dateModif, $obj->getDateModif());
    }

    /**
     * Tests setEtat()
     *
     * @return void
     */
    public function testSetEtat(): void {

        $obj = new EmpRecapPenibilite();

        $obj->setEtat("etat");
        $this->assertEquals("etat", $obj->getEtat());
    }

    /**
     * Tests setIdRecap()
     *
     * @return void
     */
    public function testSetIdRecap(): void {

        $obj = new EmpRecapPenibilite();

        $obj->setIdRecap(10);
        $this->assertEquals(10, $obj->getIdRecap());
    }

    /**
     * Tests setIndiceBul()
     *
     * @return void
     */
    public function testSetIndiceBul(): void {

        $obj = new EmpRecapPenibilite();

        $obj->setIndiceBul("indiceBul");
        $this->assertEquals("indiceBul", $obj->getIndiceBul());
    }

    /**
     * Tests setNumeroEmploye()
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new EmpRecapPenibilite();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests setNumeroOrdre()
     *
     * @return void
     */
    public function testSetNumeroOrdre(): void {

        $obj = new EmpRecapPenibilite();

        $obj->setNumeroOrdre(10);
        $this->assertEquals(10, $obj->getNumeroOrdre());
    }

    /**
     * Tests setReguleTraitee()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetReguleTraitee(): void {

        // Set a Date/time mock.
        $reguleTraitee = new DateTime("2018-09-10");

        $obj = new EmpRecapPenibilite();

        $obj->setReguleTraitee($reguleTraitee);
        $this->assertSame($reguleTraitee, $obj->getReguleTraitee());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new EmpRecapPenibilite();

        $this->assertNull($obj->getCodeCollab());
        $this->assertNull($obj->getDateCreat());
        $this->assertNull($obj->getDateDebut());
        $this->assertNull($obj->getDateFin());
        $this->assertNull($obj->getDateModif());
        $this->assertNull($obj->getEtat());
        $this->assertNull($obj->getIdRecap());
        $this->assertNull($obj->getIndiceBul());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getNumeroOrdre());
        $this->assertNull($obj->getReguleTraitee());
    }
}
