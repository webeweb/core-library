<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\Proprete;

use DateTime;
use WBW\Library\Core\Quadratus\Model\Proprete\PointEmpHeuresAbsComplRempl;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Point emp heures abs compl rempl model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\Proprete
 */
class PointEmpHeuresAbsComplRemplTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

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
        $this->assertNull($obj->getNumBT());
        $this->assertNull($obj->getNumeroAvenant());
        $this->assertNull($obj->getTypeHeure());
        $this->assertNull($obj->getUniqID());
        $this->assertNull($obj->getUniqIDPlanning());
        $this->assertNull($obj->getUniqIDSynchro());
    }

    /**
     * Tests the setAvenantSigne() method.
     *
     * @return void
     */
    public function testSetAvenantSigne() {

        $obj = new PointEmpHeuresAbsComplRempl();

        $obj->setAvenantSigne(true);
        $this->assertEquals(true, $obj->getAvenantSigne());
    }

    /**
     * Tests the setCodeAbsence() method.
     *
     * @return void
     */
    public function testSetCodeAbsence() {

        $obj = new PointEmpHeuresAbsComplRempl();

        $obj->setCodeAbsence("codeAbsence");
        $this->assertEquals("codeAbsence", $obj->getCodeAbsence());
    }

    /**
     * Tests the setCodeAffaire() method.
     *
     * @return void
     */
    public function testSetCodeAffaire() {

        $obj = new PointEmpHeuresAbsComplRempl();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests the setCodeChantier() method.
     *
     * @return void
     */
    public function testSetCodeChantier() {

        $obj = new PointEmpHeuresAbsComplRempl();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new PointEmpHeuresAbsComplRempl();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeCollaboValid() method.
     *
     * @return void
     */
    public function testSetCodeCollaboValid() {

        $obj = new PointEmpHeuresAbsComplRempl();

        $obj->setCodeCollaboValid("codeCollaboValid");
        $this->assertEquals("codeCollaboValid", $obj->getCodeCollaboValid());
    }

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur() {

        $obj = new PointEmpHeuresAbsComplRempl();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setCodeEmploye() method.
     *
     * @return void
     */
    public function testSetCodeEmploye() {

        $obj = new PointEmpHeuresAbsComplRempl();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Tests the setCodeTache() method.
     *
     * @return void
     */
    public function testSetCodeTache() {

        $obj = new PointEmpHeuresAbsComplRempl();

        $obj->setCodeTache("codeTache");
        $this->assertEquals("codeTache", $obj->getCodeTache());
    }

    /**
     * Tests the setDate() method.
     *
     * @return void
     */
    public function testSetDate() {

        $obj = new PointEmpHeuresAbsComplRempl();

        $obj->setDate(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDate());
    }

    /**
     * Tests the setDateAbsDecalee() method.
     *
     * @return void
     */
    public function testSetDateAbsDecalee() {

        $obj = new PointEmpHeuresAbsComplRempl();

        $obj->setDateAbsDecalee(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateAbsDecalee());
    }

    /**
     * Tests the setDateValidationSynchro() method.
     *
     * @return void
     */
    public function testSetDateValidationSynchro() {

        $obj = new PointEmpHeuresAbsComplRempl();

        $obj->setDateValidationSynchro(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateValidationSynchro());
    }

    /**
     * Tests the setEmployeRemplace() method.
     *
     * @return void
     */
    public function testSetEmployeRemplace() {

        $obj = new PointEmpHeuresAbsComplRempl();

        $obj->setEmployeRemplace("employeRemplace");
        $this->assertEquals("employeRemplace", $obj->getEmployeRemplace());
    }

    /**
     * Tests the setEtat() method.
     *
     * @return void
     */
    public function testSetEtat() {

        $obj = new PointEmpHeuresAbsComplRempl();

        $obj->setEtat("etat");
        $this->assertEquals("etat", $obj->getEtat());
    }

    /**
     * Tests the setHeureDeb() method.
     *
     * @return void
     */
    public function testSetHeureDeb() {

        $obj = new PointEmpHeuresAbsComplRempl();

        $obj->setHeureDeb(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getHeureDeb());
    }

    /**
     * Tests the setHeuresJour() method.
     *
     * @return void
     */
    public function testSetHeuresJour() {

        $obj = new PointEmpHeuresAbsComplRempl();

        $obj->setHeuresJour(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getHeuresJour());
    }

    /**
     * Tests the setHeuresNuit() method.
     *
     * @return void
     */
    public function testSetHeuresNuit() {

        $obj = new PointEmpHeuresAbsComplRempl();

        $obj->setHeuresNuit(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getHeuresNuit());
    }

    /**
     * Tests the setNumBT() method.
     *
     * @return void
     */
    public function testSetNumBT() {

        $obj = new PointEmpHeuresAbsComplRempl();

        $obj->setNumBT(10);
        $this->assertEquals(10, $obj->getNumBT());
    }

    /**
     * Tests the setNumeroAvenant() method.
     *
     * @return void
     */
    public function testSetNumeroAvenant() {

        $obj = new PointEmpHeuresAbsComplRempl();

        $obj->setNumeroAvenant(10);
        $this->assertEquals(10, $obj->getNumeroAvenant());
    }

    /**
     * Tests the setTypeHeure() method.
     *
     * @return void
     */
    public function testSetTypeHeure() {

        $obj = new PointEmpHeuresAbsComplRempl();

        $obj->setTypeHeure("typeHeure");
        $this->assertEquals("typeHeure", $obj->getTypeHeure());
    }

    /**
     * Tests the setUniqID() method.
     *
     * @return void
     */
    public function testSetUniqID() {

        $obj = new PointEmpHeuresAbsComplRempl();

        $obj->setUniqID("uniqID");
        $this->assertEquals("uniqID", $obj->getUniqID());
    }

    /**
     * Tests the setUniqIDPlanning() method.
     *
     * @return void
     */
    public function testSetUniqIDPlanning() {

        $obj = new PointEmpHeuresAbsComplRempl();

        $obj->setUniqIDPlanning("uniqIDPlanning");
        $this->assertEquals("uniqIDPlanning", $obj->getUniqIDPlanning());
    }

    /**
     * Tests the setUniqIDSynchro() method.
     *
     * @return void
     */
    public function testSetUniqIDSynchro() {

        $obj = new PointEmpHeuresAbsComplRempl();

        $obj->setUniqIDSynchro("uniqIDSynchro");
        $this->assertEquals("uniqIDSynchro", $obj->getUniqIDSynchro());
    }

}
