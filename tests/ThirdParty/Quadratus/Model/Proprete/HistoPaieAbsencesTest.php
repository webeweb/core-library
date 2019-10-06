<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\HistoPaieAbsences;

/**
 * Histo paie absences model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class HistoPaieAbsencesTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

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
        $this->assertNull($obj->getUniqID());
        $this->assertNull($obj->getUniqIDSynchro());
    }

    /**
     * Tests the setCodeAbsPaie() method.
     *
     * @return void
     */
    public function testSetCodeAbsPaie() {

        $obj = new HistoPaieAbsences();

        $obj->setCodeAbsPaie("codeAbsPaie");
        $this->assertEquals("codeAbsPaie", $obj->getCodeAbsPaie());
    }

    /**
     * Tests the setCodeAbsence() method.
     *
     * @return void
     */
    public function testSetCodeAbsence() {

        $obj = new HistoPaieAbsences();

        $obj->setCodeAbsence("codeAbsence");
        $this->assertEquals("codeAbsence", $obj->getCodeAbsence());
    }

    /**
     * Tests the setCodeCollaboValid() method.
     *
     * @return void
     */
    public function testSetCodeCollaboValid() {

        $obj = new HistoPaieAbsences();

        $obj->setCodeCollaboValid("codeCollaboValid");
        $this->assertEquals("codeCollaboValid", $obj->getCodeCollaboValid());
    }

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur() {

        $obj = new HistoPaieAbsences();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setCodeEmploye() method.
     *
     * @return void
     */
    public function testSetCodeEmploye() {

        $obj = new HistoPaieAbsences();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Tests the setDateDebutAbs() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDebutAbs() {

        $obj = new HistoPaieAbsences();

        $obj->setDateDebutAbs(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateDebutAbs());
    }

    /**
     * Tests the setDateFinAbs() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFinAbs() {

        $obj = new HistoPaieAbsences();

        $obj->setDateFinAbs(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateFinAbs());
    }

    /**
     * Tests the setDateValidationSynchro() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateValidationSynchro() {

        $obj = new HistoPaieAbsences();

        $obj->setDateValidationSynchro(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateValidationSynchro());
    }

    /**
     * Tests the setDureeAbsence() method.
     *
     * @return void
     */
    public function testSetDureeAbsence() {

        $obj = new HistoPaieAbsences();

        $obj->setDureeAbsence(10.092018);
        $this->assertEquals(10.092018, $obj->getDureeAbsence());
    }

    /**
     * Tests the setEtat() method.
     *
     * @return void
     */
    public function testSetEtat() {

        $obj = new HistoPaieAbsences();

        $obj->setEtat("etat");
        $this->assertEquals("etat", $obj->getEtat());
    }

    /**
     * Tests the setNbJoursAbs() method.
     *
     * @return void
     */
    public function testSetNbJoursAbs() {

        $obj = new HistoPaieAbsences();

        $obj->setNbJoursAbs(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJoursAbs());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriode() {

        $obj = new HistoPaieAbsences();

        $obj->setPeriode(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriode());
    }

    /**
     * Tests the setUniqID() method.
     *
     * @return void
     */
    public function testSetUniqID() {

        $obj = new HistoPaieAbsences();

        $obj->setUniqID("uniqID");
        $this->assertEquals("uniqID", $obj->getUniqID());
    }

    /**
     * Tests the setUniqIDSynchro() method.
     *
     * @return void
     */
    public function testSetUniqIDSynchro() {

        $obj = new HistoPaieAbsences();

        $obj->setUniqIDSynchro("uniqIDSynchro");
        $this->assertEquals("uniqIDSynchro", $obj->getUniqIDSynchro());
    }
}
