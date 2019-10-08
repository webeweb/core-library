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
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\EmpPrev;

/**
 * Emp prev model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class EmpPrevTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new EmpPrev();

        $this->assertNull($obj->getCodeCollaboValid());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getDate());
        $this->assertNull($obj->getDateAbsDecalee());
        $this->assertNull($obj->getDateValidationSynchro());
        $this->assertNull($obj->getDimType2());
        $this->assertNull($obj->getDiscrTache());
        $this->assertNull($obj->getDuree());
        $this->assertNull($obj->getEmployeRemplace());
        $this->assertNull($obj->getEtat());
        $this->assertNull($obj->getHNuitType2());
        $this->assertNull($obj->getHeureDeb());
        $this->assertNull($obj->getJFType2());
        $this->assertNull($obj->getNbChambres());
        $this->assertNull($obj->getNoteMemo());
        $this->assertNull($obj->getNumChrono());
        $this->assertNull($obj->getPointage());
        $this->assertNull($obj->getUniqID());
        $this->assertNull($obj->getUniqIDPlanning());
        $this->assertNull($obj->getUniqIDSynchro());
    }

    /**
     * Tests the setCodeCollaboValid() method.
     *
     * @return void
     */
    public function testSetCodeCollaboValid() {

        $obj = new EmpPrev();

        $obj->setCodeCollaboValid("codeCollaboValid");
        $this->assertEquals("codeCollaboValid", $obj->getCodeCollaboValid());
    }

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur() {

        $obj = new EmpPrev();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setCodeEmploye() method.
     *
     * @return void
     */
    public function testSetCodeEmploye() {

        $obj = new EmpPrev();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Tests the setDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate() {

        $obj = new EmpPrev();

        $obj->setDate(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDate());
    }

    /**
     * Tests the setDateAbsDecalee() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateAbsDecalee() {

        $obj = new EmpPrev();

        $obj->setDateAbsDecalee(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateAbsDecalee());
    }

    /**
     * Tests the setDateValidationSynchro() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateValidationSynchro() {

        $obj = new EmpPrev();

        $obj->setDateValidationSynchro(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateValidationSynchro());
    }

    /**
     * Tests the setDimType2() method.
     *
     * @return void
     */
    public function testSetDimType2() {

        $obj = new EmpPrev();

        $obj->setDimType2("dimType2");
        $this->assertEquals("dimType2", $obj->getDimType2());
    }

    /**
     * Tests the setDiscrTache() method.
     *
     * @return void
     */
    public function testSetDiscrTache() {

        $obj = new EmpPrev();

        $obj->setDiscrTache(10);
        $this->assertEquals(10, $obj->getDiscrTache());
    }

    /**
     * Tests the setDuree() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDuree() {

        $obj = new EmpPrev();

        $obj->setDuree(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDuree());
    }

    /**
     * Tests the setEmployeRemplace() method.
     *
     * @return void
     */
    public function testSetEmployeRemplace() {

        $obj = new EmpPrev();

        $obj->setEmployeRemplace("employeRemplace");
        $this->assertEquals("employeRemplace", $obj->getEmployeRemplace());
    }

    /**
     * Tests the setEtat() method.
     *
     * @return void
     */
    public function testSetEtat() {

        $obj = new EmpPrev();

        $obj->setEtat("etat");
        $this->assertEquals("etat", $obj->getEtat());
    }

    /**
     * Tests the setHNuitType2() method.
     *
     * @return void
     */
    public function testSetHNuitType2() {

        $obj = new EmpPrev();

        $obj->setHNuitType2("hNuitType2");
        $this->assertEquals("hNuitType2", $obj->getHNuitType2());
    }

    /**
     * Tests the setHeureDeb() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetHeureDeb() {

        $obj = new EmpPrev();

        $obj->setHeureDeb(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getHeureDeb());
    }

    /**
     * Tests the setJFType2() method.
     *
     * @return void
     */
    public function testSetJFType2() {

        $obj = new EmpPrev();

        $obj->setJFType2("jFType2");
        $this->assertEquals("jFType2", $obj->getJFType2());
    }

    /**
     * Tests the setNbChambres() method.
     *
     * @return void
     */
    public function testSetNbChambres() {

        $obj = new EmpPrev();

        $obj->setNbChambres(10.092018);
        $this->assertEquals(10.092018, $obj->getNbChambres());
    }

    /**
     * Tests the setNoteMemo() method.
     *
     * @return void
     */
    public function testSetNoteMemo() {

        $obj = new EmpPrev();

        $obj->setNoteMemo("noteMemo");
        $this->assertEquals("noteMemo", $obj->getNoteMemo());
    }

    /**
     * Tests the setNumChrono() method.
     *
     * @return void
     */
    public function testSetNumChrono() {

        $obj = new EmpPrev();

        $obj->setNumChrono(10);
        $this->assertEquals(10, $obj->getNumChrono());
    }

    /**
     * Tests the setPointage() method.
     *
     * @return void
     */
    public function testSetPointage() {

        $obj = new EmpPrev();

        $obj->setPointage(true);
        $this->assertEquals(true, $obj->getPointage());
    }

    /**
     * Tests the setUniqID() method.
     *
     * @return void
     */
    public function testSetUniqID() {

        $obj = new EmpPrev();

        $obj->setUniqID("uniqID");
        $this->assertEquals("uniqID", $obj->getUniqID());
    }

    /**
     * Tests the setUniqIDPlanning() method.
     *
     * @return void
     */
    public function testSetUniqIDPlanning() {

        $obj = new EmpPrev();

        $obj->setUniqIDPlanning("uniqIDPlanning");
        $this->assertEquals("uniqIDPlanning", $obj->getUniqIDPlanning());
    }

    /**
     * Tests the setUniqIDSynchro() method.
     *
     * @return void
     */
    public function testSetUniqIDSynchro() {

        $obj = new EmpPrev();

        $obj->setUniqIDSynchro("uniqIDSynchro");
        $this->assertEquals("uniqIDSynchro", $obj->getUniqIDSynchro());
    }
}
