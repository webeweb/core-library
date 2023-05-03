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
use WBW\Library\Quadratus\Model\Proprete\HorairesEmp;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Horaires emp test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class HorairesEmpTest extends AbstractTestCase {

    /**
     * Test setAou()
     *
     * @return void
     */
    public function testSetAou(): void {

        $obj = new HorairesEmp();

        $obj->setAou(true);
        $this->assertTrue($obj->getAou());
    }

    /**
     * Test setAvr()
     *
     * @return void
     */
    public function testSetAvr(): void {

        $obj = new HorairesEmp();

        $obj->setAvr(true);
        $this->assertTrue($obj->getAvr());
    }

    /**
     * Test setCodeCollaboValid()
     *
     * @return void
     */
    public function testSetCodeCollaboValid(): void {

        $obj = new HorairesEmp();

        $obj->setCodeCollaboValid("codeCollaboValid");
        $this->assertEquals("codeCollaboValid", $obj->getCodeCollaboValid());
    }

    /**
     * Test setCodeCollaborateur()
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new HorairesEmp();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Test setCodeEmploye()
     *
     * @return void
     */
    public function testSetCodeEmploye(): void {

        $obj = new HorairesEmp();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Test setDateDebutAffectation()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateDebutAffectation(): void {

        // Set a Date/time mock.
        $dateDebutAffectation = new DateTime("2018-09-10");

        $obj = new HorairesEmp();

        $obj->setDateDebutAffectation($dateDebutAffectation);
        $this->assertSame($dateDebutAffectation, $obj->getDateDebutAffectation());
    }

    /**
     * Test setDateFinAffectation()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateFinAffectation(): void {

        // Set a Date/time mock.
        $dateFinAffectation = new DateTime("2018-09-10");

        $obj = new HorairesEmp();

        $obj->setDateFinAffectation($dateFinAffectation);
        $this->assertSame($dateFinAffectation, $obj->getDateFinAffectation());
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

        $obj = new HorairesEmp();

        $obj->setDateValidationSynchro($dateValidationSynchro);
        $this->assertSame($dateValidationSynchro, $obj->getDateValidationSynchro());
    }

    /**
     * Test setDec()
     *
     * @return void
     */
    public function testSetDec(): void {

        $obj = new HorairesEmp();

        $obj->setDec(true);
        $this->assertTrue($obj->getDec());
    }

    /**
     * Test setDimType2()
     *
     * @return void
     */
    public function testSetDimType2(): void {

        $obj = new HorairesEmp();

        $obj->setDimType2("dimType2");
        $this->assertEquals("dimType2", $obj->getDimType2());
    }

    /**
     * Test setDiscrSem()
     *
     * @return void
     */
    public function testSetDiscrSem(): void {

        $obj = new HorairesEmp();

        $obj->setDiscrSem(10);
        $this->assertEquals(10, $obj->getDiscrSem());
    }

    /**
     * Test setDuree()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDuree(): void {

        // Set a Date/time mock.
        $duree = new DateTime("2018-09-10");

        $obj = new HorairesEmp();

        $obj->setDuree($duree);
        $this->assertSame($duree, $obj->getDuree());
    }

    /**
     * Test setEtat()
     *
     * @return void
     */
    public function testSetEtat(): void {

        $obj = new HorairesEmp();

        $obj->setEtat("etat");
        $this->assertEquals("etat", $obj->getEtat());
    }

    /**
     * Test setFev()
     *
     * @return void
     */
    public function testSetFev(): void {

        $obj = new HorairesEmp();

        $obj->setFev(true);
        $this->assertTrue($obj->getFev());
    }

    /**
     * Test setHNuitType2()
     *
     * @return void
     */
    public function testSetHNuitType2(): void {

        $obj = new HorairesEmp();

        $obj->setHNuitType2("hNuitType2");
        $this->assertEquals("hNuitType2", $obj->getHNuitType2());
    }

    /**
     * Test setHeureDeb()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetHeureDeb(): void {

        // Set a Date/time mock.
        $heureDeb = new DateTime("2018-09-10");

        $obj = new HorairesEmp();

        $obj->setHeureDeb($heureDeb);
        $this->assertSame($heureDeb, $obj->getHeureDeb());
    }

    /**
     * Test setJan()
     *
     * @return void
     */
    public function testSetJan(): void {

        $obj = new HorairesEmp();

        $obj->setJan(true);
        $this->assertTrue($obj->getJan());
    }

    /**
     * Test setJfType2()
     *
     * @return void
     */
    public function testSetJfType2(): void {

        $obj = new HorairesEmp();

        $obj->setJfType2("jfType2");
        $this->assertEquals("jfType2", $obj->getJfType2());
    }

    /**
     * Test setJuil()
     *
     * @return void
     */
    public function testSetJuil(): void {

        $obj = new HorairesEmp();

        $obj->setJuil(true);
        $this->assertTrue($obj->getJuil());
    }

    /**
     * Test setJuin()
     *
     * @return void
     */
    public function testSetJuin(): void {

        $obj = new HorairesEmp();

        $obj->setJuin(true);
        $this->assertTrue($obj->getJuin());
    }

    /**
     * Test setMai()
     *
     * @return void
     */
    public function testSetMai(): void {

        $obj = new HorairesEmp();

        $obj->setMai(true);
        $this->assertTrue($obj->getMai());
    }

    /**
     * Test setMar()
     *
     * @return void
     */
    public function testSetMar(): void {

        $obj = new HorairesEmp();

        $obj->setMar(true);
        $this->assertTrue($obj->getMar());
    }

    /**
     * Test setNoteMemo()
     *
     * @return void
     */
    public function testSetNoteMemo(): void {

        $obj = new HorairesEmp();

        $obj->setNoteMemo("noteMemo");
        $this->assertEquals("noteMemo", $obj->getNoteMemo());
    }

    /**
     * Test setNov()
     *
     * @return void
     */
    public function testSetNov(): void {

        $obj = new HorairesEmp();

        $obj->setNov(true);
        $this->assertTrue($obj->getNov());
    }

    /**
     * Test setNumChrono()
     *
     * @return void
     */
    public function testSetNumChrono(): void {

        $obj = new HorairesEmp();

        $obj->setNumChrono(10);
        $this->assertEquals(10, $obj->getNumChrono());
    }

    /**
     * Test setNumJour()
     *
     * @return void
     */
    public function testSetNumJour(): void {

        $obj = new HorairesEmp();

        $obj->setNumJour("numJour");
        $this->assertEquals("numJour", $obj->getNumJour());
    }

    /**
     * Test setNumeroAvenant()
     *
     * @return void
     */
    public function testSetNumeroAvenant(): void {

        $obj = new HorairesEmp();

        $obj->setNumeroAvenant(10);
        $this->assertEquals(10, $obj->getNumeroAvenant());
    }

    /**
     * Test setNumeroSemaine()
     *
     * @return void
     */
    public function testSetNumeroSemaine(): void {

        $obj = new HorairesEmp();

        $obj->setNumeroSemaine("numeroSemaine");
        $this->assertEquals("numeroSemaine", $obj->getNumeroSemaine());
    }

    /**
     * Test setOct()
     *
     * @return void
     */
    public function testSetOct(): void {

        $obj = new HorairesEmp();

        $obj->setOct(true);
        $this->assertTrue($obj->getOct());
    }

    /**
     * Test setSaufSemaineComplete()
     *
     * @return void
     */
    public function testSetSaufSemaineComplete(): void {

        $obj = new HorairesEmp();

        $obj->setSaufSemaineComplete("saufSemaineComplete");
        $this->assertEquals("saufSemaineComplete", $obj->getSaufSemaineComplete());
    }

    /**
     * Test setSemaineComplete()
     *
     * @return void
     */
    public function testSetSemaineComplete(): void {

        $obj = new HorairesEmp();

        $obj->setSemaineComplete(true);
        $this->assertTrue($obj->getSemaineComplete());
    }

    /**
     * Test setSep()
     *
     * @return void
     */
    public function testSetSep(): void {

        $obj = new HorairesEmp();

        $obj->setSep(true);
        $this->assertTrue($obj->getSep());
    }

    /**
     * Test setTravailleJf()
     *
     * @return void
     */
    public function testSetTravailleJf(): void {

        $obj = new HorairesEmp();

        $obj->setTravailleJf("travailleJf");
        $this->assertEquals("travailleJf", $obj->getTravailleJf());
    }

    /**
     * Test setTypeContrat()
     *
     * @return void
     */
    public function testSetTypeContrat(): void {

        $obj = new HorairesEmp();

        $obj->setTypeContrat("typeContrat");
        $this->assertEquals("typeContrat", $obj->getTypeContrat());
    }

    /**
     * Test setTypeFreq()
     *
     * @return void
     */
    public function testSetTypeFreq(): void {

        $obj = new HorairesEmp();

        $obj->setTypeFreq("typeFreq");
        $this->assertEquals("typeFreq", $obj->getTypeFreq());
    }

    /**
     * Test setUniqId()
     *
     * @return void
     */
    public function testSetUniqId(): void {

        $obj = new HorairesEmp();

        $obj->setUniqId("uniqId");
        $this->assertEquals("uniqId", $obj->getUniqId());
    }

    /**
     * Test setUniqIdSynchro()
     *
     * @return void
     */
    public function testSetUniqIdSynchro(): void {

        $obj = new HorairesEmp();

        $obj->setUniqIdSynchro("uniqIdSynchro");
        $this->assertEquals("uniqIdSynchro", $obj->getUniqIdSynchro());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new HorairesEmp();

        $this->assertNull($obj->getAou());
        $this->assertNull($obj->getAvr());
        $this->assertNull($obj->getCodeCollaboValid());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getDateDebutAffectation());
        $this->assertNull($obj->getDateFinAffectation());
        $this->assertNull($obj->getDateValidationSynchro());
        $this->assertNull($obj->getDec());
        $this->assertNull($obj->getDimType2());
        $this->assertNull($obj->getDiscrSem());
        $this->assertNull($obj->getDuree());
        $this->assertNull($obj->getEtat());
        $this->assertNull($obj->getFev());
        $this->assertNull($obj->getHNuitType2());
        $this->assertNull($obj->getHeureDeb());
        $this->assertNull($obj->getJfType2());
        $this->assertNull($obj->getJan());
        $this->assertNull($obj->getJuil());
        $this->assertNull($obj->getJuin());
        $this->assertNull($obj->getMai());
        $this->assertNull($obj->getMar());
        $this->assertNull($obj->getNoteMemo());
        $this->assertNull($obj->getNov());
        $this->assertNull($obj->getNumChrono());
        $this->assertNull($obj->getNumJour());
        $this->assertNull($obj->getNumeroAvenant());
        $this->assertNull($obj->getNumeroSemaine());
        $this->assertNull($obj->getOct());
        $this->assertNull($obj->getSaufSemaineComplete());
        $this->assertNull($obj->getSemaineComplete());
        $this->assertNull($obj->getSep());
        $this->assertNull($obj->getTravailleJf());
        $this->assertNull($obj->getTypeContrat());
        $this->assertNull($obj->getTypeFreq());
        $this->assertNull($obj->getUniqId());
        $this->assertNull($obj->getUniqIdSynchro());
    }
}
