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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\EmpRecapPenibilite;

/**
 * Emp recap penibilite test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class EmpRecapPenibiliteTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

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

    /**
     * Tests the setCodeCollab() method.
     *
     * @return void
     */
    public function testSetCodeCollab() {

        $obj = new EmpRecapPenibilite();

        $obj->setCodeCollab("codeCollab");
        $this->assertEquals("codeCollab", $obj->getCodeCollab());
    }

    /**
     * Tests the setDateCreat() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCreat() {

        // Set a Date/time mock.
        $dateCreat = new DateTime("2018-09-10");

        $obj = new EmpRecapPenibilite();

        $obj->setDateCreat($dateCreat);
        $this->assertSame($dateCreat, $obj->getDateCreat());
    }

    /**
     * Tests the setDateDebut() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDebut() {

        // Set a Date/time mock.
        $dateDebut = new DateTime("2018-09-10");

        $obj = new EmpRecapPenibilite();

        $obj->setDateDebut($dateDebut);
        $this->assertSame($dateDebut, $obj->getDateDebut());
    }

    /**
     * Tests the setDateFin() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFin() {

        // Set a Date/time mock.
        $dateFin = new DateTime("2018-09-10");

        $obj = new EmpRecapPenibilite();

        $obj->setDateFin($dateFin);
        $this->assertSame($dateFin, $obj->getDateFin());
    }

    /**
     * Tests the setDateModif() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateModif() {

        // Set a Date/time mock.
        $dateModif = new DateTime("2018-09-10");

        $obj = new EmpRecapPenibilite();

        $obj->setDateModif($dateModif);
        $this->assertSame($dateModif, $obj->getDateModif());
    }

    /**
     * Tests the setEtat() method.
     *
     * @return void
     */
    public function testSetEtat() {

        $obj = new EmpRecapPenibilite();

        $obj->setEtat("etat");
        $this->assertEquals("etat", $obj->getEtat());
    }

    /**
     * Tests the setIdRecap() method.
     *
     * @return void
     */
    public function testSetIdRecap() {

        $obj = new EmpRecapPenibilite();

        $obj->setIdRecap(10);
        $this->assertEquals(10, $obj->getIdRecap());
    }

    /**
     * Tests the setIndiceBul() method.
     *
     * @return void
     */
    public function testSetIndiceBul() {

        $obj = new EmpRecapPenibilite();

        $obj->setIndiceBul("indiceBul");
        $this->assertEquals("indiceBul", $obj->getIndiceBul());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye() {

        $obj = new EmpRecapPenibilite();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setNumeroOrdre() method.
     *
     * @return void
     */
    public function testSetNumeroOrdre() {

        $obj = new EmpRecapPenibilite();

        $obj->setNumeroOrdre(10);
        $this->assertEquals(10, $obj->getNumeroOrdre());
    }

    /**
     * Tests the setReguleTraitee() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetReguleTraitee() {

        // Set a Date/time mock.
        $reguleTraitee = new DateTime("2018-09-10");

        $obj = new EmpRecapPenibilite();

        $obj->setReguleTraitee($reguleTraitee);
        $this->assertSame($reguleTraitee, $obj->getReguleTraitee());
    }
}
