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
use WBW\Library\Quadratus\Model\Proprete\EmpPrev;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Emp prev test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class EmpPrevTest extends AbstractTestCase {

    /**
     * Tests setCodeCollaboValid()
     *
     * @return void
     */
    public function testSetCodeCollaboValid(): void {

        $obj = new EmpPrev();

        $obj->setCodeCollaboValid("codeCollaboValid");
        $this->assertEquals("codeCollaboValid", $obj->getCodeCollaboValid());
    }

    /**
     * Tests setCodeCollaborateur()
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new EmpPrev();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests setCodeEmploye()
     *
     * @return void
     */
    public function testSetCodeEmploye(): void {

        $obj = new EmpPrev();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
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

        $obj = new EmpPrev();

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

        $obj = new EmpPrev();

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

        $obj = new EmpPrev();

        $obj->setDateValidationSynchro($dateValidationSynchro);
        $this->assertSame($dateValidationSynchro, $obj->getDateValidationSynchro());
    }

    /**
     * Tests setDimType2()
     *
     * @return void
     */
    public function testSetDimType2(): void {

        $obj = new EmpPrev();

        $obj->setDimType2("dimType2");
        $this->assertEquals("dimType2", $obj->getDimType2());
    }

    /**
     * Tests setDiscrTache()
     *
     * @return void
     */
    public function testSetDiscrTache(): void {

        $obj = new EmpPrev();

        $obj->setDiscrTache(10);
        $this->assertEquals(10, $obj->getDiscrTache());
    }

    /**
     * Tests setDuree()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDuree(): void {

        // Set a Date/time mock.
        $duree = new DateTime("2018-09-10");

        $obj = new EmpPrev();

        $obj->setDuree($duree);
        $this->assertSame($duree, $obj->getDuree());
    }

    /**
     * Tests setEmployeRemplace()
     *
     * @return void
     */
    public function testSetEmployeRemplace(): void {

        $obj = new EmpPrev();

        $obj->setEmployeRemplace("employeRemplace");
        $this->assertEquals("employeRemplace", $obj->getEmployeRemplace());
    }

    /**
     * Tests setEtat()
     *
     * @return void
     */
    public function testSetEtat(): void {

        $obj = new EmpPrev();

        $obj->setEtat("etat");
        $this->assertEquals("etat", $obj->getEtat());
    }

    /**
     * Tests setHNuitType2()
     *
     * @return void
     */
    public function testSetHNuitType2(): void {

        $obj = new EmpPrev();

        $obj->setHNuitType2("hNuitType2");
        $this->assertEquals("hNuitType2", $obj->getHNuitType2());
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

        $obj = new EmpPrev();

        $obj->setHeureDeb($heureDeb);
        $this->assertSame($heureDeb, $obj->getHeureDeb());
    }

    /**
     * Tests setJfType2()
     *
     * @return void
     */
    public function testSetJfType2(): void {

        $obj = new EmpPrev();

        $obj->setJfType2("jfType2");
        $this->assertEquals("jfType2", $obj->getJfType2());
    }

    /**
     * Tests setNbChambres()
     *
     * @return void
     */
    public function testSetNbChambres(): void {

        $obj = new EmpPrev();

        $obj->setNbChambres(10.092018);
        $this->assertEquals(10.092018, $obj->getNbChambres());
    }

    /**
     * Tests setNoteMemo()
     *
     * @return void
     */
    public function testSetNoteMemo(): void {

        $obj = new EmpPrev();

        $obj->setNoteMemo("noteMemo");
        $this->assertEquals("noteMemo", $obj->getNoteMemo());
    }

    /**
     * Tests setNumChrono()
     *
     * @return void
     */
    public function testSetNumChrono(): void {

        $obj = new EmpPrev();

        $obj->setNumChrono(10);
        $this->assertEquals(10, $obj->getNumChrono());
    }

    /**
     * Tests setPointage()
     *
     * @return void
     */
    public function testSetPointage(): void {

        $obj = new EmpPrev();

        $obj->setPointage(true);
        $this->assertEquals(true, $obj->getPointage());
    }

    /**
     * Tests setUniqId()
     *
     * @return void
     */
    public function testSetUniqId(): void {

        $obj = new EmpPrev();

        $obj->setUniqId("uniqId");
        $this->assertEquals("uniqId", $obj->getUniqId());
    }

    /**
     * Tests setUniqIdPlanning()
     *
     * @return void
     */
    public function testSetUniqIdPlanning(): void {

        $obj = new EmpPrev();

        $obj->setUniqIdPlanning("uniqIdPlanning");
        $this->assertEquals("uniqIdPlanning", $obj->getUniqIdPlanning());
    }

    /**
     * Tests setUniqIdSynchro()
     *
     * @return void
     */
    public function testSetUniqIdSynchro(): void {

        $obj = new EmpPrev();

        $obj->setUniqIdSynchro("uniqIdSynchro");
        $this->assertEquals("uniqIdSynchro", $obj->getUniqIdSynchro());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

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
        $this->assertNull($obj->getJfType2());
        $this->assertNull($obj->getNbChambres());
        $this->assertNull($obj->getNoteMemo());
        $this->assertNull($obj->getNumChrono());
        $this->assertNull($obj->getPointage());
        $this->assertNull($obj->getUniqId());
        $this->assertNull($obj->getUniqIdPlanning());
        $this->assertNull($obj->getUniqIdSynchro());
    }
}
