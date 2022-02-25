<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\Proprete;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\Proprete\PointEmpHeuresAbsComplRempl;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Point emp heures abs compl rempl test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class PointEmpHeuresAbsComplRemplTest extends AbstractTestCase {

    /**
     * Tests setAvenantSigne()
     *
     * @return void
     */
    public function testSetAvenantSigne(): void {

        $obj = new PointEmpHeuresAbsComplRempl();

        $obj->setAvenantSigne(true);
        $this->assertEquals(true, $obj->getAvenantSigne());
    }

    /**
     * Tests setCodeAbsence()
     *
     * @return void
     */
    public function testSetCodeAbsence(): void {

        $obj = new PointEmpHeuresAbsComplRempl();

        $obj->setCodeAbsence("codeAbsence");
        $this->assertEquals("codeAbsence", $obj->getCodeAbsence());
    }

    /**
     * Tests setCodeAffaire()
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new PointEmpHeuresAbsComplRempl();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests setCodeChantier()
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new PointEmpHeuresAbsComplRempl();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new PointEmpHeuresAbsComplRempl();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests setCodeCollaboValid()
     *
     * @return void
     */
    public function testSetCodeCollaboValid(): void {

        $obj = new PointEmpHeuresAbsComplRempl();

        $obj->setCodeCollaboValid("codeCollaboValid");
        $this->assertEquals("codeCollaboValid", $obj->getCodeCollaboValid());
    }

    /**
     * Tests setCodeCollaborateur()
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new PointEmpHeuresAbsComplRempl();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests setCodeEmploye()
     *
     * @return void
     */
    public function testSetCodeEmploye(): void {

        $obj = new PointEmpHeuresAbsComplRempl();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Tests setCodeTache()
     *
     * @return void
     */
    public function testSetCodeTache(): void {

        $obj = new PointEmpHeuresAbsComplRempl();

        $obj->setCodeTache("codeTache");
        $this->assertEquals("codeTache", $obj->getCodeTache());
    }

    /**
     * Tests setDate()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate(): void {

        // Set a Date/time mock.
        $date = new DateTime("2018-09-10");

        $obj = new PointEmpHeuresAbsComplRempl();

        $obj->setDate($date);
        $this->assertSame($date, $obj->getDate());
    }

    /**
     * Tests setDateAbsDecalee()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateAbsDecalee(): void {

        // Set a Date/time mock.
        $dateAbsDecalee = new DateTime("2018-09-10");

        $obj = new PointEmpHeuresAbsComplRempl();

        $obj->setDateAbsDecalee($dateAbsDecalee);
        $this->assertSame($dateAbsDecalee, $obj->getDateAbsDecalee());
    }

    /**
     * Tests setDateValidationSynchro()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateValidationSynchro(): void {

        // Set a Date/time mock.
        $dateValidationSynchro = new DateTime("2018-09-10");

        $obj = new PointEmpHeuresAbsComplRempl();

        $obj->setDateValidationSynchro($dateValidationSynchro);
        $this->assertSame($dateValidationSynchro, $obj->getDateValidationSynchro());
    }

    /**
     * Tests setEmployeRemplace()
     *
     * @return void
     */
    public function testSetEmployeRemplace(): void {

        $obj = new PointEmpHeuresAbsComplRempl();

        $obj->setEmployeRemplace("employeRemplace");
        $this->assertEquals("employeRemplace", $obj->getEmployeRemplace());
    }

    /**
     * Tests setEtat()
     *
     * @return void
     */
    public function testSetEtat(): void {

        $obj = new PointEmpHeuresAbsComplRempl();

        $obj->setEtat("etat");
        $this->assertEquals("etat", $obj->getEtat());
    }

    /**
     * Tests setHeureDeb()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetHeureDeb(): void {

        // Set a Date/time mock.
        $heureDeb = new DateTime("2018-09-10");

        $obj = new PointEmpHeuresAbsComplRempl();

        $obj->setHeureDeb($heureDeb);
        $this->assertSame($heureDeb, $obj->getHeureDeb());
    }

    /**
     * Tests setHeuresJour()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetHeuresJour(): void {

        // Set a Date/time mock.
        $heuresJour = new DateTime("2018-09-10");

        $obj = new PointEmpHeuresAbsComplRempl();

        $obj->setHeuresJour($heuresJour);
        $this->assertSame($heuresJour, $obj->getHeuresJour());
    }

    /**
     * Tests setHeuresNuit()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetHeuresNuit(): void {

        // Set a Date/time mock.
        $heuresNuit = new DateTime("2018-09-10");

        $obj = new PointEmpHeuresAbsComplRempl();

        $obj->setHeuresNuit($heuresNuit);
        $this->assertSame($heuresNuit, $obj->getHeuresNuit());
    }

    /**
     * Tests setNumBt()
     *
     * @return void
     */
    public function testSetNumBt(): void {

        $obj = new PointEmpHeuresAbsComplRempl();

        $obj->setNumBt(10);
        $this->assertEquals(10, $obj->getNumBt());
    }

    /**
     * Tests setNumeroAvenant()
     *
     * @return void
     */
    public function testSetNumeroAvenant(): void {

        $obj = new PointEmpHeuresAbsComplRempl();

        $obj->setNumeroAvenant(10);
        $this->assertEquals(10, $obj->getNumeroAvenant());
    }

    /**
     * Tests setTypeHeure()
     *
     * @return void
     */
    public function testSetTypeHeure(): void {

        $obj = new PointEmpHeuresAbsComplRempl();

        $obj->setTypeHeure("typeHeure");
        $this->assertEquals("typeHeure", $obj->getTypeHeure());
    }

    /**
     * Tests setUniqId()
     *
     * @return void
     */
    public function testSetUniqId(): void {

        $obj = new PointEmpHeuresAbsComplRempl();

        $obj->setUniqId("uniqId");
        $this->assertEquals("uniqId", $obj->getUniqId());
    }

    /**
     * Tests setUniqIdPlanning()
     *
     * @return void
     */
    public function testSetUniqIdPlanning(): void {

        $obj = new PointEmpHeuresAbsComplRempl();

        $obj->setUniqIdPlanning("uniqIdPlanning");
        $this->assertEquals("uniqIdPlanning", $obj->getUniqIdPlanning());
    }

    /**
     * Tests setUniqIdSynchro()
     *
     * @return void
     */
    public function testSetUniqIdSynchro(): void {

        $obj = new PointEmpHeuresAbsComplRempl();

        $obj->setUniqIdSynchro("uniqIdSynchro");
        $this->assertEquals("uniqIdSynchro", $obj->getUniqIdSynchro());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new PointEmpHeuresAbsComplRempl();

        $this->assertNull($obj->getAvenantSigne());
        $this->assertNull($obj->getCodeAbsence());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollaboValid());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getCodeTache());
        $this->assertNull($obj->getDate());
        $this->assertNull($obj->getDateAbsDecalee());
        $this->assertNull($obj->getDateValidationSynchro());
        $this->assertNull($obj->getEmployeRemplace());
        $this->assertNull($obj->getEtat());
        $this->assertNull($obj->getHeureDeb());
        $this->assertNull($obj->getHeuresJour());
        $this->assertNull($obj->getHeuresNuit());
        $this->assertNull($obj->getNumBt());
        $this->assertNull($obj->getNumeroAvenant());
        $this->assertNull($obj->getTypeHeure());
        $this->assertNull($obj->getUniqId());
        $this->assertNull($obj->getUniqIdPlanning());
        $this->assertNull($obj->getUniqIdSynchro());
    }
}
