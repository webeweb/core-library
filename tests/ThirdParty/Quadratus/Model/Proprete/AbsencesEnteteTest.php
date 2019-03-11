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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\AbsencesEntete;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Absences entete model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class AbsencesEnteteTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

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
        $this->assertNull($obj->getUniqID());
        $this->assertNull($obj->getUniqIDSynchro());
    }

    /**
     * Tests the setCodeAbsence() method.
     *
     * @return void
     */
    public function testSetCodeAbsence() {

        $obj = new AbsencesEntete();

        $obj->setCodeAbsence("codeAbsence");
        $this->assertEquals("codeAbsence", $obj->getCodeAbsence());
    }

    /**
     * Tests the setCodeCollaboValid() method.
     *
     * @return void
     */
    public function testSetCodeCollaboValid() {

        $obj = new AbsencesEntete();

        $obj->setCodeCollaboValid("codeCollaboValid");
        $this->assertEquals("codeCollaboValid", $obj->getCodeCollaboValid());
    }

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur() {

        $obj = new AbsencesEntete();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setCodeEmploye() method.
     *
     * @return void
     */
    public function testSetCodeEmploye() {

        $obj = new AbsencesEntete();

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

        $obj = new AbsencesEntete();

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

        $obj = new AbsencesEntete();

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

        $obj = new AbsencesEntete();

        $obj->setDateValidationSynchro(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateValidationSynchro());
    }

    /**
     * Tests the setEtat() method.
     *
     * @return void
     */
    public function testSetEtat() {

        $obj = new AbsencesEntete();

        $obj->setEtat("etat");
        $this->assertEquals("etat", $obj->getEtat());
    }

    /**
     * Tests the setFromFermetureChantier() method.
     *
     * @return void
     */
    public function testSetFromFermetureChantier() {

        $obj = new AbsencesEntete();

        $obj->setFromFermetureChantier(true);
        $this->assertEquals(true, $obj->getFromFermetureChantier());
    }

    /**
     * Tests the setUniqID() method.
     *
     * @return void
     */
    public function testSetUniqID() {

        $obj = new AbsencesEntete();

        $obj->setUniqID("uniqID");
        $this->assertEquals("uniqID", $obj->getUniqID());
    }

    /**
     * Tests the setUniqIDSynchro() method.
     *
     * @return void
     */
    public function testSetUniqIDSynchro() {

        $obj = new AbsencesEntete();

        $obj->setUniqIDSynchro("uniqIDSynchro");
        $this->assertEquals("uniqIDSynchro", $obj->getUniqIDSynchro());
    }
}
