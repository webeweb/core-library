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
use WBW\Library\Quadratus\Model\Proprete\AbsencesEntete;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Absences entete test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class AbsencesEnteteTest extends AbstractTestCase {

    /**
     * Test setCodeAbsence()
     *
     * @return void
     */
    public function testSetCodeAbsence(): void {

        $obj = new AbsencesEntete();

        $obj->setCodeAbsence("codeAbsence");
        $this->assertEquals("codeAbsence", $obj->getCodeAbsence());
    }

    /**
     * Test setCodeCollaboValid()
     *
     * @return void
     */
    public function testSetCodeCollaboValid(): void {

        $obj = new AbsencesEntete();

        $obj->setCodeCollaboValid("codeCollaboValid");
        $this->assertEquals("codeCollaboValid", $obj->getCodeCollaboValid());
    }

    /**
     * Test setCodeCollaborateur()
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new AbsencesEntete();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Test setCodeEmploye()
     *
     * @return void
     */
    public function testSetCodeEmploye(): void {

        $obj = new AbsencesEntete();

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

        $obj = new AbsencesEntete();

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

        $obj = new AbsencesEntete();

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

        $obj = new AbsencesEntete();

        $obj->setDateValidationSynchro($dateValidationSynchro);
        $this->assertSame($dateValidationSynchro, $obj->getDateValidationSynchro());
    }

    /**
     * Test setEtat()
     *
     * @return void
     */
    public function testSetEtat(): void {

        $obj = new AbsencesEntete();

        $obj->setEtat("etat");
        $this->assertEquals("etat", $obj->getEtat());
    }

    /**
     * Test setFromFermetureChantier()
     *
     * @return void
     */
    public function testSetFromFermetureChantier(): void {

        $obj = new AbsencesEntete();

        $obj->setFromFermetureChantier(true);
        $this->assertTrue($obj->getFromFermetureChantier());
    }

    /**
     * Test setUniqId()
     *
     * @return void
     */
    public function testSetUniqId(): void {

        $obj = new AbsencesEntete();

        $obj->setUniqId("uniqId");
        $this->assertEquals("uniqId", $obj->getUniqId());
    }

    /**
     * Test setUniqIdSynchro()
     *
     * @return void
     */
    public function testSetUniqIdSynchro(): void {

        $obj = new AbsencesEntete();

        $obj->setUniqIdSynchro("uniqIdSynchro");
        $this->assertEquals("uniqIdSynchro", $obj->getUniqIdSynchro());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new AbsencesEntete();

        $this->assertNull($obj->getCodeAbsence());
        $this->assertNull($obj->getCodeCollaboValid());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getDateDebutAbs());
        $this->assertNull($obj->getDateFinAbs());
        $this->assertNull($obj->getDateValidationSynchro());
        $this->assertNull($obj->getEtat());
        $this->assertNull($obj->getFromFermetureChantier());
        $this->assertNull($obj->getUniqId());
        $this->assertNull($obj->getUniqIdSynchro());
    }
}
