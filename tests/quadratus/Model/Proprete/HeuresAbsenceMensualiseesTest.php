<?php

declare(strict_types = 1);

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
use Throwable;
use WBW\Library\Quadratus\Model\Proprete\HeuresAbsenceMensualisees;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Heures absence mensualisees test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class HeuresAbsenceMensualiseesTest extends AbstractTestCase {

    /**
     * Test setCodeAbsence()
     *
     * @return void
     */
    public function testSetCodeAbsence(): void {

        $obj = new HeuresAbsenceMensualisees();

        $obj->setCodeAbsence("codeAbsence");
        $this->assertEquals("codeAbsence", $obj->getCodeAbsence());
    }

    /**
     * Test setCodeAffaire()
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new HeuresAbsenceMensualisees();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Test setCodeChantier()
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new HeuresAbsenceMensualisees();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Test setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new HeuresAbsenceMensualisees();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Test setCodeCollaboValid()
     *
     * @return void
     */
    public function testSetCodeCollaboValid(): void {

        $obj = new HeuresAbsenceMensualisees();

        $obj->setCodeCollaboValid("codeCollaboValid");
        $this->assertEquals("codeCollaboValid", $obj->getCodeCollaboValid());
    }

    /**
     * Test setCodeCollaborateur()
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new HeuresAbsenceMensualisees();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Test setCodeEmploye()
     *
     * @return void
     */
    public function testSetCodeEmploye(): void {

        $obj = new HeuresAbsenceMensualisees();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Test setCodeTache()
     *
     * @return void
     */
    public function testSetCodeTache(): void {

        $obj = new HeuresAbsenceMensualisees();

        $obj->setCodeTache("codeTache");
        $this->assertEquals("codeTache", $obj->getCodeTache());
    }

    /**
     * Test setDateDebutAbs()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateDebutAbs(): void {

        // Set a Date/time mock.
        $dateDebutAbs = new DateTime("2018-09-10");

        $obj = new HeuresAbsenceMensualisees();

        $obj->setDateDebutAbs($dateDebutAbs);
        $this->assertSame($dateDebutAbs, $obj->getDateDebutAbs());
    }

    /**
     * Test setDateFinAbs()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateFinAbs(): void {

        // Set a Date/time mock.
        $dateFinAbs = new DateTime("2018-09-10");

        $obj = new HeuresAbsenceMensualisees();

        $obj->setDateFinAbs($dateFinAbs);
        $this->assertSame($dateFinAbs, $obj->getDateFinAbs());
    }

    /**
     * Test setDateValidationSynchro()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateValidationSynchro(): void {

        // Set a Date/time mock.
        $dateValidationSynchro = new DateTime("2018-09-10");

        $obj = new HeuresAbsenceMensualisees();

        $obj->setDateValidationSynchro($dateValidationSynchro);
        $this->assertSame($dateValidationSynchro, $obj->getDateValidationSynchro());
    }

    /**
     * Test setEtat()
     *
     * @return void
     */
    public function testSetEtat(): void {

        $obj = new HeuresAbsenceMensualisees();

        $obj->setEtat("etat");
        $this->assertEquals("etat", $obj->getEtat());
    }

    /**
     * Test setHAbsMens()
     *
     * @return void
     */
    public function testSetHAbsMens(): void {

        $obj = new HeuresAbsenceMensualisees();

        $obj->setHAbsMens(10.092018);
        $this->assertEquals(10.092018, $obj->getHAbsMens());
    }

    /**
     * Test setNumBt()
     *
     * @return void
     */
    public function testSetNumBt(): void {

        $obj = new HeuresAbsenceMensualisees();

        $obj->setNumBt(10);
        $this->assertEquals(10, $obj->getNumBt());
    }

    /**
     * Test setPeriode()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPeriode(): void {

        // Set a Date/time mock.
        $periode = new DateTime("2018-09-10");

        $obj = new HeuresAbsenceMensualisees();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Test setUniqIdSynchro()
     *
     * @return void
     */
    public function testSetUniqIdSynchro(): void {

        $obj = new HeuresAbsenceMensualisees();

        $obj->setUniqIdSynchro("uniqIdSynchro");
        $this->assertEquals("uniqIdSynchro", $obj->getUniqIdSynchro());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new HeuresAbsenceMensualisees();

        $this->assertNull($obj->getCodeAbsence());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollaboValid());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getCodeTache());
        $this->assertNull($obj->getDateDebutAbs());
        $this->assertNull($obj->getDateFinAbs());
        $this->assertNull($obj->getDateValidationSynchro());
        $this->assertNull($obj->getEtat());
        $this->assertNull($obj->getHAbsMens());
        $this->assertNull($obj->getNumBt());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getUniqIdSynchro());
    }
}
