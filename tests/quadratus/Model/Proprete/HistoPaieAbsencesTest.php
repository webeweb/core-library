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
use Throwable;
use WBW\Library\Quadratus\Model\Proprete\HistoPaieAbsences;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Histo paie absences test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class HistoPaieAbsencesTest extends AbstractTestCase {

    /**
     * Test setCodeAbsPaie()
     *
     * @return void
     */
    public function testSetCodeAbsPaie(): void {

        $obj = new HistoPaieAbsences();

        $obj->setCodeAbsPaie("codeAbsPaie");
        $this->assertEquals("codeAbsPaie", $obj->getCodeAbsPaie());
    }

    /**
     * Test setCodeAbsence()
     *
     * @return void
     */
    public function testSetCodeAbsence(): void {

        $obj = new HistoPaieAbsences();

        $obj->setCodeAbsence("codeAbsence");
        $this->assertEquals("codeAbsence", $obj->getCodeAbsence());
    }

    /**
     * Test setCodeCollaboValid()
     *
     * @return void
     */
    public function testSetCodeCollaboValid(): void {

        $obj = new HistoPaieAbsences();

        $obj->setCodeCollaboValid("codeCollaboValid");
        $this->assertEquals("codeCollaboValid", $obj->getCodeCollaboValid());
    }

    /**
     * Test setCodeCollaborateur()
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new HistoPaieAbsences();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Test setCodeEmploye()
     *
     * @return void
     */
    public function testSetCodeEmploye(): void {

        $obj = new HistoPaieAbsences();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
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

        $obj = new HistoPaieAbsences();

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

        $obj = new HistoPaieAbsences();

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

        $obj = new HistoPaieAbsences();

        $obj->setDateValidationSynchro($dateValidationSynchro);
        $this->assertSame($dateValidationSynchro, $obj->getDateValidationSynchro());
    }

    /**
     * Test setDureeAbsence()
     *
     * @return void
     */
    public function testSetDureeAbsence(): void {

        $obj = new HistoPaieAbsences();

        $obj->setDureeAbsence(10.092018);
        $this->assertEquals(10.092018, $obj->getDureeAbsence());
    }

    /**
     * Test setEtat()
     *
     * @return void
     */
    public function testSetEtat(): void {

        $obj = new HistoPaieAbsences();

        $obj->setEtat("etat");
        $this->assertEquals("etat", $obj->getEtat());
    }

    /**
     * Test setNbJoursAbs()
     *
     * @return void
     */
    public function testSetNbJoursAbs(): void {

        $obj = new HistoPaieAbsences();

        $obj->setNbJoursAbs(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJoursAbs());
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

        $obj = new HistoPaieAbsences();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Test setUniqId()
     *
     * @return void
     */
    public function testSetUniqId(): void {

        $obj = new HistoPaieAbsences();

        $obj->setUniqId("uniqId");
        $this->assertEquals("uniqId", $obj->getUniqId());
    }

    /**
     * Test setUniqIdSynchro()
     *
     * @return void
     */
    public function testSetUniqIdSynchro(): void {

        $obj = new HistoPaieAbsences();

        $obj->setUniqIdSynchro("uniqIdSynchro");
        $this->assertEquals("uniqIdSynchro", $obj->getUniqIdSynchro());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new HistoPaieAbsences();

        $this->assertNull($obj->getCodeAbsPaie());
        $this->assertNull($obj->getCodeAbsence());
        $this->assertNull($obj->getCodeCollaboValid());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getDateDebutAbs());
        $this->assertNull($obj->getDateFinAbs());
        $this->assertNull($obj->getDateValidationSynchro());
        $this->assertNull($obj->getDureeAbsence());
        $this->assertNull($obj->getEtat());
        $this->assertNull($obj->getNbJoursAbs());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getUniqId());
        $this->assertNull($obj->getUniqIdSynchro());
    }
}
